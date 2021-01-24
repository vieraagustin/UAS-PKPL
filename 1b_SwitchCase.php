<?php

class Persegi
{

    public function LuasPersegi($sisi)
    {
        $hasil = $sisi * $sisi;
        echo 'Hasil Luas Persegi : ' . $hasil;
    }

    public function KelilingPersegi($sisi)
    {
        $hasil = $sisi + $sisi + $sisi + $sisi;
        echo 'Hasil Keliling Persegi : ' . $hasil;
    }


    public function eksekusi($pilihan, $sisi)
    {
        switch ($pilihan) {
            case 'Luas Persegi':
                $this->LuasPersegi($sisi);
                break;
            case 'Keliling Persegi':
                $this->KelilingPersegi($sisi);
                break;
            default:
                echo 'Anda tidak memilih operasi';
        }
    }
}


$pilihan= new Persegi;
$sisi = 5;
$pilihan->eksekusi('Keliling Persegi', $sisi);