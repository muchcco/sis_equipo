@extends('ingreso.aplogin')
@section('style')
<style>

    .content{
        width: 100%;
    }

    .head-content{
        border-bottom:1px solid #3f3f3f;
        width: 100%;
        
    }

    .body-content{
        margin: 2em 2em 2em 2em;
    }

    .cabecera{
        display: flex;
        flex-flow: wrap row;
        justify-content: space-between;
    }

</style>

@endsection

@section('adminlogin')

<div class="content">
    <div class="head-content">
    <div class="text-head">
        <h4><i class="icon-mobile-phone"></i> {{ $datos->nombre }} </h4>
    </div>    
    </div>

    <div class="body-content">
        <a class="btn btn-success" href="{{ route('ingreso.entrega.index') }} " id="createNewDevolucion" style="margin-bottom: 2em;"> Regresar</a>
        <div class="kt-portlet__body">                
            <!--begin: Datatable -->
            
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">Nombre: </label>
                        <input type="text" disabled class="form-control" value=" {{ $datos->nombre }} " >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Apellido Paterno:</label>
                        <input type="text" disabled class="form-control" value=" {{ $datos->ap_paterno }} " >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Apellido Materno:</label>
                        <input type="text" disabled class="form-control" value=" {{ $datos->ap_materno }} " >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">DNI: </label>
                        <input type="text" disabled class="form-control" value=" {{ $datos->DNI }} " >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Correo:</label>
                        <input type="text" disabled class="form-control" value=" {{ $datos->correo }} " >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Cargo:</label>
                        <input type="text" disabled class="form-control" value=" {{ $datos->cargo }} " >
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group col-md-4">
                        <label for="">Oficina: </label>
                        <input type="text" disabled class="form-control" value=" {{ $datos->oficina }} " >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">N° de Celular:</label>
                        <input type="text" disabled class="form-control" value=" {{ $datos->n_celular }} " >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Estado del Celular:</label>
                        <input type="text" disabled class="form-control" value=" {{ $datos->estado_cel }} " >
                    </div>
                </div>
                <div class="form-row ">
                    <div class="form-group col-md-4">
                        <label for="">IMEI: </label>
                        <input type="text" disabled class="form-control" value=" {{ $datos->IMEI }} " >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">SIM:</label>
                        <input type="text" disabled class="form-control" value=" {{ $datos->SIM }} " >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Marca:</label>
                        <input type="text" disabled class="form-control" value=" {{ $datos->marca }} " >
                    </div>
                </div>
                
                <div class="form-row ">
                    <div class="form-group col-md-4">
                        <label for="">Modelo: </label>
                        <input type="text" disabled class="form-control" value=" {{ $datos->modelo }} " >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">adaptador:</label>
                        <input type="text" disabled class="form-control" value=" {{ $datos->adaptador }} " >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Cable USB:</label>
                        <input type="text" disabled class="form-control" value=" {{ $datos->cable_usb }} " >
                    </div>
                </div>
                <div class="form-row ">
                    <div class="form-group col-md-4">
                        <label for="">SIM card:</label>
                        <input type="text" disabled class="form-control" value=" {{ $datos->sim_card }} " >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Adaptador:</label>
                        <input type="text" disabled class="form-control" value="devolucion" value=" {{ $datos->adaptador }} " >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Archivo:</label>
                        <br>
                        <a href="" class="btn">{{ $datos->archivo }} </a>
                    </div>
                </div>

            <!--end: Datatable -->
        </div>
    </div>

</div>

@endsection