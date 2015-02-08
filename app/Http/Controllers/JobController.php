<?php namespace App\Http\Controllers;

use App\Client;
use App\Job;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Request;

class JobController extends Controller {

    /**
     * Restricts access to Logged in Users / Redirects Guests to Auth/login
     */
    function __construct()
    {
        $this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $jobs = Job::get();

        return view('jobs.index', [
            'jobs' => $jobs
        ]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $clients = Client::lists('client_name', 'id');

        return view('jobs.create', [
            'clients' => $clients
        ]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $job = new Job;

        $job->client_id = Request::get('client');
        $job->description = Request::get('description');
        $job->budget = Request::get('budget');
        $job->complete = 0;
        $job->user_id = Auth::id();
        $job->save();

        return redirect()->route('jobs_path');
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
		//
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
		//
	}

}
