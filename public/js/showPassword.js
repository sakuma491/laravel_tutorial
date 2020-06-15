function showPassword() {
    var field = document.getElementById('password-field');
    var type = field.getAttribute('type');
    if(type == 'password') {
        field.setAttribute('type', 'text');
    } else {
        field.setAttribute('type', 'password');
    }
}
