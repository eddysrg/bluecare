const responsiveMenuIcon = document.querySelector(".fa-bars");
const navigationBar = document.querySelector(".nav");
const linksNavMobile = document.querySelectorAll(".link-mb");

responsiveMenuIcon.addEventListener("click", () => {
    responsiveMenuIcon.classList.toggle("fa-bars");
    responsiveMenuIcon.classList.toggle("fa-xmark");
    navigationBar.classList.toggle("hidden");
    document.body.classList.toggle("overflow-y-hidden");
});

linksNavMobile.forEach((link) => {
    const anchorTag = link.lastElementChild.textContent;

    link.addEventListener("click", (e) => {
        e.preventDefault();

        if (anchorTag === "Exp. Clínico") {
            console.log("Es el link de expediente clinico");
        }
    });
});
