<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Plataforma educativa tipo Moodle para la comunidad de la Universidad Industrial de Santander UIS">
    <meta name="keywords" content="Universidad Industrial de Santander, UIS, UIS Online, UIS Moodle, Moodle UIS">
    <title> Aula Virtual de Aprendizaje </title>
    <link href="../jspopup/resources/img/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i">
    <link rel="stylesheet" href="../jspopup/vendors/css/grid.css">
    <link rel="stylesheet" href="../jspopup/vendors/css/normalize.css">
    <link rel="stylesheet" href="../jspopup/resources/css/style.css">
    <link rel="stylesheet" href="../jspopup/resources/css/queries.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body>
    <div id="main-wrapper">
        <header>
            <h1 class="hidden">P&aacute;gina de ingreso al Aula Virtual de Aprendizaje ava</h1>
            <nav class="ordinary-nav">
                    <h2 class="hidden">Men&uacute; Principal de Navegaci&oacute;n</h2>
                    <ul class="social-links" id="social-hide">
                        <li><ion-icon name="logo-facebook"></ion-icon></li>
                        <li><ion-icon name="logo-twitter"></ion-icon></li>
                    </ul>
                    <ul class="main-nav">
                        <li><a href="http://www.uis.edu.co" target="_blank">UIS</a></li>
                        <li><a href="http://tic.uis.edu.co/ava/course/category.php?id=2&perpage=20&adminedit=0" target="_blank">CEDEDUIS</a></li>
                        <li><a href="http://tic.uis.edu.co/ava/course/index.php?categoryid=155" target="_blank">Vicerrector&iacute;a Ac&aacute;demica</a></li>
                        <li><a href="http://ipred.uis.edu.co/eisi/" target="_blank">iPred</a></li>
                    </ul>

                    <ul class="social-links">
                        <li><a href="https://www.facebook.com/cededuis/?fref=ts" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a></li>
                        <li><a href="https://twitter.com/cededuis" target="_blank"><ion-icon name="logo-twitter"></ion-icon></a></li>              
                    </ul>                
            </nav>

            <div class="row-mobile">
                <nav class="mobile-nav">
                    <h2 class="hidden">Men&uacute; Navegaci&oacute;n M&oacute;vil</h2>
                    <div id="social-mob-container">

                        <div id="social-mob-subcontainer">
                            <ul class="social-links-mob">
                                <li><a href="https://www.facebook.com/cededuis/?fref=ts" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a></li>
                                <li><a href="https://twitter.com/cededuis" target="_blank"><ion-icon name="logo-twitter"></ion-icon></a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="menu-mob-container">
                        <div class="wrapper-menu">
                            <div id="menu">
                                <p>MEN&Uacute;</p>
                            </div>
                            <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                        </div>                    
                    </div>

                    <div class="menu-mob-container">               
                        <ul class="text-mob-nav js--text-mob-nav">
                            <li><a href="http://www.uis.edu.co" target="_blank">UIS</a></li>
                            <li><a href="http://tic.uis.edu.co/ava/course/category.php?id=2&perpage=20&adminedit=0" target="_blank">CEDEDUIS</a></li>
                            <li><a href="http://tic.uis.edu.co/ava/course/index.php?categoryid=155" target="_blank">Vicerrector&iacute;a Ac&aacute;demica</a></li>
                            <li><a href="http://ipred.uis.edu.co/eisi/" target="_blank">iPred</a></li>
                        </ul>                          
                    </div>
                </nav>
            </div>
        </header>
        <div class="row">
            <div class="col span-1-of-3 uis-logo">
                <div id="uis-logo">     
                    <img src="../jspopup/resources/img/Logo_Uis_Vertical.png" alt="Logo UIS" width="125" height="222">
                </div>
            </div>

            <div class="col span-1-of-3" id="login-container">
                <section class="section-login active" id="section-login">
                    <h2>Aula Virtual de Aprendizaje</h2>
                    <ul>
                        <li class="login-options">
                            <img src="../jspopup/resources/img/Pregrado.png" width="43" height="34" alt="Logo Pregrado" id="pregrado-img">
                            <h3 id="pregrado-head">Pregrado</h3>                        
                        </li>
                        <li class="login-options">
                            <img src="../jspopup/resources/img/Posgrado.png" width="51" height="29" alt="Logo Posgrado" id="posgrado-img">
                            <h3 id="posgrado-head">Posgrado</h3>
                        </li>
                        <li class="login-options">
                            <img src="../jspopup/resources/img/IPRED.png" width="49" height="40" alt="Logo iPred" id="ipred-img">
                            <h3 id="ipred-head">iPred</h3>
                        </li>
                        <li class="login-options">
                            <img src="../jspopup/resources/img/InstitutoLenguasUIS.png" width="53" height="45" alt="Logo Insituto de Lenguas" id="lenguas-img">
                            <h3 id="lenguas-head">Instituto De Lenguas</h3>
                        </li>          
                    </ul>
                    <div id="select">
                        <h3>Seleccione una <span class="soft-green">opci&oacute;n</span></h3>
                    </div>                
                </section>                           

                <section class="section-form inactive" id="section-form">
                    <h2>Aula Virtual de Aprendizaje</h2>
                    <h3>Ingrese <span class="soft-green">aqu&iacute;</span></h3>
                    <form action="<?php echo $CFG->httpswwwroot; ?>/ava/login/index.php" method="post" id="formulario-login" <?php echo $autocomplete; ?> >
                        <label for="username">Nombre de usuario:</label>
                        <input type="text" title="usuario" name="username" id="uname" required><br>
                        <label for="pass">Contrase&ntilde;a:</label>
                        <input type="password" title="clave" name="password" id="pass" required><br>
                        <input type="submit" id="send" value="Iniciar sesi&oacute;n">  
                    </form>
                    <div id="back">
                        <h4 id="back-head">Regresar</h4>
                        <img src="../jspopup/resources/img/Regresar.png" alt="Icono de Regresar" width="39" height="38" id="back-image">
                    </div>
                </section>

            </div>

            <div class="col span-personal instructions-container">
                <section class="section-instructions inactive" id="section-instructions">
                    <h2>Instrucciones de Ingreso</h2>
                    <div class="instrucciones-generales" id="instrucciones-generales">
                        <p>Debe usar de usuario el c&oacute;digo de estudiante y de contrase&ntilde;a la del Sistema de Informaci&oacute;n Acad&eacute;mica.</p>
                    </div>  
                    <div class="instrucciones-posgrado" id="instrucciones-posgrado">
                        <p>Debe usar de usuario y contrase&ntilde;a: e &#43; c&oacute;digo.</p>
                    </div>              
                    <div class="instrucciones-ingles" id="instrucciones-ingles">
                        <p>Debe usar de usuario y contrase&ntilde;a: e &#43; documento de identidad.</p>
                    </div>
                </section>
            </div>  

        </div>
        
        <footer>
            <img src="../jspopup/resources/img/logo_70_uis.png" alt="Logo UIS 70 A&ntilde;os" width="37" height="32">
            <p>Universidad industrial de Santander vigilada mineducaci&oacute;n ordenanza No. 83 de 1994 (junio 22) Car&aacute;cter ac&aacute;demico: Universidad c&oacute;digo SNIES: 1204 Nit: 890201213&mdash;4 Notificaciones judiciales a: notijudiciales&#64;uis.edu.co</p>
        </footer>       
         
    </div> <!-- End of main-wrapper -->
    
    <script src="https://unpkg.com/ionicons@4.2.4/dist/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../jspopup/resources/js/plataformas_ingreso.js"></script>
    
</body>

</html>
