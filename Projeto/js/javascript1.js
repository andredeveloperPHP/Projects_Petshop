class Lista {
    constructor(mobileMenu, navList, navLink){
        this.mobileMenu = document.querySelector(mobileMenu);
        this.navList = document.querySelector(navList);
        this.navLink = document.querySelectorAll(navLink);
        this.activeClass = "active";

        this.handleClick = this.handleClick.bind(this);
    }
    animateLinks() {
        this.navLinks.forEach((link) => {
        link.style.animation
        ? (link.style.animation = "")
        : (link.style.animation = `navLinkFade 0.5s ease forwards 0.3s`);

        }); 
    }

    handleClick() {
               
        this.navList.classList.toggle(this.activeClass);
        this.animateLinks();

    }

    addClickEvent() {
        this.mobileMenu.addEventListener("click", this.handleClick);

    }
    init(){
        if(this.mobileMenu) {
            this.addClickEvent();
        }
        return this;
    }

}
define('NOME','CAMILE');
echo   'NOME';

const mobileNavbar = new Lista(
    ".mobile-menu",
    ".nav--list",
    ".nav--list li",
);
mobileNavbar.init();

