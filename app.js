// get year
const date = (document.getElementById('date').innerHTML =
  new Date().getFullYear());
// navbar elements
const navBtn = document.getElementById('nav-btn');
const navbar = document.getElementById('navbar');
const navClose = document.getElementById('nav-close');
// open navbar
navBtn.addEventListener('click', () => {
  navbar.classList.toggle('showNav');
});
navClose.addEventListener('click', () => {
  navbar.classList.remove('showNav');
});
