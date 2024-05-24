<?php
include("config/config.php");
include("login.php");
// Check if ID is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve the specific row from the database
    $sql = "SELECT * FROM clients WHERE id = $id";
    $result = $con->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        echo "Error: Record not found.";
        exit;
    }
} else {
    echo "Error: ID not provided.";
    exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve updated data from the form
    $updatedNAME = $_POST['name'];
    $updatedDESCRIPTION = $_POST['description'];
    $updatedSCHEDULE = $_POST['transaction_id'];
    $updatedSTATUS = $_POST['amount'];
    $updatedASSESSMENT_RATE = $_POST['debit_id'];
    $updatedEMAIL = $_POST['credit_id'];


    // Update the row in the database
    $updateSql = "UPDATE clients 
                  SET nam = '$updatedNAME',
                  description = '$updatedDESCRIPTION',
                  schedule = '$updatedSCHEDULE',
                  status = '$updatedSTATUS',
                  assessment_rate = '$updatedASSESSMENT_RATE',
                  email = '$updatedEMAIL'
                  WHERE id = $id";
    
    
    if ($con->query($updateSql) === TRUE) {
        // Redirect back to the database page after successful update
        header("Location: database.php");
        exit;
    } else {
        echo "Error updating record: " . $con->error;
    }


    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title>Edit-Ledger</title>
</head>
<body>

<section>
<nav id="home">
            <h1 id="logo">Learning Management</h1>
            <div class="nav-links" id="navLinks">
                <ul>
                    <li><a href="index.php" class="#"><?php echo $username ?></a></li>
                    <li><a href="database.php" class="active">General Ledger</a></li>
                    <li><a href="config/log-out.php">Log - Out</a></li>
                </ul>
            </div>
        </nav>

        <div class="form-btn" id="back">
                <a href ="database.php">
                    <button name="submit" type="submit">
                    <i class="fa-solid fa-backward"></i>
                    </button>
                </div>
                </a>

<div class="database-container2">
        <div class="title2">
            <h2>Edit Client</h2>
        </div>

      <form autocomplete="off" method="POST" action="">

      <div class="form-flex">
        <div class="form-sep">
            <label for="account_name">Account_Name</label>
            <input type="text" name="account_name" id="account_name" value="<?php echo $row['account_name']; ?>" required><br>
        </div>

        <div class="form-sep">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" value="<?php echo $row['description']; ?>"  required><br>
        </div>

       
      </div>  


      <div class="form-flex">
        

        <div class="form-sep">
            <label for="debit_id">Debit_id</label>
            <input type="text" name="debit_id" id="debit_id" value="<?php echo $row['debit_id']; ?>"  required><br>
        </div>

        <div class="form-sep">
            <label for="credit_id">Credit_id</label>
            <input type="text" name="credit_id" id="credit_id" value="<?php echo $row['credit_id']; ?>"  required><br>
        </div>

      </div>  


      <div class="form-flex">

      <div class="form-sep">
            <label for="amount">Amount</label>
            <input type="text" name="amount" id="amount" value="<?php echo $row['amount']; ?>"  required><br>
        </div>


        <div class="form-sep">
            <label for="transaction_id">Transaction_ID</label>
            <input type="text" name="transaction_id" id="transaction_id" value="<?php echo $row['transaction_id']; ?>"  required><br>
        </div>



    </div>  

        <div class="form-btn">
                <button name="submit" type="submit">
                   Update
                </button>

        </div>

      </form>


    </div>


</section>

</body>
</html>
