<?php

class MahasiswaServices
{
  /**
     * @var QueryBuilder $db
     */
    protected $db;

    private static $instances = [];

    protected function __construct()
    {
        $this->db = App::get('database');
        assert($this->db instanceof QueryBuilder); 
    }

    protected function __clone()
    {
    }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(): self
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }

    public function getAllMahasiswa()
    {
        $rawMahasiswa = $this->db->selectAll("mahasiswa");
        $mahasiswa = [];
        
        if($rawMahasiswa) {
            foreach ($rawMahasiswa as $rawMahasiswa){
                $mahasiswa[] = MahasiswaModel::fromStdClass($rawMahasiswa);
            }
            return $mahasiswa;
        }
        return $mahasiswa;
    }

    // public function searchMahasiswa($searchTerm)
    // {

    // }

}