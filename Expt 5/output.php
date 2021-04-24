<body style="background-color: blue;">
<?php
    extract($_POST);
    echo "<h1>Term Fee</h1> <br>";
    // echo "Roll No: $Roll_No <br>";
    echo "Name of the Student:" .$_GET['name'];
    echo "<br>";
    echo "Email:" .$_GET['email'];
    echo "<br>";
    echo "Phone Number:" .$_GET['mobileno'];
    echo "<br>";
    echo "Gender:" .$_GET['gender'];
    // echo "Email: $email <br>";
    // echo "Password: $password <br>";
    // echo "Age: $age <br>";
    // echo "Gender: $gender <br>";
    // foreach ($_POST['course'] as $course){
    //     echo "Course: $course <br>";
    // }
    // foreach ($_POST['year'] as $Year){
    //     echo "Year / Semester: $Year <br>";
    // }
?>