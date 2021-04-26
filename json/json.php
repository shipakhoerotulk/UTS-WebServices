<?php 

	require_once('config.php');

	$query = "SELECT * FROM note";
	$sql   = mysqli_query($db_connect, $query);

	if ($sql){
		$result = array();
		while ($row = mysqli_fetch_array($sql)){
			array_push ($result,array(
				'id' => $row['id'],
				'note' => $row['note'],
			) );
		}

	echo json_encode( array('notes' => $result) );
    }
?>