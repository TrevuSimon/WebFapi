<!DOCTYPE html>
<html lang="en">
  <head>
    <title>WEB FAPI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarText">
          <div class="container d-flex justify-content-between">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <span class="navbar-text">
            !!!
          </span>
        </div>
        </div>
      </nav>
    </header>
    <div class="jumbotron text-center">
      <h1>Faculdade</h1>
      <p>Listar</p>
    </div>

    <div class="container">

      <?php
        include "conn.php";

        $conn = conn();

        $sql = "SELECT nome_fantasia, razao_social, telefone, CNPJ FROM faculdade";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
           // output data of each row

           echo "<table class='table'>
           <thead>
             <tr>
               <th scope='col'>Nome fantasia</th>
               <th scope='col'>Razao social</th>
               <th scope='col'>telefone</th>
               <th scope='col'>cnpj</th>
             </tr>
           </thead>
           <tbody>
           ";
         while($row = $result->fetch_assoc()) {
           echo "<tr><td>" . $row["nome_fantasia"]. "</td>".
                "<td>". $row["razao_social"]. "</td>".
                "<td>". $row["telefone"]. "</td>".
                "<td>". $row["CNPJ"]. "</td>"."</tr>" ;
         }
         echo "
           </tbody>
         </table>";


         } else {
         echo "0 results";
         }
       ?>
       <a class="btn btn-dark" href="faculdadeCadastro.html">Cadastrar</a>
    </div>

  </body>
</html>
