
<!DOCTYPE html>
<html>
<head>
	<title>Food Donation</title>
	<link rel="stylesheet" type="text/css" href="css/food_donation.css">
	 <link rel="shortcut icon" href="images/logo.png" type="image/png">
</head>
<body>
 <div class="topnav">
        <img src="images/header_logo.jpeg" height= "45px" width = "110px" align="left">
        <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add food</a>
        <div id="id01" class="modal">
  
  <form class="modal-content animate" method="post">
    <div class="imgcontainer">
    </div>
<div class="heading"><h2>List the items with their respective quantity</h2></div>
    <div class="container">
      <label for="uname"><b>Restaurant Name</b></label>
      <input type="text" name="uname" required>

 
        
     <button type="submit"><b>DONATE</b></button><button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><b>CANCEL</b></button>
     
    </div>
  </form>
</div>

    </div>
<script src="js/food_donation.js"></script>
</body>
</html>