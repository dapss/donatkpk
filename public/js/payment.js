document.querySelector('button').addEventListener('click', function() {
    document.getElementById('payment-popup').classList.remove('hidden');
});

function closePaymentPopup() {
    document.getElementById('payment-popup').classList.add('hidden');
}

document.getElementById('payment-form').addEventListener('submit'), function(event) {
    event.preventDefault();
    alert('Payment method selected!');
    closePaymentPopup();
}