const responsiveMenuIcon = document.querySelector(".fa-bars");
const navigationBar = document.querySelector(".nav");
const linksNavMobile = document.querySelectorAll(".link-mb");
const submenuExpediente = document.querySelector(".submenu-resp-exp");
const submenuProductos = document.querySelector(".submenu-resp-pro");

responsiveMenuIcon.addEventListener("click", () => {
    responsiveMenuIcon.classList.toggle("fa-bars");
    responsiveMenuIcon.classList.toggle("fa-xmark");
    navigationBar.classList.toggle("hidden");
});

linksNavMobile.forEach((link) => {
    const anchorTag = link.lastElementChild.textContent;

    link.addEventListener("click", () => {
        if (anchorTag === "Exp. Clínico" || anchorTag === "Productos") {
            const arrow = link.querySelector(".fa-chevron-right");
            arrow.classList.toggle("rotate-0");
            arrow.classList.toggle("rotate-90");

            if (anchorTag === "Exp. Clínico") {
                submenuExpediente.classList.toggle("hidden");
            } else {
                submenuProductos.classList.toggle("hidden");
            }
        }
    });
});
