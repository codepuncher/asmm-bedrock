class Mobile {
  toggleButton: HTMLElement | null;
  menuElement: HTMLElement | null;

  constructor() {
    this.toggleButton = document.getElementById('menu-mobile-toggle');
    this.menuElement = document.getElementById('menu-mobile');
  }

  run() {
    if (!(this.toggleButton instanceof HTMLElement)) {
      return;
    }

    this.toggleButton.addEventListener('click', () => this.buttonClick());
  }

  buttonClick() {
    if (!(this.menuElement instanceof HTMLElement)) {
      return;
    }

    if (this.menuElement.classList.contains('hidden')) {
      this.menuElement.classList.remove('hidden');
    } else {
      this.menuElement.classList.add('hidden');
    }
  }
}

export default Mobile
