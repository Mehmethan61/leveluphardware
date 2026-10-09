var nieuwsbriefKnoppen = document.querySelectorAll('.btn-newsletter');
var modal = document.getElementById('nieuwsbrief-modal');
var sluitKnop = document.getElementById('modal-sluiten');

function openModal(event) {
  event.preventDefault();
  modal.classList.add('open');
  modal.setAttribute('aria-hidden', 'false');
  document.getElementById('nb-naam').focus();
}

function sluitModal() {
  modal.classList.remove('open');
  modal.setAttribute('aria-hidden', 'true');
}

for (var i = 0; i < nieuwsbriefKnoppen.length; i++) {
  if (nieuwsbriefKnoppen[i].tagName === 'A') {
    nieuwsbriefKnoppen[i].addEventListener('click', openModal);
  }
}

sluitKnop.addEventListener('click', sluitModal);

modal.addEventListener('click', function (event) {
  if (event.target === modal) {
    sluitModal();
  }
});

document.addEventListener('keydown', function (event) {
  if (event.key === 'Escape') {
    sluitModal();
  }
});
