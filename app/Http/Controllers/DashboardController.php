<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardController extends Controller {

    public function index() {
        $baseUrl = 'http://47.88.89.199:9990/v1';
        $productsEndpoint = $baseUrl . '/products';
        $products = json_decode(json_encode($this->apiCall('GET', $productsEndpoint, false)), true);
        return view('dashboard', compact('products'));
        // return view('dashboard', compact('data'));
    }

    public function jualBarang() {
        return view('jualBarang');
    }

    public function apiCall($method, $url, $data) {
        $curl = curl_init();
        switch ($method){
           case "POST":
              curl_setopt($curl, CURLOPT_POST, 1);
              if ($data)
                 curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
              break;
           case "PUT":
              curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
              if ($data)
                 curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
              break;
           default:
              if ($data)
                 $url = sprintf("%s?%s", $url, http_build_query($data));
        }

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        // EXECUTE:
        $result = curl_exec($curl);
        $responses  = json_decode($result);
        curl_close($curl);

        return $responses;
    }
}
