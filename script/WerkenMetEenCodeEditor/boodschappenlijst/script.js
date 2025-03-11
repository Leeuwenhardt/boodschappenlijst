const table = document.getElementById('table')
const price = document.getElementsByClassName('productPrice');
const quantity = document.getElementsByClassName('productQuantity');
const total = document.getElementsByClassName('productTotalCost');

function productChange() {
    table.addEventListener("change", () => {
        console.log('Aantal producted is gewijzigd', table.value);
    })
    
    //for( i = 0; { productTotalCost = productPrice * productQuantity })
    
};


console.log(price)
console.log(quantity)
console.log(total)