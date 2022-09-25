<?php
ob_start();
session_start();
require("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0a9ca5a95a.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        body {
            background-color: #eee;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .navbar {
            background-color: #2a9d8f !important;
        }

        #patients {
            margin-top: 5rem;
            background-color: #2a9d8f50;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 75%;
            min-width: 20rem;

        }

        .patient h5,
        .patient h6 {
            margin: 0;
            line-height: 1 rem;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: 500;
            letter-spacing: .8px;
        }

        .patient {
            display: flex;
            background-color: #2a9d8f20;
            margin: 1rem 0;
            width: 75%;
            justify-content: space-between;
            border: #eee 2px solid;
            min-width: 10rem;

        }

        .patientInfo {
            margin: 1rem 0;
        }

        .offcanvas {
            background-color: #eee !important;
        }

        .action {
            display: flex;
            justify-content: space-between !important;
            padding: 0;
        }

        .action form {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        button {
            margin: 1rem;
            margin-left: 5px;
            border-radius: 5px;
            display: inline-block;
            padding: 5px;
            font-size: 1rem;
            background-color: transparent;
            border: none;

        }

        .delete {
            background-color: red;
            margin: 0;
            border: 0;
            height: 100%;
            width: 2rem;
            border-radius: 0;
            font-size: 1rem;
            color: #eee;
        }

        .edit:hover {
            color: blue;
            transform: scale(1.05);
        }

        .view:hover {
            color: green;
            transform: scale(1.05);

        }
    </style>
</head>

<body>
    <header class="col-md-12">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="create.php">Add patient</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <div id="patients">
        <?php

        $query = "SELECT * FROM patients ";

        try {
            // global $conn;
            $stmt =  $conn->prepare($query);
            // EXECUTING THE QUERY
            $stmt->execute();

            $r = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            // FETCHING DATA FROM DATABASE
            $result = $stmt->fetchAll();
            // OUTPUT DATA OF EACH ROW
            foreach ($result as $row) {
        ?>

                <div class="patient row " id=" <?php echo $row["id"]; ?> ">
                    <div class="patientInfo col-md-6">
                        <h5>
                            <?php echo $row["name"] . "<br>"; ?>
                        </h5>
                        <h6>
                            <p> </p><?php echo $row["age"] . " Years " ?>
                        </h6>
                    </div>
                    <div class="action col-md-6 ">
                        <form action="index.php" method="POST">
                            <input type="hidden" name="patientId" value="<?php echo $row["id"] ?>">
                            <input type="hidden" name="patientName" value="<?php echo $row["name"] ?>">
                            <input type="hidden" name="patientAge" value="<?php echo $row["age"] ?>">
                            <input type="hidden" name="patientAddress" value="<?php echo $row["address"] ?>">
                            <button type="submit" class=" view" name="view" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fa-solid fa-eye"></i> View </button>
                            <button class="edit" name="edit"><i class="fa-solid fa-pen"></i> edit</button>
                            <button class="delete" name="delete"><i class="fa-solid fa-user-slash "></i></button>

                        </form>
                    </div>
                </div>
        <?php
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>
<?php

if (isset($_POST["delete"])) {
    $id = $_POST['patientId'];
    $sql = "DELETE FROM patients WHERE id= $id";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully";
    header("Refresh:0");
    $conn = null;
}
if (isset($_POST["edit"])) {
    echo $_POST['patientId'] . $_POST['patientName'] . $_POST['patientAge'] . $_POST['patientAddress'];
    $_SESSION['patientId'] =  $_POST['patientId'];
    $_SESSION['patientName'] =  $_POST['patientName'];
    $_SESSION['patientAge'] =  $_POST['patientAge'];
    $_SESSION['patientAddress'] =  $_POST['patientAddress'];

    header("Location: edit.php");
    exit;
    $conn = null;
}

if (isset($_POST['view'])) {
    $_SESSION['patientId'] =  $_POST['patientId'];
    $_SESSION['patientName'] =  $_POST['patientName'];
    $_SESSION['patientAge'] =  $_POST['patientAge'];
    $_SESSION['patientAddress'] =  $_POST['patientAddress'];

    header("Location:view.php");
}

ob_end_flush();
?>