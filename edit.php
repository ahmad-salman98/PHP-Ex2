<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            gap: .5rem;
        }
    </style>
</head>

<body>

</body>

</html><?php
        require('connection.php');
        session_start();
        // Form Values
        $idValue = $_SESSION['patientId'];
        $nameValue = $_SESSION['patientName'];
        $ageValue = $_SESSION['patientAge'];
        $addressValue = $_SESSION['patientAddress'];
        ?>

<form action="" method="POST">
    <label for="editedId">Patient ID</label>
    <input type="number" id="editedId" name="editedId" value="<?php echo $idValue ?>">

    <label for="editedName">Patient Name</label>
    <input type="text" id="editedName" name="editedName" value="<?php echo $nameValue ?>">
    <label for="editedAge">Patient Age</label>
    <input type="number" id="editedAge" name="editedAge" value="<?php echo $ageValue ?>">
    <label for="editedAddress">Patient Address</label>
    <input type="text" id="editedAddress" name="editedAddress" value="<?php echo $addressValue ?>">
    <button type="submit" name="applyChanges">Apply Changes</button>
</form>


<?php
if (isset($_POST['applyChanges'])) {
    try {
        $oldId =   $_SESSION['patientId'];

        $id = $_POST['editedId'];
        $name = $_POST['editedName'];
        $age = $_POST['editedAge'];
        $address = $_POST['editedAddress'];
        echo " $oldId $id $name $age $address";

        $sql = "UPDATE patients SET id = $id, name = '$name' , age = $age, address = '$address' WHERE id=$oldId";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        // execute the query
        $stmt->execute();
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;

    header("Location: index.php");
}


?>