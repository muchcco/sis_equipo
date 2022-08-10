@extends('ingreso.aplogin')

@section('style')

<style>

    .content{
        width: 100%;
    }

    .head-content{
        border-bottom:1px solid red;
        width: 100%;
    }

    .body-content{
        margin-top: 2em;
    }

    .head-body{
        display: flex;
        flex-flow: wrap row;        
        justify-content: space-around;
        
    }

    .cuadro{
        text-align: center;
        height: 5em;
        margin: 0;
        padding: 0;
    }

    .text-cuadro{
        width: 20%;
        height: 50%;
    }

    .relation{
        width: 40%;
        height: 100%;
        margin-top: 9px;
    }

    .cuadro-index{
        display: flex;
    }

</style>

@endsection

@section('adminlogin')

<div class="content">
    <div class="head-content">
    <div class="text-head">
        <h3><i class="icon-mobile-phone"></i> Bienvenido a la plataforma de servicios moviles del INIA</h3>
    </div>    
    </div>

    <div class="body-content">
    <div class="head-body">
        <div class="cuadro col-sm-3" style="background: #3F87FF" > 
            <div class="cuadro-index">
                <div class="text-cuadro" style="background: #3469C2;">
                    <h1><i class="icon-truck" style="color:#E8E8E8;"></i></h1>
                </div>
                <div class="relation">
                    <div class="title-cuadro">
                        <p style="font-size:1.2em; color:#fff; font-weight: bold;"> {{ $count_entrega }} </p>
                    </div>
                    <div class="body-cuadro">
                        <p style="font-size:1em; color:#fff; font-weight: lighter;">Entrega de Equipos</p>
                    </div>
                </div>
            </div>            
        </div>
        <div class="cuadro col-sm-3" style="background: #FF5151">
            <div class="cuadro-index">
                <div class="text-cuadro" style="background: #B63333;">
                    <h1><i class="icon-refresh" style="color:#E8E8E8; font-weight: bold;"></i></h1>
                </div>
                <div class="relation">
                    <div class="title-cuadro">
                        <p style="font-size:1.2em ;color:#fff;"> {{ $count_devolucion }}</p>
                    </div>
                    <div class="body-cuadro">
                        <p style="font-size:1em; color:#fff; font-weight: lighter;">Devolución de Equipos</p>
                    </div>
                </div>
            </div>    
        </div>
        <div class="cuadro col-sm-3" style="background: #26a69a">
            <div class="cuadro-index">
                <div class="text-cuadro" style="background: #1B756D;">
                    <h1><i class="icon-group" style="color:#E8E8E8; font-weight: bold;"></i></h1>
                </div>
                <div class="relation">
                    <div class="title-cuadro">
                        <p style="font-size:1.2em; color:#fff;">{{ $count_total }}</p>
                    </div>
                    <div class="body-cuadro">
                        <p style="font-size:1em; color:#fff; font-weight: lighter;">Total de Usuarios</p>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    </div>

</div>




@endsection

@section('script')

<link rel="stylesheet" href=" {{ asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js') }} ">

<script>
    import Chart from 'chart.js';
    var myChart = new Chart(ctx, {...});
</script>

@endsection