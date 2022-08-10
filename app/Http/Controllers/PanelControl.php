<?php

namespace App\Http\Controllers;

use App\Equipo;
use Session;

use Illuminate\Http\Request;
use PDF;

use Carbon\Carbon;

class PanelControl extends Controller
{
    public function index(){

        return view('welcome');
        
    }

    public function validacion(Request $request)
    {

        $equipos = Equipo::where('dni', $request->DNI)->count();

        if($equipos > 1){

            $num = Equipo::where('dni', $request->DNI)->get();

            return view('validacion', compact('num'));
            
        }elseif($equipos == 1){

            $consultas = Equipo::where([['DNI',  $request->DNI], [ 'flag' , '=' , 0 ] , [ 'tipo_reparto' , '=' , $request->tipo_reparto ]] )->first();
            return view('search', compact('consultas'));

            //dd($consultas);
        }

    }

    public function search(Request $request){

        //dd($request);

        // comprobamos si existe la consulta en la BD

        $consultas = Equipo::where([['DNI',  $request->DNI], [ 'flag' , '=' , 0 ] , [ 'tipo_reparto' , '=' , $request->tipo_reparto ]] )->first(); 

        //dd($consultas);
        
        if(isset($consultas)){

            return view('search', compact('consultas'));

        }else{

            // si no encuentra la consulta retorna a la misma vista

            return redirect('/')->with('warnign', ' - no existe el dni');

        }

        //dd($consultas);

        //return view('search', compact('consultas'));

    }


    public function pdf(Request $request){

        //capturamos los campos del furmulario

        $DNI = $request->DNI;
        $nombre = $request->nombre;
        $ap_paterno = $request->ap_paterno;
        $ap_materno = $request->ap_materno;
        $oficina = $request->oficina;
        $cargo = $request->cargo;
        $marca = $request->marca;
        $modelo = $request->modelo;
        $IMEI = $request->IMEI;
        $n_celular = $request->n_celular;
        $estado_cel = $request->estado_cel;
        $adaptador = $request->adaptador;
        $cable_usb = $request->cable_usb;
        $sim_card = $request->sim_card;
        $tipo_reparto = $request->tipo_reparto;
        $nom_completo = $request->nom_completo;
        $id = $request->id;

        //pasamos al formato pdf

        $pdf = PDF::loadVIew('acta', ['DNI' => $DNI, 'nombre' => $nombre , 'ap_paterno' => $ap_paterno, 'ap_materno' => $ap_materno, 'oficina' => $oficina, 'cargo' => $cargo, 'marca' => $marca, 'modelo' => $modelo, 'IMEI' =>  $IMEI, 'n_celular' => $n_celular, 'estado_cel' => $estado_cel, 'adaptador' => $adaptador, 'cable_usb' => $cable_usb, 'sim_card' => $sim_card, 'tipo_reparto' => $tipo_reparto, 'nom_completo' => $nom_completo ])
            ->setOptions(['defaultFont' => 'sans-serif'])->setPaper('a4');

        // retornamos a la vista del pdf

        return $pdf->stream('acta.pdf');

    }

    public function uploadFile(Request $request){

        $id = $request->id;

        $empleado=Equipo::FindOrFail($id);
        $empleado->archivo = $request->archivo;
        $empleado->flag = 1;
        if ($request->hasFile('archivo')){
            $archivoPDF=$request->file('archivo');
            $nombrePDF=time().$archivoPDF->getClientOriginalName();
            $archivoPDF->move(public_path().'/upload/', $nombrePDF);

        // esta es la línea que faltaba. Llamo a la foto del modelo y le asigno la foto recogida por el formulario de actualizar.
            $empleado->archivo=$nombrePDF;
        }
        $empleado->save();


          // Redirect to index
          return redirect('/')->with('success', 'Fue enviado correctamente');
    }
}
