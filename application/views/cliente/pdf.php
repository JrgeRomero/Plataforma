<html>
<head>
    <title>Cliente_<?php echo $icli ['nombre'];?></title>
    <style>
        @page{
        margin:50px 60px;
        }
        *{
            font-family:Calibri,sans-serif;
            /*font-size:13px;/** */
        }
        body,header,table{font-size:13px;}
        .fechacabecera{
            position:absolute;
            top: 0px;
            right:270px;
        }
        .fechacabecera2{
            position:absolute;
            top: 20px;
            right:270px;
        }
        .logo2{
            position:absolute;
            top: 0px;
            right:0px;
        }
        .tabla{
            border-collapse: collapse;
            width:100%;
            text-align: center;
            border-spacing: 20px;
        }
        tr,td{
            border-bottom: 1px solid #093735;
            width: 25%;
            border-spacing: 20px;
            padding:7px;
        }
        .footer{
        bottom:;
        clear: both;
        position: absolute;
        top:93%;
        color:#716f6f;
        font-size:10px;
        }

    </style>
</head>
<body>
    <header>
        <img src="<?php echo base_url("resources/imagenes/meraki_letras.png"); ?>" width="150px" height="100px" />
        <p class="fechacabecera"> <b>  Fecha de Consulta :</b></p><br>
        <p class="fechacabecera2"><?php echo date('Y/m/d  H:i:s'); ?></p>
        <img class="logo2" src="<?php echo base_url("resources/imagenes/logo_meraki.png"); ?>" width="100px" height="100px" />
    </header>
    <h4>A continuación se muestra toda la información del cliente solicitado</h4>
    <table class="tabla" >
        <tr>
            <td colspan="2">
                <b> Nombre Completo</b>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <?php echo $icli['nombre'].' '.$icli['apaterno'].' '.$icli['amaterno']; ?>
            </td>
        </tr><br><br>
        <tr>
            <td><b>Fecha de nacimiento </b></td>
            <td><b>Empresa</b></td>
        </tr>
        <tr>
            <td><?php echo $icli['fnacimiento']; ?></td>
            <td><?php echo $icli['empresa']; ?></td>
        </tr>
        <tr>
            <td><b>Fecha de inicio de contrato </b></td>
            <td><b> Teléfono </b></td>
        </tr>
        <tr>
            <td><?php echo $icli['finicio']; ?></td>
            <td><?php echo $icli['telefono']; ?></td>
        </tr>
        <tr>
            <td><b>  Correo</b> </td>
            <td><b> RFC </b></td>
        </tr>
        <tr>
            <td><?php echo $icli['correo']; ?></td>
            <td><?php echo $icli['rfc']; ?></td>
        </tr>
        <tr>
            <td><b> Tipo de pago</b> </td>
            <td><b> Dirección</b> </td>
        </tr>
        <tr>
            <td><?php echo $icli['tipopago']; ?></td>
            <td><?php echo $icli['direccion']; ?></td>
        </tr>
    </table>
    <footer class="footer">
        <p>Meraki Technology 2020 </p>
        <p>Telefono:</p>
        <p>Correo</p>
        <p>Versión de Documento:1.0</p>
    </footer>
</body>
</html>