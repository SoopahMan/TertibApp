<?php
class ManageMhsController{
    public function manageMahasiswa()
    {
        $MahasiswaService = MahasiswaServices::getInstance();
        $mahasiswa = $MahasiswaService->getAllMahasiswa();
        $data = [
            "mahasiswa" => $mahasiswa
        ];
        return Helper::view("/admin/master/dataMahasiswa", $data);
    }
}