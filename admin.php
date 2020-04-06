<html>
    <head>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<link href="css-call.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>


    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

body {
  background:#f2f2f2;
  font-family: Arial, Helvetica, sans-serif;
  margin: 0px;
  padding: 0px;
}

.toggle-ripple{ 
 border-radius: 50%;
  width: 100px;
  height: 100px;
border:3px solid #b30000;
}

.toggle-ripple:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  border:3px solid #00ff00;

}
.icon {
  padding: 15px;
  background: #b30000;
  color: white;
  min-width: 50px;
  text-align: center;
}
#login {
        margin-left: auto;
    margin-right: auto;
  width: 400px;
display: none;
  font-size: 16px;
}

/* Reset top and bottom margins from certain elements */
.login-header,
#login p {
  margin-top: 0;
  margin-bottom: 0;
  display: flex;
}

/* The triangle form is achieved by a CSS hack */
.login-triangle {
  width: 0;
  margin-right: auto;
  margin-left: auto;
  border: 12px solid transparent;
  border-bottom-color: #b30000;
}

.login-header {
  background: #b30000;
  padding: 20px;
  font-size: 1.4em;
  font-weight: normal;
  text-align: center;
  text-transform: uppercase;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  color: #fff;
}

.login-container {
  background: white;
  padding: 12px;
}

/* Every row inside .login-container is defined with p tags */
#login p {
  padding: 12px;
}

#login input {
  box-sizing: border-box;
  display: block;
  width: 100%;
  border-width: 1px;
  border-style: solid;
  padding: 16px;
  outline: 0;
  font-family: inherit;
  font-size: 0.95em;
}

#login input[type="text"],
#login input[type="password"] {
  background: #fff;
  border-color: #bbb;
  color: #555;
}

/* Text fields' focus effect */
#login input[type="text"]:focus,
#login input[type="password"]:focus {
  border-color: #888;
}

#login input[type="submit"] {
  background: #b30000;
  border-color: transparent;
  color: #fff;
  cursor: pointer;
}
#login input[type="submit"]:hover{
background:#4CAF50;
}


/* Buttons' focus effect */
#login input[type="submit"]:focus {
  border-color: #05a;
}
.message{
    color: red;
}

    </style>
<script>
$(document).ready(function(){
  $(".toggle-ripple").click(function(){
    $("#login").toggle(1000);
  });
});
</script>
    <body>
        <ul>
            <li><a href="userlogin.php">User</a></li>
              <li><a href="admin.php">Admin</a></li>
              <li><a href="index.php">Home</a></li>

  
</ul>
    <br><br><br><br> <center><h2>Welcome</h2><center>
               <img src="abc.jpg" class="toggle-ripple"></center>
        <div id="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Log in</h2>

  <form class="login-container" action="adminloginpage.php" method="POST">
      <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="message"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                        ?>
    <p><i class="fa fa-user icon"></i><input type="text" placeholder="Username" name="user"></p>
    <p><i class="fa fa-key icon"></i><input type="password" placeholder="Password" name="pass"></p>
    <p><input type="submit" id="button" value="Log in" name="submit"></p>
  </form>
</div>
     
    </body>
</html>