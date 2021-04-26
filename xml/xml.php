<?php

Header('Content-type: text/xml');
//koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "notes") or die("Error " . mysqli_error($connection));
$xml = new SimpleXMLElement('<xml/>');

$sql = "SELECT * FROM note";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));

//membuat array
while ($row = mysqli_fetch_assoc($result)) {

    $track = $xml->addChild('note');
    $track->addChild('id', $row['id']);
    $track->addChild('note', $row['note']);
}

print($xml->asXML());
//tutup koneksi ke database
mysqli_close($connection);
?>
