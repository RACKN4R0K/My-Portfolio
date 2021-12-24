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

      $sql = "select * from cake";

      $resultado = mysqli_query($conexao, $sql);

      echo "<table border=1>";
      while ($linha = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>";
            echo $linha["id"];
            echo "</td>";
            echo "<td>";
            echo $linha["nome"];
            echo "</td>";
            echo "<td>";
            echo $linha["validade"];
            echo "</td>";
            echo "<td>";
            echo $linha["cvv"];
            echo "</td>";
            echo "<td>";
            echo $linha["numero_card"];
            echo "</td>";
            echo "<td>";
            echo "<a href='deletar.php?id=" . $linha["id"] . "'>";
            echo "Excluír";
            echo "</a>";
            echo "</td>";
            echo "</tr>";
      }
      echo "</table>";
      ?>
</body>

</html>