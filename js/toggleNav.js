function toggleMenu() {
    const navbarMenu = document.getElementById("navbar-menu");
    navbarMenu.classList.toggle("show");
    console.log(...[navbarMenu, '👀 [toggleNav.js:4]: navbarMenu'].reverse());
  }
  