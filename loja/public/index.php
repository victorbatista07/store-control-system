<?php
session_start();
if (isset($_SESSION['usuario-logado'])) {
    $usuario = $_SESSION['usuario-logado'];
    include(__DIR__ . '/../app/templates/index.phtml');
} else {
	if(isset($_SESSION['falha-no-login'])){
		session_destroy();
	}
    include(__DIR__ . '/../app/templates/logar.phtml');
}
