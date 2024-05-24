<?php
include("login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="table.css"/>
    <title>Ledger</title>
</head>
<body>
    
<section>  
    <nav id="home">
    <h1 id="logo"></h1>
        <div class="nav-links" id="navLinks">
            <ul>
                <li><a href="index.php" class="#"><?php echo $username; ?></a></li>
                <li><a href="database.php" class="active">General Ledger</a></li>
                <li><a href="logout.php">Log - Out</a></li> 
            </ul>
        </div>    
    </nav>

    <div class="database-container">
       <div class="database-flex"> 
        <div class="title">
            <h2>List of Applicants </h2>
        </div>
        
        <div class="title-button">
            <a href="create.php">
                <button>
                    <i class="fa-solid fa-plus icon"></i>
                </button>
            </a>    
        </div>  
        </div>

        <div class="table-align"> 
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>DESCRIPTION</th>
                        <th>SCHEDULE</th>
                        <th>STATUS</th>
                        <th>ASSESSMENT_RATE</th>
                        <th>EMAIL</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("connections.php");

                    $sql = "SELECT * FROM login_db";
                    $result = $con->query($sql);

                    if (!$result) {
                        die("Invalid query: " . $connection->error);
                    }

                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>
                                <td>' . $row['id'] . '</td>
                                <td>' . $row['name'] . '</td>
                                <td>' . $row['description'] . '</td>
                                <td>' . $row['schedule'] . '</td>
                                <td>' . $row['status'] . '</td>
                                <td>' . $row['rate'] . '</td>
                                <td>' . $row['email'] . '</td>
                                <td>
                                    <div class="button-container">
                                        <div class="sep-button">
                                            <a href="edit.php?id=' . $row['id'] . '">
                                                <button id="' . $row['id'] . '_edit_button">
                                                    <i class="fa-solid fa-pen-to-square icon"></i>
                                                </button>
                                            </a>
                                        </div>
                                        <div class="sep-button">
                                            <a href="config/delete.php?id=' . $row['id'] . '">
                                                <button id="' . $row['id'] . '_delete_button">
                                                    <i class="fa-solid fa-trash icon"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                    }
                            </tr>';
                    }
                    ?>