const button = document.getElementById('button');
const amount = document.getElementsByClassName('amount');
const rng = [];

function rollDice() {

    const count = {
        1: 0,
        2: 0,
        3: 0,
        4: 0,
        5: 0,
        6: 0    
    };

    //Manipulate rng array
    rng.length = 0;
    for (let i = 0; i < 8; i++) {
        let num = Math.floor(Math.random() * 6 + 1);
        count[num]++
        rng.push(num);
    }
    
    //Manipulate count array
    // for (let num of rng) {
    // }

    //Manipulate table
    for (let key in count) {
        amount[key-1].innerHTML = count[key];
    }
}

button.addEventListener('click', rollDice);

