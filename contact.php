<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="dist/hamburgers.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,400&display=swap"
        rel="stylesheet">
    <link href="Styles/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8770348bdd.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Sharon Wray Accountancy Service</title>
</head>

<body>
    <!-------->
    <!---------->
    <!------------>
    <!-- Header -->
    <?php
        include_once __DIR__ . "/src/header.php"
    ?>
        <!------------------>
        <div class="container">
            <div class="contact_section">
                <div class="contact_header">
                    <h3>
                        Contact Us
                    </h3>
                </div>
                <div class="contact_statement">
                    <p>
                        Hey i'm a statement telling you the reasons why you might need to contact us and how is the best way to go about it.
                        fill out the below form if you want to reach out to us.
                    </p>
                </div>
                <form action="" method="POST">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname">

                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname">

                    <label for="email">Email</label>
                    <input type="text" id="email" name="email">

                    <label for="phone">Telephone Number</label>
                    <input type="text" id="phone" name="phone">

                    <label for="message">Message</label>
                    <input type="textarea" id="message" name="message">

                    <label for="checkbox">Do you agree?</label>
                    <input type="checkbox" id="checkbox" name="checkbox"> 
                </form>
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