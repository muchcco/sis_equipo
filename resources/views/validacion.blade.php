@extends('layouts.apinicio')
@section('estilo')

<style>
    .text{
        margin-top: 1em;
        text-align: center;
    }
    
    .cabecera_search{
        width: 100%;
    }

    .titulo_DNI{
        border-bottom:1px solid #3f3f3f;
        padding: 1em;
    }

    .formulario{
        padding: 2em 1em 1em 1em ;
        display: flex;
        flex-flow: wrap row;
        justify-content: space-around;
    }
    .form{
        width: 80%;
        display: flex;
        flex-wrap: row;
        justify-content: center;
    }

    .buscador__DNI{
        width: 80%;
        display: flex;
        justify-content: center;
    }

    .input-check{
        display: flex;
        justify-content: space-around;
        margin-bottom: 1em;
    }
</style>

@endsection
@section('script')

<script>



    // solo permite usar 8 digitos
    var input=  document.getElementById('DNI');
        input.addEventListener('input',function(){
        if (this.value.length > 8) 
            this.value = this.value.slice(0,8); 
        })
    
    //cargar las variables
    window.addEventListener("load", function() {
        formulario.DNI.addEventListener("keypress", soloNumeros, false);
    });

    //Solo permite introducir numeros.
    function soloNumeros(e){
        var key = window.event ? e.which : e.keyCode;
        if (key < 48 || key > 57) {
            e.preventDefault();
        }
    }
</script>

@endsection
@section('content')
        <div class="cabecera_search flex-center">
            
            <div class="titulo_DNI content">
                <div class="title m-b-md">
                    <h4><i class="icon-list-ul"></i> INGRESE EL NUMERO A CONSULTAR</h4>
                </div>                
            </div>

          

            <div class="formulario">
                
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Celular</th>
                        <th scope="col">SIM</th>
                        <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($num as $n)                        
                      <tr>
                        <th scope="row"></th>
                        <td>{{ $n->n_celular }}</td>
                        <td>{{ $n->SIM }}</td>
                        <td>
                            <form  action=" {{ url('search') }} " method="get">
                                <input type="hidden" name="DNI" value="{{ $n->DNI }}">
                                <input type="hidden" name="tipo_reparto" value="{{ $n->tipo_reparto }}">

                                <button type="submit" class="btn btn-info btn-sm">ingresar</button>
                            </form>
                        </td>
                      </tr>
                        
                      @endforeach
                    </tbody>
                  </table>

            </div>

            <a href="{{ route('welcome') }}" class="btn btn-danger btn-sm">Regresar</a>

            <div class="text">
                <p>Estimado usario la siguiente plataforma es solo para uso de Entrega / Deposicion de equipos moviles</p>
            </div>

            <div class="footer_search content">
                <div class="content">

                </div>
            </div>

        </div>

       

@endsection

