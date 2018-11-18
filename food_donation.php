<!DOCTYPE html>
<html>
<head>
	<title>Food Donation</title>
	<link rel="stylesheet" type="text/css" href="css/food_donation.css">
</head>
<body>
 <div class="topnav">
        <img src="images/header_logo.jpeg" height= "45px" width = "110px" align="left">
        <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add food</a>
        <div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Click for donation</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

    </div>
  </form>
</div>

    </div>
<script src="js/food_donation.js"></script>
</body>
</html>