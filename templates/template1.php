<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dev Solution</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/template1.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src='js/angular.min.js'></script>
    <script src="js/jquery.min.js"></script>
    <script src='js/jquery.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js"></script>
    <!-- HTTPS required. HTTP will give a 403 forbidden response -->
    <script src="https://sdk.accountkit.com/en_US/sdk.js"></script>

    
  <!--css section-->
  <style>
  .login{

    width:35%;
    margin:auto;
    /* background-color:gray; */
  }
  .register{
    width:40%;
    margin: auto;
    background-color:rgba(255,255,255,0.4);
  }

  body{
    background-image: url(images/developer.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: fixed;
  }

  
  </style>
    
  </head>
  <script>
  // initialize Account Kit with CSRF protection
  AccountKit_OnInteractive = function(){
    AccountKit.init(
      {
        appId:"{YOUR_APP_ID}", 
        state:"{{csrf}}", 
        version:"v1.0",
        fbAppEventsEnabled:true,
        // redirect:"{{REDIRECT_URL}}",
        debug:true
      }
    );
  };

  // login callback
  function loginCallback(response) {
    if (response.status === "PARTIALLY_AUTHENTICATED") {
      var code = response.code;
      var csrf = response.state;
      // Send code to server to exchange for access token
      document.getElementById("code").value = response.code;
		  document.getElementById("csrf").value = response.state;
		  document.getElementById("theForm").submit();
    }
    else if (response.status === "NOT_AUTHENTICATED") {
      // handle authentication failure
    }
    else if (response.status === "BAD_PARAMS") {
      // handle bad parameters
    }
  }

  // phone form submission handler
  function smsLogin() {
    // var countryCode = document.getElementById("country_code").value;
    // var phoneNumber = document.getElementById("phone_number").value;
    AccountKit.login(
      'PHONE', 
      {}, // will use default values if not specified
      loginCallback
    );
  }


  // email form submission handler
  function emailLogin() {
    // var emailAddress = document.getElementById("email").value;
    AccountKit.login(
      'EMAIL',
      {},
      loginCallback
    );
  }
</script>

  <body>
    <br>
    <br>
    <br>
    <div class='container'>
    
    </div>

     <?= $content;?>
    </div>



  <script src="js/wow.min.js"></script>
  <script>
    $("#log").hide();
    $("#login_button").click(function(){
      $("#log").show();
      $("#login_button").hide();
    })

    
  </script>
  <script>
  new WOW().init();
  </script>
  <script>
  $("#number_api").val("<?=$_SESSION['phone'];?>");
  </script>
 
 
  </body>
    
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script src='js/jquery.js'></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</html>


