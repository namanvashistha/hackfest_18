<?php
	include 'connection.php';
	$res = "food";
	date_default_timezone_set('Asia/Kolkata');
	$a=date("h");
	$a=(int)$a;
	$part;
	if($a>7 && $a<15)
	{
		$part=1;
	}
	else if($a>=15 && $a<20)
	{
		$part=2;
	}
	else if($a>=19 && $a<22)
		$part=3;
	else
		$part=4;
	$part=$part+2;
	$mArray= array();
	$max=0;
	$sub;
	$count=0;
	$sql = "SELECT distinct(item_name) FROM `recommend` WHERE res_name='$res';";
	$ym=0;
	$xm=0;
	$query=mysqli_query($con,$sql);
	while($k = mysqli_fetch_array($query))
	{
		$d=$k['item_name'];
		$q="SELECT * FROM `recommend` WHERE res_name='$res' and item_name='$d';";
		$que = mysqli_query($con,$q);
		while($g = mysqli_fetch_array($que))
		{
			$count++;
			$s=(int)$g[$part];
			$ym+=$s;
			$xm+=$count;
			//echo $count;
		}
		$num=0;
		$ym=$ym/$count;
		$xm=$xm/$count;
		//echo $ym;
			$cou=0;
		$den1=0;
		$den2=0;
		$qw="SELECT * FROM `recommend` WHERE res_name='$res' and item_name='$d';";
		$quw = mysqli_query($con,$qw);
		$a=0;
		while($y = mysqli_fetch_array($quw))
		{	
			$a=$a+1;
			//echo $a;
			
			$v = (int)$y[$part];
			$num+=($cou-$xm)*($v-$ym);
			
			$den1+=pow(($cou-$xm),2);
			
			$den2+=pow(($v-$ym),2);
			$cou++;
			//echo $cou;
		}
		$sy= $den2/($count-1);
		$sx=$den1/($count-1);

		$dem = pow(($den1*$den2),0.5);
		$r=1;
		if($dem!=0)
		$r = $num/$dem;
		$sy=pow($sy,0.5);
		$sx=pow($sx,0.5);
		$b=$r*($sy/$sx);
		$a = $ym-$b*$xm;
		$pre = $a+$b*$count;
		echo (int)$pre."<br>";
	}
  ?>