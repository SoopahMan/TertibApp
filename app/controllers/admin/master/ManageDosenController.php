<?php
class ManageDosenController{
    public function manageDosen()
    {
        $DosenService = DosenServices::getInstance();
        $dosen = $DosenService->getAllDosen();
        $data = [
            "dosen" => $dosen
        ];
        return Helper::view("/admin/master/dataDosen", $data);
    }
}