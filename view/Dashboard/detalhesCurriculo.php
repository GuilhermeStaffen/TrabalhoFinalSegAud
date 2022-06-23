<?php
require_once '../../controller/Login/validaSessao.php';
include_once '../../model/connect.php';
include_once '../../model/curriculoRequests.php';
$is_admin = $_SESSION["is_admin"];
if ($is_admin != 1) {
    header('Location: ../Dashboard/main.php?');
}
$resumeId = $token = filter_input(INPUT_GET, 'resumeId', FILTER_UNSAFE_RAW);
$stmt = SearchResume($conexao, $resumeId);
$rs = $stmt->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Curriculo</title>
    <link href="../../assets/css/bootstrap.css" type="text/css" rel="stylesheet" />
    <script src="../../assets/js/bootstrap.js" type="text/javascript"></script>
</head>

<body>
    <!-- <header> -->
    <?php
    include_once '../includes/navbar.php';
    ?>
    <!-- </header> -->

    <div class="container">
        <h3> Detalhes do Curriculo </h3>

        <div class="row">
            <input type="hidden" name="token" value="<?php echo $_SESSION['token'] ?? '' ?>">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="panel-title">Curriculo</span>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="datahora" class="col-sm-4 control-label">Nome</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" disabled <?php echo 'value="' . htmlentities($rs->name) . '"' ?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="datahora" class="col-sm-4 control-label">Email</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" disabled <?php echo 'value="' . htmlentities($rs->email) . '"' ?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="datahora" class="col-sm-4 control-label">Telefone</label>
                        <div class="col-md-5">
                            <input type="phone" class="form-control" disabled <?php echo 'value="' . htmlentities($rs->phone) . '"' ?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="datahora" class="col-sm-4 control-label">Website</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" disabled <?php echo 'value="' . htmlentities($rs->website) . '"' ?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="datahora" class="col-sm-4 control-label">Experiencia</label>
                        <div class="col-md-5">
                            <textarea type="text" class="form-control" disabled rows="5" ><?php echo htmlentities($rs->experience); ?></textarea>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


</body>

</html>