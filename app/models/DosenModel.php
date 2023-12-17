<?php

class DosenModel{
    protected int $nip;
    protected string $nama_dosen;
    protected $jenisKelamin;
    protected int $nomor_hp;
    protected string $alamat_dosen;

    public function __construct(
        int $nip, 
        string $nama_dosen,
        $jenisKelamin,
        int $nomor_hp,
        string $alamat_dosen
    )
    {
        $this->nip = $nip;
        $this->nama_dosen = $nama_dosen;
        $this->jenisKelamin = $jenisKelamin;
        $this->nomor_hp = $nomor_hp;
        $this->alamat_dosen = $alamat_dosen;
    }

    public static function fromStdClass($stdObject): DosenModel
    {
     return new DosenModel(
        $stdObject->nip,
        $stdObject->nama_dosen,
        $stdObject->jenisKelamin,
        $stdObject->nomor_hp,
        $stdObject->alamat_dosen
        );
    }

    //Getter
    public function getNip(): int
    {
        return $this->nip;
    }
    
    public function getNamaDosen(): string
    {
        return $this->nama_dosen;
    }

    public function getAlamat(): string
    {
        return $this->alamat_dosen;
    }

    public function getJenisKelamin()
    {
        return $this->jenisKelamin;
    }

    public function getNoHp(): int
    {
        return $this->nomor_hp;
    }

    //Setter

    public function setNip(int $nip): int
    {
        return $this->nip;
    }
    
    public function setNamaDosen(string $nama_dosen): string
    {
        return $this->nama_dosen;
    }

    public function setAlamat(string $alamat_dosen): string
    {
        return $this->alamat_dosen;
    }

    public function setJenisKelamin($jenisKelamin)
    {
        return $this->jenisKelamin;
    }

    public function setNoHp(int $nomor_hp): int
    {
        return $this->nomor_hp;
    }
}