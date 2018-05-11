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
       <a href="faculdadeLista.php"><h1>faculade</h1></a>
       <p>Listar</p>
     </div>

     <div class="container">

       <?php
         include "conn.php";

         $conn = conn();

         $nome = isset($_POST["nome"])?$_POST["nome"]:"";
         $razao = isset($_POST["razao"])?$_POST["razao"]:"";
         $telefone = isset($_POST["telefone"])?$_POST["telefone"]:"";
         $cnpj = isset($_POST["cnpj"])?$_POST["cnpj"]:"";


         $sql = "INSERT into faculdade ( nome_fantasia, razao_social, telefone, CNPJ)
         VALUES('$nome','$razao',$telefone,$cnpj)";

         if ($conn->query($sql) === TRUE) {
              echo "Cadastrado com sucesso";
          } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
          }
        ?>

     </div>

   </body>
 </html>
