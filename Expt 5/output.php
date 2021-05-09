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
    echo "Age:" .$_GET['age'];
    echo "<br>";
    echo "Gender:" .$_GET['gender'];
    echo "<br>";
    echo "Course:" .$_GET['course'];
    echo "<br>";
    echo "Year:" ._GET['year'];
?>