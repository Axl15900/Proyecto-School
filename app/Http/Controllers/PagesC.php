<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Notas;


class PagesC extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function nuevo(){
        return view('Nuevo');
    }

    public function data(){
        $data = DB::table('Notes')->paginate(10);
        return view('Estudiantes', compact('data'));
    }

    public function rating(){
        $notas = DB::table('Notes')->get();
        return view('Maestros', compact('notas'));
    }

    public function detalles($id){
        $data = DB::table('Notes')->where('id', $id)->first();
        return view('Dat.dato', compact('data'));
    }
    
    public function create(Request $request){
        $request-> validate([
            'name' => 'required',
            'descripcion'=>'required'
        ]);
        DB::insert('insert into Notes (nombre, descripcion) values (?, ?)',[$request->name,$request->descripcion]);
        return back()->with('mensaje','Nota agregada')-> with('mensaje', 'Nota agregada');
    }

    public function edit($id){
        $notas = DB::table('Notes')->where('id', $id)->first();
        return view('Dat.edit', compact('notas'));
    }

    public function update(Request $request, $id){
        $query = DB::table('Notes')->where('id', $id)->first();
        $query = DB::update('update Notes set nombre = ? where id = ?',[$request->nombre,$request->id]);
        $query = DB::update('update Notes set descripcion = ? where id = ?',[$request->descripcion,$request->id]);
        return back()-> with('mensaje', 'Nota actualizada');
    }

    public function delete($id){
        $query = DB::table('Notes')->where('id', $id)->first();
        $query = DB::delete('delete from Notes where id = ?', [$id]);
        return back()-> with('mensaje', 'Nota eliminada');
    }

    public function prueba(Request $request){
        $name = $request->name;
        $descripcion = $request->descripcion;

        dd($name, $descripcion);

    }
    
}