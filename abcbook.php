<?php
$xml=simplexml_load_file("abcbook.xml") or die("cannnot load");
$xmlstring=$xml->asXML();
echo $xmlstring;
?>
