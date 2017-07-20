<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model {
    public function __contruct()
    {
        parent::__construct();
    }
    public function getBook(){
        return array(
            array(
                        'judul'=>'Belajar Framework CI',
                        'pengarang'=>'Budi Raharjo',
                        'penerbit'=>'Informatika'
                    ),
                    array(
                        'judul'=>'Android Smalam',
                        'pengarang'=>'Muh.Arifin',
                        'penerbit'=>'Andi Offset'
                    )
        );
    }
}