const mobileMenuElement = document.getElementById('menu-mobile');
const mobileMenuToggleButton = document.getElementById('menu-mobile-toggle');
mobileMenuToggleButton.addEventListener('click', e => {
  if (mobileMenuElement.classList.contains('hidden')) {
    mobileMenuElement.classList.remove('hidden');
  } else {
    mobileMenuElement.classList.add('hidden');
  }
});
