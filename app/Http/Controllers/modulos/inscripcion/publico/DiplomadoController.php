<?php

namespace App\Http\Controllers\modulos\inscripcion\publico;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\InscripcionNcgt;
Use App\ProgramaNcgt;
use App\User;
use App\Distrito;
use App\Provincia;
use App\Departamento;
use App\Pago;
use App\ControlPago;
use DB;
use Auth;
use PhpParser\Node\Expr\New_;
use Yajra\DataTables\Facades\DataTables;


class DiplomadoController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($tipo, Request $request)
    {
        $tipos=['diplomado'=>11,'procapt'=>9,'promaster'=>10];
        $programa=ProgramaNcgt::where('programa_id', '=', $tipos[$tipo])->pluck('descripcion', 'id');
        return view('modulos.inscripcion_unheval.publico.diplomado.validar', ['programa'=>$programa,
            'tipo'=>(isset($request->tipo)?$request->tipo:'null')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($descripcion, $n_comprobante, $f_comprobante, $tipo)
    {
        $departamentos=Departamento::pluck('departamento','id');
        $provincias=Provincia::pluck('provincia','id');
        $distritos=Distrito::pluck('distrito','id');
        $pagos=Pago::where('num_comprobante',$n_comprobante)
                    ->where('fecha_comprobante',$f_comprobante)->first();
        //return $pagos;
        $usuario=User::where('users.id','=',$pagos->user_id)->get();
        //return $usuario;
        if(count($usuario)==1){
            return view('modulos.inscripcion_unheval.publico.diplomado.registrar',
                [
                    'departamentos'=>$departamentos,
                    'provincias'=> $provincias,
                    'distritos'=> $distritos,
                    'usuario'=> $usuario[0],
                    'descripcion'=> $descripcion,
                    'n_comprobante'=> $n_comprobante,
                    'f_comprobante'=> $f_comprobante,
                    'tipo'=>$tipo
                ]);
        }
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
        $usuario=User::Where("dni",'=',$request->dni)->first();
        //consultando el registro de la tabla pago
        $pagos=Pago::where('num_comprobante','=',$request->n_comprobante)
                    ->where('fecha_comprobante','=',$request->f_comprobante)->first();
       
        //creo un nuevo registro de la tabla Inscripcion
            if($usuario->f_nac==""and $usuario->email==""){

            $usuario->f_nac=$request->get('f_nac');
            $usuario->email=$request->get('email');
            $usuario->distrito_nac=$request->get('distrito_nac');
            $usuario->domicilio=$request->get('domicilio');
            $usuario->n_domicilio=$request->get('n_domicilio');
            $usuario->cel=$request->get('cel');
            $usuario->save();
            $inscripcionp=new InscripcionNcgt;
            $inscripcionp->programa_ncgt_id=$request->get('descripcion');
            $inscripcionp->user_id=$usuario->id;
            $inscripcionp->save();
            //registrando en la tabla control de pago
            $control=new ControlPago;
            $control->inscripcion_ncgt_id=$inscripcionp->id;
            $control->pago_id=$pagos->id;
            $control->tipo=1;
            $control->save();
            $pagos->estado_recibo=1;
            $pagos->save();
            return redirect()->route('diplomado.ins.index',['tipo'=>$request->tipo])->with('verde','Se registró la inscripcion de \''.$usuario->nombres.'\' correctamente');
            }else{
            $inscripcionp=new InscripcionNcgt;
            $inscripcionp->programa_ncgt_id=$request->get('descripcion');
            $inscripcionp->user_id=$usuario->id;
            $inscripcionp->save();
            //registrando en la tabla control de pago
            $control=new ControlPago;
            $control->inscripcion_ncgt_id=$inscripcionp->id;
            $control->pago_id=$pagos->id;
            $control->tipo=1;
            $control->save();
            $pagos->estado_recibo=1;
            $pagos->save();
                }
        return redirect()->route('diplomado.ins.index',['tipo'=>$request->tipo])->with('verde','Se registró la inscripcion de \''.$usuario->nombres.'\' correctamente');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
       $control=ControlPago::select('tarifarios.descripcion','pagos.importe', 'control_pagos.tipo')
                    ->join('inscripcion_ncgts','inscripcion_ncgts.id','=','control_pagos.inscripcion_ncgt_id')
                    ->join('pagos', 'control_pagos.pago_id', '=','pagos.id')
                    ->join('tarifarios', 'tarifarios.id', '=','pagos.tarifario_id')
                    ->where('inscripcion_ncgts.id', '=',$id )->get();
        $inscripcion=InscripcionNcgt::find($id);
        return view('modulos.inscripcion_unheval.diplomado.detalle', ['control'=> $control, 'inscripcion'=> $inscripcion,'tipo'=>(isset($request->tipo)?$request->tipo:'null')]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $inscripcion=InscripcionNcgt::select('users.id AS id', 'inscripcion_ncgts.id As id1', 'users.dni','users.nombres', 'users.apellido_paterno',
                'users.apellido_materno', 'users.f_nac', 'users.email', 'users.distrito_nac',
                'users.domicilio', 'users.n_domicilio', 'users.cel')
                ->join('users','users.id','=','inscripcion_ncgts.user_id')->find($id);
        $departamentos=Departamento::pluck('departamento','id');
        $provincias=Provincia::pluck('provincia','id');
        $distritos=Distrito::pluck('distrito','id');

        return view('modulos.inscripcion_unheval.diplomado.editar', ['departamentos'=>$departamentos,'provincias'=> $provincias,
            'distritos'=> $distritos, 'inscripcion'=> $inscripcion, 'tipo'=>(isset($request->tipo)?$request->tipo:'null')]);
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
        $myInscrito=User::findOrFail($id);
        $myInscrito->nombres=$request->get('nombres');
        $myInscrito->apellido_paterno=$request->get('apellido_paterno');
        $myInscrito->apellido_materno=$request->get('apellido_materno');
        $myInscrito->f_nac=$request->get('f_nac');
        $myInscrito->dni=$request->get('dni');
        $myInscrito->email=$request->get('email');
        $myInscrito->distrito_nac=$request->get('distrito_nac');
        $myInscrito->domicilio=$request->get('domicilio');
        $myInscrito->n_domicilio=$request->get('n_domicilio');
        $myInscrito->cel=$request->get('cel');
        $myInscrito->save();
        /*$inscrito=InscripcionNcgt::FindOrFail($id);
        $inscrito->estado=$request->get('estado');
        $inscrito->save();*/

        return redirect()->route('diplomado.ins.index',['tipo'=>$request->tipo])->with('verde','Actualizó el registro de \''.$myInscrito->nombres.'\' correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $myInscripcion= InscripcionNcgt::find($id);        
        InscripcionNcgt::destroy($id);
    }
    public function validar(Request $request)
    {
        $dato=\App\Http\Controllers\modulos\diplomado\DiplomadoController::validar_($request);
        if($dato['error'])
            return redirect()->route('publico.diplomado.ins.index', ['tipo' => $request->tipo])->with('rojo', $dato['mensaje']);
        else
            return $this->create($request->descripcion, $request->n_comprobante, $request->f_comprobante, $request->tipo);
    }

    public function validar_pago(Request $request)
    {    
            $inscripcionp=InscripcionNcgt::find($request->id);

            $pagos=Pago::where('num_comprobante','=',$request->n_comprobante)
                    ->where('fecha_comprobante','=',$request->f_comprobante)->first();

                  if ($pagos!='') {
                    if ( $pagos->estado_recibo=="0") {
                           $control=new ControlPago;
                           $control->inscripcion_ncgt_id=$request->id;
                           $control->pago_id=$pagos->id;
                           $control->tipo='2';
                           $control->save();
                           $pagos->estado_recibo='1';
                           $pagos->save();
                           return redirect()->route('diplomado.ins.index',['tipo'=>$request->tipo])->with('verde','Recibo registrado');
                     }else{
                           return redirect()->route('diplomado.ins.index',['tipo'=>$request->tipo])->with('naranja','El recibo ingresado ya ha sido usado');
                        }
                  }else{            
                           return redirect()->route('diplomado.ins.index',['tipo'=>$request->tipo])->with('rojo','Recibo no valido');
                  }
      }

    public function validar_descuento(Request $request)
    {
        $inscripcionp=InscripcionNcgt::find($request->id1);
        if (!($request->descuento and $request->descuento1) ) {
            $inscripcionp->es_interno=      ($request->descuento)?1:0;
            $inscripcionp->es_pago_total=   ($request->descuento1)?1:0;
            $inscripcionp->save();
            return redirect()->route('diplomado.ins.index',['tipo'=>$request->tipo])->with('verde','Descuento asignado de los modulos');
        }
        /*if ($request->descuento && $inscripcionp->es_interno!=1&&$inscripcionp->es_pago_total!=1) {
            $inscripcionp->es_interno=1;
            $inscripcionp->save();
            return redirect()->route('diplomado.ins.index',['tipo'=>$request->tipo])->with('verde','Descuento asignado de los modulos');
        } elseif ($request->descuento1&& $inscripcionp->es_interno!=1) {
            $inscripcionp->es_pago_total=1;
            $inscripcionp->save();
            return redirect()->route('diplomado.ins.index',['tipo'=>$request->tipo])->with('verde','Descuento asignado por pago total');
        }*/
        else {
            return redirect()->route('diplomado.ins.index',['tipo'=>$request->tipo])->with('rojo','Ya tiene asignado un descuento');
        }
    }
}
