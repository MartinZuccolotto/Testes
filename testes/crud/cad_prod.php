<?php
    include ('../conect/conn.php');

    $qtd_prod = $_POST['qtd_prod'];

    if(empty($qtd_prod)){
        echo "Você precisa preencher todos os campos";
    } else {
        try{
            $stmt = $pdo->prepare('INSERT INTO produtos (qtd_prod) VALUES (:qtd_prod)');
            $stmt->bindParam(':qtd_prod', $qtd_prod);
            $stmt->execute();
            
            echo "<script>
                alert('Quantidade cadastrada!');
            </script>";
        } catch (Exception $e){
            //echo "Erro";   
            echo $e->getMessage();
            /* echo "<script>
                alert('Usuário já em uso!');
                window.location.href='../view/cadastro.php';
            </script>"; */
        }
    }
?>