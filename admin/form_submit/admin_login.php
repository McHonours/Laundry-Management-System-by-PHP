
<?php 

  if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }

  include_once '../../inc/db_config.php';


  if (empty($_POST['email']) || empty($_POST['password'])) {
    header('Location: ../login.php');
  }else{
   # code...
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql_query = "SELECT * FROM `admin` WHERE email_id='".$email."' AND password='".$password."';";

      $result = DB_Query($sql_query);

      while ($row = mysqli_fetch_assoc($result)) {

          extract($row);

          $_SESSION['user_loged'] = true;
          $_SESSION["user_role"] = $role;
          $_SESSION["user_id"] = $id;
          $_SESSION['user_name'] = $admin_name;


          header('Location: ../../homepage.php');

          exit();

      }

      header('Location: ../login.php');


        
    

  }

?>