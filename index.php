<?php
// Este é um exemplo básico. Em um ambiente de produção, use autenticação segura e armazenamento seguro de senhas.
$reg_username = $_POST['reg_username'];
$reg_password = password_hash($_POST['reg_password'], PASSWORD_BCRYPT);
$reg_email = $_POST['reg_email'];

// Simulação de registro bem-sucedido
$success = true;

if ($success) {
    $response = array('success' => true);
} else {
    $response = array('success' => false);
}

echo json_encode($response);
 
 
?>