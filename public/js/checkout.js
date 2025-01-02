document.querySelector('button').addEventListener('click', function() {
    document.getElementById('checkout-popup').classList.remove('hidden');    
});

function closeCheckoutPopup() {
    document.getElementById('checkout-popup').classList.add('hidden');
}

document.getElementById('checkout-form').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Form submitted!');
    closeCheckoutPopup();
});