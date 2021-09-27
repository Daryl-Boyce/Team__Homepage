<?php
    ob_start();
        require_once __DIR__ . "/src/bootstrap.php";
        include_once __DIR__ . "/src/post_form.php";
        define('SITE_KEY', '6LcUbnwcAAAAACBUlU0360v-SHqfmRDFRwlGHR-j');
        define('SECRET_KEY', '6LcUbnwcAAAAAPx85TqOZQV23ODkzBjIl04KZVqX');

        if($_POST) {
            function getCaptcha($SecretKey){
                $Response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$SecretKey}');
                $Return = json_decode($Response);
                return $Return;
            }
            $Return = getCaptcha($_POST['g-recaptcha-response']);
            // if($Return->success == true && $Return > 0.5) {
                // echo "Thank you for your message";
            // } else {
                // echo "Begone Bot!!!";
            // }
        }
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="hamburgers-1.1.3/dist/hamburgers.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,400&display=swap"
        rel="stylesheet">
    <link href="Styles/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8770348bdd.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>"></script>
    <title>Sharon Wray Accountancy Service</title>
</head>

<body>
    <!-------->
    <!---------->
    <!------------>
    <!-- Header -->
    <div class="container">
    <?php
        include __DIR__ . "/src/header.php"
    ?>
        <!------------------>
            <div class="contact_section">
                
                <div class="findus_section">
                    <h3>Where to find us</h3>
                    <hr class="findus__break">
                    <div id="mapid"></div>
                    <div class="contact_info">
                        <h4><a href="#">Tel: 01953 687077</a></h4>
                        <h4><a href="#">Mob: 07894 067905</a></h4>
                        <h4><a href="#">Email: accounts@sharonwray.co.uk</a></h4>
                    </div>
                    <div class="location_details">
                        <p>Sharon Wray Accountancy Services <br>
                            38a Barnham Broom Road <br>
                            Wymondham <br>
                            Norfolk <br>
                            NR18 0DF
                        </p>
                    </div>
                </div>

                <div class="form_container">
                    <div class="contact_header">
                            <h3>
                                Contact Us
                            </h3>
                            </h3>
                            <hr class="contact__break">
                        </div>
                        <div class="contact_statement">
                            <p>
                                Hey i'm a statement telling you the reasons why you might need to contact us and how is the best way to go about it.
                                fill out the below form if you want to reach out to us.
                            </p>
                        </div>
                        <form action="contact.php" method="POST" id="contact-form">
                           <input type="hidden" name="action" value="contact-form">
                            <label for="fname">First Name</label>
                            <input type="text" value id="fname" name="fname">

                            <label for="lname">Last Name</label>
                            <input type="text" value id="lname" name="lname">

                            <label for="email">Email</label>
                            <input type="text" value id="email" name="email">

                            <label for="phone">Telephone Number</label>
                            <input type="text" value id="phone" name="phone">

                            <label for="message">Message</label>
                            <input type="textarea" value id="message" name="message">

                            <label for="checkbox">Do you agree to our data protection declaration?</label>
                            <input type="checkbox" id="checkbox" name="checkbox" value=1>

                            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">

                            <button name="submit-m" type="submit" value="Submit" class="btn_send">Submit</button>
                        </form>
                        <script>
                            function onClick(e) {
                            e.preventDefault();
                            grecaptcha.ready(function() {
                            grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'homepage'}).then(function(token) {
                            document.getElementById('g-recaptcha-response').value=token;
                                 });
                             });
                         }
                        </script>
                    </div>
                </div>
        </div>
        <!------------------>
        <?php
    include_once __DIR__ . "/src/footer.php"
    ?>
    <!-------->

    <script src="//code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="javascript/myscript.js"></script>
</body>

</html>