const table = document.getElementById('table')
const prices = document.getElementsByClassName('productPrice');
const quantities = document.getElementsByClassName('productQuantity');
const totals = document.getElementsByClassName('productTotalCost');
const sum = document.getElementById('totalCost');

table.addEventListener("input", (event) => {
    if (event.target.classList.contains('productQuantity')) {
        console.log('Aantal producten is gewijzigd:', event.target.value);
        productChange(); 
    }
});

function productChange() {
    let totalSum = 0;
    for (let i = 0; i < prices.length; i++) {
        const price = prices[i].innerHTML;
        const quantity = quantities[i].value;
        totals = price * quantity;

        totals[i].innerHTML = totals.toFixed(2);
        totalSum += totals;
    } 
};

productChange();