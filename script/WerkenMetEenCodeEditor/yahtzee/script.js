const button = document.getElementById('button'); // btnThrowDices
const amountUpper = document.getElementsByClassName('amountUpper'); // meervouyd in variable naam
const amountBottom = document.getElementsByClassName('amountBottom');


const thrownDice = [];

function rollDice() {
    // reset each roll
    document.querySelectorAll('.amountUpper, .totalPoints, #bonus, #grandTotal, #generalTotal, #threeOfAKind, #carre, #fullHouse, #smallStreet, #bigStreet, #yahtzee').forEach(cell => cell.innerHTML = 0);
    const count = {
        1: 0,
        2: 0,
        3: 0,
        4: 0,
        5: 0,
        6: 0    
    };

    // Manipulate thrownDice array
    thrownDice.length = 0;
    for (let i = 0; i < 5; i++) {
        let die = Math.floor(Math.random() * 6 + 1);
        thrownDice.push(die);
        count[die]++
    }
    
    // Manipulate table
    for (let key in count) {
        amountUpper[key - 1].innerHTML = count[key];
    }

    // Detect dice matching
    for (let num in count) {
        if (count[num] >= 5) { 
            document.getElementById('yahtzee').innerHTML = 50
        } else if (count[num] >= 4) {
            document.getElementById('carre').innerHTML = sumOfAllDice() 
        } else if (count[num] >= 3) {
            document.getElementById('threeOfAKind').innerHTML = sumOfAllDice()             
        }
    }

    if ((count[1] === 3 || count[2] === 3 || count[3] === 3 || count[4] === 3 || 
        count[5] === 3 || count[6] === 3) &&
        (count[1] === 2 || count[2] === 2 || count[3] === 2 || count[4] === 2 || 
        count[5] === 2 || count[6] === 2)) {
        document.getElementById('fullHouse').innerHTML = 25;
        console.log(fullHouse)
    }

    // Set dice to ascending
    const straightDice = [...thrownDice].sort((a, b) => a - b); 
    let consecutiveCount = 1; 
    let maxConsecutive = 1; 

    // Formula on checking for consecutive numbers from ascending
    for (let i = 1; i < straightDice.length; i++) {
        if (straightDice[i] === straightDice[i - 1] + 1) {
            consecutiveCount++; 
            if (consecutiveCount > maxConsecutive) {
                maxConsecutive = consecutiveCount; 
            }
        } else if (straightDice[i] !== straightDice[i - 1]) {
            consecutiveCount = 1; // Reset if it doesn't match
        }
    }
    
    // Check for small street 
    if (maxConsecutive >= 4) {
        document.getElementById('smallStreet').textContent = 30;
    }
    
    // Check for big street 
    if (maxConsecutive >= 5) {
        document.getElementById('bigStreet').textContent = 40;
    }
}

function sumOfAllDice() {
    return thrownDice.reduce((accumulator, currentValue) => accumulator + currentValue, 0);
}

function scoreCard() {
    const bonus = sumOfAllDice() >= 63 ? 35 : 0;

    let totalBottom = 0;
    for (let element of amountBottom) {
        totalBottom += parseInt(element.innerHTML) || 0;
    }
    
    // Calculate grand total
    const grandTotal = sumOfAllDice() + bonus;
    const generalTotal = totalBottom + grandTotal; 

   
    // Update other scores
    document.getElementById('totalPoints').innerHTML = sumOfAllDice();
    document.getElementById('freeChoice').innerHTML = sumOfAllDice();
    document.getElementById('totalTop').innerHTML = sumOfAllDice();
    document.getElementById('totalBottom').innerHTML = totalBottom
    document.getElementById('bonus').innerHTML = bonus;
    document.getElementById('grandTotal').innerHTML = grandTotal;
    document.getElementById('generalTotal').innerHTML = generalTotal;
}

button.addEventListener('click', () => {
    rollDice();
    // Calculate and display scores
    scoreCard();
})

