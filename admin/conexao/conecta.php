<?PHP 
    try {
        $conexao = new PDO('mysql:host=mysql.hostinger.com.br;dbname=u929515774_italo','u929515774_italo','italo718293456');
        $conexao -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo 'ERROR: ' . $e->getMessage();
    }
        
?>