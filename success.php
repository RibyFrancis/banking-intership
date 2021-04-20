<!DOCTYPE html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>success</title>
<style id="applicationStylesheet" type="text/css">
	.mediaViewInfo {
		--web-view-name: success;
		--web-view-id: success;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
		--web-is-overlay: true;
	}
	:root {
		--web-view-ids: success;
	}
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
	}

	body {
		background-image: url("img/view_editied.png");
	}

	#success {
		position: absolute;
		width: 1920px;
		height: 1080px;
		overflow: hidden;
		cursor: pointer;
		--web-view-name: success;
		--web-view-id: success;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
		--web-is-overlay: true;
	}
	@keyframes fadein {
	
		0% {
			opacity: 0;
		}
		100% {
			opacity: 1;
		}
	
	}

	#SUCCESS_l {
		left: 800px;
		top: 436px;
		position: absolute;
		overflow: visible;
		width: 455px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: bold;
		font-size: 78px;
		color: rgb(155, 180, 69);
		letter-spacing: 3.16px;
	}
	#Rectangle_10 {
		color: rgb(155, 180, 69);
		fill: rgb(155, 180, 69);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_10 {
		position: absolute;
		overflow: visible;
		width: 290px;
		height: 80px;
		left: 809px;
		top: 688px;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: home.html;
		cursor: pointer;
	}
	#HOME {
		left: 907px;
		top: 712px;
		position: absolute;
		overflow: visible;
		width: 95px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: lighter;
		font-size: 25px;
		color: rgba(0,0,0,1);
		letter-spacing: 3.16px;
	}
	a:link, a:visited {
		font-family: Segoe UI Light;
		font-style: normal;
		font-weight: normal;
		font-size: 19px;
		border-radius:30px;
		border: 1px solid black;
		background-color: white;
		color: black;
		padding: 25px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
	}

	a:hover, a:active {
		background-color: rgba(155,180,69,1);
	}
</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer";
//from the previous page

// Create connection
$conn= mysqli_connect($servername,$username,$password,$dbname);

$amt = mysqli_real_escape_string($conn, $_POST['fname']);
$accno = mysqli_real_escape_string($conn, $_POST['accno']);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "update details set details.balance=details.balance-".$amt." where details.accno=1;";
//echo $sql;
if ($conn->query($sql) === TRUE) {
	//echo "Record updated successfully";
  } else {
	echo "Error updating record: " . $conn->error;
  }
$sql = "insert into transfer (transfer.to,transfer.from,transfer.amount) values (".$accno.",1,".$amt.");";
//echo $sql;
if ($conn->query($sql) === TRUE) {
	//echo "New record created successfully";
  } else {
	echo "Error: " . $sql . "<br>" . $conn->error;
  }
/*
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo $row["balance"];
	}
} else { echo "not found"; }
*/

?>

<div id="success" onclick="application.goBack()">
	<svg class="Rectangle_8">
		<rect onclick="application.goToTargetView(event)" id="Rectangle_8" rx="0" ry="0" x="0" y="0" width="1920" height="1080">
		</rect>
	</svg>
	<svg class="Rectangle_7">
		<rect id="Rectangle_7" rx="44" ry="44" x="0" y="0" width="928" height="638">
		</rect>
	</svg>
	<div id="SUCCESS_l">
		<span>SUCCESS</span>
	</div>
	<a href="home.php" class="Rectangle_10">HOME</a>

	
</div>
</body>
</html>