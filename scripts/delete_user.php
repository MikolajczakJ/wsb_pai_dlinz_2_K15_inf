<?php
require_once "connect.php";
$sql = "DELETE FROM `users` WHERE `users`.`id` = $_GET[deleteUserId]";
$conn->query($sql);
$deleteUser=0;
if($conn->affected_rows!=0){
echo "Usunięto rekord";
$deleteUser = $_GET["deleteUserId"];
}else{
echo "Nie usunięto rekordu";
$deleteUser = 0;
}
header("location: ../4_db/5_db.php?deleteUser=$deleteUser")
?>
<script>
//    history.back();
</script>