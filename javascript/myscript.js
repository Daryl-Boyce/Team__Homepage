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