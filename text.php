<?php //Generate text file on the fly
 
header("Content-type: text/plain");
header("Content-Disposition: attachment; filename=object_caption.txt");

//get server ip
$userip = ($_SERVER['X_FORWARDED_FOR']) ? $_SERVER['X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

//limits the posts through this php file to the ip addresses specified
if($userip == "128.36.130.46" || "130.132.42.60")
	{
//to remove the <i> tags from the credit line
	$italics = array("<i>", "</i>");
	$replacedString = str_replace($italics, "", $_POST["credit"]);

	print $replacedString;
	}
?>