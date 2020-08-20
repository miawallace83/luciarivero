<?php
if($_POST["message"]) {
    mail("lucia.rivero1983@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>

