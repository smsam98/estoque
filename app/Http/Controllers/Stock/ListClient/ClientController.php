<?php

namespace App\Http\Controllers\Stock\ListClient;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ListClient\Client;
use App\Http\Requests\ListClient\ClientFormRequest;

class ClientController extends Controller
{
	private $client;

	public function __construct (Client $client)
	{
		$this->client = $client;
	}

    public function index ()
    {
    	$clients = $this->client->all();

    	return view ('stock/listclient/index', ['clients' => $clients]);
    }

    public function create ()
    {
    	$categorys = ['Masculino', 'Feminino'];

    	return view ('stock/listclient/create', ['categorys' => $categorys]);
    }
}
