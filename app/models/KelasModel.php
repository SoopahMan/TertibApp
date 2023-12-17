<?php

class KelasModel
{
    protected string $id_kelas;
    protected string $nama_kelas;
    protected int $nip;
    protected $prodi;

    public function __construct(
        string $id_kelas,
        string $nama_kelas,
        int $nip,
        $prodi
    )
    {
        $this->id_kelas = $id_kelas;
        $this->nama_kelas = $nama_kelas;
        $this->nip = $nip;
        $this->prodi = $prodi;
    }

    public static function fromStdClass($stdObject): KelasModel
    {
        return new KelasModel(
            $stdObject->id_kelas,
            $stdObject->nama_kelas,
            $stdObject->nip,
            $stdObject->prodi
        );
    }

    //Getter
    public function getIdKelas(): string
    {
        return $this->id_kelas;
    }

    public function getNamaKelas(): string
    {
        return $this->nama_kelas;
    }

    public function getNip(): int
    {
        return $this->nip;
    }

    public function getProdi()
    {
        return $this->prodi;
    }

    //Setter
    public function setIdKelas($id_kelas): string
    {
        return $this->id_kelas;
    }

    public function setNamaKelas($nama_kelas): string
    {
        return $this->nama_kelas;
    }

    public function setNip($nip): int
    {
        return $this->nip;
    }

    public function setProdi($prodi)
    {
        return $this->prodi;
    }
}