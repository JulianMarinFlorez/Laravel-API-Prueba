<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://jsonplaceholder.typicode.com/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
        
            $response = $client->request('GET', 'todos'); // https://jsonplaceholder.typicode.com/todos
        
            $usuarios = json_decode($response->getBody()->getContents());
        
            return view('usuarios.index',compact('usuarios'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://jsonplaceholder.typicode.com/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
        
            $response = $client->request('GET', "todos"); // https://jsonplaceholder.typicode.com/todos
        
            $usuario = json_decode($response->getBody()->getContents());
        
            return view('usuarios.create');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://jsonplaceholder.typicode.com/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
        
            $response = $client->request('GET', "todos/{$id}"); // https://jsonplaceholder.typicode.com/todos
        
            $usuario = json_decode($response->getBody()->getContents());
        
            return view('usuarios.show',compact('usuario'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
