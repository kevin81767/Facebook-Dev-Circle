<?php
session_start();


if(isset($_SESSION['phone'])){
    $phone_number=$_SESSION['phone'];
}
else{
    $email=$_SESSION['email'];
}




if(isset($_POST['first_name']) AND isset($_POST['last_name'])){

    require 'class/Users.php';
    $datas=New Users();
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    if(isset($_POST['email'])){
        $email=$_POST['email'];
        $number=$_SESSION['phone'];
    }
    elseif(isset($_POST['number'])){
        $number=$_POST['number'];
        $email=$_SESSION['email'];
    }
    $res=$datas->insertuser($first_name,$last_name,$number,$email);
    if($res){
        $_SESSION['first_name']=$first_name;
        $_SESSION['last_name']=$last_name;
        $_SESSION['email']=$email;
        $_SESSION['phone']=$number;
        header("Location: home.php?p=welcome");
    }
    else{
        ?>
        <div class="alert alert-danger">ERROR!!!!!</div>
        <?php
    }
}


?>
<form class="ui form register" action="#" method="POST">
 <div class="field">
    <label>First Name</label>
    <input name="first_name" placeholder="First Name" type="text" required>
  </div>
  <div class="field">
    <label>Last Name</label>
    <input name="last_name" placeholder="Last Name" type="text" required>
  </div>
  <?php
  if(isset($email)){
    ?>
    <div class="field">
        <label>Number</label>
        <input name="number" placeholder="Phone number" type="number" required>
    </div>
    <div class="field">
        <label>Email</label>
        <div class="alert alert-info"><?=$email;?></div>
    </div>

  <?php
  }
  else
  {
    ?>
    <div class="field">
        <label>Number</label>
        <div class="alert alert-info"><?=$phone_number;?></div>
    </div>
    <div class="field">
        <label>Email</label>
        <input name="email" placeholder="Email" type="text" required>
    </div>
  <?php 
  }
  ?>
  
  <br>
  <input type="submit" class="btn btn-success btn-block" value="Complete registration">
</form>

<?php
