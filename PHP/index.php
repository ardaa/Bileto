<?php
 //Seri no için post formu

$durum = "";
$input = "";
$hash = "";
$no = "";

?>


<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">$("#mesaj").text("Seri Numarasını giriniz.");</script>
<script type="text/javascript">
		
	$(document).ready(function(){
			$("#mesaj").text("Seri Numarasını giriniz.")
		$("#gelen").text("Seri Numarasını");
		$("#hash").text("Doğrulama Kodu");
		$("form").submit(function(e){
			e.preventDefault();
			ajaxEylem();
		})

	})	

	function ajaxEylem(){
		var gelen=$("input[name=no]").val()
		var str="q="+gelen;
		var phpFile="ajax.php";
		$("#mesaj").text("Seri Numarasını giriniz.")
		$.ajax({
			type:"POST",
			url:phpFile,
			data:str,
			dataType:"json",
			success:function(msg){

				$("#gelen").text(msg.raw);
				$("#hash").text(msg.hash);
				var json=JSON.stringify(msg);
				$("#rawx").text(json);
				setTimeout(gosterme, 5000);
			}
		})
	}

	function gosterme(){
		$("#mesaj").text("Seri Numarasını giriniz.")
		$("#gelen").text("Seri Numarasını");
		$("#hash").text("Doğrulama Kodu");
	}
function bos(){

}

</script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" href="style.css" >
    <title></title>
</head>
<body>


<div class="container">
			<div class="row main">
				<div class="orta main-center">
				<div class="text-center"> 
				<img class="img-fluid"   src="senliklogo18.png">
				<br>
<form method="post"> 
<div style='padding: 10px' id='mesaj'></div>
<br>

<br>
<h3>Seri Numarası:</h3>

<input  class="form-control" type="text" name="no" value="<?php echo $no;?>">
<br>

  <input class="button" type="submit" name="submit" value="Gönder">  
<br>
<br>
</form>


<h3>Seri Numarası:</h3>
<div style='padding: 10px' id='gelen'></div>
<h3>Doğrulama Kodu:</h3>
<div style="border:1px solid white;padding: 10px;margin-top: 10px" id='hash'></div>
<div style='padding: 10px;  font-size: 50%;' id='rawx'></div>



</div>
</div>
</div>
</form>
</div>
</div>
</div>

</body>

</body>

</html>