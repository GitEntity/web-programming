<html>
<head>
    <title>
        Lab-2 Q2 - PHP Script
    </title>
<head>
<body>

<?php
// declare and initialize variables
$testAddress = $testFirstname = $testSurname = 0;
$address = $firstName = $surname = "";

if (isset($_POST["submit"])) {
    // determine null variables after input
    if ($_POST["Addr"] == NULL)
        $testAddress = 1;
    else
        $address = $_POST ["Addr"];

    if ($_POST["First"] == NULL)
        $testFirstname = 1;
    else
        $firstName = $_POST["First"];

    if ($_POST["Sur"] == NULL)
        $testSurname = 1;
    else
        $surname = $_POST["Sur"];
}
?>

<h2>Please enter your name and address:</h2>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

    <p>
        <label for="First">Firstname: </label>
        <input type="text" name="First" value="<?php echo $firstName ?>" id="f"/>
        <?php
        // notify user for empty fields
        if ($testFirstname)
            echo "Please enter a firstname!"
        ?>
    </p>

    <p>
        <label for="Sur">Surname: </label>
        <input type="text" name="Sur" value="<?php echo $surname ?>" id="s"/>
        <?php
        // notify user for empty fields
        if ($testSurname)
            echo "Please enter a surname!"
        ?>
    </p>

    <p>
        <label for="Address">Address: </label>
        <textarea name="Addr" rows="5" cols="30" id="a"><?php echo $address ?></textarea>
        <?php
        // notify user for empty fields
        if ($testAddress)
            echo "Please enter an address!"
        ?>
    </p>

    <p>
        <input type="submit" name="submit"/>
    </p>
</form>
<?php
if (!($testAddress + $testFirstname + $testSurname) && isset($_POST["submit"]))
    echo "<p>All is well, you are " . $_POST["First"] . " " . $_POST["Sur"] . " and you live here: " . $_POST["Addr"] . "</p>";
?>
</body>
<html>


