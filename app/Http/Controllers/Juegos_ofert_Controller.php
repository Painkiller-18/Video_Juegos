<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\juegosoferts;
use App\Models\juegos;
use App\Models\tipos;
use Session;

class Juegos_ofert_Controller extends Controller
{

    public function editaroferta($id_of){
        $consulta = juegosoferts::withTrashed()->join('juegos','juegosoferts.id_p','=','juegos.id_p')
        ->join('tipos','tipos.idtipo','=','juegosoferts.idtipo')
        ->select('juegosoferts.id_of','juegos.nombre as idp','tipos.nombre as id_tipo','juegosoferts.descuento','juegosoferts.precio',
        'juegosoferts.Activo','juegosoferts.fecha_ini','juegosoferts.fecha_fin','juegosoferts.motivo','juegosoferts.id_p','juegosoferts.idtipo')
        ->where('id_of',$id_of)
        ->get();
        $juegos = juegos::all();
        $tipos = tipos::all();
        return view ('Editar_oferta')
        ->with('consulta',$consulta[0])
        ->with('juegos',$juegos)
        ->with('tipos',$tipos);
    }


    public function guardacambios(Request $request){

        $this->validate($request,[
            'id_p' => 'required',
            'idtipo' => 'required',
            'fecha_ini' => 'required',
            'fecha_fin' => 'required',
            'motivo' => 'required',
            'precio' => ['required','regex:/^[0-9]+([.])?([0-9]+)?$/'],
            'descuento' => 'required',
            'Activo' => 'required'

        ]);

    $juegosoferts = juegosoferts::withTrashed()->find($request->id_of);
    $juegosoferts->id_of = $request-> id_of;
    $juegosoferts->id_p = $request->id_p;
    $juegosoferts->idtipo = $request->idtipo;
    $juegosoferts->fecha_ini = $request->fecha_ini;
    $juegosoferts->fecha_fin = $request->fecha_fin;
    $juegosoferts->motivo = $request->motivo;
    $juegosoferts->precio = $request->precio;
    $juegosoferts->descuento = $request->descuento;
    $juegosoferts->Activo = $request->Activo;
    $juegosoferts->save();

      Session::flash('mensaje',"La oferta $request->id_of ah sido medificada correctamente");

      return redirect()->route('reportejuegosof');

    }




    public function desactivaoferta($id_of){

        $oferta = juegosoferts::find($id_of);
        $oferta->delete();

        Session::flash('mensaje',"La oferta con el id: $id_of a sido Desactivada correctamente");

        return redirect()->route('reportejuegosof');
    }
    
    
    public function activaoferta($id_of){

        $oferta = juegosoferts::withTrashed()->where('id_of',$id_of)->restore();

        Session::flash('mensaje',"La oferta con el id: $id_of a sido Activada correctamente");

        return redirect()->route('reportejuegosof');
    }

    public function borraoferta($id_of){

        $oferta = juegosoferts::withTrashed()->find($id_of)->forceDelete();

        Session::flash('mensaje',"La oferta con el id: $id_of a sido Eliminda del Sistema");

        return redirect()->route('reportejuegosof');
    }


    public function reportejuegosof(){
        $consulta = juegosoferts::withTrashed()->join('juegos','juegosoferts.id_p','=','juegos.id_p')
        ->join('tipos','tipos.idtipo','=','juegosoferts.idtipo')
        ->select('juegosoferts.id_of','juegos.nombre as id_p','tipos.nombre as idtipo','juegosoferts.descuento','juegosoferts.precio',
        'juegosoferts.Activo','juegosoferts.deleted_at')
        ->orderBy('id_p',)
        ->get();
        return view ('reporte')->with('consulta',$consulta);
    }

    public function Juego_ofert()
    {
        $consulta = juegosoferts::orderBy('id_of','DESC')
        ->take(1)->get();
        
        $cuantos = count($consulta);
        if($cuantos==0)
        {
            $idesigue = 1;
        }
        else{
            $idesigue = $consulta[0]->id_of +1 ;
        }

        $juegos = juegos::orderBy('nombre')->get();
        $tipos = tipos::orderBy('nombre')->get();

        //return $idesigue;
       return view ('Juegos_ofert')
       ->with('idsigue',$idesigue)
       ->with('juegos',$juegos)
       ->with('tipos',$tipos);
    }



    public function eloquent()
    {
        //$consulta = juegos::all();
        $juegosoferts = new juegosoferts;
        $juegosoferts->id_of = 4;
        $juegosoferts->id_p = 3;
        $juegosoferts->idtipo = 2;
        $juegosoferts->fecha_ini = "12/06/2021";
        $juegosoferts->fecha_fin = "12/07/2021";
        $juegosoferts->motivo = "Otoño";
        $juegosoferts->precio = "700";
        $juegosoferts->descuento = "70%";
        $juegosoferts->Activo = "Si";
        $juegosoferts->save();
        return "operacion realizada";
    }

    
    public function guarda_juego_of(Request $request)
    {
            //return $request;

            $this->validate($request,[
                'id_p' => 'required',
                'idtipo' => 'required',
                'fecha_ini' => 'required',
                'fecha_fin' => 'required',
                'motivo' => 'required',
                'precio' => ['required','regex:/^[0-9]+([.])?([0-9]+)?$/'],
                'descuento' => 'required',
                'Activo' => 'required',
                'Aviso_priv' => 'required'

            ]);

            $juegosoferts = new juegosoferts;
        $juegosoferts->id_of = $request-> id_of;
        $juegosoferts->id_p = $request->id_p;
        $juegosoferts->idtipo = $request->idtipo;
        $juegosoferts->fecha_ini = $request->fecha_ini;
        $juegosoferts->fecha_fin = $request->fecha_fin;
        $juegosoferts->motivo = $request->motivo;
        $juegosoferts->precio = $request->precio;
        $juegosoferts->descuento = $request->descuento;
        $juegosoferts->Activo = $request->Activo;
        $juegosoferts->Aviso_priv = $request->Aviso_priv;
        $juegosoferts->save();

        Session::flash('mensaje',"La oferta a sido Agregada correctamente");

        return redirect()->route('reportejuegosof');
    }
}
