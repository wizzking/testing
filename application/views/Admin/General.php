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
            <form id="form-create-usuario" style="padding:0px 15px;"class="form-horizontal" role="form" action="<?php base_url();?>SaveGeneral" method="POST">
            
            <div class="form-group">
            <label for="">Telefono</label>
            <input type="text" class="form-control" name="txtTelefono" id="txtTelefono" placeholder="Telefono">
            </div>

            <div class="form-group">
            <label for="">Correo</label>
            <input type="text" class="form-control" name="txtCorreo" id="txtCorreo" placeholder="Correo">
            </div>

            <div class="form-group">
            <label for="">Direccion</label>
            <input type="text" class="form-control" name="txtDireccion" id="txtDireccion" placeholder="Direccion">
            </div>

            <div class="form-group">
            <label for="">Get In Touch With Us</label>
            <input type="text" class="form-control" name="txtGet" id="txtGet" placeholder="Get In Touch With Us">
            </div>

            <div class="form-group">
            <label for="">Best of our features</label>
            <input type="text" class="form-control" name="txtBest" id="txtBest" placeholder="Best of our features">
            </div>

            <div class="form-group">
            <label for="">Meet Our Team</label>
            <input type="text" class="form-control" name="txtMeet" id="txtMeet" placeholder="Meet Our Team">
            </div>



            <button type="submit" class="btn btn-primary btn-block" value="Registrar">Registrar</button>

            </form>
            </div>
</div>
</div>


         
        </div>
    </div>
</body>
<script src="<?php echo base_url('assets/js/jquery-1.11.3.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/LoadGeneralAdm.js');?>"></script>
<script src="<?php echo base_url('assets/js/SendData.js');?>"></script>
</html>