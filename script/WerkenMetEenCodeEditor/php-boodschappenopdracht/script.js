const table = document.getElementById('table');
const prices = document.getElementsByClassName('productPrice');
const quantities = document.getElementsByClassName('productQuantity');
const totals = document.getElementsByClassName('productTotalCost');
const totalSum = document.getElementById('totalCost');

table.addEventListener("change", productChange);

function productChange() {
    let sum = 0;
    
    for (let i = 0; i < prices.length; i++) {
        const price = parseFloat(prices[i].textContent.replace(',', '.'));
        const quantity = parseInt(quantities[i].value);
        
        const subtotal = price * quantity;
        totals[i].textContent = subtotal.toFixed(2).replace('.', ',');
        
        sum += subtotal;
    }
    
    totalSum.textContent = sum.toFixed(2).replace('.', ',');
}

productChange();