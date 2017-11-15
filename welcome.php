<?php

session_start();










if(isset($_POST['question'])){
    $datas=New Questions();
    $content=$_POST['question'];
    $id_user=$_SESSION['id'];
    $res=$datas->addQuestion($id_user,$content);
    if($res){
        ?>
        <div class="alert alert-success">Nice</div>
        <?php
    }
    
    
}




?>
<div class="contain">
    <div class="alert alert-info"><h2>Welcome <?=$_SESSION['first_name'];?></h2></div>

    <form class="ui form segment" action="#" method="POST">
        <div class="field">
            <label>ASK FOR HELP:</label>
            <a href="#" onClick="addCode();" ><i class="fa fa-file-code-o 3x"> <em>Add code</em></i></a>
            <textarea id="area" cols="4" name="question"></textarea>
            <br>
            <br>
            <button class="btn btn-md btn-info" type="submit">Submit</button>
        </div>
    </form>
    <br>
    <hr>
    <br>

    <?php
    $data=New Questions();
    $res=$data->getQuestions();
    if($res){
        foreach ($res as $result) {
            ?>
            <div class="result ui padded segment">
            <strong><h2>By <a href="#"><?=$result['first_name'];?></a></h2>
            <p><?=$result['content'];?></p>
            <p style="text-align:right; font-size:12px;"><?=$result['dateOfPost'];?></p>
            
            <a href="home.php?p=comment&amp;id=<?=$result['id'];?>"><button class="ui primary basic button">Answers <span class="badge badge-info">6</span></button></a>

          </div>
          <?php
        }
    }
?>
</div>

