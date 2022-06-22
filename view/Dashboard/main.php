<?php
require_once '../../controller/Login/validaSessao.php';
include_once '../../model/connect.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculos</title>
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
        <h3> Olá, seja bem vindo <?= $_SESSION['name']; ?></h3>

        <div class="row">
            <form action="../../controller/Curriculos/processaInclusaoCurriculo.php" method="POST" class="form-horizontal">
                <input type="hidden" name="token" value="<?php echo $_SESSION['token'] ?? '' ?>">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="panel-title">Inserir Curriculo</span>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="datahora" class="col-sm-4 control-label">Nome*</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" disabled <?php echo 'value="' . $_SESSION["name"] . '"' ?>>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="datahora" class="col-sm-4 control-label">Email*</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" disabled <?php echo 'value="' . $_SESSION["email"] . '"' ?>>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="datahora" class="col-sm-4 control-label">Telefone</label>
                            <div class="col-md-5">
                                <input type="text" name="phone" class="form-control" placeholder="(00) 00000-0000">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="datahora" class="col-sm-4 control-label">Website</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="website" placeholder="www.example.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="datahora" class="col-sm-4 control-label">Experiencia*</label>
                            <div class="col-md-5">
                                <textarea type="text" class="form-control" required rows="5" name="experience" placeholder="Descreva sua experiência profissional"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="panel-footer">
                        <div class="clearfix">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary" /><span class="glyphicon glyphicon-ok"></span>Salvar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


</body>

</html>