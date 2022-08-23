<?php

    try{
        # bloco protegido
        # definição do objeto de conexão pdo
        $conexao = new PDO('mysql:host=localhost;dbname=desenvolvimento1','root','');

        #configurar para mostrar os erros do PDO
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        #executa uma consulta 
        $consulta = $conexao->query("SELECT*FROM marca;");

        #percorrer os dados
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            echo "Codigo:{$linha['codigo_code']} - Descrição: {$linha['descricao']}<br>";
        }

    }catch(PDOException $e){
        # bloco que captura o erro
        echo "error:".$e->getMessage();
        die();
    }
?>