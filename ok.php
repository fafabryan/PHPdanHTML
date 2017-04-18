
	 <!DOCTYPE html>
<html>
<head>
  <title>Cuaca semarang</title>
      <?php
    $json_string = file_get_contents ("http://api.wunderground.com/api/110bd0bca39f5ad8/forecast/q/ID/Tambakaji.json");
    $parsed_json = json_decode($json_string, true);
    $parsed_json = $parsed_json['forecast']['txt_forecast'];
	
	$json_string = file_get_contents ("http://api.wunderground.com/api/110bd0bca39f5ad8/forecast/q/ID/Gondoriyo.json");
    $parsed_json1 = json_decode($json_string, true);
    $parsed_json1 = $parsed_json1['forecast']['txt_forecast'];
	
	$json_string = file_get_contents ("http://api.wunderground.com/api/110bd0bca39f5ad8/forecast/q/ID/Beringinasri.json");
    $parsed_json2 = json_decode($json_string, true);
    $parsed_json2 = $parsed_json2['forecast']['txt_forecast'];
	
		$json_string = file_get_contents ("http://api.wunderground.com/api/110bd0bca39f5ad8/forecast/q/ID/Kalipancur.json");
    $parsed_json3 = json_decode($json_string, true);
    $parsed_json3 = $parsed_json3['forecast']['txt_forecast'];
	

    $datetambakaji = $parsed_json['date'];//Tambakaji
    

    $parsed_json = json_decode($json_string, true);
    $parsed_json = $parsed_json['forecast']['txt_forecast']['forecastday'][0];

    $icon_url1 = $parsed_json['icon_url'];
    $day1 = $parsed_json['title'];
   
    
    $parsed_json = json_decode($json_string, true);
    $parsed_json = $parsed_json['forecast']['txt_forecast']['forecastday'][2];
 
    $icon_url2 = $parsed_json['icon_url'];    
    $day2 = $parsed_json['title'];
	
	 $dategondo = $parsed_json1['date'];//Gondoriyo
    

    $parsed_json1 = json_decode($json_string, true);
    $parsed_json1 = $parsed_json1['forecast']['txt_forecast']['forecastday'][0];
 
    $icon_urlgondo1 = $parsed_json1['icon_url'];
    $daygondo1 = $parsed_json1['title'];
   
    
    $parsed_json1 = json_decode($json_string, true);
    $parsed_json1 = $parsed_json1['forecast']['txt_forecast']['forecastday'][2];

    $icon_urlgondo2 = $parsed_json1['icon_url'];    
    $daygondo2 = $parsed_json1['title'];
	
 $dateberingin = $parsed_json2['date'];//Beringinasri
    

    $parsed_json2 = json_decode($json_string, true);
    $parsed_json2 = $parsed_json2['forecast']['txt_forecast']['forecastday'][0];
 
    $icon_urlberingin1 = $parsed_json2['icon_url'];
    $dayberingin1 = $parsed_json2['title'];
   
    
    $parsed_json2 = json_decode($json_string, true);
    $parsed_json2 = $parsed_json2['forecast']['txt_forecast']['forecastday'][2];

    $icon_urlberingin2 = $parsed_json2['icon_url'];    
    $dayberingin2 = $parsed_json2['title'];
	   
	
	 $datekalipancur = $parsed_json3['date'];//kalipancur
    

    $parsed_json3 = json_decode($json_string, true);
    $parsed_json3 = $parsed_json3['forecast']['txt_forecast']['forecastday'][0];
 
    $icon_urlkalipancur1 = $parsed_json3['icon_url'];
    $daykalipancur1 = $parsed_json3['title'];
   
    
    $parsed_json3 = json_decode($json_string, true);
    $parsed_json3 = $parsed_json3['forecast']['txt_forecast']['forecastday'][2];

    $icon_urlkalipancur2 = $parsed_json3['icon_url'];    
    $daykalipancur2 = $parsed_json3['title'];
	
   
   
     ?>
<style>
#header {
    background-color:black;
    color:white;
    text-align:center;
    padding:5px;
}
#nav {
    line-height:30px;
    background-color:#eeeeee;
    height:300px;
    width:100px;
    float:left;
    padding:5px;	      
}
#section {
    width:90%;
    padding:10px;
text-align:center;	
}
#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
   padding:5px;	 	 
}
#kiri {
    line-height:50px;
    background-color:gray;
    height:1300px;
    width:150px;
    float:left;
    padding:5px;	      
}
#kanan {
    line-height:50px;
    background-color:gray;
    height:1300px;
    width:150px;
    float:right;
    padding:5px;	      
}
</style>
</head>
<body>

<div id="header">
<h1>Prediksi Cuaca Kecamatan Ngaliyan</h1>
</div>

<div id="kiri">

</div>
<div id="kanan">

</div>
<div id="section">
<h2>Saya akan membagikan Informasi tentang perkiraan cuaca di Kecamatan Ngaliyan .Ya namanya cuaca tidak pasti jadi saya hanya memperkirakan.
Silahkan menyimak.</h2><br>
<br>
<br>
-------------------------------------
<br>
--Tambakaji--<br>
-------------------------------------
<br>
Hari <?php echo $day1 ?>
<br>
Jam	<?php echo $datetambakaji ?>
<br>
Perkiraan Cuaca<br><img src="<?php echo $icon_url1 ?>" alt="">
<br>
Hari <?php echo $day2 ?>
<br>
Jam	<?php echo $datetambakaji ?>
<br>
Perkiraan Cuaca<br><img src="<?php echo $icon_url2 ?>" alt="">
<br>

-------------------------------------<br>
--Gondoriyo--<br>
-------------------------------------

<br>
Hari <?php echo $daygondo1 ?><br>
Jam	<?php echo $dategondo ?><br>
Perkiraan Cuaca<br><img src="<?php echo $icon_urlgondo1 ?>" alt=""><br>

Hari <?php echo $daygondo2 ?><br>
Jam	<?php echo $dategondo ?><br>
Perkiraan Cuaca<br><img src="<?php echo $icon_urlgondo2 ?>" alt=""><br>

-------------------------------------<br>
--Beringinasri--<br>
-------------------------------------

<br>
Hari <?php echo $dayberingin1 ?><br>
Jam	<?php echo $dateberingin ?><br>
Perkiraan Cuaca<br><img src="<?php echo $icon_urlberingin1 ?>" alt=""><br>

Hari <?php echo $dayberingin2 ?><br>
Jam	<?php echo $dateberingin ?><br>
Perkiraan Cuaca<br><img src="<?php echo $icon_urlberingin2 ?>" alt=""><br>


-------------------------------------<br>
--Kalipancur--<br>
-------------------------------------

<br>
Hari <?php echo $daykalipancur1 ?><br>
Jam	<?php echo $datekalipancur ?><br>
Perkiraan Cuaca<br><img src="<?php echo $icon_urlkalipancur1 ?>" alt=""><br>

Hari <?php echo $daykalipancur2 ?><br>
Jam	<?php echo $datekalipancur ?><br>
Perkiraan Cuaca<br><img src="<?php echo $icon_urlkalipancur2 ?>" alt=""><br>

<br>
<br>
<br>
</div>

<div id="footer">
Fafa 14.01.53.0006
</div>

</body>
</html>
