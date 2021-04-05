<?php

namespace App\Http\Controllers;

use App\Cadastro;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Maatwebsite\Excel\Concerns\FromCollection;

class CadastroController extends Controller
{
    public function index()
    {


       if(count($_GET)>0){

        if(isset($_GET['name'])){

        $varTexto = $_GET['name'];
        

        $cadastros = User::Where('name', 'like', '%' .  $varTexto. '%')->paginate(10);

        } else {
         
            $cadastros = User::orderBy('created_at', 'desc')->paginate(10);

        }

       } else {

        $cadastros = User::orderBy('created_at', 'desc')->paginate(10);

       }

        return view('cadastro.index', compact('cadastros'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|max:255',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => 'required|max:10',
            'telefone'=> 'required|max:255',
            'foto'=> 'required|max:255',
        ],
        [
            'name.required' => 'O campo NOME é obrigatório!',
            'email.required' => 'O campo E-MAIL é obrigatório!',
            'password.required' => 'O campo SENHA é obrigatório!',
            'telefone.required' => 'O campo TELEFONE é obrigatório!',
            'foto.required' => 'O campo FOTO é obrigatório!',
        ]);


        $cadastro = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'telefone' => $request->get('telefone'),
            'foto' => $path = $request->file('foto')->store('/')
            
    	

    	
        ]);

        $path = $request->file('foto')->store('public/avatars');

        $cadastro->save();

        return redirect('/cadastro')->with('success', 'Cadastro Criado');

    }
    public function show($id)
    {
        $cadastro = User::find($id);

        return view('cadastro.show', compact('cadastro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cadastro  $cadastro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cadastro = user::find($id);

        return view('cadastro.edit', compact('cadastro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cadastro  $cadastro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:10',
            'telefone'=> 'required|max:255',
            'foto'=> 'required|max:255',
        ],
        [
            'name.required' => 'O campo NOME é obrigatório!',
            'email.required' => 'O campo E-MAIL é obrigatório!',
            'password.required' => 'O campo SENHA é obrigatório!',
            'telefone.required' => 'O campo TELEFONE é obrigatório!',
            'foto.required' => 'O campo FOTO é obrigatório!',
        ]);

        $path = $request->file('foto')->store('public/avatars');

        $cadastro = User::find($id);
        $cadastro->name = $request->get('name');
        $cadastro->email = $request->get('email');
        $cadastro->password = Hash::make($request->get('password'));
        $cadastro->telefone = $request->get('telefone');
        $cadastro->foto = $path = $request->file('foto')->store('/');

        $path = $request->file('foto')->store('public/avatars');

        $cadastro->save();

        return redirect('/cadastro')->with('success', 'Cadastro Editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cadastro  $cadastro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cadastro = User::find($id);
        $cadastro->delete();

        return redirect('/cadastro')->with('success', 'Cadastro Deletado');
    }
}