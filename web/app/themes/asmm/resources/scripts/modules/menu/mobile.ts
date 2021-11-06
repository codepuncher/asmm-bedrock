class Mobile {
  headerElement: HTMLElement | null;
  menuElement: HTMLElement | null;

  constructor() {
    this.headerElement = document.getElementById('header');
    this.menuElement = document.getElementById('menu-mobile');
  }

  run() {
    if (!(this.headerElement instanceof HTMLElement)) {
      return;
    }

    this.headerElement.addEventListener('click', e => this.buttonClick(e), false);
  }

  protected buttonClick(e: Event) {
    const target = e.target as Element;
    if (!target || !target.closest('#menu-mobile-toggle')) {
      return;
    }

    if (!(this.menuElement instanceof HTMLElement)) {
      return;
    }

    if (this.menuElement.classList.contains('translate-x-full')) {
      this.menuElement.classList.remove('translate-x-full');
    } else {
      this.menuElement.classList.add('translate-x-full');
    }
  }
}

export default Mobile
