<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DEV Solution</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
    <script type="text/javascript" src='js/angular.min.js'></script>
    <script src="js/jquery.min.js"></script>
    <script src='js/jquery.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="css/template2.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    xmp{
  font-family: Consolas, Menlo, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace, serif;
  margin-bottom: 10px;
  overflow: auto;
  width: auto;
  padding: 5px;
  background-color: #bcbcb8;
  width: 650px!ie7;
  padding-bottom: 20px!ie7;
  max-height: 600px;
}
    </style>
    
  </head>
  <body>
    <br>
    <br>
    <br>
    <div class='container'>
    <div class='navbar navbar-default navbar-fixed-top nav-top '>
        <div class='container'>
          <a href='index.php' class='navbar-brand' style="margin:0px;">Dev Solution</a>
          <button class='navbar-toggle' id='bar' data-toggle='collapse' data-target='.navHeaderCollapse'>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class='collapse navbar-collapse navHeaderCollapse'>
            <ul class='nav navbar-nav navbar-right'>
              <li><a href="home.php?p=welcome">Home</a></li>
              <li><a href="home.php?p=blog">Blog</a></li>
              <li><a data-scroll href="#contact">Me</a></li>
             

            </ul>
          </div>
        </div>
    </div>

     <?= $content;?>
    </div>



  <script src="js/wow.min.js"></script>
  <script>
  new WOW().init();
  </script>
  <script>
    function addCode(){
     
      document.getElementById("area").value += "<xmp> {Put your code here} </xmp>" ;
    }
  </script>
 
 
  </body>
    
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script src='js/jquery.js'></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</html>


