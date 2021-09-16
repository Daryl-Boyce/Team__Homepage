    
    //Header Functions
    $(".hamburger").click(function (){
        $(".hamburger").toggleClass("is-active");
    })


    // Faq Page Functions

    $(window).on("load", function() {
        $("#answer1").slideUp(0);
        $("#answer2").slideUp(0);
        $("#answer3").slideUp(0);
        $("#answer4").slideUp(0);
        $("#answer5").slideUp(0);
        $("#answer6").slideUp(0);
    })
    
    $("#question1").click(function () {
        $("#answer1").slideToggle();
    })

    $("#question2").click(function () {
        $("#answer2").slideToggle();
    })

    $("#question3").click(function () {
        $("#answer3").slideToggle();
    })

    $("#question4").click(function () {
        $("#answer4").slideToggle();
    })

    $("#question5").click(function () {
        $("#answer5").slideToggle();
    })

    $("#question6").click(function () {
        $("#answer6").slideToggle();
    })


    //Contact form input validation

    var EmailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var characterReg = /^\s*[a-zA-Z0-9\.\!\?\@\-,\s]+\s*$/;

    var validateString = function validateString(value) {
      if (value.match(characterReg) && value.length > 0) {
        return true;
      } else {
        return false;
      }
    };

    var validateEmail = function validateEmail(email) {
      if (email.match(EmailRegex) && email.length > 0) {
        return true;
      } else {
        return false;
      }
    };

    $("#first-name-input").on('input', function () {
      var isValid = validateString($("#first-name-input").val());

      if (isValid) {
          //Valid first name input
      } else {
          //Invalid first name input
      }
    });
    $("#last-name-input").on('input', function () {
      var isValid = validateString($("#last-name-input").val());

      if (isValid) {
          //Valid last name input
      } else {
          //Valid last name input
      }
    });

    $("#email").on('input', function () {
        var isValid = validateEmail($("#email").val());
        if (isValid) {
          //Valid email functions
        } else {
          //Invalid email function
        }
      });

      $("#phone").on('input', function () {
        var isValid = validateEmail($("#phone").val());
        if (isValid) {
          //Valid email functions
        } else {
          //Invalid email function
        }
      });

 // This block will look through the message field for special characters and disable the submit button if any are found.

    $("#message").on('input', function () {
      var isValid = validateString($("#message").val());

      if (isValid || !$("#message").val()) {
          //Valid Message input
      } else {
          //Invalid Message input
      }
    }); // End of input validation.

    $('#contact-form').on("submit", function () {
      if (!$.trim($('#first-name-input').val()).length) {
        e.preventDefault();
        $("#failure-message").removeClass("hidden");
  }
})