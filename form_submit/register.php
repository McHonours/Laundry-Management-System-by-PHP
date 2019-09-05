
<?php  
  include_once '../inc/db_config.php';


  if (empty($_POST['first_name']) || empty($_POST['last_name'])|| empty($_POST['address'])|| empty($_POST['mobile'])|| empty($_POST['email'])|| empty($_POST['passwords']) || empty($_POST['confirm_passwords'])) {
    header('Location: ../register.php');
   	//echo "string";
  }else{
   # code...
    if ($_POST['Password']==$_POST['confirm_passwords']) {
      # code...
      $join_date  = "01/01/2018";
      $first_name = $_POST['first_name'];
      $last_name  = $_POST['last_name'];
      $address    = $_POST['address'];
      $mobile     = $_POST['mobile'];
      $email      = $_POST['email'];
      $passwords  = $_POST['passwords'];
      $status     = "enable";
      $last_login = "";

      $sql_query="INSERT INTO `customers`(`join_date`, `first_name`, `last_name`, `address`, `email_id`, `mobile`, `status`, `password`, `role`) VALUES ('".$join_date."','".$first_name."','".$last_name."','".$address."','".$email."','".$mobile."','".$status."','".$passwords."', 2);";
      echo $sql_query;

      DB_Query($sql_query);
      header('Location: ../login.php');
    }else{
      header('Location: ../register.php');
    }

    

  }

?>