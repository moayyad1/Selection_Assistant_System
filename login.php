<?php session_start();  ?>
<html>
<head>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,100,500);
body,
html {
  margin: 0;
  height: 90%;
}

input {
  border-radius: 5%;
}

button:focus {
  outline: none;
}

::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.65);
}

::-webkit-input-placeholder .input-line:focus +::input-placeholder {
  color: #fff;
}

.highlight {
  color: rgba(255, 255, 255, 0.8);
  font-weight: 400;
  cursor: pointer;
  transition: color .2s ease;
}

.highlight:hover {
  color: #fff;
  transition: color .2s ease;
}

.spacing {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  height: 120px;
  font-weight: 300;
  text-align: center;
  margin-top: 10px;
  color: rgba(255, 255, 255, 0.65)
}

.input-line:focus {
  outline: none;
  border-color: #fff;
  -webkit-transition: all .2s ease;
  transition: all .2s ease;
}

.ghost-round {
  cursor: pointer;
  background: none;
  border: 1px solid rgba(255, 255, 255, 0.65);
  border-radius: 25px;
  color: rgba(255, 255, 255, 0.65);
  -webkit-align-self: flex-end;
  -ms-flex-item-align: end;
  align-self: flex-end;
  font-size: 19px;
  font-size: 1.2rem;
  font-family: roboto;
  font-weight: 300;
  line-height: 2.5em;
  margin-top: auto;
  margin-bottom: 25px;
  -webkit-transition: all .2s ease;
  transition: all .2s ease;
}

.ghost-round:hover {
  background: rgba(255, 255, 255, 0.15);
  color: #fff;
  -webkit-transition: all .2s ease;
  transition: all .2s ease;
}

.input-line {
  background: none;
  margin-bottom: 10px;
  line-height: 2.4em;
  color: #fff;
  font-family: roboto;
  font-weight: 300;
  letter-spacing: 0px;
  letter-spacing: 0.02rem;
  font-size: 19px;
  font-size: 1.2rem;
  border-bottom: 1px solid rgba(255, 255, 255, 0.65);
  -webkit-transition: all .2s ease;
  transition: all .2s ease;
}

.full-width {
  width: 100%;
}

.input-fields {
  margin-top: 25px;
}

.container {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  background: #eee;
  height: 100%;
}

.content {
  padding-left: 25px;
  padding-right: 25px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-flow: column;
  -ms-flex-flow: column;
  flex-flow: column;
  z-index: 5;
}

.welcome {
  font-weight: 200;
  margin-top: 75px;
  text-align: center;
  font-size: 40px;
  font-size: 2.5rem;
  letter-spacing: 0px;
  letter-spacing: 0.05rem;
}

.subtitle {
  text-align: center;
  line-height: 1em;
  font-weight: 100;
  letter-spacing: 0px;
  letter-spacing: 0.02rem;
}

.menu {
  background: rgba(0, 0, 0, 0.2);
  width: 100%;
  height: 50px;
}

.window {
  z-index: 100;
  color: #fff;
  font-family: roboto;
  position: relative;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-flow: column;
  -ms-flex-flow: column;
  flex-flow: column;
  box-shadow: 0px 15px 50px 10px rgba(0, 0, 0, 0.2);
  box-sizing: border-box;
  height: 560px;
  width: 360px;
  background: #fff;
  background: url('https://pexels.imgix.net/photos/27718/pexels-photo-27718.jpg?fit=crop&w=1280&h=823') top left no-repeat;
}

.overlay {
  background: -webkit-linear-gradient(#8CA6DB, #B993D6);
  background: linear-gradient(#8CA6DB, #B993D6);
  opacity: 0.85;
  filter: alpha(opacity=85);
  height: 560px;
  position: absolute;
  width: 360px;
  z-index: 1;
}

.bold-line {
  background: #e7e7e7;
  position: absolute;
  top: 0px;
  bottom: 0px;
  margin: auto;
  width: 100%;
  height: 360px;
  z-index: 1;
  opacity:0.1;
  background-size:cover;
}
.backk {
  background-image: url("https://images.unsplash.com/photo-1462331940025-496dfbfc7564?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=827&q=80");
  height: 100%;
}

@media (max-width: 500px) {
  .window {
    width: 100%;
    height: 100%;
  }
  .overlay {
    width: 100%;
    height: 100%;
  }
}
</style>
</head>
<body class="backk" >
<div class='bold-line'></div>
<center><div>
  <div class='window'>
    <div class='overlay'></div>
    <div class='content'>
      <?php
       if(isset($_GET["error"])){
       if ($_GET["error"] == "emptyinput") {
       echo "<p style='color:red;font-size:20px;text-align:center'>Sorry,Fill In All Fields!</p>";
       }
       else if ($_GET["error"] == "wronglogin") {
         echo "<p style='color:red;font-size:20px;text-align:center'>Sorry,Incorrect Login informations!</p>";
       }
       }
        ?>
      <div class='welcome'>Hello There!</div>
      <div style="font-size:25px" >Before using our services you need to Log in.</div>
      <div class='input-fields'>
        <form action="includes/login.inc.php" method="post">
        <input type='name' name="uid" placeholder='UserName' class='input-line full-width'></input>
        <input type='password' name="pwd" placeholder='Password' class='input-line full-width'></input>
      </div>
      <div><button type="submit" name="submit" class='ghost-round full-width'>Log In</button></div>
      </form>
      <center><div class='subtitle'>Don't have an account ? <a style="color:black" href="signup.php">Sign Up now</a></div><br /><br /><br /><br /><br /><br /><br /><br />
      <a href="http://localhost/Selection_Assistant%20_System/index.php"><button style="font-size:20px" />Back To Home Page</button></a>
    </div>

  </div>

</div>
</body>
</html><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />