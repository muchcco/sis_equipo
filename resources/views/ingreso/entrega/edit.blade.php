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
        /* margin-top: .2em; */
        border-top: 1px solid #3f3f3f;
        border-bottom: 1px solid #3f3f3f;
    }

</style>

@endsection

@section('adminlogin')

<div class="content">
    <div class="head-content">
    <div class="text-head">
        <h4><i class="icon-mobile-phone"></i> EDITAR EQUIPO MÓVIL</h4>
    </div>    
    </div>

    <div class="body-content">
        <a class="btn btn-success" href="{{ route('ingreso.entrega.index') }} " id="createNewDevolucion" style="margin-bottom: 2em;"> Regresar</a>
        <div class="kt-portlet__body">                
            <!--begin: Datatable -->
            
            <form class="form" action="{{route('ingreso.entrega.update', $product->id_equipo)}}" enctype="multipart/form-data" method="post">
            
                {{ method_field('put') }}
                {{ csrf_field() }}
                         
                <div class="row">
                    <div class="marco col-sm-10">
    
                        <!-- Cabecera -->
                        <div class="cabecera col-ms-12">
                            <div class="form-group">
                                <label>DNI</label>
                                <div class="input-group">
                                    <input type="text"  class="form-control " name="DNI" id="DNI" value="{{ $product->DNI }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nombres</label>
                                <div class="input-group">
                                    <input type="text"  class="form-control" id="nombre" name="nombre" value="{{ $product->nombre }}"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Apellido Paterno</label>
                                <div class="input-group">
                                    <input type="text"  class="form-control" id="ap_paterno" name="ap_paterno" value="{{ $product->ap_paterno }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Apellido Materno</label>
                                <div class="input-group">
                                    <input type="text"  class="form-control" id="ap_materno" name="ap_materno" value="{{ $product->ap_materno }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Dependencia</label>
                                <div class="input-group">
                                    <input type="text"  class="form-control" name="oficina" id="oficina" value="{{ $product->oficina }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Cargo que Ejerce</label>
                                <div class="input-group">
                                    <input type="text"  class="form-control" name="cargo" id="cargo" value="{{ $product->cargo }}">
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
                                    <input type="text"  class="form-control" name="marca" id="marca" value="{{ $product->marca }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Modelo del equipo</label>
                                <div class="input-group">
                                    <input type="text"  class="form-control" name="modelo" id="modelo" value="{{ $product->modelo }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">IMEI del equipo</label>
                                <div class="input-group">
                                    <input type="text"  class="form-control" id="IMEI" name="IMEI" value="{{ $product->IMEI }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">SIM del equipo</label>
                                <div class="input-group">
                                    <input type="text"  class="form-control" id="SIM" name="SIM" value="{{ $product->SIM }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Número del equipo</label>
                                <div class="input-group">
                                    <input type="text"  class="form-control" id="n_celular" name="n_celular" value="{{ $product->n_celular }}">
                                </div>
                            </div>     
                            <div class="form-group">
                                <label for="">Estado del equipo</label>
                                <div class="input-group">
                                    <input type="text"  class="form-control" id="estado_cel" name="estado_cel" value="{{ $product->estado_cel }}">
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
                                    <select name="adaptador" class="form-control" id="adaptador">
                                        <option value="--- Selecciones una Opción ---" disabled="true" selected="true" required>--- Selecciones una Opción ---</option>
                                        <option value="0" @if ($product->adaptador == 0) selected @endif> SI </option>
                                        <option value="1" @if ($product->adaptador == 1) selected @endif> NO </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Cable USB</label>
                                <div class="input-group">
                                    <select name="cable_usb" class="form-control" id="">
                                        <option value="--- Selecciones una Opción ---" disabled="true" selected="true" required>--- Selecciones una Opción ---</option>
                                        <option value="0" @if ($product->cable_usb == 0) selected @endif> SI </option>
                                        <option value="1" @if ($product->cable_usb == 1) selected @endif> NO </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">SIM card</label>
                                <div class="input-group">
                                    <select name="sim_card" class="form-control" id="">
                                        <option value="--- Selecciones una Opción ---" disabled="true" selected="true" required>--- Selecciones una Opción ---</option>
                                        <option value="0" @if ($product->cable_usb == 0) selected @endif> SI </option>
                                        <option value="1" @if ($product->cable_usb == 1) selected @endif> NO </option>
                                    </select>
                                </div>
                            </div>
                            
                            
                        </div>
    
    
                        <!-- <div class="cabecera col-ms-12">
                            <div class="generar">
                                <nav style="color: red;"><i class="icon-download-alt"></i> Descargar Documento Firmado</nav>
                                <a  class="btn btn-success botonFile" id="botonFile"  data-id=" {{ $product->id }} " > {{ $product->archivo }} </a>
                            </div>
                        </div>
 -->    
                      
                        
                    </div>               
                </div>               
                <div class="pie_entrega row">
                    <input type="submit" name="submit" value="Guardar" class="btn btn-danger">
                </div>
            </form>


        </div>
    </div>

</div>




@endsection

<!-- @section('script')

<script>
    
    $(function (){
            
    
         $('body').on('click', '#botonFile', function () {
                var entrega_id = $(this).data('id');
                console.log(entrega_id);
    
                var ruta = ' {{ url('ingreso/entrega/file') }}/'+entrega_id;
                //console.log(ruta);
                window.location.href = ruta;
                
            });
     });
    </script>

@endsection -->
