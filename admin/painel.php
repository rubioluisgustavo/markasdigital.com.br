<?php
$jsonFile = '../data/menuData.json';
$data = json_decode(file_get_contents($jsonFile), true);
$jsonEquipeFile = '../data/equipeData.json';
$dataEquipe = json_decode(file_get_contents($jsonEquipeFile), true);
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../assets/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <?php include("../views/scripts.php"); ?>
</head>

<body class="sb-nav-fixed">

    <div id="layoutSidenav">

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">markas digital - admin</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">bem-vindo, visitante</li>
                    </ol>
                    <div class="row">
                        <div class="col-2">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">MENUS</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" target="_blank" href="../controllers/menuController.php">gerenciar</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">EQUIPE</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" target="_blank" href="../controllers/equipeController.php">gerenciar</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">HOME</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" target="_blank" href="../controllers/indexController.php">gerenciar</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">PROPÓSITO</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" target="_blank" href="../controllers/propositoController.php">gerenciar</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">SERVIÇOS</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" target="_blank" href="../controllers/servicosController.php">gerenciar</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">SOLUÇÕES</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" target="_blank" href="../controllers/solucoesController.php">gerenciar</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">CONTATO</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" target="_blank" href="../controllers/contatoController.php">gerenciar</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Equipe
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Cargo</th>
                                            <th>Cidade</th>
                                            <th>Apagar</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Cargo</th>
                                            <th>Cidade</th>
                                            <th>Apagar</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($dataEquipe['usuarios'] as $item) {

                                            echo '<tr><td>' . $item['name'] . '</td>';
                                            echo '<td>' . $item['role'] . '</td>';
                                            echo '<td>' . $item['city'] . '</td>';
                                            echo '<td><a href="../modules/equipeModule.php?action=apagar&id=' . $item['id'] . '">apagar</a></td> </tr>';
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Menus
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple2">
                                    <thead>
                                        <tr>
                                            <th>Título</th>
                                            <th>Link</th>
                                            <th>Ativo</th>
                                            <th>Apagar</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Título</th>
                                            <th>Link</th>
                                            <th>Ativo</th>
                                            <th>Apagar</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($data as $item) {
                                            echo '<tr><td>' . $item['title'] . '</td>';
                                            echo '<td>' . $item['href'] . '</td>';
                                            echo '<td>' . $item['active'] . '</td>';
                                            echo '<td><a href="../modules/menuModule.php?action=apagar&id=' . $item['id'] . '">apagar</a></td> </tr>';
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-center large">
                        <div class="text-muted">Copyright &copy; Markas Digital</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../assets/demo/chart-area-demo.js"></script>
    <script src="../assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="../assets/js/datatables-simple-demo.js"></script>
</body>

</html>

<?php

if ($_REQUEST['login'] == 'true') {
?> <script>
        $(document).ready(function() {
            Swal.fire({
                title: "Good job!",
                text: "You clicked the button!",
                icon: "success"
            });
        })
    </script><?php
            }

                ?>