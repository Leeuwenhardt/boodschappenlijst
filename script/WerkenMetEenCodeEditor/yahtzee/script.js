const button = document.getElementById('button');
const amountUpper = document.getElementsByClassName('amountUpper');
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
            console.log(yahtzee)
            document.getElementById('yahtzee').innerHTML = 50
        } else if (count[num] >= 4) {
            console.log(carre)
            document.getElementById('carre').innerHTML = sumOfAllDice() 
        } else if (count[num] >= 3) {
            console.log(threeOfAKind)
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

    // Detect straight dice
    const straightDice = [...thrownDice].sort((a, b) => a - b); 
    let consecutiveCount = 1; 
    let maxConsecutive = 1; 

    // Formula on checking for consecutive numbers
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
        console.log(smallStreet)
    }
    
    // Check for big street 
    if (maxConsecutive >= 5) {
        document.getElementById('bigStreet').textContent = 40;
        console.log(bigStreet)
    }

    // Calculate and display scores
    scoreCard();
}

function sumOfAllDice() {
    return thrownDice.reduce((accumulator, currentValue) => accumulator + currentValue, 0);
}

function scoreCard() {
    const bonus = sumOfAllDice() >= 63 ? 35 : 0;
    
    // Calculate grand total
    const grandTotal = sumOfAllDice() + bonus;
    const generalTotal = amountBottom + grandTotal; 
    
    // It works.
    const totalPointsElements = document.getElementsByClassName('totalPoints');
    for (let element of totalPointsElements) {
        element.innerHTML = sumOfAllDice();
    }
    
    // Update other scores
    document.getElementById('bonus').innerHTML = bonus;
    document.getElementById('grandTotal').innerHTML = grandTotal;
    document.getElementById('generalTotal').innerHTML = generalTotal;
}

button.addEventListener('click', rollDice)

