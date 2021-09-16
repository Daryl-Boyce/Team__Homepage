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

?>