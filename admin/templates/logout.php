<?PHP 
    if(isset($_REQUEST['sair'])){
        
        session_destroy();
        session_unset(['usuarioAdministrador']);
        session_unset(['senhaAdministrador']);
        header("Location: index.php");
        
    }

?>