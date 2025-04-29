<!Doctype html>
<html>
  <head>
    <style>
@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: 'Montserrat';
}

*:after {
  content: '';
  clear: both;
  display: table;
}

body {
  /*background-image:url('img/about.jpg');*/
  font-size: 14px;
}

form {
  position: relative;
  margin: auto;
  margin-top: 5em;
  width: 400px;
  background:#684242;
  border:black;
  transition: all 300ms ease-in;
  box-shadow: 0px 50px 70px -40px rgba(0,0,0,.8);
  overflow: hidden;
}

form label.tab_label {
  float: left;
  color: black;
  font-size: 1.8em;
  text-transform: uppercase;
  text-align: center;
  line-height: 2.6em;
  width: 50%;
  transition: all 300ms ease-in;
  cursor: pointer;
}

form label.tab_label:hover,
form input[type="radio"]:checked + label.tab_label {
  background-color: black;
  color: #fff;
}

form input[id="login"]:checked ~ figure.reveal_login,
form input[id="signup"]:checked ~ figure.reveal_signin{
  background-color:white;
  color:black;
  height: initial;
  padding: 3em;
  z-index: 10000000;
}

form input[type="radio"] {
  display: none;
}

figure {
  float: left;
  width: 100%;
  height: 0px;
  transition: all 500ms cubic-bezier(0, 0, 0.4, 1.61);
}

figure p {
  color: #fff;
}

figure input {
  float: left;
  margin-top: 1em;
}

figure input:focus {
  outline: 0;
}

figure input::-webkit-input-placeholder {
  color: rgba(255,163,105,.7);
}

figure input[type="text"],
figure input[type="password"]


{
  width: 100%;
  padding: .5em;
  border: 3px solid black;
  color: black;
}

figure input[type="email"],
figure input[type="number"]


{
  width: 100%;
  padding: .5em;
  border: 3px solid black;
  color: black;
}

figure select


{
  width: 100%;
  padding: .5em;
  border: 3px solid black;
  color: black; 
}

figure input[type="submit"] {
  float: right;
  background-color:black;
  border: 3px solid #fff;
  width: 50%;
  text-transform: uppercase;
  color: white;
  font-size: 1.2em;
  line-height: 1.6em;
  transition: all 300ms ease-in;
}

figure input[type="submit"]:hover {
  background: #fff;
  color: black;
}

figure input[type="checkbox"] {
  margin-top: 1.2em;
}

figure label.content_label {
  float: left;
  font-size: .7em;
  line-height: 2em;
  margin-top: 1.2em;
  margin-left: .4em;
  color: #fff;
}

.icon {
  position: absolute;
  left: 10px;
  top: 1.4em;
  color: rgba(255,163,105,.7);
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

::placeholder {
  color: black !important;
  opacity: 1 !important; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: black !important;
}

::-ms-input-placeholder { /* Microsoft Edge */
 color: black !important;
}
</style>

</head>
<script>
  function valid(){
    var a = document.getElementById('password').value;
    var b = document.getElementById('cpassword').value;

    if(a != b){

      alert("password doesn't match");
      return false;
    }
    
  }
  </script>

<body>
<video width="100%"   autoplay muted loop id="myVideo">
  <source src="vido/6767.mp4" type="video/mp4">
  <!-- <source src="vido/pet.ogg" type="video/ogg"> -->

</video>
</div>


<form action="controller/logreg.php"  method="POST" autocomplete="off" onsubmit="return valid()">  
  <input id="login" type="radio" name="tab"/>
  <label class="tab_label" for="login" style="background-color:black;color:white">log in</label>
  <input id="signup" type="radio" name="tab" />
  <label class="tab_label" for="signup" style="background-color:black;color:white">sign up</label>  
  <figure class="reveal_login">
    <p style="color:black">Please log in with your account.</p>
    <input type="email" name="email" placeholder="email" />      
    <input type="password" name="password" placeholder="password" /> 
    
    <a href="forget.php">
    <label class="content_label" for="logged_in" style="color:black">Forgot Password?</label></a>
    <input type="submit" name="login" value="Log in"/>
  </figure>  

  <figure class="reveal_signin">
    <p style="color:black">You can register a new account.</p>
    <input type="text" name="name" placeholder="name" pattern="[a-zA-Z\s]+" title="Please Enter Valid Username" >      
    <input type="email" name="email2" placeholder="email" >      
    <input type="password" name="password2" placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Please enter valid password" id="password"  >
    <input type="password" name="cpassord"placeholder="confirm password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Please enter valid password" id="cpassword"  >
    <input type="text" name="phone" pattern="[0-9]{10}" maxlength="10" title="Please Enter Valid Phone Number" placeholder="phone number"  > 
    <input type="text"name="address" placeholder="address"  > 
   
<select name="gender" type="text" style="height:35px !important; margin-top:10px;">
  <option>Select your gender</option>
  <option value="male">Male</option>
  <option value="female">Female</option>

</select>
     

    <input type="submit" name="register" value="Sign up">
  </figure>
</form>
</body>
</html>