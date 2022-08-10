<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Equipologin;
use DataTables;

//use Request;

use Validator;
use Response;
use Illuminate\Support\Facades\DB;

class EntregaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if($request->ajax()){
            $data = Equipologin::where( [['tipo_reparto', '=', 'entrega']]  )->get();

           // dd($data);

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('dowload', function($raw){

                        if($raw->flag === 1){

                            $btn2 = ' <a href="javascript:void(0)"  data-id="'.$raw->id.'" data-original-title="Ver"  id="botonFile"><img  class="center" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/1200px-PDF_file_icon.svg.png" title="descargar" alt="descargar" id="img" with="50"  width="30" height="30"></a>';

                            return $btn2;

                        }elseif($raw->flag === 0){

                            $btn2 = "No hay datos";

                            return $btn2;
                        }

                        
                    })
                    ->addColumn('action', function($row){

                        $btn = ' <a href="javascript:void(0)"  data-id="'.$row->id.'" data-original-title="Ver" class="ver btn btn-primary btn-sm verDevolucion" id="botonView">Ver</a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-warning btn-sm editEntrega" id="botonEdit">Editar</a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteEntrega">Delete</a>';
    
                            return $btn;
                    })
                    ->rawColumns(['dowload', 'action'])
                    ->make(true);
            }

        

        return view('ingreso.entrega.index');
    }

    public function file($id){
        $pdf = Equipologin::find($id);
        $pathToFile = "upload/".$pdf->archivo;



        if($pathToFile === null){
            return redirect('ingreso.entrega.index')->with('warnign', 'no existe el dni');
        }else{
            return response()->download($pathToFile);
        }
        

        
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datos = Equipologin::find($id);

        return view('ingreso.entrega.show', compact('datos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Equipologin::findOrFail($id);
        return view('ingreso.entrega.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Equipologin::find($id);
        $product->update($request->all());

        return redirect('ingreso/entrega');
    }

    public function uploadFile(Request $request, $id){

        $product=Equipologin::FindOrFail($id);
        $product->archivo = $request->archivo;
        if ($request->hasFile('archivo')){
            $archivoPDF=$request->file('archivo');
            $nombrePDF=time().$archivoPDF->getClientOriginalName(); 
            $archivoPDF->move(public_path().'/upload/', $nombrePDF);

        // esta es la línea que faltaba. Llamo a la foto del modelo y le asigno la foto recogida por el formulario de actualizar.          
            $product->archivo=$nombrePDF; 
        }
         
        $product->save();
    
          // Redirect to index
          return  redirect('ingreso/entrega')->with('success', 'EL equipo fue actualziado correctamente...');

          
    }
}
