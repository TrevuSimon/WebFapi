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
      <h1>Endereço</h1>
      <p>Listar</p>
    </div>

    <div class="container">

      <?php
        include "conn.php";

        $conn = conn();

        $sql = "SELECT bairro, cep, cidade, numero, rua FROM endereco";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
           // output data of each row

           echo "<table class='table'>
           <thead>
             <tr>
               <th scope='col'>rua</th>
               <th scope='col'>numero</th>
               <th scope='col'>bairro</th>
               <th scope='col'>cidade</th>
               <th scope='col'>cep</th>
             </tr>
           </thead>
           <tbody>
           ";
         while($row = $result->fetch_assoc()) {
           echo "<tr><td>" . $row["rua"]. "</td>".
                "<td>". $row["numero"]. "</td>".
                "<td>". $row["bairro"]. "</td>".
                "<td>". $row["cidade"]. "</td>".
                "<td>". $row["cep"]. "</td>"."</tr>" ;
         }
         echo "
           </tbody>
         </table>";


         } else {
         echo "0 results";
         }
       ?>
       <a class="btn btn-dark" href="enderecoCadastro.html">Cadastrar</a>
    </div>

  </body>
</html>
