<?php

class Mahasiswa_model {
    private $mhs = [
        [
            "nama" => "Fatkul Umar",
            "nrp" => "1234567",
            "email" => "fatkulumar@gmail.com",
            "jurusan" => "Informatika",
        ],
        [
            "nama" => "Umar Umar",
            "nrp" => "15678",
            "email" => "umar@gmail.com",
            "jurusan" => "Informati",
        ],
        [
            "nama" => "Fatkul ",
            "nrp" => "12340987",
            "email" => "fatkumar@gmail.com",
            "jurusan" => "formatika",
        ],
    ];

    public function getAllMahasiswa()
    {
        return $this->mhs;
    }
}