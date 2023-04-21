<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
    $mailTo = "Vraj.patel@students.jmcss.org";
    $headers="From: FakeItTillYouMakeIt" .$mailFrom;
    $txt="You have recived an e-mail from" .$name.".\n\n".$message;
mail($mailTo, $subject, $txt, $headers);
header("Locaton: contact.php?mailsend");

}
?>