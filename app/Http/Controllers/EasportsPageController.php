<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class EasportsPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page)
    {
        //
        $client = new Client(); //GuzzleHttp\Client
        $url = "https://www.easports.com/fifa/ultimate-team/api/fut/item?page=$page";


        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        return $responseBody = json_decode($response->getBody());

    }

}
