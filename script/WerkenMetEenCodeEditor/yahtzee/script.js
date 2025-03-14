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
    
    //Manipulate count array
    for (let die of thrownDice) {
        count[die]++
    }

    //Manipulate table
    for (let key in count) {
        amount[key-1].innerHTML = count[key];
    }    
        
}

function sumOfAllDice() {
    //Manipulate sum up of all dices
    return thrownDice.reduce((accumulator, currentValue) => accumulator + currentValue)
}

console.log(sumOfAllDice)

function scoreCard() {

}



button.addEventListener('click', rollDice);
console.log(sumOfAllDice)

