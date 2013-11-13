<?php require_once('db_conecta.php');
try {
    if (isset($_REQUEST['nome'])) {
		$sql = 'UPDATE pessoas SET nome=:nome, 
		        fone=:fone, email=:email 
		        WHERE id=:id ';
		$stmt = $con->prepare($sql);
		$stmt->bindParam(':id',   $_REQUEST['id']);
		$stmt->bindParam(':nome', $_REQUEST['nome']);
		$stmt->bindParam(':fone', $_REQUEST['fone']);
		$stmt->bindParam(':email',$_REQUEST['email']);
		$stmt->execute();
		header('location: index.php');
    }
} catch (PDOException $ex) {
	echo $ex->getMessage();
	die();
}

?>