<?php
require("connection.php");
ob_start();

?>

<div style="background-color:#eee ; display:flex; width:fit-content; padding:0 3rem; margin:3rem auto">
    <form action="" method="POST" style="display: flex; flex-direction:column; min-width: 40rem; margin:1.5rem auto; gap:10px">
        <input type="number" name="patientId" placeholder="Patient Id" required>
        <input type="text" name="patientName" placeholder="Patient Name" required>
        <input type="text" name="patientAge" placeholder="Patient Age" required>
        <input type="text" name="patientAddress" placeholder="Patient Address">
        <input type="submit" name="addPatient" value="Add patient">
    </form>
</div>
<?php
try {
    // prepare sql and bind parameters
    if (isset($_POST["addPatient"])) {
        $stmt = $conn->prepare("INSERT INTO patients (id, name, age,address)
  VALUES (:id, :name, :age,:address)");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':address', $address);

        // insert a row
        $id = $_POST["patientId"];
        $name = $_POST["patientName"];
        $age = $_POST["patientAge"];
        $address = $_POST["patientAddress"];
        $stmt->execute();
        echo "New records created successfully";
        header("Location:index.php");
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;

ob_end_flush();

?>