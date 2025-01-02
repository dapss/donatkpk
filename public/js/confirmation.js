document.querySelector('button').addEventListener('click', function() {
    document.getElementById('confirmation-popup').classList.remove('hidden');
});

function goBack() {
    window.history.back();
}

function confirmAndPay() {
    alert('Pembayaran dikonfirmasi. Terima Kasih!');
}