<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <script src="../../assets/js/bootstrap.min.js"></script>
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../assets/css/main.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <?php
        if (isset($_GET['return'])) {
            echo '<script> window.alert("' . $_GET["return"] . '") </script>';
        }
        ?>
        <header class="row">
            <br />
        </header>
        <article>

            <div class="col-md-6 col-md-offset-3" style="margin-top: 10%;">
                <form action="../../controller/Login/processaLogin.php" method="POST" name="formLogin" class="form-horizontal">
                    <div class="panel panel-default" style="border: none; box-shadow: 7px 7px 13px #364a6f;">
                        <div class="panel-heading">
                            <span class="panel-title">Login</span>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" name="email" class="form-control" placeholder="Email"/>
                                    <span class="glyphicon glyphicon-user" style="position: absolute;top: 0;right: 11px;z-index: 2;display: block;width: 34px;height: 34px;line-height: 34px;text-align: center;pointer-events: none;"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="password" name="senha" class="form-control" placeholder="Senha"/>
                                    <span class="glyphicon glyphicon-lock" style="position: absolute;top: 0;right: 11px;z-index: 2;display: block;width: 34px;height: 34px;line-height: 34px;text-align: center;pointer-events: none;"></span>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="clearfix">
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary " /><span class="glyphicon glyphicon-ok"></span> Entrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </article>
    </div>
</body>

</html>