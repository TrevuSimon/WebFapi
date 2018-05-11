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
       <a href="enderecoLista.php"><h1>endereço</h1></a>
       <p>Listar</p>
     </div>

     <div class="container">

       <?php
         include "conn.php";

         $conn = conn();

         $rua = isset($_POST["rua"])?$_POST["rua"]:"";
         $numero = isset($_POST["numero"])?$_POST["numero"]:"";
         $bairro = isset($_POST["bairro"])?$_POST["bairro"]:"";
         $cidade = isset($_POST["cidade"])?$_POST["cidade"]:"";
         $cep = isset($_POST["cep"])?$_POST["cep"]:"";

         $sql = "INSERT into endereco (rua, numero, bairro, cidade, cep)
         VALUES('$rua',$numero,'$bairro','$cidade',$cep)";

         if ($conn->query($sql) === TRUE) {
              echo "Cadastrado com sucesso";
          } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
          }
        ?>

     </div>

   </body>
 </html>
