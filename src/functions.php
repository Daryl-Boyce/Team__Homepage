<?php

//create a message
function createMessage(array $contactData) {

  $messages = new MessageSubmission($contactData);

  $emptyInput = [];
  if ($messages->hasEmptyFields()) {
    $emptyInput = $messages->hasEmptyFields();
    return false;
  } else {
    $messages->submitForm();
    return $messages;
    }
}

//Set Cookies

//google analytics
setcookie('OTZ', 'value2', ['samesite' => 'None', 'secure' => true]);

?>