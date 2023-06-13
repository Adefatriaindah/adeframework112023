<?php

namespace App\Controllers;

use App\Controllers\BaseController;

// step 1
use App\Models\FilmModel;

class Film extends BaseController
{
    //step 2
    protected $film;
    
    //step 3 membuat fungsi contruct untuk menginisiasi class model
    public function __construct()
    {
        //fungsi contrct digunakan untuk agar semua fungsi bisa dijalankan di sini
        //step 4, inisiasi ke class film dan panggil propertinya 
        $this->film = new FilmModel();
    }

    public function index()
    {
        // menegcek datanya tersedia atau
        $data['data_film']= $this->film->getFilm();
        return view ("film/index", $data);
    }

    public function all() {
        $data['semuafilm'] = $this->film->getAllData();
        return view("film/semuafilm", $data);
    }

    public function film_by_id() {
        dd($this->film->getDataByID(1));
    }

    public function film_by_genre() {
        dd($this->film->getDataBy("Comedy"));
    }

    public function film_order() {
        dd($this->film->getOrderBy());
    }

    public function film_limit_five() {
        dd($this->film->getLimit());
    }
}
