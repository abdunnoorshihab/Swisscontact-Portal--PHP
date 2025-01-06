<?php
// Database credentials
$host = "localhost";
$dbname = "addressdb";
$username = "root"; // Change as per your MySQL user
$password = "";     // Change as per your MySQL password

try {
    // Establishing connection using PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare SQL query
    $stmt = $pdo->prepare("INSERT INTO users (
        fname, mname, lname, designation, department, org, 
        st_1, st_2, city, zip, email_1, email_2, contact_1, contact_2, 
        telephone, fax, status, stakeholders
    ) VALUES (
        :fname, :mname, :lname, :designation, :department, :org, 
        :st_1, :st_2, :city, :zip, :email_1, :email_2, :contact_1, :contact_2, 
        :telephone, :fax, :status, :stakeholders
    )");
    $stakeholders = isset($_POST['stakeholders']) ? $_POST['stakeholders'] : 'None';

    // Bind parameters
    $stmt->execute([
        ':fname' => $_POST['fname'],
        ':mname' => $_POST['mname'],
        ':lname' => $_POST['lname'],
        ':designation' => $_POST['designation'],
        ':department' => $_POST['department'],
        ':org' => $_POST['org'],
        ':st_1' => $_POST['st_1'],
        ':st_2' => $_POST['st_2'],
        ':city' => $_POST['city'],
        ':zip' => $_POST['zip'],
        ':email_1' => $_POST['email_1'],
        ':email_2' => $_POST['email_2'],
        ':contact_1' => $_POST['contact_1'],
        ':contact_2' => $_POST['contact_2'],
        ':telephone' => $_POST['telephone'],
        ':fax' => $_POST['fax'],
        ':status' => $_POST['status'],
        ':stakeholders' => $stakeholders
    ]);
    

    echo "Data successfully inserted!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
