<?php include "menu.php";?>
<form method='POST' action="login.php">

<TABLE Border=0>
	<tr><td>Käyttäjätunnus</td> <td><input type='text' name="Käyttäjätunnus"></td></tr>
	<tr><td>Salasana</td> <td><input type='password' name="Salasana"></td></tr>
	<tr><td></td> <td><input type="submit" name="nappi" value="Kirjaudu"></td></tr>
</TABLE>
</form>

<?php
if(isset($_POST['nappi'])) {
$oikeatunnus="hippo";
$oikeasalasana="test";
if ($_POST['Käyttäjätunnus']==$oikeatunnus){
	if ($_POST['Salasana']==$oikeasalasana){
		//oikea salasana ja tunnus
		header('Location:oma.php');
	} 
	else {
	echo "Käyttäjätunnus tai Salasana ei täsmää";

	}
}
else {
	echo "Käyttäjätunnus tai Salasana ei täsmää";

	}

}
?>



<?php include "footer.php";?>