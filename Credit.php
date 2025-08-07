<?php
$myfile = simplexml_load_file(Credit.xml) or die("Correct the Code");
foreach ($myfile->children() as $rowdata){
	echo $rowdata->name;
}

?>