<?php
include("login.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css" />
    <title>Create-Ledger</title>
</head>

<body>

    <section>
        <nav id="home">
        <h1 id="logo">Learning Management</h1>
            <div class="nav-links" id="navLinks">
                <ul>
                    <li><a href="index.php" class="#"><?php echo $username ?></a></li>
                    <li><a href="database.php" class="active">General Ledger</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </div>
        </nav>

        <div class="database-container2">
       
        <div class="form-btn" id="back">
                <a href ="database.php">
                    <button name="submit" type="submit">
                    <i class="fa-solid fa-backward"></i>
                    </button>
                </div>
                </a>

            <div class="title2">
                <h2>Add <Applicants></Applicants></h2>
            </div>

            <form autocomplete="off" method="POST" action="config/clients.php">

                <div class="form-flex">
                    <div class="form-sep">
                        <label for="account_name">Account_Name</label>
                        <input type="text" name="account_name" id="account_name" required><br>
                    </div>

                    <div class="form-sep">
                        <label for="description">Description</label>
                        <input type="text" name="description" id="description" required><br>
                    </div>
                </div>

                <div class="form-flex">
                    <div class="form-sep">
                        <label for="debit_id">Debit_id</label>
                        <input type="text" name="debit_id" id="debit_id" required><br>
                    </div>

                    <div class="form-sep">
                        <label for="credit_id">Credit_id</label>
                        <input type="text" name="credit_id" id="credit_id" required><br>
                    </div>
                </div>

                <div class="form-flex">
                    <div class="form-sep">
                        <label for="amount">Amount</label>
                        <input type="text" name="amount" id="amount" required><br>
                    </div>

                    <div class="form-sep">
                        <label for="transaction_id">Transaction_ID</label>
                        <input type="text" name="transaction_id" id="transaction_id" required><br>
                    </div>
                </div>

                <div class="form-btn">
                    <button name="submit" type="submit">
                        Submit
                    </button>
                </div>

            </form>
        </div>
    </section>

</body>

</html>