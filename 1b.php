<?php

interface PersegiInterface
{
    public function eksekusi($sisi);
}

class LuasPersegi implements
    PersegiInterface
{
    public function eksekusi($sisi)
    {
        $hasil = $sisi * $sisi;
         echo 'Hasil luas : ' . $hasil;
    }
}
class KelilingPersegi implements
    PersegiInterface
{
    public function eksekusi($sisi)
    {
        $hasil = $sisi + $sisi + $sisi + $sisi;
        echo 'Hasil Keliling : ' . $hasil;
    }
}


class Persegi
{
    public static function pilihan($pilihan)
    {
        switch ($pilihan) {
            case 'Luas Persegi':
                return new LuasPersegi;
                break;
            case 'Keliling Persegi':
                return new KelilingPersegi;
                break;
        }
    }
}


$sisi = 5;
// Operasi Jika memilih LuasPersegi
Persegi::pilihan('Luas Persegi')->eksekusi($sisi);
echo '<br>';

// Operasi Jika memilih KelilingPersegi
Persegi::pilihan('Keliling Persegi')->eksekusi($sisi);
echo '<br>';
