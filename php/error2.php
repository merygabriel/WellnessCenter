
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data and insert into the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $doctorId = $_POST["doctor"];
    $appointmentDate = $_POST["appointment_date"];
    $appointmentTime = $_POST["appointment_time"];
    $problemDescription = $_POST["problem_description"];

    $sql = "INSERT INTO Appointments (name, email, mobile, doctor_id, appointment_date, appointment_time, problem_description)
            VALUES ('$name', '$email', '$mobile', '$doctorId', '$appointmentDate', '$appointmentTime', '$problemDescription')";

    if ($conn->query($sql) === TRUE) {
        echo "Դուք հաջողությամբ կատարեցիք հերթագրում";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
