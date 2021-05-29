var toggle = false;

$("#check_kg").on('click', function () {
      teste = $("#check_kg").attr("checked", !toggle);
      toggle = !toggle;


      if (toggle == true) {
            $("#kg").removeClass("d-none");
            $("#price_div").removeClass("d-none");

      } else {
            $("#kg").addClass("d-none");
            $("#price_div").addClass("d-none");
      }
});
var toggle2 = false;

$("#check_unidade").on('click', function () {
      teste = $("#check_unidade").attr("checked", !toggle2);
      toggle2 = !toggle2;


      if (toggle2 == true) {
            $("#unidade").removeClass("d-none");
      } else {
            $("#unidade").addClass("d-none");
      }
});