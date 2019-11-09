<?php
$db_host= "localhost";
$db_user ="root";
$db_password="";
$db_name ="CSC217";

$connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if(!$connection){
    die("Could NotConnect to Our servers!!" .mysql_error($connection));
}

function add_patient(){
    global $connection;
    if(isset($_POST['submit'])){
    $id_no = $_POST['pid'];
    $lastname =$_POST['last-name'];
    $surname = $_POST['surname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $county = $_POST['county'];
    $query = "INSERT INTO patients(national_id,last_name,surname,dob,gender,county)
                VALUES('$id_no','$lastname','$surname','$dob','$gender','$county')";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die("Could not sent data" .mysqli_error($connection));
        header("Location: registration.php");
    }else{
        echo "Data entered succesfully";
        header("Location: index.php");
    }           
}
}
add_patient();

function show_patients(){
    global $connection;
    $query = "SELECT* FROM patients ORDER BY id DESC LIMIT 5 ";
    $query2 = "SELECT * FROM patients INNER JOIN kin ON patients.national_id = kin.patient_id";
    $result2 = mysqli_query($connection,$query2);
    $result = mysqli_query($connection,$query);
    $entryNo = 0;
    $check = mysqli_num_rows($result);
    if($check ==0){
        echo "<td>";
        echo "No data available!!!";
        echo "</td>";
    }

    while ($row = mysqli_fetch_assoc($result)){ 
        $entryNo +=1;    
        $patient_id = $row['national_id'];
        $lastname = $row['last_name'];
        $surname = $row['surname'];
        $dob = $row['dob'];
        $gender = $row['gender'];
        $county = $row['county'];
        $kin = "";
        while($row2 = mysqli_fetch_assoc($result2)){
            // print_r($row2);
            if ($row2['patient_id'] != $patient_id) continue;
            $kin = $row2['first_name'];
            
        }
        
        echo "<tr>";
        echo "<td>{$entryNo}</td>";
        echo  "<td>{$patient_id}</td>";
        echo "<td>{$lastname}</td>";
        echo "<td>{$surname}</td>";
        echo "<td>{$gender}</td>";
        echo "<td>{$county}</td>";
        echo "<td>{$dob}</td>";
        echo "<td>{$kin}</td>";
        echo "<tr>";
        
    }
}


function add_kin(){
    global $connection;
    if(isset($_POST['addkin'])){
        $id_no = $_POST['patientid'];
        $firstname  = $_POST['fnameKin'];
        $surname  = $_POST['surnameKin'];
        $relationship = $_POST['relationship'];

        
        $query = "INSERT INTO kin(patient_id,first_name,surname,relationship)
                VALUES('$id_no','$firstname','$surname','$relationship')";
        $result = mysqli_query($connection,$query);
        if(!$result){
        die("Could not sent data" .mysqli_error($connection));
        header("Location: kin.php");
        }else{
        echo "Data entered succesfully";
        header("Location: index.php");
        }  
    }
}
add_kin();