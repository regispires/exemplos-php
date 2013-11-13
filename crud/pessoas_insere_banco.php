<?php require_once('db_conecta.php');
try {
    if (isset($_REQUEST['nome'])) {
		$sql = 'INSERT INTO pessoas (nome,fone,email)
		        VALUES (:nome,:fone,:email) ';
		$stmt = $con->prepare($sql);
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