import './bootstrap';
import $ from 'jquery';

$(document).ready(function () {
  setTimeout(() => {
    $("#alert").fadeOut();
  }, 3000);
});