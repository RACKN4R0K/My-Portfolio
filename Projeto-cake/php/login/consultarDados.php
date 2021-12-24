<html>

<head>
      <title></title>
      <style>
            td {
                  padding: 10px;
            }
      </style>
</head>

<body>
      <?php

      include "../conectarBanco.php";

      $sql = "select * from login";

      $resultado = mysqli_query($conexao, $sql);

      echo "<table border=1>";
      while ($linha = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>";
            echo $linha["codigo"];
            echo "</td>";
            echo "<td>";
            echo $linha["nome"];
            echo "</td>";
            echo "<td>";
            echo $linha["email"];
            echo "</td>";
            echo "<td>";
            echo $linha["senha"];
            echo "</td>";
            echo "<td>";
            echo "<a href='deletarDados.php?codigo=" . $linha["codigo"] . "'>";
            echo "Excluír";
            echo "</a>";
            echo "</td>";
            echo "</tr>";
      }
      echo "</table>";
      ?>
</body>

</html>