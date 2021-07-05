<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?=$page_title;?></title>

    <!-- Bootstrap CSS CDN -->    
    <link rel="stylesheet" type="text/css" href="<?=$project_index;?>/views/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?=$project_index;?>/views/assets/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?=$project_index;?>/views/assets/datatables/dataTables.bootstrap4.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="<?=$project_index;?>/views/style4.css">
    <link rel="icon" type="image/png" href="https://banner2.cleanpng.com/20180505/cre/kisspng-book-cover-outline-clip-art-5aed58b656e528.2169014815255041823559.jpg"/>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">
</head>

    <body onload="startTime()">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#"><i class="fa fa-book"></i> Caderneta Power</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <p class="text-right">
            <button type="button" class="btn btn-danger" onclick="history.back();">
                <i class="fa fa-arrow-left"></i>
            </button>
          </p>
            
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <p> <div class="text-right" id="txt" style="color: white;"></div> </p>
            <!-- <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul> -->
            <!-- <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->

          </div>
        </nav>


        <div class="wrapper" style="margin-top: -45px;">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3> Menu </h3>
                    <strong><i class="fa fa-book"></i> Menu </strong>
                </div>

                <!-- MENU -->
                <ul class="list-unstyled components">
                    <!-- incluindo o arquivo do menu -->
                    <?php include_once 'views/menu.php'; ?>
                </ul>

                <ul class="list-unstyled CTAs">
                    <li>
                        <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                    </li>
                    <li>
                        <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                    </li>
                </ul>
            </nav>

            <!-- Page Content  -->
            <div id="content">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                            <i class="fa fa-align-left"></i>
                            <span>Mostrar/Encolher Menu</span>
                        </button> &nbsp;&nbsp;

                        
                        <!-- <button type="button" class="btn btn-danger" onclick="history.go(1);">
                            <i class="fa fa-arrow-right"></i>
                        </button> -->

                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-align-justify"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Page</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Page</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Page</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Page</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- FUNÇÃO GERENCIADORA DE CONTEUDO -->
                <?php page_content(); ?>
                
            </div>
        </div>

        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <!-- JAVASCRIPT -->
        <script type="text/javascript" src="<?=$project_index;?>/views/assets/bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="<?=$project_index;?>/views/assets/bootstrap/js/popper.min.js"></script>
        <script type="text/javascript" src="<?=$project_index;?>/views/assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- DATATABLES -->
        <script type="text/javascript" src="<?=$project_index;?>/views/assets/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?=$project_index;?>/views/assets/datatables/dataTables.bootstrap4.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#tableGeral').DataTable({
                    "language":{
                        "sEmptyTable": "Nenhum registro encontrado",
                        "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                        "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                        "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                        "sInfoPostFix": "",
                        "sInfoThousands": ".",
                        "sLengthMenu": "_MENU_ resultados por página",
                        "sLoadingRecords": "Carregando...",
                        "sProcessing": "Processando...",
                        "sZeroRecords": "Nenhum registro encontrado",
                        "sSearch": "Pesquisar",
                        "oPaginate": {
                            "sNext": "Próximo",
                            "sPrevious": "Anterior",
                            "sFirst": "Primeiro",
                            "sLast": "Último"
                        },
                        "oAria": {
                            "sSortAscending": ": Ordenar colunas de forma ascendente",
                            "sSortDescending": ": Ordenar colunas de forma descendente"
                        },
                        "select": {
                            "rows": {
                                "_": "Selecionado %d linhas",
                                "0": "Nenhuma linha selecionada",
                                "1": "Selecionado 1 linha"
                            }
                        }
                    }
                //"fixedHeader": true
                });
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>
        <script>
            function startTime() {
              var today = new Date();
              var h = today.getHours();
              var m = today.getMinutes();
              var s = today.getSeconds();
              m = checkTime(m);
              s = checkTime(s);
              document.getElementById('txt').innerHTML =
              h + ":" + m + ":" + s;
              var t = setTimeout(startTime, 500);
            }
            function checkTime(i) {
              if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
              return i;
            }
        </script>
       


        <?php //validate_success(); ?>
    </body>

</html>