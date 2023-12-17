<?php

class MahasiswaModel{
    protected int $nim;
    protected string $nama_mhs;
    protected string $alamat_mhs;
    public string $id_kelas;
    public $id_user;


    public function __construct(
        int $nim, 
        string $nama_mhs,
        string $alamat_mhs,
        string $id_kelas)
    {
      $this->nim = $nim;
      $this->nama_mhs = $nama_mhs;
      $this->alamat_mhs = $alamat_mhs;
      $this->id_kelas = $id_kelas;  
    //   $this->id_user = $id_user;
    }

    public static function fromStdClass($stdObject): MahasiswaModel
    {
        return new MahasiswaModel(
            $stdObject->nim, 
            $stdObject->nama_mhs,
            $stdObject->alamat_mhs,
            $stdObject->id_kelas,
            // $stdObject->id_user
        );
    }
    
    //Getter
    public function getNim(): int
    {
        return $this->nim;
    }

    public function getNamaMhs(): string
    {
        return $this->nama_mhs;
    }

    public function getAlamat(): string
    {
        return $this->alamat_mhs;
    }

    public function getIdKelas(): string
    {
        return $this->id_kelas;
    }

    // public function getIdUser(): int
    // {
    //     return $this->id_user;
    // }

    //Setter
    public function setNim(int $nim): int
    {
        return $this->nim;
    }

    public function setNamaMhs(string $nama_mhs): string
    {
        return $this->nama_mhs;
    }

    public function setAlamat(string $alamat_mhs): string
    {
        return $this->alamat_mhs;
    }

    public function setIdKelas(int $id_kelas): string
    {
        return $this->id_kelas;
    }

    // public function setIdUser(int $id_user): int
    // {
    //     return $this->id_user;
    // }
}