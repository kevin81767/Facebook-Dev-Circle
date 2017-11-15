<?php
session_start();


if(isset($_GET['id'])){

    $id=$_GET['id'];

    $data=New Questions();
    $res=$data->getQuestionBy($id);
    



    //Commnent backEnd
    if(isset($_POST['comment'])){
        $datas=New Comment();
        $id_user=$_SESSION['id'];
        $id_question=$id;
        $cont=$_POST['comment'];
        $com=$datas->addComment($id_question,$id_user,$cont);
        if($com){

            echo "good";
        }
    }

    ?>
    <div class="ui piled segment">

        <h1 class="ui header"><?=$res[0]->first_name;?></h1>
        <p style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:15px;"><?=$res[0]->content;?></p>
        <p style="text-align:right; font-size:12px;"><?=$res[0]->dateOfPost;?></p>
    </div>

    <div class="comment-section" style="width:45%;">
        <form class="ui form segment " action="#" method="POST">
            <div class="field">
                <a href="#" onClick="addCode();" ><i class="fa fa-file-code-o 3x"> <em>Add code</em></i></a>
                <textarea id="area" cols="4" name="comment"></textarea>
                <br>
                <br>
                <button class="btn btn-md btn-info" type="submit">Comment</button>
            </div>
        </form>
        <br>
        <?php
        $dt=New Comment();
        $r=$dt->getComment($id);
        if($r){
    
                foreach ($r as $comm) {
                    ?>
                    <div class="ui segment">
                        <h3><?=$comm['first_name'];?></h3>
                        <p><?=$comm['cont'];?></p>
                    </div>
                    <?php
                }
            
        }
        ?>
    </div>

   
<?php
}