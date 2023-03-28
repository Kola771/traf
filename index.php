
<?php
  function getIp(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
      $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
  }
  echo 'L adresse IP de l utilisateur est : '.getIp();
// Mesure de perf sur une adresse ip de Google
$t0=microtime(true);
$hostname=@gethostbyaddr(getIp());
$st=microtime(true)-$t0;
echo "IP 66.249.65.102 <br>nom d'hote :".$hostname."<br>duree :".substr($st,0,4).' sec';
//Mesure de perf sur une adresse ip située en Afrique
// $t0=microtime(true);
// $hostname=@gethostbyaddr('41.223.184.3 ');
// $st=microtime(true)-$t0;
// echo "<br>IP 41.223.184.3 <br>nom d'hote :".$hostname."<br>duree :".substr($st,0,4).' sec';