$(document).ready(function () {
        setTimeout(function () {
          $("#mymodal").show();
          $("#overlay-popup-m1").show();
        }, 15000);
        $(".close-m1").click(function () {
          $("#mymodal").hide();
          $("#overlay-popup-m1").hide();
        });
        $(".mainbtn").click(function () {
          $("#mymodal").show();
          $("#overlay-popup-m1").show();
        });
        $(".overlay-popup-m1").click(function () {
          $("#mymodal").hide();
          $(this).hide();
        });
        $.mask.definitions["9"] = "";
        $.mask.definitions["n"] = "[0-9]";
        $(function () {
          $("#phone_input").mask("+998 (nn) nnn-nn-nn");
        });

        $(".popup-m1-form").submit(function (e) {
          $("#submit_btn").attr("disabled", true);
          return true;
        });
      });