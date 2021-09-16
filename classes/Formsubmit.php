<?php


abstract class FormSubmit
{
    abstract protected function submitForm();

     public function hasEmptyFields()
     {
         $emptyFields = [];

         foreach ($this as $field => $value) {
             if (empty($value) && $value !== 0) {
                 $emptyFields[] = $field;
             }
         }

         return $emptyFields;
     }

      public function isValidEmail()
      {
          return filter_var($this->email, FILTER_VALIDATE_EMAIL);
      }

      public function getProp(string $prop)
      {
          return $this->{$prop};
      }
}