<?php
require_once "../pdo.php";
session_start();
?>
<html>
<head>
	<title> Welcome </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/fContawesome-all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//code.jquery.com/jquery.min.js"></script>
</head>
<style media="screen">
.split {
height: 100%;
margin-top: 200px;
position:absolute;
z-index: 1;
top: 0;
overflow-x: hidden;
padding-top: 20px;
background-color: #cce7ff;
}
.left {
  left: 0;
	width: 20%;
	background-color: #ccffeb;
	background-size: 300px;
}
.right {
	padding-left: 50px;
  right: 0;
	width: 80%;
}

.w3-lobster {
  font-family: "Comic Sans MS", cursive, sans-serif;
  margin-top: 0px;
}
.mySlides{
  width: 1100px;
  height: 550px;
}
#ff{
  display:block;
  margin-bottom: 20px;
  height: 550px;
}
.lef{
  margin-left: 10px;
  float: left;
  width: 170px;
  height: 1100px;
  display: inline-block;
  border: 1px dotted black;
}
.righ{
  float: right;
  margin-right:10px;
  width: 210px;
  height: 1100px;
  display: inline-block;
  border: 1px dotted black;
}
.flip-box {
  background-color: transparent;
  width: 300px;
  height: 500px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;

}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;

}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: #bbb;
  color: black;
}

.flip-box-back {
  background-color: #555;
  color: white;
  transform: rotateY(180deg);
}
.dig{
  margin-top: 50px;
  margin-left: 160px;
  position: relative;
  display:inline-block;
}
.home{
	height: 50px;
	width: 250px;
	padding-top: 15px;
	padding-left: 15px;
}
.home:hover{
	background-color: #f0f8ff;
	height: 50px;
	width: 250px;
}
.col1{
	background-color:#1a1aff;
	height: 70px;
	margin-bottom: 5px;
	padding-left: 40px;
	padding-top: 5px;
	font-family: "Comic Sans MS", cursive, sans-serif;
}
.col2{
	background-color:#ff8c1a;
	margin-top: 0px;
	height: 45px;
}
.colo{
	margin-top: 0px;
	height: 160px;
	margin-left: 150px;
}
.ic {
	margin-left: 200px;
}
tr:nth-child(even){
	background-color: #f2f2f2;
}
th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
tr:hover{
	background-color: #ddd;
}
#roubl{
	border-bottom-left-radius: 25px;
}
#routl{
	border-top-left-radius: 25px;
}
#roubr{
	border-bottom-right-radius: 25px;
}
#routr{
	border-top-right-radius: 25px;
}
</style>
<body>
	<?php
	if(! isset($_SESSION['user_id'])) { ?>
	  <br>
	  <h1 style="height: 150px" class="w3-margin-top w3-padding-32 w3-blue w3-lobster w3-center w3-container">
			KVR Bank
			<br>
			<div class="w3-margin-top w3-bottom-middle w3-large w3-bar w3-black">
			  <a href="login.php" class="w3-bar-item w3-button w3-mobile">Log In</a>
			  <a href="../Creditcard_Fraud_Detection/creditcard_index.php" class="w3-bar-item w3-button w3-mobile">Credit Card Fraud Detector</a>
			</div>
		</h1>
	    <div class="container">
	        <img  class="mySlides" src="../images/bank-1.jpg" alt="bank">
	        <img class="mySlides" src="../images/bank-2.jpg" >
	        <img class="mySlides" src="../images/bank-3.jpg" >
	        <img class="mySlides" src="../images/bank-6.jpg" >
	        <img class="mySlides" src="../images/bank-5.jpg" >
					<img class="mySlides" src="../images/bank-4.jpg" >

				

	      <script type="text/javascript">
	      var slideIndex = 0;
	      showSlides();
	      function showSlides() {
	        var i;
	        var slides = document.getElementsByClassName("mySlides");
	        for (i = 0; i < slides.length; i++) {
	          slides[i].style.display = "none";
	        }
	        slideIndex++;
	        if (slideIndex > slides.length) {slideIndex = 1}
	        slides[slideIndex-1].style.display = "block";
	        setTimeout(showSlides, 2000); // Change image every 2 seconds
	      }
	      </script>
<?php
}
else {
	function auto_abort($field){
	  $t = time();
	  $t0 = $_SESSION[$field];
	  $diff = $t - $t0;
	  if ($diff > 600 || !isset($t0))
	  {
	      return true;
	  }
	  else
	  {
	      $_SESSION[$field] = time();
	  }
	}
	if(auto_abort("t"))
	{
			$_SESSION['err'] = "Process Aborted due to inactivity";
			unset($_SESSION['user_time']);
			header("Location:logout.php");
			return;
	}
	echo '<img style="float:left;display:inline-block;height:150px;width:150px;border:1px solid black;margin-top:0px;" src="../images/banklogo.png" alt="KVR Logo" title="KVR">';
	echo "<h1 style='float:right;display:inline-block;margin-top:0px;margin-bottom:0px;'> Welcome ".$_SESSION['name'].",</h1><br>";
	echo "<br><p style='text-align:right;padding-right:0px;margin-top:10px;margin-bottom:0px;'>".$_SESSION['date']."</p>";
?>
<div class="colo">
	<div class="col1">
		<h2 style="color:yellow;">KVR Bank</h2>
	</div>
	<div class="col2">

	</div>
</div>
<div class="split left">
	<div class="home">
		<a href="index.php">Home</a>
	</div>
	<div class="home">
		<a href="acntdetails.php">Account Details</a>
	</div>
	<div class="home">
		<a href="transaction.php">Fund Transfer</a>
	</div>
	<div class="home">
		<a href="changepi.php">Change Pin</a>
	</div>
	<div class="home">
		<a href="crca.php">Apply Credit card</a>
	</div>
	<div class="home">
		<a href="account_statement.php">Account Statements</a>
	</div>
	<div class="home">
		<a href="changepa.php">Change Password</a>
	</div>
	<div class="home"  style="background-color:red">
		<a href="logout.php" style="color:black">Log-out</a>
	</div>
</div>
  <div class="split right">
		<table  class="table table-striped">
	        <tr>
	          <th id="routl"> A/C Holder Name </th>
	          <th> A/c No. </th>
	          <th> Branch Name </th>
	          <th id="routr"> Balance </th>
	        </tr>
	        <?php
	        $stmt = $pdo->prepare('SELECT users.user_id, users.name, acntdetails.Account_no, bankdetails.branchname, acntdetails.balance
	                from users, acntdetails, bankdetails where users.user_id = :uid AND users.user_id=acntdetails.user_id and bankdetails.branchcode=acntdetails.branchcode');
	        $stmt->execute(array(':uid' => $_SESSION['user_id']));
	        while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
	            echo "<tr><td id='roubl'>";
	            echo(htmlentities($row['name']));
	            echo("</td><td>");
	            echo("<a href='acntdetails.php'>" .htmlentities($row['Account_no']). "</a>" );
	            echo("</td><td>");
	            echo(htmlentities($row['branchname']));
	            echo("</td><td id='roubr'>");
	            echo(htmlentities($row['balance']));
	            //echo("</td><td>");
	            //echo('<a href="edit.php?autos_id='.$row['autos_id'].'">Edit</a> / ');
	            //echo('<a href="delete.php?autos_id='.$row['autos_id'].'">Delete</a>');
	            echo("</td></tr>\n");
	        }
	        ?>
	      </table>
  </div>
	<!-- Footer -->
		<div id="footer">
			<!-- Copyright -->
				<div class="copyright">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved</li><li>Developed and Maintained by : <a href="#">AKRV & Co IT Team</a></li>
					</ul>
				</div>

		</div>
<?php }
?>
</body>
</html>
