var toggle = false;

$("#check_unidade").on('click', function () {
      teste = $("input[name=check_unidade]").attr("checked", !toggle);
      toggle = !toggle;


      if (toggle == true) {
            $("#unidade").removeClass("d-none");
      } else {
            $("#unidade").addClass("d-none");
      }
});