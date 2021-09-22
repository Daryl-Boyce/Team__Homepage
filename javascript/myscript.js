 
  // On load Functions

    $(window).on("load", function() {
        $("#answer1").slideUp(0);
        $("#answer2").slideUp(0);
        $("#answer3").slideUp(0);
        $("#answer4").slideUp(0);
        $("#answer5").slideUp(0);
        $("#answer6").slideUp(0);
        $(".mainnav_container").slideUp(0);
    });

    $(document).on('click', '.hamburger', function(){
      $(".hamburger").toggleClass("is-active");
      $(".mainnav_container").slideToggle();
    });

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
    var phoneReg = /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/;

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

    var validatePhone = function validatePhone(value) {
      if (value.match(phoneReg) && value.length > 0) {
        return true;
      } else {
        return false;
      }
    };

    $("#fname").on('input', function () {
      let isValid = validateString($("#fname").val());

      if (!isValid) {
          $("#fname").css("border", "2px solid red");
      } else {
          $("#fname").css("border", "default");
      }
    });

    $("#lname").on('input', function () {
      let isValid = validateString($("#lname").val());

      if (!isValid) {
          $("#lname").css("border", "2px solid red");
      } else {
          $("#lname").css("border", "default");
      }
    });

    $("#email").on('input', function () {
        let isValid = validateEmail($("#email").val());
        if (!isValid) {
          //Invalid email function
          $("#email").css("border", "2px solid red");
        } else {
          $("#email").css("border", "default");
        }
      });

      $("#phone").on('input', function () {
        let isValid = validatePhone($("#phone").val());
        if (!isValid) {
          //Invalid phone function
          $("#phone").css("border", "2px solid red");
        } else {
          $("#phone").css("border", "default");
        }
      });

    $("#message").on('input', function () {
      let isValid = validateString($("#message").val());

      if (!isValid || !$("#message").val()) {
          //Invalid Message input
          $("#message").css("border", "2px solid red");
      } else {
          $("#message").css("border", "default");
      }
    }); // End of input validation.

    // This function will look through the contact form before submission to prevent unwanted text/ scripts
    $('#contact-form').submit(function () {
      let isValidf = validateString($("#fname").val());
      let isValidl = validateString($("#lname").val());
      let isValide = validateEmail($("#email").val());
      let isValidp = validatePhone($("#phone").val());
      let isValidm = validateString($("#message").val());

      if (!$.trim($("#fname").val()).length || !isValidf) {
        $("#fname").css("border", "2px solid red");
        e.preventDefault();
      }

      if (!$.trim($("#lname").val()).length || !isValidl) {
        $("#lname").css("border", "2px solid red");
        e.preventDefault();
      }
    
      if (!$.trim($("#email").val()).length || !isValide) {
        $("#email").css("border", "2px solid red");
        e.preventDefault();
      }
    
      if (!$.trim($("#phone").val()).length || !isValidp) {
        $("#phone").css("border", "2px solid red");
        e.preventDefault();
      }

      if (!$.trim($("#message").val()).length || !isValidm) {
        $("#message").css("border", "2px solid red");
        e.preventDefault();
        return false;
      } else {}
    });
    
    $('#contact-form').change(function () {
      let isValidf = validateString($("#fname").val());
      let isValidl = validateString($("#lname").val());
      let isValide = validateEmail($("#email").val());
      let isValidp = validatePhone($("#phone").val());
      let isValidm = validateString($("#message").val());

      if (isValidf && isValidl && isValide && isValidp && isValidm) {
        $(".btn_send").removeClass("disabled");
        $(".btn_send").attr("disabled", false);
      } else {
        $(".btn_send").addClass("disabled");
        $(".btn_send").attr("disabled", true);
      }
    });

    // End of form validation 

    //Map location Script 

    var mymap = L.map('mapid').setView([52.578196, 1.108712], 13);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoieHRzb3VsZmlyZXR4IiwiYSI6ImNrdHUwOG0xbTBldHQyeHFuZTZzb3Yzd2UifQ.Qyy47GZ1rQ-YEQWVwiYKvQ'
}).addTo(mymap);

var marker = L.marker([52.578196, 1.108712]).addTo(mymap);
marker.bindPopup("<b>Sharon Wray</b><br>Accountancy Services.").openPopup();
