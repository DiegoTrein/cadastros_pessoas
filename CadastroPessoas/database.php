<?php
      #estabelecer conexão com o banco de dados
      $con = mysqli_connect("localhost:3306","root","","cadastropessoas");


      //$con = mysqli_connect("sql109.epizy.com","epiz_33163536","uTKVwyy7ff","epiz_33163536_BancoPessoas");
      # Check connection
      if (mysqli_connect_errno())
      {
          echo "Falha: ".mysqli_connect_error();
      }
?>




