document.addEventListener("DOMContentLoaded", () => {

    console.log("Lumora Loaded");

    const themeButton = document.querySelector(".theme-toggle");

    if (!themeButton) return;

    themeButton.addEventListener("click", () => {

        document.body.classList.toggle("light-mode");

    });

});