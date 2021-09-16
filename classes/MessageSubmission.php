<?php 

class MessageSubmission extends Formsubmit {

    public $fname;
    public $lname;
    public $email;
    public $phonenumber;
    public $message;
    public $dataprotection;


    public function getFName()
    {
        return $this->fname;
    }

    public function getLName()
    {
        return $this->lname;
    }

    public function getEmail() 
    {
        return $this->email;
    }
    
    public function getPhone()
    {
        return $this->phonenumber;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getDataP() 
    {
        return $this->dataprotection;
    }

    public function __construct($contactData) {
        $this->fname = $contactData["fname"];
        $this->lname = $contactData["lname"];
        $this->email = $contactData["email"];
        $this->phonenumber = $contactData["phonenumber"];
        $this->message = $contactData["message"];
        $this->dataprotection = $contactData["dataprotection"];
      }
    
    public function submitForm() {
        try {
            include_once __DIR__ . "/../src/connection.php";

            $stmt = $db->prepare("INSERT INTO contact (fname, lname, email, phonenumber, message, dataprotection) VALUES (:fname, :lname, :email, :phonenumber, :message, :dataprotection)");
            $stmt->bindValue(":fname", $this->fname, PDO::PARAM_STR);
            $stmt->bindValue(":lname", $this->lname, PDO::PARAM_STR);
            $stmt->bindValue(":email", $this->email, PDO::PARAM_STR);
            $stmt->bindValue(":phonenumber", $this->phonenumber, PDO::PARAM_INT);
            $stmt->bindValue(":message", $this->message, PDO::PARAM_STR);
            $stmt->bindValue(":dataprotection", $this->dataprotection, PDO::PARAM_INT);
            $stmt->execute();

        } catch (Exception $e) {
            
        }
        return true;
    }    
}