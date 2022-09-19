
<!DOCTYPE html>
<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style3.css">
    
</head>
<style>
       body{
	
	background-image: url("lun1.jpg");
    height: auto;
    width: auto;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
input[type=email], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=email]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
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
  background-color: rgb(111, 245, 66);
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
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
</style>
<body>
<div class="login-section">
        <div class="form">
          
<form method="post" action="action_page.php" style="border:1px solid #ccc" >
  <div class="container">
    <h1>Sign Up</h1>
    
   

    <label for="email"><b>Email</b></label>
<br>

    <input type="email" placeholder="Enter Email" name="email" required>
<br>
    <label for="psw"><b>Password</b></label>
<br>

    <input type="password" placeholder="Enter Password" name="psw" required>
    <br>

<br>
    <label for="psw-repeat"><b>Repeat Password</b></label>
<br>

    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
<br>

    <label for="S_name"><b>Shop Name:</b></label>
<br>

    <input type="text" placeholder="Enter Shop" name="Shop" required>
    <br>

    <label for="Contact"><b>Contact</b></label>
<br>

    <input type="text" placeholder="Enter Contact" name="contact" required>
    <br>
    <label style="font-weight: bold;" for="location">Choose a Location</label>

<!-- <select name="Location" id="Location" required>
  <option value="Uttara">Uttara</option>
  <option value="Notun Bazar">Notun Bazar</option>
  <option value="mercedes">Rampurar</option>
  <option value="audi">Mirpur</option> -->
</select>
<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example name="name="Location" id="Location" required>
<!-- <option selected>Open this select menu</option> -->
  <option selected  value="Uttara">Uttara</option>
  <option value="Notun Bazar">Notun Bazar</option>
  <option value="Rampura">Rampura</option>
  <option value="Mirpur">Mirpur</option>
</select>




<br>
<label style="font-weight: bold;" for="Area">Choose a Area</label>
<!-- <select class="form-select" size="3" aria-label="size 3 select example" name="Area" id="Area" required>
<option selected>Open this select menu</option>
  <option  value="Uttara">Uttara</option>
  <option value="Notun Bazar">Notun Bazar</option>
  <option value="Rampura">Rampurar</option>
  <option value="Mirpur">Mirpur</option>
</select> -->
<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example name="name="Area" id="Area" required>
<!-- <option selected>Open this select menu</option> -->
  <option  selected value="Uttara">Uttara</option>
  <option value="Notun Bazar">Notun Bazar</option>
  <option value="Rampura">Rampura</option>
  <option value="Mirpur">Mirpur</option>
</select>
    <!-- <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p> -->

   
      <!-- <button   type="submit"    class="btns">Sign Up</button> -->
      <!-- <button  type="button" class="cancelbtn">Cancel</button> -->
  <button style="margin-top:50px;" type="submit" class="btns" name="btns" value="btns">Sign up</button>

   
  </div>
</form>
</div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> 
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
