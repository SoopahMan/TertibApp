<?php

class UserModel
{
    protected string $idUser;
    protected string $nama;
    protected string $username;
    protected string $password;
    protected string $fotoUser;
    protected string $alamat;
    protected string $noTlp;
    protected string $jenisKelamin;
    protected string $level_user;

    public function __construct(string $idUser, string $username, string $password, string $fotoUser, string $level_user)
    {
        $this->idUser = $idUser;
        $this->username = $username;
        $this->password = $password;
        $this->fotoUser = $fotoUser;
        $this->level_user = $level_user;
    }

    public static function fromStdClass($stdObject): UserModel
    {
        return new UserModel(
            $stdObject->id_user,
            $stdObject->username,
            $stdObject->password,
            $stdObject->fotoUser,
            $stdObject->level_user
        );
    }

    // getters
    public function getIdUser(): string
    {
        return $this->idUser;
    }

    public function getNama(): string
    {
        return $this->nama;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getFotoUser(): string
    {
        return $this->fotoUser;
    }

    public function getAlamat(): string
    {
        return $this->alamat;
    }

    public function getNoTlp(): string
    {
        return $this->noTlp;
    }

    public function getJenisKelamin(): string
    {
        return $this->jenisKelamin;
    }

    public function getlevel(): string
    {
        return $this->level_user;
    }

    // setters

    public function setIdUser(int $idUser): void
    {
        $this->idUser = $idUser;
    }

    public function setNama(string $nama): void
    {
        $this->nama = $nama;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function setFotoUser(string $fotoUser): void
    {
        $this->fotoUser = $fotoUser;
    }

    public function setAlamat(string $alamat): void
    {
        $this->alamat = $alamat;
    }

    public function setNoTlp(string $noTlp): void
    {
        $this->noTlp = $noTlp;
    }

    public function setJenisKelamin(string $jenisKelamin): void
    {
        $this->jenisKelamin = $jenisKelamin;
    }

    public function setLevel(string $level_user): void
    {
        $this->level_user = $level_user;
    }
}