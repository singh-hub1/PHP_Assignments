<?php

 

  $xml = new DomDocument('1.0');

 

  $xml -> formatOutput = true;

 

  $Cricket = $xml -> createElement("Cricket");

 

  $xml -> appendChild($Cricket);

 

  $player = $xml -> createElement("player","abc");

 

  $Cricket -> appendChild($player);

 

  $runs = $xml -> createElement("runs","1000");

 

  $Cricket -> appendChild($runs);

 

  $wickets = $xml -> createElement("wickets","50");

 

   $Cricket -> appendChild($wickets);

 

  $noofnotout = $xml -> createElement("noofnotout","10");

 

  $Cricket -> appendChild($noofnotout);

  $player = $xml -> createElement("player","pqr");

  $Cricket -> appendChild($player);

  $runs = $xml -> createElement("runs","1000");

  $Cricket -> appendChild($runs);

  $wickets = $xml -> createElement("wickets","50");

 

   $Cricket -> appendChild($wickets);

 

  $noofnotout = $xml -> createElement("noofnotout","10");

 

  $Cricket -> appendChild($noofnotout);

  $player = $xml -> createElement("player","xyz");

 

  $Cricket -> appendChild($player);

  $runs = $xml -> createElement("runs","1000");

 

  $Cricket -> appendChild($runs);

 

 

 

  $wickets = $xml -> createElement("wickets","50");

 

   $Cricket -> appendChild($wickets);

 

  $noofnotout = $xml -> createElement("noofnotout","10");

 

  $Cricket -> appendChild($noofnotout);

 

  $player = $xml -> createElement("player","lmn");

 

  $Cricket -> appendChild($player);

  $runs = $xml -> createElement("runs","1000");

 

  $Cricket -> appendChild($runs);

 

 

 

  $wickets = $xml -> createElement("wickets","50");

 

   $Cricket -> appendChild($wickets);

 

  $noofnotout = $xml -> createElement("noofnotout","10");

 

  $Cricket -> appendChild($noofnotout);

 

  $player = $xml -> createElement("player","def");

 

  $Cricket -> appendChild($player);

  $runs = $xml -> createElement("runs","1000");

 

  $Cricket -> appendChild($runs);

  $wickets = $xml -> createElement("wickets","50");

 

   $Cricket -> appendChild($wickets);

 

  $noofnotout = $xml -> createElement("noofnotout","10");

 

  $Cricket -> appendChild($noofnotout);

  echo "<xmp>".$xml -> saveXML()."</xmp>";


foreach($xml->cricket as $c){
   if($c->runs>1000 and $c->wickets>=50){      
   echo "player name : ". $c->player."<br>";
   echo "player run  :  ".$c->runs."<br>";
   echo "player wickets : ".$c->wickets."<br>";
   echo "player not out : ".$c->noOfNotOut."<br><br>";
}

}

?>