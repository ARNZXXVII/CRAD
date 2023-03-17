<?php

if(isset($_GET['username']) && isset($_GET['code']) && isset($_GET['role'])){

   $usernameLogin = $_GET['username'];
   $code = $_GET['code'];
   $role = $_GET['role'];

   $serverName = "localhost";
   $username = "bcpsms2_root";
   $password = "zc5D@@00V@B6ySMi";
   $database = "mana_mis_database";

   $mysqli = mysqli_connect($serverName, $username, $password, $database);

   if (!$mysqli) {
   die("Connection failed: " . mysqli_connect_error());
   }

   $query = "SELECT 2fa FROM users WHERE username = '$usernameLogin'";
   $stmt = $mysqli->prepare($query);
   $stmt->execute();
   $result = $stmt->get_result();
   $dbCode = $result->fetch_assoc();

   if(isset($dbCode)){
   if($code == $dbCode['2fa']){

      $_SESSION['username'] = $usernameLogin;
      $_SESSION['role'] = $role;

            if($role == "sas-admin")
            {
               header('Location: index.php');
            }
            // else if($role == "student")
            // {
            //    header('Location: ../user/index.php');
            // }

       }
   }
   else{

      header('Location: https://management-information-systems.bcp-sms2.com/');

   }

    
}
else{

   header('Location: https://management-information-systems.bcp-sms2.com/');

}

?>