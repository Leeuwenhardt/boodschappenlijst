const button = document.getElementById('button');
const amount = document.getElementsByClassName('amount');
const rng = [];
const count = {
    1: 0,
    2: 0,
    3: 0,
    4: 0,
    5: 0,
    6: 0    
};

function rollDice() {
    //Manipulate rng array
    rng.length = 0;
    for (let i = 0; i < 8; i++) {
    let num = Math.floor(Math.random() * 6 + 1);
    rng.push(num);
    }
    
    //Manipulate count array
    for (let num of rng) {
        count[num]++
        console.table(count)
    }
    //Manipulate table
    for (let key in amount) {            
        console.log(`{key}`);
        })    
    }
}




button.addEventListener('click', rollDice);

