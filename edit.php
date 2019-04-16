<?php

include_once "include/db_connection.php";
include_once "include/secrets.php";
require("sendgrid-php/sendgrid-php.php");

$id = mysqli_escape_string($conn, $_GET["id"]);
$query = "SELECT * FROM appointments WHERE id='$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

function insertReservationIntoDatabase ($conn, $first_name, $last_name, $phone_number, $email, $date, $time){
    // be safe, use an escape_string, kids!
    $first_name = mysqli_escape_string($conn, $first_name);
    $last_name = mysqli_escape_string($conn, $last_name);
    $phone_number = mysqli_escape_string($conn, $phone_number);
    $email = mysqli_escape_string($conn, $email);
    $date = mysqli_escape_string($conn, $date);
    $time = mysqli_escape_string($conn, $time);

    // Make a query (still belongs to the function above)
    $updateQuery = "UPDATE appointments SET firstname = '$first_name', lastname = '$last_name', 
        phonenumber ='$phone_number', email ='$email', date_x = '$date', time_x = '$time' WHERE id=20";
    $newResult = mysqli_query($conn, $updateQuery)
    or die ('Error: ' . $updateQuery);
}
if (isset($_POST['submit'])) {
    // renaming variables
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $phone_number = $_POST['phonenumber'];
    $email = $_POST['emailadress'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $postFields = [
        // made to display errors in dutch
        [
            "name" => "firstname",
            "descriptiveName" => "Voornaam"
        ],
        [
            "name" => "lastname",
            "descriptiveName" => "Achternaam"
        ],
        [
            "name" => "phonenumber",
            "descriptiveName" => "Telefoonnummer"
        ],
        [
            "name" => "emailadress",
            "descriptiveName" => "Emailadres"
        ],
        [
            "name" => "date",
            "descriptiveName" => "Datum"
        ],
        [
            "name" => "time",
            "descriptiveName" => "Tijdslot"
        ],
    ];

    foreach ($postFields as $postField) {
        if (empty($_POST[$postField["name"]])) {
            $fieldErrors[] = "{$postField["descriptiveName"]} is niet ingevuld!\r\n";
        }
    }

    // When there are no errors, insert into database
    if (empty($fieldErrors)) {
        insertReservationIntoDatabase($conn, $first_name, $last_name, $phone_number, $email, $date, $time);
    }
}
// displays errors in an unordered list
if (!empty($fieldErrors)) { ?>
<ul class="error">
    <?php
    foreach($fieldErrors as $fieldError){ ?>
        <li><?= $fieldError; ?></li>
    <?php } } ?>
</ul>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Afspraak wijzigen</title>
</head>
<body>
<?php
if (isset($_POST['submit']) && (empty($fieldErrors))) { ?>
<!-- show input when submitted succesfully -->
    <h2>Gelukt!</h2>
    <h3>Uw gewijzigde afspraak</h3>
    <p>Voornaam is <?= htmlentities($first_name) ?></p>
    <p>Achternaam is <?= htmlentities($last_name) ?></p>
    <p>Telefoonnummer is <?= htmlentities($phone_number) ?></p>
    <p>Emailadres is <?= htmlentities($email) ?></p>
    <p>Gekozen datum is <?= htmlentities($date) ?></p>
    <p>Gekozen tijd is <?= htmlentities($time) ?></p>
<?php

 $newemail = new SendGrid\Mail\Mail();
    $newemail->setFrom($send_email_from, "Mingan Reiki");
    $newemail->setSubject("Uw gemaakte afspraak bij Mingan Reiki");
    $newemail->addTo("$email", "$first_name $last_name");
    $newemail->addContent("text/plain", "
    Beste $first_name,<br>
    Hierbij een bericht dat uw afspraak bij Mingan Reiki is gewijzigd. <br>
    Uw naam is $first_name $last_name;<br>
    Uw telefoonnummer is $phone_number;<br>
    Uw gekozen datum en tijd is $date $time.<br>
    Als u verhindert bent, neem dan bijtijds contact op met mij via 06-47179161.<br>
    Reageer niet op deze email!<br>
    Graag tot ziens bij Mingan Reiki!<br>
    Vriendelijke groet, Karla");
        $newemail->addContent("text/html", "Beste $first_name,<br>
    Hierbij een bericht dat uw afspraak bij Mingan Reiki is gewijzigd.<br>
    Uw naam is $first_name $last_name;<br>
    Uw telefoonnummer is $phone_number;<br>
    Uw gekozen datum en tijd is $date $time.<br>
    Als u verhindert bent, neem dan bijtijds contact op met mij via 06-47179161.<br>
    <strong>Reageer niet op deze email!</strong><br>
    Graag tot ziens bij Mingan Reiki!<br>
    Vriendelijke groet, Karla");
       $sendgrid = new SendGrid($api_key);

    try {
    $response = $sendgrid->send($newemail);} catch (Exception $e) {
        echo 'Caught exception: ' . $e->getMessage() . "\n";
    } }; ?>

<h1>Bewerk deze afspraak</h1>
<form action="" method="post">
    <input id="id" type="hidden" name="id" value="<?php $_GET['id'] ?>"><br>
    <label for="firstname">Voornaam</label>
    <input id="firstname" type="text" name="firstname" value="<?=$row["firstname"] ?>"><br>
    <label for="lastname">Achternaam</label>
    <input id="lastname" type="text" name="lastname" value="<?= $row["lastname"] ?>"><br>
    <label for="phone">Telefoonnummer</label>
    <input id="phone" type="tel" pattern="^[0-9-+s()]*$" name="phonenumber" value="<?= $row["phonenumber"] ?>"><br>
    <label for="mail">Emailadres</label>
    <input id="mail" type="email" name="emailadress" value="<?= $row["email"] ?>"><br>
    <label for="datepicker">Datum</label>
    <input id="datepicker" type='text' name="date" value="<?= $row["date_x"] ?>"><br>
    <label for="time">Tijdslot</label>
    <input id="time" type="time" name="time" value="<?= $row["time_x"] ?>"><br>
    <input type="submit" name="submit" value="Verzenden">
</form>
</body>
</html>