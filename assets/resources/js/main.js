"use strict";
document.addEventListener("DOMContentLoaded", () => {
});
function showMenu() {
    const burger = document.querySelector('.header-burger-menu');
    if (burger.classList.contains('active')) {
        burger.classList.remove('active');
    }
    else {
        burger.classList.add('active');
    }
}
//# sourceMappingURL=main.js.map