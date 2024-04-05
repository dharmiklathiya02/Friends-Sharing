<html>
<body>
<?php
$user = $pass = $userErr = $passErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["user"])) {
        $userErr = "Username is required";
    }
    else {
        $user = $_POST["user"];
    }
    if (empty($_POST["pass"])) {
        $passErr = "Password is required";
    }
    else {
        $pass = $_POST["pass"];
    }
}
    ?>
    <h2>PHP Form Validation</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Useruser: <input type="text" name="user">
    <span style="color: #FF0000;">* <?php echo $userErr;?></span>
    <br><br>
    Password: <input type="password" name="pass">
    <span style="color: #FF0000;">* <?php echo $passErr;?></span>
<input type="submit" user="submit" value="Submit">
</form>
<?php
echo "<h2>Your Input:</h2>".$user."<br>".$pass."<br>";
?>
</body>
</html>    