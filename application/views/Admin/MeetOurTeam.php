<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Administrador</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url('assets/css/material-dashboard.css?v=1.2.0');?>" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url('assets/css/demo.css');?>" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">Administrador</a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="<?php echo base_url('index.php/Administrador');?>">
                            <i class="material-icons">dashboard</i>
                            <p>Panel</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/Administrador/General');?>">
                            <i class="material-icons">person</i>
                            <p>General</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/Administrador/MeetOurTeam');?>">
                            <i class="material-icons">person</i>
                            <p>Meet Our Team</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/Administrador/Bestofourfeatures');?>">
                            <i class="material-icons">person</i>
                            <p>Best of our features</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/Administrador/ListOfMenu');?>">
                            <i class="material-icons">person</i>
                            <p>List Of Menu</p>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url('index.php/Administrador/Plan');?>">
                            <i class="material-icons">person</i>
                            <p>Plan</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/Administrador/Include');?>  ">
                            <i class="material-icons">person</i>
                            <p>Include</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>




        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#"> Administrador </a>
                    </div>
                </div>
            </nav>








<div class="content">
<div class="container-fluid">



            <div class="container">
            <form id="form-create-usuario" style="padding:0px 15px;"class="form-horizontal" role="form" action="<?php base_url();?>BarraNav/SaveData" method="POST">
            <h2>[--------------------------------------------------------------------------------------------------------------------------]</h2>
            <p>Nuevo Seccion.</p>

            <div class="form-group">
            <label for="txtEdad">Nombre de seccion:</label>
            <input type="text" class="form-control" name="txtNombre" placeholder="Seccion">
            </div>

            <div class="form-group">
            <label for="fileEvidencia">Imagen<small>[solo formato png | jpg]</small>:</label>
            <input type="file" class="form-control-file" name="fileEvidencia" aria-describedby="fileHelp">
            </div>

            <button type="submit" class="btn btn-primary btn-block" value="Registrar">Registrar</button>

            </form>
            </div>



            <!---->
            <div class="row">
            <section class="content">
            <div class="row">
            <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
            <h3 class="box-title">Barra de Navegacion</h3>
            </div>
            <div class="box-body">
            <table id="Exportar_a_Excel" class="table table-hover no-margin">
            <thead>
            <tr>
            <th>Titulo</th>
            <th>Icono</th>
            </tr>
            </thead>
            <tbody id="contenido_tabla"></tbody>
            </table>
            </div>
            </div>
            </div>
            </div>
            </section>
            </div>



</div>
</div>






         
        </div>
    </div>
</body>
<!--scripts-->
</html>