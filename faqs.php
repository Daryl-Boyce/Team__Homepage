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
    <title>Sharon Wray Accountancy Service</title>
</head>

<body>
    <!-------->
    <!---------->
    <!------------>
    <!-- Header -->
    <div class="container">
    <?php
        include_once __DIR__ . "/src/header.php"
    ?>
        <div class="faq_section">
            <div class="faq_header">
                <h3>
                    FAQ's
                </h3>
                <hr class="faq__break">
            </div>
            <div class="faq_statement">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales,
                     lacus tempor ullamcorper sollicitudin, dui enim vulputate est, quis 
                     finibus sem tortor eu elit. Nulla malesuada lorem ut est porta, eget 
                     sagittis lectus vestibulum. Duis sit amet leo mi. Pellentesque id sapien 
                     non nunc varius vehicula. Aenean non molestie leo. Phasellus sit amet 
                     augue eget ex efficitur elementum. Sed sed vestibulum felis. Quisque 
                     mattis dolor eu convallis vulputate. Aliquam eget euismod purus, sit 
                     amet finibus mauris. Quisque ut turpis tristique, ultrices sapien a, 
                     lobortis mauris. Interdum et malesuada fames ac ante ipsum primis in 
                     faucibus. Phasellus nulla tellus, tempor eget interdum in, tristique 
                     laoreet neque. Sed libero nulla, laoreet vel laoreet id, dictum non 
                     lectus. Duis justo libero, accumsan in urna ut, condimentum vehicula 
                     tellus. Donec dignissim, mauris quis vestibulum dapibus, erat justo
                      gravida diam, ut blandit lorem turpis venenatis velit.</p>
            </div>
            <div class="faq_list">
                <ul class="faq_list_list">
                    <li class="faq_question" id="question1"><h3>1. I'm a question</h3></li>
                        <p class="faq_answer" id="answer1">I am an answer but should really be lorem ipsum. Lorem ipsum dolor 
                            sit amet, consectetur adipiscing elit. Duis sodales, lacus tempor 
                            ullamcorper sollicitudin, dui enim vulputate est, quis finibus 
                            sem tortor eu elit. Nulla malesuada lorem ut est porta, eget 
                            sagittis lectus vestibulum.</p>

                    <li class="faq_question" id="question2"><h3>2. I'm also a question</h3></li>
                    <p class="faq_answer" id="answer2">I am an answer but should really be lorem ipsum. Lorem ipsum dolor 
                        sit amet, consectetur adipiscing elit. Duis sodales, lacus tempor 
                        ullamcorper sollicitudin, dui enim vulputate est, quis finibus 
                        sem tortor eu elit. Nulla malesuada lorem ut est porta, eget 
                        sagittis lectus vestibulum.</p>

                    <li class="faq_question" id="question3"><h3>3. I'm a question too</h3></li>
                    <p class="faq_answer" id="answer3">I am an answer but should really be lorem ipsum. Lorem ipsum dolor 
                        sit amet, consectetur adipiscing elit. Duis sodales, lacus tempor 
                        ullamcorper sollicitudin, dui enim vulputate est, quis finibus 
                        sem tortor eu elit. Nulla malesuada lorem ut est porta, eget 
                        sagittis lectus vestibulum.</p>

                    <li class="faq_question" id="question4"><h3>4. I'm a question but also a statement on the stupidity of man</h3></li>
                    <p class="faq_answer" id="answer4">I am an answer but should really be lorem ipsum. Lorem ipsum dolor 
                        sit amet, consectetur adipiscing elit. Duis sodales, lacus tempor 
                        ullamcorper sollicitudin, dui enim vulputate est, quis finibus 
                        sem tortor eu elit. Nulla malesuada lorem ut est porta, eget 
                        sagittis lectus vestibulum.</p>

                    <li class="faq_question" id="question5"><h3>5. I'm a question but only if you're from 1984</h3></li>
                    <p class="faq_answer" id="answer5">I am an answer but should really be lorem ipsum. Lorem ipsum dolor 
                        sit amet, consectetur adipiscing elit. Duis sodales, lacus tempor 
                        ullamcorper sollicitudin, dui enim vulputate est, quis finibus 
                        sem tortor eu elit. Nulla malesuada lorem ut est porta, eget 
                        sagittis lectus vestibulum.</p>

                    <li class="faq_question" id="question6"><h3>6. I'm the final question so usually hold the most relevent information</h3></li>
                    <p class="faq_answer" id="answer6">I am an answer but should really be lorem ipsum. Lorem ipsum dolor 
                        sit amet, consectetur adipiscing elit. Duis sodales, lacus tempor 
                        ullamcorper sollicitudin, dui enim vulputate est, quis finibus 
                        sem tortor eu elit. Nulla malesuada lorem ut est porta, eget 
                        sagittis lectus vestibulum.</p>
                </ul>
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