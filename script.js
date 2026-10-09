var menuKnop = document.querySelector('.menu-knop');
var menu = document.querySelector('.main-nav');

function toggleMenu() {
  menu.classList.toggle('open');

  if (menu.classList.contains('open')) {
    menuKnop.setAttribute('aria-expanded', 'true');
  } else {
    menuKnop.setAttribute('aria-expanded', 'false');
  }
}

menuKnop.addEventListener('click', toggleMenu);
