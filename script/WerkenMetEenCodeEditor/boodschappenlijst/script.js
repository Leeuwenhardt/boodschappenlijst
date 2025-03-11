const table = document.getElementById('table')
const price = document.getElementsByClassName('productPrice');
const quantity = document.getElementsByClassName('productQuantity');
const total = document.getElementsByClassName('productTotalCost');
const sum = document.getElementById('totalCost')

table.addEventListener("change", (event) => {
    console.log('Aantal producten is gewijzigd', event.target.value);
});

function productChange() {
    for (let i = 0; i < quantity.length; i++) {
        console.log(i, price[i], quantity[i], total[i])
    } 
};


console.log(price)
console.log(quantity)
console.log(total)