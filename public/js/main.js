window.addEventListener('DOMContentLoaded', () => {
    var click = false;
    const cart = document.getElementById('cart-icon');
    cart.onclick = () => {
        if (!click) {
            document.getElementById('cart').style.display = 'block';
            click = true;
        } else {
            document.getElementById('cart').style.display = 'none';
            click = false;
        }
    }
});