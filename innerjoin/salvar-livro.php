<h1>Livro salvo!</h1>


<?php
        $sql = "INSERT INTO livro (categoria_cod_categoria, titulo_livro, autor_livro)
         VALUES (
         ".$_POST["categoria_cod_categoria"].",
         '".$_POST["titulo_livro"]."',
         '".$_POST["autor_livro"]."'
         )";

         $res = $conn->query($sql);

    if($res==true) {
        print "<script>alert('salvo com sucesso!');</script>";
        print "<script>location.href='?page='listar-livro';</script>";
    } else {
        print "<script>alert('Não foi possivel salvar!');</script>";
        print "<script>location.href='?page='listar-livro';</script>";    
    }