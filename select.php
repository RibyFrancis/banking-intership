<!DOCTYPE html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>select</title>
<style id="applicationStylesheet" type="text/css">
	.mediaViewInfo {
		--web-view-name: select;
		--web-view-id: select;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
		--web-is-overlay: true;
	}
	:root {
		--web-view-ids: select;
	}
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
	}
	#select {
		position: absolute;
		width: 1920px;
		height: 1080px;
		overflow: hidden;
		cursor: pointer;
		--web-view-name: select;
		--web-view-id: select;
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
	#Rectangle_8 {
		filter: blur(15px);
		fill: rgba(255,255,255,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_8 {
		position: absolute;
		overflow: visible;
		width: 1920px;
		height: 1080px;
		left: 0px;
		top: 0px;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: home.html;
		cursor: pointer;
	}
	#Rectangle_7 {
		fill: rgba(255,255,255,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_7 {
		position: absolute;
		overflow: visible;
		width: 928px;
		height: 638px;
		left: 466px;
		top: 207px;
	}
	#SELECT_AND_VIEW_CUSTOMER {
		left: 720px;
		top: 253px;
		position: absolute;
		overflow: visible;
		width: 514px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: lighter;
		font-size: 25px;
		color: rgba(0,0,0,1);
		letter-spacing: 3.16px;
	}
	#Rectangle_9 {
		fill: rgba(255,255,255,1);
		stroke: rgba(0,0,0,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_9 {
		font-family: Segoe UI;
		border: 1px solid black;
		border-radius:40px;
		position: absolute;
		overflow: visible;
		width: 713px;
		height: 86px;
		left: 574px;
		top: 483px;
	}
	#Line_1 {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_1 {
		overflow: visible;
		position: absolute;
		width: 24.707px;
		height: 24.707px;
		left: 1171.5px;
		top: 516.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Line_2 {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_2 {
		overflow: visible;
		position: absolute;
		width: 28.651px;
		height: 24.759px;
		left: 1195.5px;
		top: 516.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Rectangle_10 {
		fill: rgba(255,255,255,1);
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
		--web-action-target: view.html;
		cursor: pointer;
	}
	#VIEW {
		left: 914px;
		top: 712px;
		position: absolute;
		overflow: visible;
		width: 82px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: lighter;
		font-size: 25px;
		color: rgba(0,0,0,1);
		letter-spacing: 3.16px;
	}
	.viewButton {
		font-family: Segoe UI;
		font-size:20px;
		border: 1px solid black;
		border-radius:30px;
		font-family: Segoe UI;
		left: 850px;
		top: 712px;
		position: absolute;
		overflow: visible;
		width: 200px;
		height:50px;
	}
</style>
</head>
<body>
<div id="select" onclick="application.goBack()">
	<svg class="Rectangle_8">
		<rect onclick="application.goToTargetView(event)" id="Rectangle_8" rx="0" ry="0" x="0" y="0" width="1920" height="1080">
		</rect>
	</svg>
	<svg class="Rectangle_7">
		<rect id="Rectangle_7" rx="44" ry="44" x="0" y="0" width="928" height="638">
		</rect>
	</svg>
	<div id="SELECT_AND_VIEW_CUSTOMER">
		<span>SELECT AND VIEW CUSTOMER</span>
	</div>
	<form action="view.php" method="POST">
	<select class="Rectangle_9" name="accno">
	<?php
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "customer";
		
		// Create connection
		$conn= mysqli_connect($servername,$username,$password,$dbname);
		// Check connection
		if (!$conn) {
		  die("Connection failed: " . mysqli_connect_error());
		}
		$sql = "SELECT name,accno FROM details where accno<>1";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<option value=\"".$row["accno"]."\">".$row["name"]."</option>";
			}
		} else { echo "not found"; }
		//$conn->close();
		?>
	</select>
	<input class="viewButton" type="submit" value="VIEW">
</form>
</div>
</body>
</html>