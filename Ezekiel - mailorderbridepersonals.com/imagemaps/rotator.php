 <?php
 $numberBegin = 101;
 $numberEnd = 150;
 $numberPhotos = 4; 
 function genHTML($numer) {
  return '<li class="list-inline"><a href="/mp/info'.$numer.'.htm"><img src="/mp/p'.$numer.'-1.jpg" alt="A New Wife" /></a></li>'; 
 }

 
 $HTML = ""; 
 $arr = range($numberBegin, $numberEnd); 
 if($numberPhotos > count($arr)) $numberPhotos = count($arr);
 
 for($i=0;$i<$numberPhotos;$i++) {
  $randKey = array_rand($arr); 
  $HTML .= "\t".genHTML($arr[$randKey])."\n";
  unset($arr[$randKey]);
 } 
 
 echo $HTML;
 
?>