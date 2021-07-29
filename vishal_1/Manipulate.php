<?php
  $dom = new DOMDocument();
  $dom->formatOutput = true;

  $dom->load('Result.xml', LIBXML_NOBLANKS);

  $root = $dom->documentElement;
  $newresult = $root->appendChild( $dom->createElement('result') );

  $newresult->setAttribute('id', 2);
  $newresult->appendChild( $dom->createElement('name','Max Miller') );
  $newresult->appendChild( $dom->createElement('sgpa','8.7') );
  $newresult->appendChild( $dom->createElement('cgpa','8.2') );
  header('Content-Type:text/xml');

  echo ''. $dom->saveXML() .'';
  $dom->save('new_result.xml') or die('XML Manipulate Error');
?>