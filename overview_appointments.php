<?php

include_once "include/db_connection.php";
include_once "include/need_login.php";

$sql = "SELECT * FROM appointments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $appointments[] = $row;
    }
} else {
    echo "0 results";
}


?>

<!doctype html>
<html lang="en">
<head>
    <title>Mijn afspraken</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Mijn afspraken</h1>
<a href="logout.php">Uitloggen</a>
<table>
    <thead>
    <tr>
        <th></th>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Telefoonnummer</th>
        <th>Emailadres</th>
        <th>Nieuwe klant</th>
        <th>Behandeling</th>
        <th>Datum</th>
        <th>Tijd</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($appointments as $i => $appointment){ ?>
        <tr class="<?= $rowClass;?>">
            <td><?= $i +1; ?></td>
            <td><?= $appointment['firstname']; ?></td>
            <td><?= $appointment['lastname']; ?></td>
            <td><?= $appointment['phonenumber']; ?></td>
            <td><?= $appointment['email']; ?></td>
            <td><?= $appointment['newclient']; ?></td>
            <td><?= $appointment['treatment']; ?></td>
            <td><?= $appointment['date_x']; ?></td>
            <td><?= $appointment['time_x']; ?></td>
            <td><a href="delete.php?id=<?= $appointment['id']; ?>">Verwijder de afspraak</a></td>
        </tr>
    <?php }?>
    </tbody>
</table>
</body>
</html>

