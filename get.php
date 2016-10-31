<?php include 'menu.php'; ?>
<h1>Testataan get-metodia</h1>

<form method="get" action="get.php">
<label>Etunimi</label>
<input type="text" name ="en" required="">
<br>
<label>Sukunimi</label>
<input type="text" name="sn" required="">
<br>
<input type="submit" name="nappi" value="Lähetä">
</form>

<?php
if(isset($_GET['nappi'])) {
$etunimi=$_GET['en'];
$sukunimi=$_GET['sn'];
echo "Terve $etunimi $sukunimi";
}
?>
<?php include 'footer.php'; ?>