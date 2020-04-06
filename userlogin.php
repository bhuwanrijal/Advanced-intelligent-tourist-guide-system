<html>
    <head>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css-call.css">
        <title></title>
    </head>
<style>
body {font-family: Arial, Helvetica, sans-serif;background: -webkit-linear-gradient(bottom, #0250c5, #d43f8d);}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  outline: none;
}
.icon {
  padding: 10px;
  background: #b30000;
  color: white;
  min-width: 50px;
  text-align: center;
  margin-top: 8px;
  height: 39px;
}
.abc{
    display: flex;
}
/* Set a style for all buttons */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.btn:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color:#b30000;
  color: white;
  cursor: pointer;
}
.cancelbtn:hover{
    opacity: 0.7;
}
/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}
a {
   color: white;
    text-decoration: none;
}
a:hover 
{
     opacity: 0.5;
}
span.psw {
  float: right;
  background-color: green;
  color:white;
  padding:8px;
  text-align: center;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%;
  border-radius: 5px;/* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
.log{
    background-color:white;
    border: none;
    outline: none;
  color:#4CAF50;
  padding: 15px 82px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  border-radius:5px; 
}
.log:hover{
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}
.message{
    color:red;
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
     color: white;
  }
}
</style>
        
    <body>

            <ul>
            <li><a href="userlogin.php">User</a></li>
              <li><a href="admin.php">Admin</a></li>
              <li><a href="index.php">Home</a></li>

  
</ul>
            <br><br><br><br><center><h2>User Login System</h2>

                <button onclick="document.getElementById('id01').style.display='block'" class="log" style="width:auto;">Login</button></center>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="userconnection.php" method="POST">
       
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="https://cdn1.iconfinder.com/data/icons/avatars-1-5/136/87-512.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
       <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="message"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                        ?><br>
      <label for="uname"><b>Username</b></label>
       <div class="abc"><i class="fa fa-user icon"></i><input type="text" placeholder="Enter Username" name="user" required>
        </div>
      <label for="psw"><b>Password</b></label>
     <div class="abc"> <i class="fa fa-key icon"></i><input type="password" placeholder="Enter Password" name="pass" >
     </div>
      <input type="submit" value="Submit" class="btn" name="submit">
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"> <a href="userregister.php">Register</a></span>
    </div>
  </form>
</div>
   
        
        <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
        
    </body>
</html>



