<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "mysecretpass");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$id = 2;
$login = "raphael";
$password = "dadada";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alterado OK!";
