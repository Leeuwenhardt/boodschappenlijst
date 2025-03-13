// Array to store todo items
let items = [];

// Get references to HTML elements
const itemsDiv = document.getElementById('items')
const input = document.getElementById('itemInput')

// Key for storing items in localStorage
const storageKey = "items"

// Function to display all items on the page
function renderItems() {
    // Clear the current list
    itemsDiv.innerHTML = null;
    
    // Loop through each item in the array
    for (const [idx, item] of Object.entries(items)) {
        // Create container for each item
        const container = document.createElement('div')
        container.style.marginBottom = "10px"
        
        // Create text element for the item
        const text = document.createElement('p')
        text.style.display = "inline"
        text.style.marginRight = "10px"
        text.textContent = item;
        
        // Create delete button for the item
        const button = document.createElement('button')
        button.textContent = "Delete"
        button.onclick = () => removeItem(idx)
        
        // Add text and button to container
        container.appendChild(text)
        container.appendChild(button)
        
        // Add container to the main items div
        itemsDiv.appendChild(container)
    }
}

// Function to load items from localStorage when page loads
function loadItems() {
    const oldItems = localStorage.getItem(storageKey)
    // If items exist in storage, parse them and display
    if (oldItems) items = JSON.parse(oldItems)
    renderItems()
}

// Function to save items to localStorage
function saveItems() {
    const stringItems = JSON.stringify(items)
    localStorage.setItem(storageKey, stringItems)
}

// Function to add a new item from input
function addItem() {
    const value = input.value;
    // Prevent adding empty items
    if (!value) {
        alert('You cannot add an empty item.')
        return
    }
    // Add new item to array
    items.push(value)
    // Update the display
    renderItems()
    // Clear the input field
    input.value = ""
    // Save to localStorage
    saveItems()
}

// Function to remove an item by its index
function removeItem(idx) {
    // Remove item from array
    items.splice(idx, 1)
    // Update the display
    renderItems()
    // Save changes to localStorage
    saveItems()
}

// Load saved items when the page is fully loaded
document.addEventListener('DOMContentLoaded', loadItems)