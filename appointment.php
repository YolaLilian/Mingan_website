<?php
include_once "db_connection.php";

function insertReservationIntoDatabase ($conn, $first_name, $last_name, $phone_number, $email, $newclient, $treatment, $date, $time){
    // be safe, use an escape_string, kids!
    $first_name = mysqli_escape_string($conn, $first_name);
    $last_name = mysqli_escape_string($conn, $last_name);
    $phone_number = mysqli_escape_string($conn, $phone_number);
    $email = mysqli_escape_string($conn, $email);
    $newclient = mysqli_escape_string($conn, $newclient);
    $treatment = mysqli_escape_string($conn, $treatment);
    $date = mysqli_escape_string($conn, $date);
    $time = mysqli_escape_string($conn, $time);

    // Make query
    $query = "INSERT INTO appointments (firstname, lastname, phonenumber, email, newclient, treatment, date_x, time_x)
    VALUES ('$first_name', '$last_name', '$phone_number', '$email', '$newclient', '$treatment', '$date', '$time')";
    $result = mysqli_query($conn, $query)
    or die ('Error: ' . $query);
    //If successful:
//    if ($result) {
//        header('Location: confirm_appointment.php');
//        exit;
//    }
}

// Checks to see if posted
if (isset($_POST['submit'])) {
    // renaming variables
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $phone_number = $_POST['phonenumber'];
    $email = $_POST['emailadress'];
    $newclient = $_POST['newclient'];
    $treatment = $_POST['treatment'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    insertReservationIntoDatabase($conn, $first_name, $last_name, $phone_number, $email,
        $newclient, $treatment, $date, $time);
}

// Give error when not filled in
if (!empty($_POST)){
    $postFields = [
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
            "name" => "newclient",
            "descriptiveName" => "Het vakje waarin u aan kunt geven of u een nieuwe klant bent of niet"
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
}

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
    <title>Document</title>
    <link href="dist/css/datepicker.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Maak een afspraak</h1>

<form action="" method="post">
    <label for="firstname">Voornaam</label>
    <input id="firstname" type="text" name="firstname"><br>
    <label for="lastname">Achternaam</label>
    <input id="lastname" type="text" name="lastname"><br>
    <label for="phone">Telefoonnummer</label>
    <input id="phone" type="tel" pattern="^[0-9-+s()]*$" name="phonenumber" placeholder="bijv. 06-12345678"><br>
    <label for="mail">Emailadres</label>
    <input id="mail" type="email" name="emailadress" placeholder="email@adres.nl"><br>
    <label for="newclient">Bent u een nieuwe klant?</label>
    <!-- Want to display different options for new customers -->
    <select name="newclient" id="newclient">
        <option value="" selected="" disabled="" hidden="">Selecteer...</option>
        <option id="noCheck">Nee</option>
        <option id="yesCheck">Ja</option>
    </select><br>
    <label for="treatment">Behandeling</label>
    <div id="treatmentselect">
        <!-- empty div for javascript usability -->
    </div><br>
    <label for="datepicker">Datum</label>
    <input id="datepicker" type='text' name="date" class="datepicker-here" data-position="right top" data-language='nl' data-inline="true">
    <label for="time">Tijdslot</label>
    <input id="time" type="time" name="time"><br>
    <input type="submit" name="submit" value="Verzenden">
</form>
<script src="dist/js/jquery-3.3.1.min.js"></script>
<script src="dist/js/datepicker.min.js"></script>
<script src="dist/js/i18n/datepicker.nl.js"></script>
<script src="js/appointment.js"></script>
</body>
</html>