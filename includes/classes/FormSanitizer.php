<?php

class FormSanitizer {
    public static function sanitizeFormString($inputText) { // dont have to create instance because of static
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ", "", $inputText); // replace any spaces within "" string
        // $inputText = trim($inputText)
        $inputText = strtolower($inputText);
        $inputText = ucfirst($inputText);  // these two are totally up to you to set
        return $inputText;
    }

    public static function sanitizeFormUsername($inputText) { 
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ", "", $inputText); 
        return $inputText;
    }

    public static function sanitizeFormPassword($inputText) { 
        $inputText = strip_tags($inputText);
        return $inputText;
    }

    public static function sanitizeFormEmail($inputText) { 
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ", "", $inputText);
        return $inputText;
    }
}



?>