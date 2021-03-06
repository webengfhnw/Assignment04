<html>
<head>
    <meta charset="UTF-8">
    <title>Email-Verification</title>
</head>
<body>
<?php
require_once 'EMail.class.php';

$mailAddress = $_POST["value"];

$email_address = new EMail($mailAddress);

if ($email_address->checkEmail()) {
    echo "Many thanks for your address. <br/>";
    echo "The address is: " . $email_address->getEmail() . "<br/>";

    $datum = time();
    $timestamp = date('Y-m-d H:i:s', $datum);

    $email_address->setTimestamp($timestamp);

    $email_address->storeDataInFile();
} else
    echo "Please enter a valid address!";

echo "<a href=\"EmailForm.html\">Back to email form</a>";
?>
<!-- Alternative: <a href="javascript: history.go(-1)">Back to email form</a>!-->
</body>
</html>
