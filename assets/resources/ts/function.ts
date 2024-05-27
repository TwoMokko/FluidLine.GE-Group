document.addEventListener("DOMContentLoaded", () => {

})

function showMenu(): void {
    const burger = document.querySelector('.header-burger-menu');
    if (burger.classList.contains('active')) {
        burger.classList.remove('active');
    }
    else {
        burger.classList.add('active');
    }
}