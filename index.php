    <head>
        <link rel="icon" type="image/x-icon"href="favicon.ico"/><title>Gadeo</title>
        <link rel="stylesheet"href="page_loader.css">
        
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
            
            <link rel="stylesheet" href="css/all.min.css"/>
       <link rel="stylesheet" href="style.css"/>
            <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] , input[type=date], select{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  
    color:darkgreen;
                           border-radius: 25px;
  border: 2px solid aqua;
  padding: 14px 20px;
  margin: 8px 0;
 
  cursor: pointer;
  width: auto;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
                #top
{display:none;

}
input[type=text], input[type=password], input[type=number] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus , input[type=submit]:focus{
  background-color: #ddd;
  
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
input[type=submit] {
  
    color:darkgreen;
                           border-radius: 25px;
  border: 2px solid aqua;
  padding: 14px 20px;
  margin: 8px 0;
 
  cursor: pointer;
  width: auto;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 400px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
    .imo{
        display: none;
    }
    #top{
        display: block;
    }
    input[type=text], input[type=password], input[type=number]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
}
</style>
           
        </head>

<div id="top"class="col-xs-12 col-sm-12 col-md-12 col-lg-12"style="padding:10px;">
           <div class="panel-body"style="height:400px;width:100%;border-radius: 25px;
  border: 2px solid aqua;"> 
            <img style="height:100%;width:100%;"src="ga-main3.png"style="float:center;"/><br><div class="center"></div>
            
            </div>
        </div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"style="padding:10px;height:auto;">
                <div id="login"class="panel-body"style="height:400px;width:100%;border-radius: 25px;
  border: 2px solid aqua;">
    <div  class="imo ">              
<img style="height:100%;width:50%;float:left;"src="ga-main3.png"style="float:center;"/><br><div style="float:left;position: relative;"></div></div><br> 
       <center><p style="color:darkgreen;">Login</p></center>
       <div id="first_s_ajax"     >            
<form id="first_step" method="post">
  

  <div class="container">
    <label for="email"><b></b></label>
    <input type="text" placeholder="enter email  " name="email" >
<br>
    <label for="psw"><b></b></label>
    <input type="password" placeholder="enter password" name="psw" >
<br>
    <input type="submit"value="next step "/input>
      <br>
    <label>
      <input type="checkbox"  name="remember"> remember me
    </label><br>
  <a href="forget_pass.php" > forgot password ? </a>

  
    <br>
    Don't have an account ? <a href="#signup">signup now</a>
  </div>
  
  
</form>
<br>

        </div>  
      </div>  </div>
        
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"style="padding:10px;">
                <div id="signup"class="panel-body"style="height:auto;width:100%;border-radius: 25px;
  border: 2px solid aqua;">
<br>
  <center><p style="color:darkgreen;">Signup </p></center>
  
<form  class ="form" id="signup" method ="POST">
  <div class="container">
    
    <hr>
    <label for="fname"><b>Username</b></label>
    <input type="text" placeholder="اusername" name="username"oninput="maxLengthCheck(this)"maxlength = "37" > 
     
      <br>
      <label for="birthday"><b>Birthday</b></label>
  <input type="date" name="birthday"><br>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder=" enter email " name="email" >

<br>
    <label for="psw"><b>Password </b></label>
    <input type="password" placeholder="password  " name="psw" >
<br>
    <label for="psw-repeat"><b>Reassword</b></label>
    <input type="password" placeholder="repeat password  " name="psw-repeat" >
<br>
    <label>
    <label>
    <select name="gender">Gender
   <option value="male">male</option>
   <option value="female">female</option>
    </select><br>
    </label>
        


    <div class="clearfix">
      
      <button type="submit" class="signupbtn">Signup</button><br>
        <label>
       By opening an account, you agree  with our <a href="privacy policy.php">Privacy Policy</a> and <a href="terms of use.php">terms of use </a>.
    </label><br>
       <label>
        You have an account ?<a href="#login">login  </a>.
    </label> 
    </div>
  </div>
</form>

 <div id="ajax"></div>
</div>
</div>
    
