<body style="background-color: blue;">
<?php
    extract($_POST);
    echo "<h1>Term Fee</h1> <br>";
    echo "Roll No: $Roll_No <br>";
    echo "Name of the Student: $name <br>";
    echo "Email: $email <br>";
    echo "Password: $password <br>";
    echo "Age: $age <br>";
    echo "Gender: $gender <br>";
    foreach ($_POST['course'] as $course){
        echo "Course: $course <br>";
    }
    foreach ($_POST['year'] as $Year){
        echo "Year / Semester: $Year <br>";
    }
    echo "Tution Fee: $Tution <br>";
    echo "Equip / Maintainance Fee: $Equip <br>";
    echo "Other Facilities Fee: $FFee <br>";
    echo "Tution Fee: $DFee <br>";
    echo "Locker Fee: $LFee <br>";
    echo "Library Fine: $LFine <br>";
    echo "Annual Magazine Fee: $AFee <br>";
    echo "Remark: $Remark";
?>