<h1>Listar categoria</h1>

<?php
    $sql = "SELECT * FROM categoria";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

    if($qtd > 0) {
        print "<table class='table table-bordered table-striped table-hover'>";

     print "<tr>";
            print "<th>#</th>";
            print "<th>nome da categoria</th>";
     print "</tr>";

        while($row = $res->fetch_object()){
        print "<tr>";
            print "<td>" .$row->cod_categoria. "</td>";
            print "<td>" .$row->nome_categoria. "</td>";
         print "</tr>";
        }
        print"<table>";
    }else {
        print "<p>Não encontrou resultados</p>";
    }