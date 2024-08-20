const navBar = document.querySelector(".navBar");
const links = navBar.querySelectorAll(".link");

const submenuExpediente = document.querySelector(".submenu-exp");
const submenuProductos = document.querySelector(".submenu-pro");

links.forEach((link) => {
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
