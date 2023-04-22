<?php
if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['mail'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = "Vraj9175@outlook.com";
  $headers = "From: ".$email;
  $txt = "You have received an email from ".$name.".\n\n".$message;

  mail($to, $subject, $txt, $headers);
  header("Location: contact.php?mailsend");
}
?>

<?php
$conn = mysqli_connect("localhost", "root", "", "FakeItTillYouMakeIt");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $sql = "INSERT INTO `contact_form`(`person_id`, `name`, `email`, `message`) VALUES ('$name', '$email', '$message')";

  if (mysqli_query($conn, $sql)) {
    echo "Form data inserted successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
mysqli_close($conn);
?>


