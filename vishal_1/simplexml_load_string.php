<?php

$note=<<<XML
<note>

<to>To</to>

<from>Jani</from>

<heading>Reminder</heading>

<body>Do not forget me this weekend!</body>

</note>

XML;

$xml=simplexml_load_string($note);

// echo $xml->to . "<br>";

// echo $xml->from . "<br>";

// echo $xml->heading . "<br>";

// echo $xml->body;

print_r($xml);
?>