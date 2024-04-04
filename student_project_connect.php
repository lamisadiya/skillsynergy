<?php

$project_title = $_POST['project_title'];
$mentor_id = $_POST['mentor_id'];
$student_id1 = $_POST['student_id1'];
$student_id2 = $_POST['student_id2'];
$student_id3 = $_POST['student_id3'];
$student_id4 = $_POST['student_id4'];
$status = 'pending';

$pdf_name = $_FILES['pdf']['name'];
$pdf_tmp_name = $_FILES['pdf']['tmp_name'];
move_uploaded_file($pdf_tmp_name, "pdf/" . $pdf_name);












$host = "localhost:3306";
$user = "root";
$pass = "";
$db = "iub_tech_360";

$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into projects(project_title, mentor_id, student_id1, student_id2, status, pdf) values(?, ?, ?, ?, ?,?)");
    $stmt->bind_param("siiiss", $project_title, $mentor_id, $student_id1, $student_id2, $status, $pdf_name);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
    header('location: std_project_submission.php');
    exit;
}
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="data_entry.php" method="post">
        <button class="btn btn-primary" type="submit">
            go back
        </button>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html> -->