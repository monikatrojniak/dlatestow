<ul>
<?php 
foreach($_SERVER as $header => $var)
{
	//Show serwer vars
	echo "<li>"$header . " zawiera " . $var . "</li>"; 
}
?>
</ul>