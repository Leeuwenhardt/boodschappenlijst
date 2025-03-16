const button = document.getElementById('button');
const amount = document.getElementsByClassName('amount');
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

    //Manipulate thrownDice array
    thrownDice.length = 0;
    for (let i = 0; i < 5; i++) {
        let die = Math.floor(Math.random() * 6 + 1);
        thrownDice.push(die);
    }
    
    // Manipulate count array
    for (let die of thrownDice) {
        count[die]++;
    }

    // Manipulate table
    for (let key in count) {
        amount[key - 1].innerHTML = count[key];
    }

    // Calculate and display scores
    scoreCard(count);
}

function sumOfAllDice() {
    return thrownDice.reduce((accumulator, currentValue) => accumulator + currentValue, 0);
}

function scoreCard(count) {
    // Calculate die
    const ones = count[1] * 1;
    const twos = count[2] * 2;
    const threes = count[3] * 3;
    const fours = count[4] * 4;
    const fives = count[5] * 5;
    const sixes = count[6] * 6;

    // Calculate total points
    const totalPoints = ones + twos + threes + fours + fives + sixes;

    // Check for bonus
    const bonus = totalPoints >= 63 ? 35 : 0;

    // Calculate grand total
    const grandTotal = totalPoints + bonus;

    // Update the table with scores
    document.getElementById('ones').innerHTML = ones;
    document.getElementById('twos').innerHTML = twos;
    document.getElementById('threes').innerHTML = threes;
    document.getElementById('fours').innerHTML = fours;
    document.getElementById('fives').innerHTML = fives;
    document.getElementById('sixes').innerHTML = sixes;
    document.getElementById('totalPoints').innerHTML = totalPoints;
    document.getElementById('bonus').innerHTML = bonus;
    document.getElementById('grandTotal').innerHTML = grandTotal;
}

button.addEventListener('click', rollDice)

