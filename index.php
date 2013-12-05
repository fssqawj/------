<html>
<head>
<title>lab</title>
<link href="tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="tablecloth/tablecloth.js"></script>
<style>

body{
	margin:0;
	padding:0;
	font:70% Arial, Helvetica, sans-serif; 
	color:#555;
	line-height:150%;
	text-align:left;
	font-size:20px;
}
a{
	text-decoration:none;
	color:#FFFFFF;
	font-size:20px;
}
a:hover{
	text-decoration:none;
	color:#999;
}
h1{
	font-size:140%;
	margin:0 20px;
	line-height:80px;	
}
h2{
	font-size:120%;
}
#container{
	margin:0 auto;
	width:680px;
	background:#fff;
	padding-bottom:20px;
}
#content{margin:0 20px;}
p.sig{	
	margin:0 auto;
	width:680px;
	padding:1em 0;
}
form{
	margin:1em 0;
	padding:.2em 20px;
	background:#eee;
}


.TableTitleBackGround { /*设置表格第一行的背景色*/
	background-color: #6699CC;
}

.BigTitle {
	font-family: courier new, sans-serif;
	font-size: 18px;
	color: #666666;
}

.TableTitle {
	color: #FFFFFF;
	font-weight: bold;
	font-family: courier new, sans-serif;
	font-size: 14px;
}


.div1{
border: 1px solid #CCC;
width:100%;
height:40px;
margin:auto;
display: table;   
*position: relative;   
overflow: hidden;  
}   
               
.div2 {
vertical-align: middle;
display: table-cell;
*position: absolute;
*top: 0%;
} 
         
.div3 {
*position: relative;
*top: 0%;
float:right;
padding-right:10px;
}  

</style>

</head>

<body>
<img src="bg3.jpg" width="50%" height="20%" >
<?php
	header("Content-Type: text/html; charset=utf-8");
	require("cal.php");
	$s1 = "第一个方程组";
	$s2 = "第二个方程组";
	$s3 = "第三个方程组";
	if(isset($_GET["solve_id"]))$solve_id = $_GET["solve_id"];
	else $solve_id = 1;
	echo "<table border = '1'>";
	echo "<tr>";
	echo "<th>";
	echo "<a href = 'index.php?solve_id=1' id = hover>".$s1."</a>";
	echo "</th>";
	echo "<th>";
	echo "<a href = 'index.php?solve_id=2'>".$s2."</a>";
	echo "</th>";
	echo "<th>";
	echo "<a href = 'index.php?solve_id=3'>".$s3."</a>";
	echo "</th>";
	echo "</tr>";
	echo "</table>";
	if($solve_id <= 3)echo "<img src='".$solve_id.".png' width='30%' height = '40%'>";
	echo "</br></br>";
	if($solve_id == 1){
		echo "高斯列主消元法的结果为：</br>";
		$res = gauss($A,10);
		//print_r($res);
		$eps = 1e-7;
		echo "<table border = 1>";
		for($i = 1;$i <= 7;$i += 3){
			printf("<tr><td width = 70>x".$i."</td><td>%.2lf</td><td width = 70>x".($i + 1)."</td><td>%.2lf</td><td width = 70>x".($i + 2)."</td><td>%.2lf</td></tr>",$res[$i],$res[$i + 1],$res[$i + 2]);
		}
		printf("<tr><td width = 70>x".$i."</td><td>%.2lf</td></tr>",$res[10]);
		echo "</table>";
		echo "LU消元法的结果为：</br>";
		$L = array(105);
		$U = array(105);
		$res = LU($la,$lb,10,$L,$U);
		//print_r($res);
		//print_r($L);
		//print_r($U);
		echo "Umatrix:</br>";
		//echo $U[1][1];
	   echo "<table border = '1'>";
	   echo "<tr><td></td>";
	   for($i = 1;$i <= 10;$i ++){
	       echo "<th>".$i."</th>";
	   }
	   echo "</tr>";
	   for($i = 1;$i <= 10;$i ++)
	   {
	   	  echo "<tr><th>".$i."</th>";
		  for($j = 1;$j <= 10;$j ++){
		     printf("<td> %.2lf </td>",$U[$i][$j]);
	   	  }
		  echo "</tr>";
	   }
	   echo "</table>";
	  // cout<<"Êä³ö¾ØÕóLµÄÖµ"<<endl;
	  
	   echo "Lmatrix:</br>";
	   echo "<table border = '1'>";
	   echo "<tr><td></td>";
	   for($i = 1;$i <= 10;$i ++){
	       echo "<th>".$i."</th>";
	   }
	   echo "</tr>";
	   for($i = 1;$i <= 10;$i ++)
	   {
	   	  echo "<tr><th>".$i."</th>";
		  for($j = 1;$j <= 10;$j ++){
		     printf("<td> %.2lf </td>",$L[$i][$j]);
	   	  }
		  echo "</tr>";
	   }
	   echo "</table>";
	}
	if($solve_id == 2){
		echo "高斯列主消元法的结果为：</br>";
		$res = gauss($B,8);
		//print_r($res);
		$eps = 1e-7;
		echo "<table border = 1>";
		for($i = 1;$i <= 5;$i += 4){
			printf("<tr><td width = 70>x".$i."</td><td>%.2lf</td><td width = 70>x".($i + 1)."</td><td>%.2lf</td><td width = 70>x".($i + 2)."</td><td>%.2lf</td><td width = 70>x".($i + 3)."</td><td>%.2lf</td></tr>",$res[$i],$res[$i + 1],$res[$i + 2],$res[$i + 3]);
		}
		//printf("<tr><td width = 70>x".$i."</td><td>%.2lf</td></tr>",$res[10]);
		echo "</table>";
		echo "LU消元法的结果为：</br>";
		$L = array(105);
		$U = array(105);
		$res = LU($a,$b,8,$L,$U);
		//print_r($res);
		//print_r($L);
		//print_r($U);
		echo "Umatrix:</br>";
		//echo $U[1][1];
	   echo "<table border = '1'>";
	   echo "<tr><td></td>";
	   for($i = 1;$i <= 8;$i ++){
	       echo "<th>".$i."</th>";
	   }
	   echo "</tr>";
	   for($i = 1;$i <= 8;$i ++)
	   {
	   	  echo "<tr><th>".$i."</th>";
		  for($j = 1;$j <= 8;$j ++){
		     printf("<td> %.2lf </td>",$U[$i][$j]);
	   	  }
		  echo "</tr>";
	   }
	   echo "</table>";
	  // cout<<"Êä³ö¾ØÕóLµÄÖµ"<<endl;
	  
	   echo "Lmatrix:</br>";
	   echo "<table border = '1'>";
	   echo "<tr><td></td>";
	   for($i = 1;$i <= 8;$i ++){
	       echo "<th>".$i."</th>";
	   }
	   echo "</tr>";
	   for($i = 1;$i <= 8;$i ++)
	   {
	   	  echo "<tr><th>".$i."</th>";
		  for($j = 1;$j <= 8;$j ++){
		     printf("<td> %.2lf </td>",$L[$i][$j]);
	   	  }
		  echo "</tr>";
	   }
	   echo "</table>";
	}
	if($solve_id == 3){
		echo "追赶消元法的结果为：</br>";
		$res = zhui($ta,$tb,$tc,$tf,10);
		//print_r($res);
		$eps = 1e-7;
		echo "<table border = 1>";
		for($i = 1;$i <= 6;$i += 5){
			printf("<tr><td width = 70>x".$i."</td><td>%.2lf</td><td width = 70>x".($i + 1)."</td><td>%.2lf</td><td width = 70>x".($i + 2)."</td><td>%.2lf</td><td width = 70>x".($i + 3)."</td><td>%.2lf</td><td width = 70>x".($i + 4)."</td><td>%.2lf</td></tr>",$res[$i],$res[$i + 1],$res[$i + 2],$res[$i + 3],$res[$i + 4]);
		}
		//printf("<tr><td width = 70>x".$i."</td><td>%.2lf</td></tr>",$res[10]);
		echo "</table>";
	}
?>
	

