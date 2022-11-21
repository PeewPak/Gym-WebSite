<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/CSS/style_account.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>
<body>

        <?php include 'PHP/login.php';
          include 'PHP/account.php'; ?>

<div class="container_account">
  <div class="Photo">
  </div>
  <div class="Details">
    <div class="First-name inputs">
        <div class = inputLabel>First name</div>
        <input class="firstNameInput" type="text" placeholder=<?php echo($_SESSION['firstName'])?>>
    </div>
    <div class="Last-name inputs">
    <div class = inputLabel>Last name</div>
        <input class="lastNameInput" type="text" placeholder=<?php echo($_SESSION['lastName'])?>>
    </div>
    <div class="Gender inputs">
        <div class = inputLabel>Gender</div>
        <input class="genderInput" type="text" placeholder=<?php echo($_SESSION['gender'])?>>
    </div>
    <div class="Age inputs">
        <div class = inputLabel>Age</div>
        <input class="ageInput" type="number" min="1" placeholder="Age">
    </div>
    <div class="Height inputs">
        <div class = inputLabel>Height (cm)</div>
        <input class="heightInput" type="number" min="1"  placeholder="Height">
    </div>
    <div class="Weight inputs">
        <div class = inputLabel>Weight (kg)</div>
        <input class="weightInput" type="number" min="1"  placeholder="Weight">
    </div>
    <div class="Balance">
        <div class="userBalance">Your balnace: </div>

    </div>
  </div>
</div>
</body>
</html>