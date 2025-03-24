const button = document.getElementById('button'); // btnThrowDices
const amountUpper = document.getElementsByClassName('amountUpper'); // meervouyd in variable naam
const amountBottom = document.getElementsByClassName('amountBottom');
const yahtzee = document.getElementById('yahtzee')
const carre = document.getElementById('carre')
const threeOfAKind = document.getElementById('threeOfAKind')
const fullHouse = document.getElementById('fullHouse')
const smallStreet = document.getElementById('smallStreet')
const bigStreet = document.getElementById('bigStreet')

const thrownDice = [];

function xOfAKind(valueToSearchFor){
    for (let num in count) {
        if (count[num] == valueToSearchFor) { 
            return true
        } 
    }
    return false
}

 function straight(valueToSearchFor) {
    const straightDice = thrownDice.sort((a, b) => a - b); 
    let consecutiveCount = 1; 
    let maxConsecutive = 1; 

    for (let i = 1; i < straightDice.length; i++) {
        if (straightDice[i] === straightDice[i - 1] + 1) {
            consecutiveCount++; 
            if (maxConsecutive >= valueToSearchFor) {
                return true
            }
        } else if (straightDice[i] !== straightDice[i - 1]) {
            consecutiveCount = 1; // Reset if it doesn't match
        }
    }
    return false
}

let count = {
    1: 0,
    2: 0,
    3: 0,
    4: 0,
    5: 0,
    6: 0    
};

function rollDice() {
    // reset each roll
    document.querySelectorAll('.amountUpper, .totalPoints, #bonus, #grandTotal, #generalTotal, #threeOfAKind, #carre, #fullHouse, #smallStreet, #bigStreet, #yahtzee').forEach(cell => cell.textContent = 0);

    count = {
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
        amountUpper[key - 1].textContent = count[key] * key;
    }

    // Detect dice matching
    yahtzee.textContent = xOfAKind(5) ? 50 : 0
    carre.textContent = xOfAKind(4) ? sumOfAllDice() : 0
    threeOfAKind.textContent = xOfAKind(3) ? sumOfAllDice() : 0
    fullHouse.textContent = (Object.values(count).includes(2) && Object.values(count).includes(3)) ? 25 : 0;
    smallStreet.textContent = straight(4) ? 30 : 0
    bigStreet.textContent = straight(5) ? 40 : 0

}

function sumOfAllDice() {
    return thrownDice.reduce((accumulator, currentValue) => accumulator + currentValue, 0);
}

function scoreCard() {
    const bonus = sumOfAllDice() >= 63 ? 35 : 0;

    let totalBottom = 0;
    for (let element of amountBottom) {
        totalBottom += parseInt(element.textContent) || 0;
    }
    
    // Calculate grand total
    const grandTotal = sumOfAllDice() + bonus;
    const generalTotal = totalBottom + grandTotal; 
   
    // Update other scores
    document.getElementById('totalPoints').textContent = sumOfAllDice();
    document.getElementById('freeChoice').textContent = sumOfAllDice();
    document.getElementById('totalTop').textContent = sumOfAllDice();
    document.getElementById('totalBottom').textContent = totalBottom
    document.getElementById('bonus').textContent = bonus;
    document.getElementById('grandTotal').textContent = grandTotal;
    document.getElementById('generalTotal').textContent = generalTotal;
}

button.addEventListener('click', () => {
    rollDice();
    // Calculate and display scores
    scoreCard();
})
