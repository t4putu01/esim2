<?php include 'menu.php'; ?>
<H1>Php Array</H1>
<?php
$asiakkaat=array(
	array("en"=>'Mikko',"sn"=>'Virtanen'),
	array("en"=>'Timo',"sn"=>'Kivinen'),
	array("en"=>'Suvi',"sn"=>'Lehto'),
	array("en"=>'Laura',"sn"=>'Manninen')
	);
echo "<h2>Print_r</h2>";
print_r($asiakkaat);
?>
<h2>Tulostus foreach-loopilla</h2>
<?php
foreach ($asiakkaat as $rivi) {
echo 'Etunimi '.$rivi['en'].' Sukunimi '.$rivi['sn']. '<br>';
}
?>
<h2>Tulostus taulukkona</h2>
<TABLE border=2>
	<TR><TH>Etunimi</TH><TH>Sukunimi</TH></TR>
	<?php
	foreach ($asiakkaat as $rivi){
	echo '<tr><td>' .$rivi['en']. '</td><td>' .$rivi['sn']. '</td><td>';
	}
	?>
</TABLE>
<?php include 'footer.php'; ?>