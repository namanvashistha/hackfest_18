
<?php
include "connection.php";
if(isset($_POST['update'])){
  $item_name=$_POST['item_name'];
  $item_quan=$_POST['item_quan'];
  $res=$_POST['res'];
  for($i=0;$i<sizeof($item_name);$i++){
    if(empty($item_name[$i]) || empty($item_quan[$i])) 
            continue;
    $q="INSERT INTO donate(`restaurant`,`item_name`,`item_quan`) VALUES ('$res','$item_name[$i]', '$item_quan[$i]');";
    mysqli_query($con,$q);
  } 
  header('location:food_donation.php');
}
?>

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
          <a href="index.php">Go back</a>
        <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add food</a>

        <div id="id01" class="modal">
  
  <div class="modal-content animate">
    <div class="imgcontainer">
    </div>
<div class="heading"><h2><center>List the items with their respective quantity</center></h2></div>
    <div class="container">
      <form method="post" >
        <label for="uname"><b>Restaurant Name</b></label>
      <input type="text" name="res" required>
       <div id="item_fileds">
           <div>
            <div class='label'>Item 1:</div>
            <div class="content">
                <span>item name:<input type="text" name="item_name[]" /></span>
                <span>quantity: <input type="text" name="item_quan[]" /></span>
            </div>
           </div>
        </div>
        <input type="button" id="more_fields" onclick="add_fields();" value="+"/><br>
        <button type="submit" name="update"><b>DONATE</b></button>
         <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><b>CANCEL</b></button>
    </form>
    
     
    </div>
  </div>
</div>

    </div>
    <?php
    $sql = "SELECT * FROM `donate` WHERE 1;";
    $query = mysqli_query($con,$sql);
    while($k=mysqli_fetch_array($query))
    {
      echo $k['restaurant']." ".$k['item_name']." ".$k['item_quan']." ".$k['instance']."<br>";
    }
  ?>
<script src="js/food_donation.js"></script>
</body>
</html>
<?php
  include 'scrap.php';
?>