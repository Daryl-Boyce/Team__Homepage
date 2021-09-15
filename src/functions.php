<?php

//create an enquiry
function createMessage(array $contactData) {
  $message = new ContactSubmission($contactData);
  
  $emptyInput = [];
  if ($message->hasEmptyFields()) {
    $emptyInput = $message->hasEmptyFields();
    return false;
  } else {
  return $message->submitForm();
    }
}

?>