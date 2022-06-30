const title = document.querySelector('span.text-primary');
const loginBox = document.querySelector('#login_container');
const regBox = document.querySelector('#register_container');
const submitBtn = document.querySelector('#login>button');

regBox.style.display = 'none';

if (grecaptcha.getResponse()) {
  submitBtn.disabled = true;
}

function authStatus() {
  if (title.innerText == 'Регистрация') {
    title.innerText = 'Авторизация';
    regBox.style.display = 'block';
    loginBox.style.display = 'none';
  } else if (title.innerText == 'Авторизация') {
    title.innerText = 'Регистрация';
    regBox.style.display = 'none';
    loginBox.style.display = 'block';
  }
}
