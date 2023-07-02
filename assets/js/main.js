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

    
  });
  
