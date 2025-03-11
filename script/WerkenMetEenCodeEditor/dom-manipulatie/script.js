const button = document.getElementById('button');
const name = document.getElementById('name');
const colors = ["Blue", "Red", "Green", "Yellow", "Black"];

function updateTitle() {
    let colorChange = Math.floor((Math.random() * colors.length));
    let randomColor = colors[colorChange];
    console.log('Button was clicked!');
    name.innerHTML = 'Hello Dominic!';
    name.style.color = randomColor;

    if (name.style.display === 'none') {
        name.style.display = 'block';
    } else {
        name.style.display = 'none';
    }
}


button.addEventListener('click', updateTitle);
