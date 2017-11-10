window.$ = window.jQuery = require('jquery');

require('bootstrap-sass');

window.swal = require('sweetalert2');

document.getElementById('quest').addEventListener('submit', function (e) {
  if (document.querySelector('input[type=text]').value === '') {
    e.preventDefault();
    swal('Ошибка', 'Заполните поле для отправки', 'error');
  }
});
