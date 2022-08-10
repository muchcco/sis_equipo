<!DOCTYPE html>
<html lang="en">
<head>
    <title>Acta de {{ $tipo_reparto }}  de equipo móvil - {{ $nom_completo }} </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        

        .logo{
            display: flex;
            justify-content: space-around;
            width: 100%;
        }

        .img-logo{
            width: 100%;
        }

        .imglogo{max-width: 100%; opacity: .5;}

        .title-logo{
            width: 50%;
            border: 1px solid red;
        }

        .tabla{
            width: 100%;
        }

        .firma-2{
            border-top: 1px solid #000;
            width: 180px;
            padding-top: 0;
            margin-top:-2em;
            
        }

        .reparto{
            text-transform: lowercase;
        }

        p{
          font-size: 14px;
        }

    </style>
</head>
<body >
<div class="content">
    <div class="col-sm-8 text-left">
        <div class="logo">            
          <img class="imglogo" src="img/pdf/inia-logo.png" alt="logo" >            
        </div>
        <p style="text-align: center; font-size: 10px; color:#636363;">"Decenio de la  de oportunidades para mujeres y hombres"</p>
        <p style="text-align: center; font-size: 10px; color: #636363;">"Año del Fortalecimiento de la Soberanía Nacional"</p>

        <h3 style="text-align: center;  text-transform: uppercase;" >ACTA DE {{ $tipo_reparto }}  DE EQUIPO MÓVIL</h3>
        <p>La Unidad de Informática hace <span class="reparto" > {{ $tipo_reparto }}</span> del equipo móvil al Sr(a) <span style="text-transform: capitalize;">{{ $nom_completo }}</span>, identificado con DNI N° {{ $DNI }}  en el cargo de <span> {{ $cargo }}</span>, en adelante receptor.</p>

        <p>El equipo móvil cuenta con las siguientes caracteristicas:</p>

        <p>DATOS DEL EQUIPO MÓVIL:</p>

        <ul>
            <li>Marca        :  {{ $marca }} </li>
            <li>Modelo       :  {{ $modelo }} </li>
            <li>IMEI         :  {{ $IMEI }} </li>
            <li>N° Celular   :  {{ $n_celular }} </li>
            <li>Estado       :  {{ $estado_cel }} </li>
        </ul>

        <p>ACCEESORIOS:</p>
        <ul>
            <li>Adaptador de Corriente UDB: @if($adaptador == 0)  SI  @elseif($adaptador == 1) NO  @endif</li>
            <li>Cable USB :  @if($cable_usb == 0)  SI  @elseif($cable_usb == 1) NO  @endif</li>
            <li>SIM Card  : @if($sim_card == 0)  SI  @elseif($sim_card == 1) NO  @endif</li>
        </ul>


        @if($tipo_reparto === 'ENTREGA')

        <p>El Receptor declara conocer y asumir la responsabilidad del uso adecuado del equipo.</p>

        <p>En caso de extravío, pérdida o sustracción del equipo, el Receptor es el único responsable para reponer el equipo móvil. El hecho anterior deberá ser comunicado inmediatamente adjuntando la denuncia policial a la Unidad de Informática para coordinar con el Proveedor la reposición del equipo móvil.</p>

        @elseif($tipo_reparto === 'DEVOLUCION')

        <p>Observaciones:................................................................................................................................................... <br /> ........................................................................................................................................................................... <br /> ........................................................................................................................................................................... <br /> ........................................................................................................................................................................... <br /> ...........</p>

        @endif
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <table class="tabla" >
            <tr>
                <th style="font-size: 14px;">
                    <div class="firma-2">
                        <h4>  FIRMA</h4>
                    </div>
                </th>
                <th></th>
                <th style="font-size: 14px;">
                    <div class="firma-2">
                        <h4>  FIRMA</h4>
                    </div>
                </th>
            </tr>
            <tr>
                <td style="font-size: 12px;">
                    Nombres: <span style=" text-transform:uppercase;">{{ $nombre }}</span><br>
                    Apellidos: <span style=" text-transform:uppercase;">{{ $ap_paterno }} {{ $ap_materno }}</span><br>
                    DNI: <span style=" text-transform:uppercase;">{{ $DNI }} </span><br>
                    Fecha de <span class="reparto" > {{ $tipo_reparto }}:</span> <?php echo date("d/m/20y");?>
                </td>
                <td style="width: 13em;"> </td>
                <td style="font-size: 12px;">
                    Nombres: EDILBERTO ALEJANDRO<br>
                    Apellidos: FARIAS AGUIRRE<br>
                    DNI: 10452784 <br>
                    Fecha de <span class="reparto" > {{ $tipo_reparto }}</span>: <?php echo date("d/m/20y");?>
                </td>
            </tr>
        </table>
        <br>
        <br>
        <div class="logo" style="opacity: .5">
            <img class="imglogo" src="{{('img/direccion.png')}}" alt="" width="180" height="50" style="margin-left: 2px;">
            <img class="imglogo" src="img/pdf/pie_pagina.png" alt="" height="50" style="margin-left: 32em;">
        </div>

    </div>
</div>



</body>
</html>
