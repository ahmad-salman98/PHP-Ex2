<?php
require_once("connection.php");
session_start();
?>

<head>
    <style>
        ul {
            list-style-type: none;
        }
    </style>
</head>
<ul>
    <li>
        <h4> Patient Namr: <?php echo $_SESSION['patientName'] ?></h4>
    </li>
    <li>
        <h4> Patient Age: <?php echo $_SESSION['patientAge'] ?></h4>
    </li>
    <li>
        <h4> Patient ID: <?php echo $_SESSION['patientId'] ?></h4>
    </li>
    <li>
        <h4> Patient Address: <?php echo $_SESSION['patientAddress'] ?></h4>
    </li>
    <li>
        <form action="" method="POST">
            <button name="back"> Back To Main Page</button>
        </form>
    </li>
</ul>
<?php
if (isset($_POST['back'])) {
    header("Location: index.php");
}
?>