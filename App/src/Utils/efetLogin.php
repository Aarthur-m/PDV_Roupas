<?php
    session_start();
    require "../DAO/UsuarioDAO.php";

    if (empty($_POST['usuario']) || empty($_POST['senha'])) {
        header('Location: ../Views/login.php');
    }
    
    $usuarioLog = $_POST['usuario'];
	$senhaLog = $_POST['senha'];
    
    $UsuarioDAO = new \App\Model\UsuarioDAO();
    foreach($UsuarioDAO->read() as $usuario):
        $row;
        if($usuario['nome'] == $usuarioLog && $usuario['senha'] == $senhaLog) {
            $_SESSION['usuario'] = $usuario['nome'];
            $_SESSION['nivelAcess'] = $usuario['nivelAcess'];
            $row++;
        }

        if($row == 1) {
            header('Location: ../Views/principal.php');
        } else {
	        header('Location: ../Views/login.php');
        }
    endforeach;
?>