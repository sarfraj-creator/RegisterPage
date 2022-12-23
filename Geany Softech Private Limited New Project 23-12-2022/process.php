<?php
require_once('config.php');
?>
<?php
   if(isset($_POST)){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
     $sql = "INSERT INTO users (firstname, lastname, gender, email, password, phone) VALUES(?,?,?,?,?,?)";
     $stmtinsert = $db->prepare($sql);
     $result = $stmtinsert->execute([$firstname,$lastname,$gender,$email,$password,$phone]);
     if($result){
         echo 'successfully saved.';
     }else{
         echo 'There were error while saving the data.';
     }
 }else{
    echo'No data';
 }
?>