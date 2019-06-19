<form action="#" method="post">
	<input type="text" name="pesan" id='en'>
	<input type='submit' name='enkrip' value='ENKRIPSI'>
</form>
<br/>
<form action="#" method="post" >
	<input type="text" name="pesanEncript" id='de'>
	<input type='submit' name='dekripsi' value='DEKRIPSI' >
</form>
<?php
	if(isset($_POST['enkrip'])){
		if($_POST['pesan']==""){
			echo 'tidak ada pesan dienkripsi';
			exit;
		}
		else {
			$pesan = $_POST['pesan'];
			include 'EnkripsiClass.php';
			$Obj = new FIX_Enc();

			$enkrip= $Obj->Enc($pesan);
			echo "<script type='text/javascript'> document.getElementById('de').value='$enkrip'</script>";			
		}
	}
?>

<?php
	if(isset($_POST['dekripsi'])){
		if($_POST['pesanEncript']==""){
			echo 'tidak ada pesan dideskripsi';
			exit;
		}
		else {
			$pesan = $_POST['pesanEncript'];
			include 'EnkripsiClass.php';

			$Obj = new FIX_Enc();

			$enkrip= $Obj->Dec($pesan);
			echo "<script type='text/javascript'> document.getElementById('en').value='$enkrip'</script>";				
		}
	}
?>
