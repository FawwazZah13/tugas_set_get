<?php

class Makanan {
    private $nama;
    public $jenis;
    protected $rasa;

    //SETTER
    public function setNama ($data){
        $this->nama = $data;
    }
    public function setJenis ($data){
        $this->jenis = $data;
    }
    public function setRasa ($data){
        $this->rasa = $data;
    }

    //GETTER
    public function getNama (){
        return $this->nama;
    }
    public function getJenis (){
        return $this->jenis;
    }
    public function getRasa (){
        return $this->rasa;
    }
}

$makanan1 = new Makanan;
$makanan1->setNama ("Sosis");
$makanan1->setJenis ("Bakar-bakaran");
$makanan1->setRasa ("Pedas manis");

$makanan2 = new Makanan;
$makanan2->setNama ("Bakso");
$makanan2->setJenis ("Ber kuah");
$makanan2->setRasa ("Pedas");

echo "Nama : ". $makanan1->getNama();
echo "<br>";
echo "Jenis : ". $makanan1->getJenis();
echo "<br>";
echo "Rasa : ". $makanan1->getRasa();
echo "<hr>";

echo "Nama : ". $makanan2->getNama();
echo "<br>";
echo "Jenis : ". $makanan2->getJenis();
echo "<br>";
echo "Rasa : ". $makanan2->getRasa();


?>