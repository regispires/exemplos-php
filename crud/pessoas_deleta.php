<?php require_once('db_conecta.php');
try {
    if (isset($_REQUEST['id'])) {
		$sql = 'DELETE FROM pessoas WHERE id=:id';
		$stmt = $con->prepare($sql);
		$stmt->bindParam(':id', $_REQUEST['id']);
		$stmt->execute();
		header('location: index.php');
    }
} catch (PDOException $ex) {
	echo $ex->getMessage();
	die();
}

?>