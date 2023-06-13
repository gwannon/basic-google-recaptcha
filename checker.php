<?php

//Check recaptcha
$recaptcha_secret = '[GOOGLE_RECAPTCHA_PRIVATE_KEY]'; 
$recaptcha_response = $_REQUEST['recaptcha_response']; 
$recaptcha = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response)); 
if($recaptcha->score < 0.6) { //0 is high risk and 1 is totally secure.
  //Fail Recaptcha
} else {
  //Pass Recaptcha
}