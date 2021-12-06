<?php
 if(isset($_POST['orderSubmit'])){

    require 'dbh.inc.php';

    foreach($_POST['OL_I_ID'] as $row => $value){

        if($_POST['OL_I_ID'][$row] == null){
            exit();
        }
        $warehouse=$_POST['warehouseNumber'];
        $district=$_POST['districtNumber'];
        $customer=$_POST['customerNumber'];                   
        $item=$_POST['OL_I_ID'][$row];
        $supply=$_POST['OL_Supply_W_ID'][$row];
        $quanity=$_POST['OL_Quanity'][$row];


        $sql = "INSERT INTO `test` (`warehouseNumber`, `districtNumber`, `customerNumber`, `OL_I_ID`, `OL_Supply_W_ID`, `OL_Quanity`) VALUES ('".$warehouse."','".$district."','".$customer."','".$item."','".$supply."','".$quanity."');";

        if (mysqli_query($conn, $sql)) {
                $msg = "Order was successful!";
                $redirecturl = "../NewOrderResult.php?submit=".$msg;
                header("Location: $redirecturl");
                echo "New record created successfully";
        } else {
                $msg = "Order was not successful!";
                $redirecturl = "../NewOrderResult.php?submit=".$msg;
                header("Location: $redirecturl");
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    
}   
?>