<ul>
<?php
echo "<h1>Wyświetlam zmienne serwerowe</h1>";
foreach($_SERVER as $header => $var)
{
	//Show serwer vars
	echo "<li>"$header . " zawiera " . $var . "</li>"; 
}
?>
</ul>
