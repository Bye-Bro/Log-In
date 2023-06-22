<?php
    $name = $_POST['name'];
    $Lastname = $_POST['Lastname'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Your_Payment_Method = $_POST['Your_Payment_Method'];
    $Visa = $_POST['Visa'];
    $Master_Card = $_POST['Master_Card'];
    $Maestro = $_POST['Maestro'];
    $Pay_Pal = $_POST['Pay_Pal'];

    //Database Connection
    $conn = new mysqli('localhost', 'root', '', 'test');
    if($conn-> connect_error){
        die('Coneterion Failed! : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("Insert into Registretion(name, Lastname, Email, Password, Your_Payment_Method, Visa, Maestro, Pay_Pal) values(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssi", $name, $Lastname, $Email, $Password, $Your_Payment_Method, $Visa, $Maestro, $Pay_Pal);
        $stmt->execute();
        echo "Registretion SUccessfully...";
        $stmt->close();
        $conn.close();
    }
?>