<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class CategorizationContraller extends Controller
{

  private $client;
  public function __construct()
    {
        //initiallize guzzle client method;
        $this->client = new Client(); //GuzzleHttp\Client
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
      
      $response = $this->client->request('POST', 'http://localhost/service-api/public/api/service/register', [
            'form_params' => [
                'name' => $request['name']
            ]
        ]);
        $response = $response->getBody()->getContents();
        echo '<pre>';
        print_r($response);
        die();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

    public function category()
    {
        return view ('admin.categorization.category.index');
    }
    public function createCategory()
    {
        return view ('admin.categorization.category.create');
    }
    public function subcategory (){
        return view('admin.categorization.subcategory.index');

    }
    public function createsubCategory(){
        return view('admin.categorization.subcategory.create');
    }
}
