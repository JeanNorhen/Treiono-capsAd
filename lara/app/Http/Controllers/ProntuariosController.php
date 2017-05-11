<?php

namespace App\Http\Controllers;
use App\Prontuario;
use App\Http\Requests;
use Illuminate\Http\Request;
use Redirect;


class ProntuariosController extends Controller
{
	    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $prontuarios =Prontuario::get();
        return view('prontuarios.listar',['prontuarios'=>$prontuarios]);
    } 
    public function add()
    {
    	$prontuarios =Prontuario::get();
        return view('prontuarios.add',['prontuarios'=>$prontuarios]);
    } 
        public function add_item()
    {
        $prontuarios =Prontuario::get();
        return view('prontuarios.add_item',['prontuarios'=>$prontuarios]);
    } 

    public function salvar(Request $request)
    {

        $prontuario = new Prontuario();
        $prontuario->create($request->all());
        return Redirect::to('/prontuarios/add_item');

    } 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function getMostrar($id)
    {
        $prontuario = Prontuario::find($id);
        if(!$prontuario){
            abort(404);
        }
        return view('prontuarios.add_item',['prontuario'=>$prontuario]);        
    }
    public function apagar($id)
    {
        $produtos = Produtos::find($id);
        $produtos->delete();
        return redirect('produtos')->with('message', 'Produto apagado com sucesso!');
    }
}
