window.addEventListener('DOMContentLoaded', () => {
    const formDN = document.getElementById('loginForm');
    const usernameDN = document.getElementById('usernameDN');
    const passwordDN = document.getElementById('passwordDN');
    const dangnhap = document.getElementById('dangnhap');
    dangnhap.onclick = (e) => {
        e.preventDefault();
        formDN.method = 'GET';
        const action = 'LogIn&username=' + usernameDN.value + '&password=' + passwordDN.value + '&dangnhap=' + dangnhap.value;
        formDN.action = action;
        formDN.submit();
    }
})