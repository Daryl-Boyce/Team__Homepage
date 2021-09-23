<?php
    ob_start();


    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["action"] === "contact-form") {
        //Add form fields
        $contactData["fname"] = trim(filter_input(INPUT_POST, "fname", FILTER_SANITIZE_STRING));
        $contactData["lname"] = trim(filter_input(INPUT_POST, "lname", FILTER_SANITIZE_STRING));
        $contactData["email"] = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
        $contactData["phonenumber"] = trim(filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING));
        $contactData["message"] = trim(filter_input(INPUT_POST, "message", FILTER_SANITIZE_SPECIAL_CHARS));
        $contactData["dataprotection"] = trim(filter_input(INPUT_POST, "checkbox", FILTER_SANITIZE_NUMBER_INT));
    
        // if no post data was received from checkbox, set its value to 0 (false)
        if (empty($contactData["dataprotection"])) {
            $contactData["dataprotection"] = 0;
        }
        // create Message and store return value
        $response = createMessage($contactData);
        // if createMessage returns an array, form is invalid
        if (is_array($response)) {
            $invalidContactFields = $response;
        // if createMessage returns true, form was submitted 
        } elseif ($response) {
            header("Location: mailto: alexi.lambrou@netmatters-scs.com", );
            exit;
        } else {
        }
    }
?>