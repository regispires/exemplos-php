<?php

class ValidationException extends Exception {

    private $error = NULL;

    public function __construct($error) {
        parent::__construct("Validation error!");
        $this -> error = $error;
    }

    public function getErrors() {
        return $this -> error;
    }

}
?>
