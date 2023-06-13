<?php

namespace App\Controllers;

use App\Controllers\BaseController;

// step 1
use App\Models\GenreModel;

class Genre extends BaseController
{
    //step 2
    protected $genre;
    
    //step 3 membuat fungsi contruct untuk menginisiasi class model
    public function __construct()
    {
        //fungsi contrct digunakan untuk agar semua fungsi bisa dijalankan di sini
        //step 4, inisiasi ke class genre dan panggil propertinya 
        $this->genre = new GenreModel();
    }

    public function index()
    {
        // menegcek datanya tersedia atau
        $data['data_genre']= $this->genre->getGenre();
        return view ("genre/index", $data);
    }

    public function all() {
        $data['semuafilm'] = $this->genre->getAllData();
        return view("genre/semuafilm", $data);
    }
}