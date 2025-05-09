document.addEventListener("DOMContentLoaded", function () {
    const notificationBtn = document.querySelector(".notification-btn");
    const notificationMenu = document.querySelector(".notification-menu");

    notificationBtn.addEventListener("click", function (event) {
        event.preventDefault(); // Evita el salto de página si es un enlace
        notificationMenu.style.display = 
            notificationMenu.style.display === "flex" ? "none" : "flex";
    });

    // Cerrar el menú si se hace clic fuera de él
    document.addEventListener("click", function (event) {
        if (!notificationBtn.contains(event.target) && !notificationMenu.contains(event.target)) {
            notificationMenu.style.display = "none";
        }
    });
});
