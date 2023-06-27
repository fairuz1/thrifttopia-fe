<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AdminController extends Controller
{
    public function index()
    {
        $title = 'dashboard';
        $baseUrl = 'http://47.88.89.199:9990/v1';

        $productsData = $this->getUserPost($baseUrl);
        return view('layouts-admin.adminKonten', compact('title', 'productsData'));
    }

    public function pengguna()
    {
        $title = 'pengguna';
        return view('layouts-admin.adminPengguna', compact('title'));
    }

    public function ringkasan()
    {
        $title = 'ringkasan';
        $baseUrl = 'http://47.88.89.199:9990/v1';

        $postData = $this->getPostData($baseUrl);
        $postPrices = $this->getPostPricing($baseUrl);
        return view('layouts-admin.adminRingkasan', compact('title', 'postData', 'postPrices'));
    }

    public function getPostData($baseUrl) {
        $productsEndpoint = $baseUrl . '/products';
        $activePost = count(json_decode(json_encode($this->apiCall('GET', $productsEndpoint . '?is_sold=false', false)), true)['data']);
        $productOnReview = json_decode(json_encode($this->apiCall('GET', $productsEndpoint . '?status=on_review', false)), true);
        $productOnReviewCount = count($productOnReview['data']);

        $activeUsers = 0;

        $postData = [$productOnReviewCount, $activePost, $activeUsers, $productOnReview];

        // $productsEndpoint = $baseUrl . '/products';
        // $products = json_decode(json_encode($this->apiCall('GET', $productsEndpoint, false)), true);
        // dd(DataTables::of($products)->make(true));
        return $postData;
    }

    public function getPostPricing($baseUrl) {
        $productsEndpoint = $baseUrl . '/pricing_plans';
        $postPrices = json_decode(json_encode($this->apiCall('GET', $productsEndpoint, false)), true);
        return $postPrices;
    }

    public function getUserPost($baseUrl) {
        $productsEndpoint = $baseUrl . '/products';
        $products = json_decode(json_encode($this->apiCall('GET', $productsEndpoint, false)), true);
        return $products;
        // return DataTables::of($products)->make(true);
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
