//document.getElementById('Button');
const rng = [];

function rollDice() {
    for (let i = 0; i < 8; i++) {
    let num = Math.floor(Math.random() * 6 + 1)
    rng.push(num);
    console.log(num)
    };
}

button.addEventListener('click', rollDice);

