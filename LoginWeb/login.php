<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="./bower_components/bootstrap/dist/css/bootstrap.css"/>
    <link rel="stylesheet" href="./bower_components/bootstrapValidator/dist/css/bootstrapValidator.css"/>

    <script type="text/javascript" src="./bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./bower_components/bootstrapValidator/dist/js/bootstrapValidator.js"></script>



    <script src="./main.js"></script>
    <script src="./app.js"></script>
    <title>Login</title>
</head>
<body>
<div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <!-- <form id="login-form" class="form" action="./BACKEND/index.php/usuarios/Login" method="post"> -->
                        <form id="loginForm" method="post">
                            <h3 class="text-center text-info">Ingreso</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Usuario:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Contraseña:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Recordar</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Enviar" onclick="Login()">
                            </div>
                        </form>    
                            <div id="register-link" class="text-right">
                                <a data-toggle="modal" href="#myModal" class="text-info" >Registro</a>
                            </div>

                            <!-- The Modal -->
                            <div class="modal fade" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Registro</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                <form id="registerForm" method="post">
                                        <div class="form-group">
                                            <label for="username" class="text-info">Username:</label><br>
                                            <input type="text" name="username" id="regusername" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="text-info">Password:</label><br>
                                            <input type="password" name="password" id="regpassword" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="text-info">Re-enter password:</label><br>
                                            <input type="password" name="password" id="regrepassword" class="form-control">
                                        </div>

                                        <div class="form-group">
                                        <div class="col-md-4">
                                        <input type="submit" name="submit" class="btn btn-info btn-md" value="Enviar" onclick="Registro()">
                                        </div>
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                        </div> 

                                </form>
                                </div>

                                <!-- Modal footer -->
                                                          

                                </div>
                            </div>
                            </div>                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>