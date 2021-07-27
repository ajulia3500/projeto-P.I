<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link href="CSS/index.css" rel="stylesheet">
    <title>UniBA - Universidades Baianas</title>

    <style>

body {
    background: #272727;
    font-family: "Montserrat", sans-serif;
    color:#fff;
    font-family:'Source Sans Pro', sans-serif;
  }

  IMG.banner {
    display: block;
    margin-left: auto;
    margin-right: auto;
  }

</style>

<body>

<!-- NavBar -->
    <div>
        <div class="header-blk">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container"><a class="navbar-brand" href="index.html">UniBA</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" href="cursos.html">Cursos</a></li>
                           
                            
                        </ul>
                        <form class="form-inline mr-auto" target="_self">

                        </form>
                        <span class="navbar-text"> <a class="nav-link active" href="favoritos.html" ><img class="fav" src="IMG/coracao.png" title="Meus Favoritos" width="25" height="23"/></a></span>
                        <span class="navbar-text"> <a class="nav-link active" href="login.html" class="login">Conecte-se</a></span><a class="btn btn-light action-button" role="button" href="#">Registre-se</a></div>
                </div>
            </nav>

    </div>
    </div>

 <img class="banner" src="IMG/banner02.png" width="700" height="170"/>

    <!--form de instituição-->
    <form action="index.php" method= "POST">

    <div class="container p-3 my-3 border" id="trem">
    <h6>Instituição<h6>
    <input type="text" name="nomeInst" size="30" placeholder="Insira aqui">
    <img src="img/lupa.png"  width="20" height="20">



    <label for="institution" class="">
        
        <h6>Cursos<h6>
        </label>

         <select id="course" class=""><option value="">
            Selecione
          </option> <option value="1">
            Administração de empresas
          </option><option value="2">
            Agronomia
          </option><option value="3">
            Arquitetura e Urbanismo
          </option><option value="4">
            Biologia
          </option><option value="5">
            Biomedicina
          </option><option value="7">
            Ciências Contábeis
          </option><option value="6">
            Computação
          </option><option value="25">
            Comunicação
          </option><option value="44">
            Design e Artes Visuais
          </option><option value="9">
            Direito
          </option><option value="10">
            Economia
          </option><option value="11">
            Educação Física
          </option><option value="12">
            Enfermagem
          </option><option value="13">
            Engenharia Ambiental
          </option><option value="14">
            Engenharia Civil
          </option><option value="15">
            Engenharia de controle e automação
          </option><option value="16">
            Engenharia de produção
          </option><option value="17">
            Engenharia Elétrica
          </option><option value="18">
            Engenharia Mecânica
          </option><option value="19">
            Engenharia Química
          </option><option value="20">
            Farmácia
          </option><option value="21">
            Física
          </option><option value="22">
            Fisioterapia
          </option><option value="23">
            Geografia
          </option><option value="24">
            História
          </option><option value="25">
            Letras
          </option><option value="26">
            Matemática
          </option><option value="27">
            Medicina
          </option><option value="28">
            Medicina veterinária
          </option><option value="29">
            Nutrição
          </option><option value="30">
            Odontologia
          </option><option value="31">
            Pedagogia
          </option><option value="32">
            Propaganda e Marketing
          </option><option value="33">
            Psicologia
          </option><option value="34">
            Química
          </option><option value="35">
            Relações Internacionais
          </option><option value="36">
            Serviço Social
          </option><option value="37">
            Turismo
          </option><option value="38">
            Zootecnia
          </option></select>
        

          <label for="administration">
            <h6>Pública/Privada<h6>
            </label> 

            <select id="administration" class=""><option value="">
                Selecione
              </option> <option value="1">
                Pública
              </option><option value="2">
                Privada
              </option></select>

            </div>
          </form>
        </body>
</html>
