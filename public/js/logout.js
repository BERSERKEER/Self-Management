document
  .getElementById("logout-btn")
  .addEventListener("click", function (event) {
    event.preventDefault();

    Swal.fire({
      title: "¿Estás seguro?",
      text: "¿Quieres cerrar sesión?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Sí, cerrar sesión",
      cancelButtonText: "Cancelar",
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href =
          "/Self-Management/index.php?controller=login&action=logout";
      }
    });
  });
