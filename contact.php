<?php
$con = mysqli_connect('localhost', 'id21058491_contact_info', 'Aashishnegi@24', 'id21058491_contactinginfo');

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];
$startVal=0;

$sql = "INSERT INTO `ContactCredentials` (`fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

$rs = mysqli_query($con, $sql);

if ($rs) {
    echo "Contact Records Inserted";
}

mysqli_close($con);
?>
