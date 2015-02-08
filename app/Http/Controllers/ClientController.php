<?php namespace App\Http\Controllers;


use App\Client;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;

class ClientController extends Controller{

    /**
     * Restricts access to Logged in Users / Redirects Guests to Auth/login
     */
    function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Returns the client index with a list of clients
     *
     * @return mixed
     */
    public function index()
    {
        $clients = Client::get();

        return view('clients.index', [
            'clients' => $clients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $client = new Client;

        $client->client_name = Request::get('client_name');
        $client->client_phone = Request::get('client_phone');
        $client->client_address = Request::get('client_address');
        $client->user_id = Auth::id();


        $client->save();

        return redirect()->route('clients_path');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return 'CREATE EDIT FORM FOR ID:'.$id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();

        return redirect()->route('clients_path');
    }

} 