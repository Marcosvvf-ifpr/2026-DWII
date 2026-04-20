<?php
/**
 * Diciplina : Desenvolvimento Web II (DWII)
 * Aula      : 06 - Autenticação com sessoes e controle de acesso
 * Arquivo   : 04_sessoes/loguot.php
 * Autor     : Marcos Vinicius Valério
 */
session_start();
session_unset();
session_destroy();
header('Location: login.php');
exit;
?>