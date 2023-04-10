<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $products = [
            ['Name' => "Sandal Berlian", 'Status' => "SSR", "Price" => "Rp10.000.000"],
            ['Name' => "Baju Logam", 'Status' => "SR", "Price" => "Rp8.000.000"],
            ['Name' => "Topi Daur Ulang", 'Status' => "R", "Price" => "Rp6.000.000"]
        ];
        return view('catalog', compact('products'));
    }

    public function deskripsi($judul){
        $desc = [
            ['Name' => "Sandal Berlian", 'Detail' => "Sandal yang terbuat dari berlian paling bercahaya di dunia"],
            ['Name' => "Baju Logam", 'Detail' => "Baju keras sulit ditembus"],
            ['Name' => "Topi Daur Ulang", 'Detail' => "Topi cantik dibuat dengan kasih dan kardus"]
        ];
        $item = [];
        foreach($desc as $d){
            if($d['Name'] == $judul){
                $item = $d;
            }
        }
        return view('details', compact('item'));
    }
}
