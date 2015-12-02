<html lang="en">
    <head>
        <title>FREDOUG</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">FreDoug</a>
                </div>
                <div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Inicio</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Inventario <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Bodega</a></li>
                                <li><a href="#">Químicos</a></li>
                                <li><a href="#">Bombas</a></li>                        
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Recursos Humanos<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Planilla</a></li>
                                <li><a href="#">Supervisores</a></li>
                                <li><a href="#">Entidades Bancarias</a></li> 
                                <li><a href="#">Relaciones Laborales</a></li>                        
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Clientes<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Empresas</a></li>
                                <li><a href="#">Fincas</a></li>
                                <li><a href="#">Zonas</a></li>                        
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Aplicaciones<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Boletas de aplicacion</a></li>                 
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="col-md-6">
              

                <h1>Registro Nueva Bodega</h1>
                <form name="fromUsuario" method="POST" action="DataBase/InsertarUsuario.php">
                    <table width="500px" CELLSPACING="30" >
                        <tr>
                            <td>Nombre: *</td> <td><input type="text" ng-model="nombre" name="nombre"  id="nombre" required></td>
                        </tr>
                        <tr>
                            <td> <label for="empresa">Empresa: *</label> </td>
                            <td>
                                <hr>
                                <label>Nombre</label>
                                <select id="nombre">
                                    <option value="0">Selecionar</option>
                                </select>
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td> <label for="distrito">Ubicación: *</label> </td>
                            <td>
                                <hr>
                                <label>Provincia</label>
                                <select id="provincia">
                                    <option value="0">Selecionar</option>
                                </select>
                                <hr>
                                <label>Canton</label>
                                <select id="canton">
                                    <option value="0">Selecionar</option>
                                </select>
                                <hr>
                                <label>Distrito</label>
                                <select name="distrito" id="distrito">
                                    <option value="0">Selecionar</option>
                                </select>
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td> <label for="direccion">Otras Señas: *</label> </td>
                            <td> <textarea name="direccion" maxlength="200" cols="30" rows="5" required ></textarea> </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align:right">
                                <input type="submit" value="Registrar">
                            </td>
                        </tr>
                    </table>
                </form>
                
            </div>

            <div class="row">
                
                <div class="col-md-3">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#">Bodega</a></li>
                        <li><a href="#">Agregar</a></li>
                        <li><a href="#">Buscar</a></li>
                        <li><a href="#">Modificar</a></li>
                    </ul>
                </div>
                <div class="clearfix visible-lg"></div>
            </div>
        </div>

    </body>
</html>