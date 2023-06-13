<?php

namespace App\Models;

use CodeIgniter\Model;

class GenreModel extends Model
{
     // properti yang digunakan
        // untuk menentukan untuk tabel apa
        protected $table = 'genre';
        // untuk masuk ke database tanpa harus mengubah di database
        protected $primarykey = 'id';
        // set untuk auto incremenya true atau false
        protected $useAutoIncrement = true;
        // ini untuk kolom-kolom apa saja yang boleh diisi
        protected $allowFields = [];

    public function getGenre(){


       $data = 
       [
        // dibawah ini merupakan data yang akan ditampilkan dalam view
        [
            "nama_genre" => "horor"
        ]
    ];
    return $data;

}
public function getAllData()
{
    // ketika bagian ini dipanggil maka akan ada respon yang diberikan
    return $this ->findAll();
}
}