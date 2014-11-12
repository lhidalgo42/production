<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<div class="welcome">
        <?php
        echo "C39".DNS1D::getBarcodeHTML("4445645656", "C39");
        echo "C39+".DNS1D::getBarcodeHTML("4445645656", "C39+");
        echo "C39E".DNS1D::getBarcodeHTML("4445645656", "C39E");
        echo "C39E+".DNS1D::getBarcodeHTML("4445645656", "C39E+");
        echo "C93".DNS1D::getBarcodeHTML("4445645656", "C93");
        echo "S25".DNS1D::getBarcodeHTML("4445645656", "S25");
        echo "S25+".DNS1D::getBarcodeHTML("4445645656", "S25+");
        echo "I25".DNS1D::getBarcodeHTML("4445645656", "I25");
        echo "I25+".DNS1D::getBarcodeHTML("4445645656", "I25+");
        echo "C128".DNS1D::getBarcodeHTML("4445645656", "C128");
        echo "C128A".DNS1D::getBarcodeHTML("4445645656", "C128A");
        echo "C128B".DNS1D::getBarcodeHTML("4445645656", "C128B");
        echo "C128C".DNS1D::getBarcodeHTML("4445645656", "C128C");
        echo "EAN2".DNS1D::getBarcodeHTML("44455656", "EAN2");
        echo "EAN5".DNS1D::getBarcodeHTML("4445656", "EAN5");
        echo "EAN8".DNS1D::getBarcodeHTML("4445", "EAN8");
        echo "EAN13".DNS1D::getBarcodeHTML("4445", "EAN13");
        echo "UPCA".DNS1D::getBarcodeHTML("4445645656", "UPCA");
        echo "UPCE".DNS1D::getBarcodeHTML("4445645656", "UPCE");
        echo "MSI".DNS1D::getBarcodeHTML("4445645656", "MSI");
        echo "MSI+".DNS1D::getBarcodeHTML("4445645656", "MSI+");
        echo "POSTNET".DNS1D::getBarcodeHTML("4445645656", "POSTNET");
        echo "PLANET".DNS1D::getBarcodeHTML("4445645656", "PLANET");
        echo "RMS4CC".DNS1D::getBarcodeHTML("4445645656", "RMS4CC");
        echo "KIX".DNS1D::getBarcodeHTML("4445645656", "KIX");
        echo "IMB".DNS1D::getBarcodeHTML("4445645656", "IMB");
        echo "CODABAR".DNS1D::getBarcodeHTML("4445645656", "CODABAR");
        echo "Code11".DNS1D::getBarcodeHTML("4445645656", "CODE11");
        echo "PHARMA".DNS1D::getBarcodeHTML("4445645656", "PHARMA");
        echo "PHARMA21".DNS1D::getBarcodeHTML("4445645656", "PHARMA2T");
        ?>
		<h1>You have arrived.</h1>
	</div>
</body>
</html>
