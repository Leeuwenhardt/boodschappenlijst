<?php
$validation_error = "";
$user_answer = "";
$submission_response = "";

// Write your code here:
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $user_answer = filter_var($_POST["answer"], FILTER_SANITIZE_NUMBER_INT);
  if ($user_answer != "-5") {
  $validation_error = "* Wrong answer. Try again.";
  } else {
  $submission_response = "Correct!";
  }
}






?>
<h2>Time for a math quiz!</h2>
<form method="post" action="">
<h4>Question 1:</h4>  
<p>What is 6 - 11?</p> 
<input type="text" name="answer" id="answer" value="<?= $user_answer;?>">
<br>
<span class="error" id="error"><?= $validation_error;?></span> 
<br> 
<input type="submit" value="Submit Your Answer">
</form>
<div>
  <p id="answer-display">Your answer was: <?= $user_answer;?></p>
  <p id="submission-response"><?= $submission_response;?></p>
</div>

<?php
$validation_error = "";
$user_url = "";
$form_message = "";

// Write your code here:
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $user_url = $_POST["url"];
  if (!filter_var($user_url, FILTER_VALIDATE_URL)) {
    $validation_error = "* This is an invalid URL.";
    $form_message = "Please retry and submit your form again.";
  } else {
    $form_message = "Thank you for your submission.";
  }
} 






?>

<form method="post" action="">
Your Favorite Website: 
<br>
<input type="text" name="url" value="<?php echo $user_url;?>">
<span class="error"><?= $validation_error;?></span>
<br>
<input type="submit" value="Submit">
</form>
<p> <?= $form_message;?> </p> 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = $_POST["name"];
   $number  = $_POST["number"];
   if (strlen($number)<30) {
     $formatted_number = preg_replace("/[^0-9]/", "", $number);
     if (strlen($formatted_number)===10) {
       $contacts[$name] = $formatted_number;
       $message = "Thanks ${name}, we'll be in touch.";
     } else {
       $message = $validation_error;
     } 
   } else {
     $message = $validation_error;
   }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
   $username = $_POST["username"];
   $password  = $_POST["password"];
   if (isset($users[$username]) && $users[$username] === $password){
     $feedback = $message;
   } else {
     $feedback = $validation_error;
   }
};