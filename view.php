<!DOCTYPE html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>view</title>
<style id="applicationStylesheet" type="text/css">
	.mediaViewInfo {
		--web-view-name: view;
		--web-view-id: view;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
	}
	:root {
		--web-view-ids: view;
	}
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
	}
	#view {
		position: absolute;
		width: 1920px;
		height: 1080px;
		background-color: rgba(0,0,0,1);
		overflow: hidden;
		--web-view-name: view;
		--web-view-id: view;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
	}
	@keyframes fadein {
	
		0% {
			opacity: 0;
		}
		100% {
			opacity: 1;
		}
	
	}
	#Path_1 {
		fill: rgba(155,180,69,1);
	}
	.Path_1 {
		overflow: visible;
		position: absolute;
		width: 206px;
		height: 55px;
		left: 61px;
		top: 754px;
		transform: matrix(1,0,0,1,0,0);
		cursor: pointer;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: success.html;
	}
	#Rectangle_1 {
		fill: transparent;
		stroke: rgba(255,255,255,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_1 {
		position: absolute;
		overflow: visible;
		width: 604px;
		height: 551px;
		left: 1357px;
		top: 288px;
	}
	#NEW_INDIA_BANK {
		left: 54px;
		top: 36px;
		position: absolute;
		overflow: visible;
		width: 355px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: lighter;
		font-size: 47px;
		color: rgba(112,112,112,1);
	}
	#INDIAs_FAVOURITE_BANK {
		left: 55px;
		top: 102px;
		position: absolute;
		overflow: visible;
		width: 354px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(155,180,69,1);
		letter-spacing: 3.9px;
		text-transform: uppercase;
	}
	#BENEFICIARY {
		left: 770px;
		top: 73px;
		position: absolute;
		overflow: visible;
		width: 157px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: normal;
		font-size: 19px;
		color: rgba(212,212,212,1);
		letter-spacing: 2.45px;
	}
	#SETTINGS {
		left: 1078px;
		top: 73px;
		position: absolute;
		overflow: visible;
		width: 116px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: normal;
		font-size: 19px;
		color: rgba(212,212,212,1);
		letter-spacing: 2.45px;
	}
	#ACCOUNT {
		left: 1372px;
		top: 73px;
		position: absolute;
		overflow: visible;
		width: 115px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: normal;
		font-size: 19px;
		color: rgba(212,212,212,1);
		letter-spacing: 2.45px;
	}
	#LOGIN {
		left: 1668px;
		top: 73px;
		position: absolute;
		overflow: visible;
		width: 75px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: normal;
		font-size: 19px;
		color: rgba(212,212,212,1);
		letter-spacing: 2.45px;
	}
	#Rectangle_2 {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_2 {
		position: absolute;
		overflow: visible;
		width: 247px;
		height: 55px;
		left: 725px;
		top: 59px;
	}
	#Rectangle_3 {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_3 {
		position: absolute;
		overflow: visible;
		width: 247px;
		height: 55px;
		left: 1012px;
		top: 59px;
	}
	#Rectangle_4 {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_4 {
		position: absolute;
		overflow: visible;
		width: 247px;
		height: 55px;
		left: 1306px;
		top: 59px;
	}
	#Rectangle_5 {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_5 {
		position: absolute;
		overflow: visible;
		width: 247px;
		height: 55px;
		left: 1591px;
		top: 59px;
	}
	#CUSTOMER_NAME {
		left: 61px;
		top: 244px;
		position: absolute;
		overflow: visible;
		width: 413px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: lighter;
		font-size: 33px;
		color: rgba(212,212,212,1);
		letter-spacing: 3.9px;
	}
	#ASWIN_B {
		left: 54px;
		top: 274px;
		position: absolute;
		overflow: visible;
		width: 407px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: bold;
		font-size: 96px;
		color: rgba(155,180,69,1);
		letter-spacing: -0.11px;
	}
	#LAST_5_TRANSACTIONS {
		left: 1460px;
		top: 369px;
		position: absolute;
		overflow: visible;
		width: 399px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: lighter;
		font-size: 25px;
		color: rgba(155,180,69,1);
		letter-spacing: 3.16px;
	}
	#ZOMATO {
		left: 1460px;
		top: 487px;
		position: absolute;
		overflow: visible;
		width: 101px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: lighter;
		font-size: 18px;
		color: rgba(255,255,255,1);
		letter-spacing: 3.16px;
	}
	#UBER {
		left: 1460px;
		top: 543px;
		position: absolute;
		overflow: visible;
		width: 60px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: lighter;
		font-size: 18px;
		color: rgba(255,255,255,1);
		letter-spacing: 3.16px;
	}
	#MORE_SUPERMARKET {
		left: 1460px;
		top: 600px;
		position: absolute;
		overflow: visible;
		width: 256px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: lighter;
		font-size: 18px;
		color: rgba(255,255,255,1);
		letter-spacing: 3.16px;
	}
	#AMAZON {
		left: 1460px;
		top: 657px;
		position: absolute;
		overflow: visible;
		width: 105px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: lighter;
		font-size: 18px;
		color: rgba(255,255,255,1);
		letter-spacing: 3.16px;
	}
	#ZOMATO_ {
		left: 1460px;
		top: 713px;
		position: absolute;
		overflow: visible;
		width: 101px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: lighter;
		font-size: 18px;
		color: rgba(255,255,255,1);
		letter-spacing: 3.16px;
	}
	#ID152 {
		left: 1820px;
		top: 490px;
		position: absolute;
		overflow: visible;
		width: 38px;
		white-space: nowrap;
		text-align: right;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: lighter;
		font-size: 18px;
		color: rgba(255,255,255,1);
		letter-spacing: 3.16px;
	}
	#ID54 {
		left: 1832px;
		top: 543px;
		position: absolute;
		overflow: visible;
		width: 26px;
		white-space: nowrap;
		text-align: right;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: lighter;
		font-size: 18px;
		color: rgba(255,255,255,1);
		letter-spacing: 3.16px;
	}
	#ID102 {
		left: 1820px;
		top: 600px;
		position: absolute;
		overflow: visible;
		width: 38px;
		white-space: nowrap;
		text-align: right;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: lighter;
		font-size: 18px;
		color: rgba(255,255,255,1);
		letter-spacing: 3.16px;
	}
	#ID214 {
		left: 1820px;
		top: 657px;
		position: absolute;
		overflow: visible;
		width: 38px;
		white-space: nowrap;
		text-align: right;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: lighter;
		font-size: 18px;
		color: rgba(255,255,255,1);
		letter-spacing: 3.16px;
	}
	#ID124 {
		left: 1820px;
		top: 713px;
		position: absolute;
		overflow: visible;
		width: 38px;
		white-space: nowrap;
		text-align: right;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: lighter;
		font-size: 18px;
		color: rgba(255,255,255,1);
		letter-spacing: 3.16px;
	}
	#TRANSFER {
		left: 106px;
		top: 768px;
		position: absolute;
		overflow: visible;
		width: 122px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: normal;
		font-size: 19px;
		color: rgba(0,0,0,1);
		letter-spacing: 2.45px;
	}
	#ACCOUNT_NUMBER {
		left: 61px;
		top: 432px;
		position: absolute;
		overflow: visible;
		width: 448px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: lighter;
		font-size: 33px;
		color: rgba(212,212,212,1);
		letter-spacing: 3.9px;
	}
	#ID1020333392 {
		left: 54px;
		top: 463px;
		position: absolute;
		overflow: visible;
		width: 544px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: bold;
		font-size: 96px;
		color: rgba(155,180,69,1);
		letter-spacing: -0.11px;
	}
	#Rectangle_11 {
		fill: transparent;
		stroke: rgba(155,180,69,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_11 {
		position: absolute;
		overflow: visible;
		width: 447px;
		height: 71px;
		left: 61px;
		top: 654px;
	}
	input[type=number 	] {
		width: 70%;
		background-color: black;
		color: rgba(155,180,69,1);
		font-size: 18px;	
		height: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid rgba(155,180,69,1);
		border-radius: 4px;
	}
	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button {
  	-webkit-appearance: none;
  	margin: 0;
}
</style>
</head>
<body>
<div id="view">
	<svg class="Path_1" viewBox="0 0 206 55">
		<path onclick="application.showOverlay(event,'success',0,0)" id="Path_1" d="M 21 0 L 185 0 C 196.5979766845703 0 206 9.402019500732422 206 21 L 206 34 C 206 45.59798049926758 196.5979766845703 55 185 55 L 21 55 C 9.402019500732422 55 0 45.59798049926758 0 34 L 0 21 C 0 9.402019500732422 9.402019500732422 0 21 0 Z">
		</path>
	</svg>
	<svg class="Rectangle_1">
		<rect id="Rectangle_1" rx="36" ry="36" x="0" y="0" width="604" height="551">
		</rect>
	</svg>
	<div id="NEW_INDIA_BANK">
		<span>NEW INDIA BANK</span>
	</div>
	<div id="INDIAs_FAVOURITE_BANK">
		<span>INDIA's FAVOURITE BANK</span>
	</div>
	<div id="BENEFICIARY">
		<span>BENEFICIARY</span>
	</div>
	<div id="SETTINGS">
		<span>SETTINGS</span>
	</div>
	<div id="ACCOUNT">
		<span>ACCOUNT</span>
	</div>
	<div id="LOGIN">
		<span>LOGIN</span>
	</div>
	<svg class="Rectangle_2">
		<rect id="Rectangle_2" rx="21" ry="21" x="0" y="0" width="247" height="55">
		</rect>
	</svg>
	<svg class="Rectangle_3">
		<rect id="Rectangle_3" rx="21" ry="21" x="0" y="0" width="247" height="55">
		</rect>
	</svg>
	<svg class="Rectangle_4">
		<rect id="Rectangle_4" rx="21" ry="21" x="0" y="0" width="247" height="55">
		</rect>
	</svg>
	<svg class="Rectangle_5">
		<rect id="Rectangle_5" rx="21" ry="21" x="0" y="0" width="247" height="55">
		</rect>
	</svg>
	<div id="CUSTOMER_NAME">
		<span>CUSTOMER NAME</span>
	</div>
	<div id="ASWIN_B">
		<span>ASWIN B</span>
	</div>
	<div id="LAST_5_TRANSACTIONS">
		<span>LAST 5 TRANSACTIONS</span>
	</div>
	<div id="ZOMATO">
		<span>ZOMATO</span>
	</div>
	<div id="UBER">
		<span>UBER</span>
	</div>
	<div id="MORE_SUPERMARKET">
		<span>MORE SUPERMARKET</span>
	</div>
	<div id="AMAZON">
		<span>AMAZON</span>
	</div>
	<div id="ZOMATO_">
		<span>ZOMATO</span>
	</div>
	<div id="ID152">
		<span>152</span>
	</div>
	<div id="ID54">
		<span>54</span>
	</div>
	<div id="ID102">
		<span>102</span>
	</div>
	<div id="ID214">
		<span>214</span>
	</div>
	<div id="ID124">
		<span>124</span>
	</div>
	<div id="TRANSFER">
		<span>TRANSFER</span>
	</div>
	<div id="ACCOUNT_NUMBER">
		<span>ACCOUNT NUMBER</span>
	</div>
	<div id="ID1020333392">
		<span>1020333392</span>
	</div>
	<form class="Rectangle_11" action="/action_page.php">
  		<input type="number" id="fname" name="fname"><br><br>
	</form>
</div>
</body>
</html>