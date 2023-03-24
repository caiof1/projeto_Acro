class Menu {
    constructor(menu, nav, links) {
        this.menu = document.querySelector(menu);
        this.nav = document.querySelector(nav);
        this.links = document.querySelectorAll(links);
        this.active = 'active';
    }

    animateLinks() {
        this.links.forEach((link, index) => {
            link.style.animation
            ? (link.style.animation = '')
            : (link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3 }s`) 
        })
    }
    

    addClickEvent() {
        this.menu.addEventListener('click', () => {
            this.nav.classList.toggle(this.active);
            this.menu.classList.toggle(this.active)
            this.animateLinks()
        })
    }

    init() {
        this.addClickEvent();
    }
}

let menu = new Menu(
    '.menu',
    '.menu__nav',
    '.menu__nav ul li'
)

menu.init();