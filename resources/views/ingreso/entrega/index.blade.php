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

    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        
    }

</style>

@endsection


@section('adminlogin')

<div class="content">
    <div class="head-content">
    <div class="text-head">
        <h3><i class="icon-mobile-phone"></i> Lista de usuarios a repartir equipos moviles</h3>
    </div>    
    </div>

    <div class="body-content">
        <div class="kt-portlet__body">                
            <!--begin: Datatable -->
            <table class="table data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Cargo</th>
                        <th>Area</th>
                        <th>DNI</th>
                        <th>N° de Celular</th>
                        <th>Archivo</th>
                        <th>Estado</th>
                        <th>Actualizado </th>
                        <th >Action</th>
                    </tr>
                </thead>
            </table>

            <!--end: Datatable -->
        </div>
    </div>

</div>
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
            ajax: "{{ route('ingreso.entrega.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'nombre', name: 'nombre'},
                {data: 'ap_paterno', name: 'ap_paterno'},
                {data: 'cargo', name: 'cargo'},
                {data: 'oficina', name: 'oficina'},
                {data: 'DNI', name: 'DNI'},
                {data: 'n_celular', name: 'n_celular'},

               {data: 'dowload', name: 'dowload', orderable: false, searchable: false},

                //{ data: 'flag', name: 'flag' },

                {
                    data: 'flag',
                    render: function(data, type, row){
                        return data == '1' ? '<p style="color:green">Envio</p>' : '<p style="color:red">No Envio</p>'
                    }
                },

                { data: 'updated_at', name: 'updated_at' },

                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

        $('#createNewEntrega').click(function () {
            $('#saveBtn').val("create-Entrega");
            $('#entrega_id').val('');
            $('#devolucionform').trigger("reset");
            $('#modelHeading').html("Create New Devolucion");
            $('#ajaxModel').modal('show');
        });

        $('body').on('click', '.editEntrega', function () {
            var entrega_id = $(this).data('id');
            $.get("{{ route('ingreso.entrega.index') }}" +'/' + entrega_id +'/edit', function (data) {
                $('#modelHeading').html("Edit Devolucion");
                $('#saveBtn').val("edit-user");
                $('#ajaxModel').modal('show');
                $('#entrega_id').val(data.id);
                $('#nombre').val(data.nombre);
                $('#ap_paterno').val(data.ap_paterno);
                $('#cargo').val(data.cargo);
                $('#DNI').val(data.DNI);
                $('#n_celular').val(data.n_celular);
                $('#archivo').val(data.archivo);
            })
        });
        
        $('body').on('click', '#botonView', function () {
            var entrega_id = $(this).data('id');
            //console.log(entrega_id);

            var ruta = ' {{ url('ingreso/entrega') }}/'+entrega_id;
            //console.log(ruta);
            window.location.href = ruta;
            
        });

        $('body').on('click', '#botonEdit', function () {
            var entrega_id = $(this).data('id');
            //console.log(entrega_id);

            var ruta = ' {{ url("ingreso/entrega/") }}/'+entrega_id+'/edit';
            //console.log(ruta);
            window.location.href = ruta;
            
        });

        $('body').on('click', '#botonFile', function () {
            var entrega_id = $(this).data('id');
            //console.log(entrega_id);

            var ruta = '{{ url('ingreso/entrega/file') }}/'+entrega_id;
            //console.log(ruta);
            window.location.href = ruta;
            
        });

    });


</script>

@endsection
