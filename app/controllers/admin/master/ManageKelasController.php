<?php
class ManageKelasController
{
    public function manageKelas()
    {
        $KelasService = KelasServices::getInstance();
        $kelas = $KelasService->getAllKelas();
        $data =[
            "kelas" => $kelas,
        ];
        return Helper::view("/admin/master/dataKelas", $data);
    }
}