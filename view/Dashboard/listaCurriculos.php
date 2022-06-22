<?php
require_once '../../controller/Login/validaSessao.php';
include_once '../../model/connect.php';
$is_admin = $_SESSION["is_admin"];
if ($is_admin != 1) {
    header('Location: ../Dashboard/main.php?');
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Curriculos</title>
    <link href="../../assets/css/bootstrap.css" type="text/css" rel="stylesheet" />
    <script src="../../assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="../../assets/js/sorttable.js"></script>
    <style>
        /* Sortable tables */
        table.sortable thead {
            background-color: #eee;
            color: #666666;
            font-weight: bold;
            cursor: default;
        }
    </style>
</head>

<body>
    <!-- <header> -->
    <?php
    include_once '../includes/navbar.php';
    ?>
    <!-- </header> -->

    <div class="container">
        <h3>Currículos</h3>
        <table class="table table-striped sortable">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Visualizar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once '../../model/connect.php';
                include_once '../../model/curriculoRequests.php';

                $stmt = SearchResumes($conexao);
                while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                ?>
                    <tr>
                        <td><?php echo htmlentities($rs->name); ?></td>
                        <td><?php echo htmlentities($rs->email); ?></td>
                        <td>
                            <button type="button" class="btn btn-default" aria-label="Left Align" title="Editar" onclick="window.location.href = '<?php echo "../Dashboard/detalhesCurriculo.php?resumeId=" . $rs->resume_id; ?>'">
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </button>
                        </td>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>

    </div>


</body>

</html>