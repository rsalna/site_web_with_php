$(() => {
  $("#togglePassword").click(function () {
    const tipo = document.getElementById("password").getAttribute("type");

    if (tipo === "password") {
      $("#togglePassword").attr("class", "fa-solid fa-eye-slash");
      $("#password").attr("type", "text");
    } else {
      $("#togglePassword").attr("class", "fa-solid fa-eye");
      $("#password").attr("type", "password");
    }
  });


  $('#acceso').click(function () {
    const datos = $('#login').serialize();
    $.ajax({
      method: 'POST',
      url:'validar.php',
      data: datos,
      success:function(data){
        // window.location = 'panel.php';
        if (data === 'success') {
          window.location = 'panel.php';
        } else {
          // Mostrar mensaje de error o realizar otras acciones según sea necesario
        }
      }
    })
    
  })

});
