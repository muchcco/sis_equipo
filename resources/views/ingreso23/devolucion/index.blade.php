@extends('ingreso.aplogin')
@section('style')

<link rel="stylesheet" href=" {{ asset('//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css')}} ">

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
        <h3><i class="icon-mobile-phone"></i> Lista de usuarios a devolver equipos moviles</h3>
    </div>    
    </div>

    <div class="body-content">
        <a class="btn btn-success" href="javascript:void(0)" id="createNewDevolucion" style="margin-bottom: 2em;"> Añadir nuevo</a>
        <div class="kt-portlet__body">                
            <!--begin: Datatable -->
            
            <table class="table data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>nombre</th>
                        <th>apellido</th>
                        <th>Cargo</th>
                        <th>DNI</th>
                        <th>n° de Celular</th>
                        <th>archivo</th>
                        <th >Action</th>
                    </tr>
                </thead>
            </table>

            <!--end: Datatable -->
        </div>
    </div>

</div>

<!--  Modal --> 
@include('ingreso.devolucion.modal');
    
@endsection

@section('script')

<script src="{{ asset('//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
<script>




    $(function (){
        
       
    
        //cargar valores al datatable
        var table = $('.data-table').DataTable({
            "language": {"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"},
            processing: true,
            serverSide: true,
            ajax: "{{ route('ingreso.devolucion.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'nombre', name: 'nombre'},
                {data: 'ap_paterno', name: 'ap_paterno'},
                {data: 'cargo', name: 'cargo'},
                {data: 'DNI', name: 'DNI'},
                {data: 'n_celular', name: 'n_celular'},
                {data: 'dowload', name: 'dowload', orderable: false, searchable: false},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

        $('#createNewDevolucion').click(function () {
            $('#saveBtn').val("create-Devolucion");
            $('#devolucion_id').val('');
            $('#devolucionform').trigger("reset");
            $('#modelHeading').html("Create New Devolucion");
            $('#ajaxModel').modal('show');
        });

        $('body').on('click', '.editDevolucion', function () {
            var devolucion_id = $(this).data('id');
            $.get("{{ route('ingreso.devolucion.index') }}" +'/' + devolucion_id +'/edit', function (data) {
                $('#modelHeading').html("Edit Devolucion");
                $('#saveBtn').val("edit-user");
                $('#ajaxModel').modal('show');
                $('#devolucion_id').val(data.id);
                $('#nombre').val(data.nombre);
                $('#ap_paterno').val(data.ap_paterno);
                $('#cargo').val(data.cargo);
                $('#DNI').val(data.DNI);
                $('#n_celular').val(data.n_celular);
                $('#archivo').val(data.archivo);
            })
        });
        
        $('body').on('click', '#botonView', function () {
            var devolucion_id = $(this).data('id');
            //console.log(devolucion_id);

            var ruta = ' {{ url('ingreso/devolucion') }}/'+devolucion_id;
            //console.log(ruta);
            window.location.href = ruta;
            
        });

        $('body').on('click', '#botonFile', function () {
            var devolucion_id = $(this).data('id');
            //console.log(devolucion_id);

            var ruta = ' {{ url('ingreso/devolucion/file') }}/'+devolucion_id;
            //console.log(ruta);
            window.location.href = ruta;
            
        });

    });


</script>

@endsection

