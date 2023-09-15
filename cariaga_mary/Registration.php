<?php
    include("DB_config.php");
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student</title>
</head>
<body>
<form method="post">
        <label>Last Name</label><br>
        <input type="text" id="Last_Name" name="Last_Name">

        <label>First Name</label><br>
        <input type="text" id="First_Name" name="First_Name">

        <label>Middle Name</label><br>
        <input type="text" id="Middle_Name" name="Middle_Name">

        <label>Extension Name</label><br>
        <input type="text" id="Extension Name" name="extension_Name">

        <label>Sex</label><br>
        <select name="sex" id="sex">
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select> 

        <label>Birth_Date</label><br>
        <input type="date" id="birth_Date" name="birth_Date">

        <label>Age</label><br>
        <input type="number" id="age" name="age">

        <label>Home Address</label><br>
        <input type="text" id="home_Address" name="home_Address">

        <label>Civil Status</label><br>
        <select name="civil_Status" id="civil_Status">
            <option value="Single">Single</option>
            <option value="Maried">Maried</option>
            <option value="Widowed/Widower">Widowed/Widower</option>
        </select> 

        <label>Nationality</label><br>
        <input type="text" id="nationality" name="nationality">

        <label>Religion</label><br>
        <input type="text" id="religion" name="religion">

        <label>Boarding Address</label><br>
        <input type="text" id="boarding_Address" name="boarding_Address">

        <label>Contact Number</label><br>
        <input type="text" id="contact_Number" name="contact_Number">

        <label>Email Address</label><br>
        <input type="email" id="email_Address" name="email_Address">
<button type="submit"  name="add_Student">ADD STUDENT</button>
</form>

<?php
    if (array_key_exists('add_Student', $_POST))
    {
        $last_Name= $_POST ['Last_Name'];
        $First_Name= $_POST ['First_Name'];
        $Middle_Name= $_POST ['Middle_Name'];
        $Extension_Name= $_POST ['extension_Name'];
        $Sex= $_POST ['sex'];
        $Birth_Date= $_POST ['birth_Date'];
        $Age=$_POST ['age'];
        $Home_Address= $_POST ['home_Address'];
        $Civil_Status= $_POST ['civil_Status'];
        $Nationality= $_POST ['nationality'];
        $Religion= $_POST ['religion'];
        $Boarding_Address= $_POST ['boarding_Address'];
        $Contact_Number= $_POST ['contact_Number'];
        $Email_Address= $_POST ['email_Address'];


        echo $last_Name;
        echo $First_Name;
        echo $Middle_Name;
        echo $Extension_Name;
        echo $Sex;
        echo $Birth_Date;
        echo $Age;
        echo $Home_Address;
        echo $Civil_Status;
        echo $Nationality;
        echo $Religion;
        echo $Boarding_Address;
        echo $Contact_Number;
        echo $Email_Address;
        $insertUserAccountQuery = "INSERT INTO `human` (Last_Name,`First_Name`, `Middle_Name`, `Extension_Name`, `Sex`,`Birth_date`,`Age`,`Home_Address`, Civil_Status, Religion,`Nationality`, `Boarding_Address`,`Contact_Number`, `Email_Address`)
        VALUES('$last_Name', '$First_Name', '$Middle_Name', '$Extension_Name', '$Sex', '$Birth_Date','$Age','$Home_Address', '$Civil_Status', '$Religion', '$Nationality', '$Boarding_Address', '$Contact_Number', '$Email_Address');";
        
        echo "HIIIIIIIIIIIIIIIIII";
        $db_connect->query($insertUserAccountQuery);
        echo "HELLLLOOOOOOOOOOOO";
    }
   
?>


</body>
</html>