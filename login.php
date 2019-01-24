<?php
include_once("db_connection.php");

session_start();

if (isset($_SESSION['uname'])) {
    header('Location: overview_appointments.php');
    exit;
}

if (isset($_POST['submit'])) {
    //Retrieve values (username safe for query)
    $uname = mysqli_escape_string($conn, $_POST['uname']);
    $password = $_POST['password'];

    $query = "SELECT * FROM admin
              WHERE uname = '$uname'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        //Validate password
        if (password_verify($password, $user['password'])) {
            //Set session variable, redirect & exit script
            $_SESSION['uname'] = $user['uname'];
            header('Location: overview_appointments.php');
            exit;
        } else {
            $message = "Je gebruikersnaam of wachtwoord bestaat niet!";
        }
    } else {
        $message = "Je gebruikersnaam of wachtwoord bestaat niet!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<h1>Login</h1>

<?php if (isset($message)) { ?>
    <div><?= $message; ?></div>
<?php } ?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <fieldset>
        <label for="uname">Gebruikersnaam</label>
        <input type="text" name="uname" id="uname" required/>
        <label for="password">Wachtwoord:</label>
        <input type="password" name="password" id="password" required/>
        <input type="submit" name="submit" value="log in"/>
    </fieldset>
</form>
</body>
</html>