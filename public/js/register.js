window.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('registerForm');
    const name = document.getElementById('name');
    const phonenum = document.getElementById('phonenum');
    const email = document.getElementById('email');
    const address = document.getElementById('address');
    const username = document.getElementById('username');
    const password = document.getElementById('password');
    const dangky = document.getElementById('dangky');
    dangky.onclick = (e) => {
        e.preventDefault();
        form.method = 'GET';
        // Thêm tham số vào action của form
        const action = 'Register&name=' + name.value + '&phonenum=' + phonenum.value + '&email=' + email.value +
            '&address=' + address.value + '&username=' + username.value + '&password=' + password.value + '&dangky=' + dangky.value;
        form.action = action;
        form.submit();
    }
})