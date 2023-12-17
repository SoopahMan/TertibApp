<?php
class ManageTatibController
{
    public function managePelanggaran()
    {
        $PelanggaranService = PelanggaranServices::getInstance();
        $pelanggaran = $PelanggaranService->getAllPelanggaran();
        $data = [
            "pelanggaran" => $pelanggaran
        ];
        return Helper::view("/admin/master/dataPelanggaran", $data);
    }
}