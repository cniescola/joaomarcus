<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
  </head>  
  <body>
    
    <div class="box">
        <form action="#" method="POST">
            <h2>CADASTRO</h2>
            <div class="inputbox">
                <span></span>
                <input type="text" placeholder="Nome Completo" name="nome" >
            </div>
            <div class="inputbox">
                <span></span>
                <input type="text" placeholder="Telefone" name="tell">
            </div>
            <div class="inputbox">
                <span></span> 
            <input type="text" placeholder="Email" name="email">
            </div>
            <div class="inputbox">
                <span></span> 
            <input type="password" placeholder="Senha" name="senha">
            </div>
            <div class="inputbox">
                <input type="button" value="Cadastrar">
            </div>
            
            <div class="group">
            <a href="#">Fazer Login?</a>
            <a href="#">Nao clique aqui</a>
            </div>

        </form>
            
    </div>

    <?php 
    if( isset($_POST['nome']) && isset($_POST['tell']) && isset($_POST['email']) && isset($_POST['senha']) )
     {

        $nome = $_POST['nome'];
        $telefone = $_POST['tell'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $con = mysqli_connect("localhost","root","","cadastro");

        mysqli_query($con,"INSERT INTO cadastrados (id, nome, telefone, email, senha) VALUES (NULL, '$nome','$telefone','$email','$senha') ");
            
        error_log("nome:$nome <br> telefone:$telefone");
    
    }

   
    ?>


 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        var cont= 0;
      $(".box form div:nth-child(6) input").click(function(){
           
            if(cont==0){
                $("body").css("background-color","red");
                cont=1;
            }else if(cont==1){
                $("body").css("background-color","blue");
                cont=2;
            }else if(cont==2){
                $("body").css("background-color","yellow");
                cont=0;
            }
        

      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>