<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>
    
    $(function() {
        var contadorid=0;
        console.log( "ready!" );
          
        $('#adicionarverde').click(function() {
               var pessoa = $("#pessoa").val();
               console.log(pessoa);
               
               var html = '<div id=componente'+contadorid+'>';
                   html += pessoa+'<input type=radio name=lista id=lista'+contadorid+'>';
                   html += '</div>';
                   
                
                contadorid++;
                
               $("#verde").append(html);
               
        });
        
          $('#adicionaramarelo').click(function() {
               var pessoa = $("#pessoa").val();
               console.log(pessoa);
                
               var html = '<div id=componente'+contadorid+'>';
               html += pessoa+'<input type=radio name=lista id=lista'+contadorid+'>';
               html += '</div>';

               contadorid++;
            
               $("#amarelo").append(html);
               
        });
        
         $('#adicionarvermelho').click(function() {
               var pessoa = $("#pessoa").val();
               console.log(pessoa);
                
               var html = '<div id=componente'+contadorid+'>';
               html += pessoa+'<input type=radio name=lista id=lista'+contadorid+'>';
               html += '</div>';
               
               contadorid++;
            
               $("#vermelho").append(html);
               
        });

        $('#lnk-lista').off();
        
    });

    

</script>



<style>
    p {
      border: 2px solid blue;
      outline: rgb(108, 110, 238) solid 10px;
      text-align: center;
    }

    body {
         background-image: url("https://s2.glbimg.com/jfbUkZQBqkaxKCLwnBjW1AkSp54=/0x0:1300x731/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2020/Y/M/ZxTpu4Qg6ju153JHBUBw/selecao.jpg");
    }

    div.absolute {
    position: absolute;
    top: 150px;
    right: 0;
    width: 500px;
    height: 90px;

    }

   .center {
    margin: auto;
    width: 30%;
   padding: 10px;
    }

</style>

    <title>Sala de emergência</title>
  </head>
  <body>
      <p>
    <h1 style= "font-family:Georgia, 'Times New Roman', Times, serif; text-align:center; color:rgb(192, 11, 11);">SALA DE EMERGÊNCIA</h1>
      </p>

<br>
<br>
<div class="absolute">
    <input type=text id=pessoa class="form-control" aria-describedby="NomeHelp" placeholder="Nome Completo">
    <small id="emailNome" class="form-text text-muted">Exemplo: Andreia da Silva</small>
 </div> 
 
<div class="center">
    <button type="button" class="btn btn-success" id=adicionarverde>Ala Verde </button>
    <button type="button" class="btn btn-warning" id=adicionaramarelo>Ala Amarela</button>
    <button type="button" class="btn btn-danger" id=adicionarvermelho>Ala Vermelha</button> 
    <br>
    <br>
    <button type="button">
      <a href='av1.php?y=pessoa=' class='btn-apagar'>Apagar Registro </a> 
    </button> 
 </div>

 <svg height="130" width="500">
    <defs>
      <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
        <stop offset="0%"
        style="stop-color:rgb(255,255,0);stop-opacity:1" />
        <stop offset="100%"
        style="stop-color:rgb(255,0,0);stop-opacity:1" />
      </linearGradient>
    </defs>
    <ellipse cx="100" cy="70" rx="85" ry="55" fill="url(#grad1)" />
    <text fill="#ffffff" font-size="45" font-family="Verdana"
    x="50" y="86">XYZ</text>
  </svg>
  
    <div class="container">
   
        <div class=row>
                <div style="background:#98bf21;height:400px;width:300px;position:absolute; left: 280px; top: 250px; box-shadow: 10px 10px;">
          <br>
          <h5 style= "font-family:Georgia, 'Times New Roman', Times, serif; text-align:center; color:white"> Gravidade Baixa</h5>
            <div class=col id=verde>
            </div>
            
            <div class=row>
                <div style="background:#f7d129;height:400px;width:300px;position:absolute; left: 316px; top: 0px;box-shadow: 10px 10px;">
          <br>
          <h5 style= "font-family:Georgia, 'Times New Roman', Times, serif; text-align:center;color:white">Gravidade Média</h5>
            <div class=col id=amarelo>
            </div>

            <div class=row>
                <div style="background:#fd4545;height:400px;width:300px;position:absolute; left: 315px; top: 0px;box-shadow: 10px 10px;">
          <br>
          <h5 style= "font-family:Georgia, 'Times New Roman', Times, serif; text-align:center; color:white">Gravidade Alta</h5>
            <div class=col id=vermelho>
            </div>
        </div> 
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
</html>