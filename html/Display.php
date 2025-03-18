<?php

//Creeer een variabel
$ip_address=$timestamp=$name=$mob=$city=$zip="";

if($_SERVER['REQUEST_METHOD']=="POST")
{

// Ip adres achterhalen
$ip_address = $_SERVER['REMOTE_ADDR']; 

// Tijd achterhalen
$timestamp = date("H:i:s"); 

// Krijg form data met de POST method
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mob'];
$city = $_POST['city'];
$zip = $_POST['zip'];
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"> <!-- Defines character encoding for proper text display -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Makes the page responsive on mobile devices -->
    <title>User Data</title> <!-- Title of the webpage -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/mystyle.css">
    <script src="../javascript/myscripts.js"></script>
</head>
<body>

<div class="container-page"> <!-- Bootstrap container with margin-top spacing -->
    <h2 class="mb-4">Submitted Data</h2> <!-- Page heading -->
    
    <table class="table table-bordered"> <!-- Bootstrap table with borders -->
        <tr>
            <th>IP Address</th> <!-- Table header for IP Address -->
            <td><?php echo htmlspecialchars($ip_address); ?></td> <!-- Displays the user's IP address with HTML escaping -->
        </tr>
        <tr>
            <th>Time Sent</th> <!-- Table header for timestamp -->
            <td><?php echo htmlspecialchars($timestamp); ?></td> <!-- Displays the current timestamp -->
        </tr>
        <tr>
            <th>Name</th> <!-- Table header for Name -->
            <td><?php echo htmlspecialchars($name); ?></td> <!-- Displays the name entered in the form -->
        </tr>
        <tr>
            <th>E-mail</th> <!-- Table header for email -->
            <td><?php echo htmlspecialchars($email); ?></td> <!-- Displays the email entered in the form -->
        </tr>
        <tr>
            <th>Mobile</th> <!-- Table header for mobile -->
            <td><?php echo htmlspecialchars($mobile); ?></td> <!-- Displays the mobile phone number entered in the form -->
        </tr>
        <tr>
            <th>City</th> <!-- Table header for City -->
            <td><?php echo htmlspecialchars($city); ?></td> <!-- Displays the city entered in the form -->
        </tr>
        <tr>
            <th>ZIP Code</th> <!-- Table header for ZIP Code -->
            <td><?php echo htmlspecialchars($zip); ?></td> <!-- Displays the ZIP code entered in the form -->
        </tr>
    </table>

    <a href="TributePage.html" class="btn btn-secondary mt-3">Go Back</a> <!-- Button to return to the Tribute page -->
</div>

</body>
</html>
