<?php


class KelasServices
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

    public function getAllKelas()
    {
        $rawKelas = $this->db->selectAll("kelas");
        $Kelas = [];

        if($rawKelas) 
        {
            foreach ($rawKelas as $rawKelas)
            {
                $Kelas[] = KelasModel::fromStdClass($rawKelas);
            }
            return $Kelas;
        }
        return $Kelas;
    }

    public function getDpa($where){
        $query = "SELECT kelas.nama_kelas, dosen.nama_dosen
        FROM kelas
        LEFT JOIN dosen ON kelas.nip = dosen.nip";
        
        $this->db->execute($query, $where);
        
    }
    


    public function getIsiKelas()
    {
        
    }

}