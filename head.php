<ul>
<?php 
foreach($_SERVER as $header => $var)
{
	//Show serwer vars
	echo "<li><strong>"$header . "</strong> zawiera " . $var . "</li>"; 
}
?>
</ul>