<?php
session_start();
    include_once 'db_connect.php';
    $uid =  $_SESSION['uid'];
    // $sql3 = "SELECT u_name FROM login_info WHERE u_id = '$uid';";
    // $res = mysqli_query($conn, $sql3);
    // if (mysqli_num_rows($res) == 1) {
    //     $Name = $row['u_name'];
    // }
    $que2 = "SELECT c_name,loaction,c_contact FROM customer WHERE c_id=$uid;";
    $re = mysqli_query($conn, $que2);
    if (mysqli_num_rows($re) == 1) {
        $row = mysqli_fetch_array($re);
        $cname = $row['c_name'];
        $clocation = $row['loaction'];
        $contact = $row['c_contact'];
    }
    
       
    
    if(isset($_GET['submit'])){

        // $cloth = $_GET['cloths'];
        $dtype = $_GET['deltype'];
        echo $dtype;
        // $qnt = $_GET['quantity'];
        $area = $_GET['area'];
        echo $area;
        $sname = $_GET['shop'];
       
        $dlocation = $_GET['address'];
        echo $dlocation;
        $ba = $_GET['billAmount'];
        echo $ba;
        // $pt = $_GET['paytype'];

        $con = mysqli_connect('localhost', 'root', '', 'dhuye_daw');
        $que = "SELECT `s_id` FROM shop WHERE s_name = '$sname';";
       
        $val = mysqli_query($con, $que);
        while ($row = mysqli_fetch_assoc($val)) {
            $sid = $row['s_id'];}

      

            
        }
        
        $sql = "INSERT INTO order_data(s_id,bill,area,p_type,d_type,s_name,d_location,c_contact) VALUES ($sid,'$ba','$area','online','$dtype','$sname','$dlocation','$contact')";
        $result = $conn->query($sql);
        
        
                    if ($result === TRUE) {
                        header("Location: cart.php");
                    }
                    else{
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    }
    

       
    
