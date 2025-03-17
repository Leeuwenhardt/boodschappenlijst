const button = document.getElementById('button');
const amountUpper = document.getElementsByClassName('amountUpper');
const amountBottom = document.getElementsByClassName('amountBottom');

const thrownDice = [];

function rollDice() {
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
        let die = Math.floor(Math.random() * 2 + 1);
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

    if ((count[0] === count[1])&&(count[2] === count[4])) {
        document.getElementById('fullHouse').innerHTML = 25;
    } else if ((count[0] === count[2])&&(count[3] === count[4])) {
        document.getElementById('fullHouse').innerHTML = 25;
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
    const generalTotal = amountBottom + amountUpper;
    
    // Update the table with scores
    document.getElementById('totalPoints').innerHTML = sumOfAllDice();
    document.getElementById('bonus').innerHTML = bonus;
    document.getElementById('grandTotal').innerHTML = grandTotal;
    document.getElementById('generalTotal').innerHTML = generalTotal;
    //document.getElementById('generalTotal').innerHTML = generalTotal;
    
}

button.addEventListener('click', rollDice)

