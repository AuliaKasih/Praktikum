<?php  

class Mahasiswa {

    public string $nim; 
    public string $nama; 
    public int $umur; 
    private string $email; 
    protected string $nama_ibu; 

    public function setNim(string $a) { 
    $this->nim = $a;  
 } 

    public function setNama(string $b) { 
    $this->nama = $b; 
 } 
}
 //class Nilai extends Mahasiswa { 
    //public function getNim() { 
    //return $this->nim; 
    //} 
    
    //public function getNama() { 
    //return $this->nama; 
    //} 
    
    //public function setIbu(string $c) { 
    //$this->nama_ibu = $c; 
   //} 
    
    //public function getIbu() { 
    //return $this->nama_ibu; 
    //} 
    
    
    //$nilai = new Nilai(); 
    //$nilai->setNim("17021000"); 
    //$nilai->setNama("Faiza"); 
    //$nilai->setIbu("Fifi"); 
    
    //cho $nilai->getNim() . " " . $nilai->getNama()
    //. " " . $nilai->getIbu();

class Krs extends Mahasiswa { 
 
    protected string $matakuliah;

    public function getNim() { 
    
        return $this->nim; 
 } 
 
    public function getNama() { 
    
        return $this->nama; 
 } 

 
    public function setMatakuliah (string $c) { 
    
        $this->matakuliah = $c; 
 } 

 } 
 
    class Nilai extends Krs { 
 
    private static int $nilai = 90;
    
    public function getMatakuliah() { 
    
        return $this->matakuliah; 
 } 
 
    public static function getNilai() { 
    return self::$nilai; 
 } 
 
 } 
 
 $nilai = new Nilai(); 
 
  // Memanggil class Mahasiswa 
  $nilai->setNim("17021000"); 
  $nilai->setNama("Aulia"); 
  
  // Memanggil class Krs 
  $nilai-> setMatakuliah("Pemrograman Berbasis Web Lanjutan"); 
  
  echo "<p>NIM = " . $nilai->getNim() . "</p>"; 
  echo "<p>Nama = " . $nilai->getNama() . "</p>"; 
  echo "<p>Matakuliah = " . $nilai-> getMatakuliah() . "</p>"; 
  echo "<p>Nilai = " . Nilai::getNilai(90) . "</p>";