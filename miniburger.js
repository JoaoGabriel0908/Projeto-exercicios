'use strict';
// Criando a classe para o botão
class Miniburger{
    // Passando os atributos para o construtor da classe
    constructor(mobileMenu, dropdownMenu, navLinks){
        this.mobileMenu = document.querySelector(mobileMenu);
        this.dropdownMenu = document.querySelector(dropdownMenu);
        this.navLinks = document.querySelectorAll(navLinks);
        this.activeClass = "active";

        this.handleClick = this.handleClick.bind(this);
    }
    handleClick() {
        console.log(this);
        this.dropdownMenu.classList.toggle(this.activeClass);
    }
    

    addClickEvent() {
        this.mobileMenu.addEventListener("click", (this.activeClass));
    }
    
    init(){
        if(this.mobileMenu){
            this.addClickEvent();
        }
        return this;
    }
}
const miniburger = new Miniburger(
    "dropdown-menu",
    "dropdown-menu li",
    "mobile-menu",
);
miniburger.init();