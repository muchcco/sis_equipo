@extends('layouts.apinicio')
@section('estilo')
<style>

    .content{
        border-bottom: 1px solid #3f3f3f;
        padding: 1em;
    }

    .encabezado_entrega{
        display: flex;
        padding-left: 1em;
        flex-flow: wrap row;
        justify-content: flex-start;
    }

    .pie_entrega{
        display: flex;
        padding-right: 1em;
        flex-flow: wrap row;
        justify-content: flex-end;
    }

    .marco{
        display: inline-block;
    }
    .cabecera{
        display: flex;
        flex-flow: row wrap;
        justify-content: space-between;
    }
    .form{
        padding: 1.3em 1.3em 1.3em 1.5em;
        margin-top: 3em;
    }
</style>
@endsection

@section('content')

<div class="flex-center">
            
    <div class="titulo_search content">
       
        <div class="title m-b-md">
            
            <h4><i class="icon-list-ul"></i> Su registro de {{ $consultas->tipo_reparto }} de cargo</h4>
            
        </div>                
    </div>

    <!-- Message -->
    @if(Session::has('message'))
      <p >{{ Session::get('message') }}</p>
    @endif

    <div class="formulario">
        
        <form class="form" action="{{ route('uploadFile') }}" enctype="multipart/form-data" method="post">
            
           
            {{ csrf_field() }}


            
            <div class="encabezado_entrega row">
                <label for="">Hola {{ $consultas->nom_completo }} </label>
            </div>            
            <div class="row">
                <div class="marco col-sm-10">

                    <!-- Cabecera -->
                    <div class="cabecera col-ms-12">
                        <div class="form-group">
                            <label>DNI</label>
                            <div class="input-group">
                                <input type="text" disabled="true" class="form-control " name="DNI" id="DNI" value=" {{ $consultas->DNI }} ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nombres</label>
                            <div class="input-group">
                                <input type="text" disabled="true" class="form-control" id="nombre" name="nombre" value=" {{ $consultas->nombre }} "> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Apellido Paterno</label>
                            <div class="input-group">
                                <input type="text" disabled="true" class="form-control" id="ap_paterno" name="ap_paterno" value=" {{ $consultas->ap_paterno }} ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Apellido Materno</label>
                            <div class="input-group">
                                <input type="text" disabled="true" class="form-control" id="ap_materno" name="ap_materno" value=" {{ $consultas->ap_materno }} ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Dependencia</label>
                            <div class="input-group">
                                <input type="text" disabled="true" class="form-control" name="oficina" id="oficina" value=" {{ $consultas->oficina }} ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Cargo que Ejerce</label>
                            <div class="input-group">
                                <input type="text" disabled="true" class="form-control" name="cargo" id="cargo" value=" {{ $consultas->cargo }} ">
                            </div>
                        </div>
                    </div>
                    <!-- Datos del equipo -->
                    <div class="form-group">
                        <label for="">Datos del equipo</label>
                    </div>
                    <div class="cabecera col-ms-12">
                        
                        
                        <div class="form-group">
                            <label for="">Marca del equipo</label>
                            <div class="input-group">
                                <input type="text" disabled="true" class="form-control" name="marca" id="marca" value=" {{ $consultas->marca }} ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Modelo del equipo</label>
                            <div class="input-group">
                                <input type="text" disabled="true" class="form-control" name="modelo" id="modelo" value=" {{ $consultas->modelo }} ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">IMEI del equipo</label>
                            <div class="input-group">
                                <input type="text" disabled="true" class="form-control" id="IMEI" name="IMEI" value=" {{ $consultas->IMEI }} ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Número del equipo</label>
                            <div class="input-group">
                                <input type="text" disabled="true" class="form-control" id="n_celular" name="n_celular" value=" {{ $consultas->n_celular }} ">
                            </div>
                        </div>     
                        <div class="form-group">
                            <label for="">Estado del equipo</label>
                            <div class="input-group">
                                <input type="text" disabled="true" class="form-control" id="estado_cel" name="estado_cel" value=" {{ $consultas->estado_cel }} ">
                            </div>
                        </div>
                    </div>

                    <!-- Accesorios del equipo -->
                    <div class="form-group">
                        <label for="">Accesorios del equipo</label>
                    </div>
                    <div class="cabecera col-ms-12">
                        <div class="form-group">
                            <label for="">Adaptador de corriente USB</label>
                            <div class="input-group">
                                <input type="text" disabled="true" class="form-control" id="adaptador" name="adaptador" value=" {{ $consultas->adaptador }} ">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Cable USB</label>
                            <div class="input-group">
                                <input type="text" disabled="true" class="form-control" id="cable_usb" name="cable_usb" value=" {{ $consultas->cable_usb }} ">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">SIM card</label>
                            <div class="input-group">
                                <input type="text" disabled="true" class="form-control" id="sim_card" name="sim_card" value=" {{ $consultas->sim_card }} ">
                            </div>
                        </div>
                        
                        <input type="hidden" name="tipo_reparto" id="tipo_reparto" value=" {{ $consultas->tipo_reparto }} " disabled >
                        <input type="hidden" name="nom_completo" id="nom_completo" value=" {{ $consultas->nom_completo }} " disabled >
                        <input type="hidden" name="id" value=" {{ $consultas->id }} "  >
                        
                        
                    </div>
                
                   


                    <div class="cabecera col-ms-12">
                        <div class="generar">
                            <nav style="color: red;"><i class="icon-download-alt"></i> Generar documento para que firme</nav>
                            <a class="btn btn-success" id="generar" onclick="generarpdf();" >Generer Documento</a>
                        </div>
                        <div class="cargar">
                            <nav style="color: red;"><i class="icon-upload-alt"></i> Subir documento firmado</nav>
                            <input type="file" name="archivo" class=" btn btn-primary" value="" accept="application/pdf" required>
                        </div>
                    </div>

                  
                    
                </div>               
            </div>               
            <div class="pie_entrega row">
                <input type="submit" name="submit" value="Guardar" class="btn btn-danger">
            </div>
        </form>
    </div>

@endsection

@section('script')

<script>
    function generarpdf(){

        var DNI = $('#DNI').val();
        var nombre = $('#nombre').val();
        var ap_paterno = $('#ap_paterno').val();
        var ap_materno = $('#ap_materno').val();
        var oficina = $('#oficina').val();
        var cargo = $('#cargo').val();
        var marca = $('#marca').val();
        var modelo = $('#modelo').val();
        var IMEI = $('#IMEI').val();
        var n_celular = $('#n_celular').val();
        var estado_cel = $('#estado_cel').val();
        var adaptador = $('#adaptador').val();
        var cable_usb = $('#cable_usb').val();
        var sim_card = $('#sim_card').val();
        var tipo_reparto = $('#tipo_reparto').val();
        var nom_completo = $('#nom_completo').val();
       


        var ruta = ' {{ url('acta2') }}?DNI='+DNI+'&nombre='+nombre+'&ap_paterno='+ap_paterno+'&ap_materno='+ap_materno+'&oficina='+oficina+'&cargo='+cargo+'&marca='+marca+'&modelo='+modelo+'&IMEI='+IMEI+'&n_celular='+n_celular+'&estado_cel='+estado_cel+'&adaptador='+adaptador+'&cable_usb='+cable_usb+'&sim_card='+sim_card+'&tipo_reparto='+tipo_reparto+'&nom_completo='+nom_completo;

        var blank = '_blank';

        window.open(ruta, blank);
    }

</script>

@endsection
