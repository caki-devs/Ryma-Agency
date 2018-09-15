<?php
if($_POST["message"]) {
    mail("claudianjeri04@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>