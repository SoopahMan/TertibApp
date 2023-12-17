<?php

class PelanggaranModel{
    protected int $id_pelanggaran;
    protected string $nama_pelanggaran;
    protected int $id_level;
    protected $keterangan;

    public function __construct(
    int $id_pelanggaran, 
    string $nama_pelanggaran, 
    int $id_level,
    $keterangan)
    {
        $this->id_pelanggaran = $id_pelanggaran;
        $this->nama_pelanggaran = $nama_pelanggaran;
        $this->id_level = $id_level;
        $this->$keterangan = $keterangan;
    }

    public static function fromStdClass($stdObject): PelanggaranModel
    {
        return new PelanggaranModel(
            $stdObject->id_pelanggaran,
            $stdObject->nama_pelanggaran,
            $stdObject->id_level,
            $stdObject->keterangan
        );
    }

    //Getter
    public function getIdPelanggaran():int
    {
        return $this->id_pelanggaran;
    }

    public function getNamaPelanggaran():string
    {
        return $this->nama_pelanggaran;
    }

    public function getLevel(): int
    {
        return $this->id_level;
    }

    public function getKeterangan()
    {
        return $this->keterangan;
    }

    //Setter
    public function setIdPelanggaran(int $id_pelanggaran):int
    {
        return $this->id_pelanggaran;
    }

    public function setNamaPelanggaran(string $nama_pelanggaran):string
    {
        return $this->nama_pelanggaran;
    }

    public function setLevel(int $id_level): int
    {
        return $this->id_level;
    }

    public function setKeterangan($keterangan)
    {
        return $this->keterangan;
    } 

}