<?php

namespace Tests\Feature\Auth;

namespace App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class DatabaseDosenTest extends TestCase
{
    use DatabaseTransactions;

    // Function untuk testing insert data dosen ke dalam tabel dosen
    public function test_insert_into_tabel_dosen()
    {
        $dosen = Dosen::create([
            'nipy' => '010',
            'nidn' => '0505118901',
            'nama' => 'Ahmad Azhari, S.Kom., M.Eng.',
            'jabfung' => 'AA',
            'email_dosen' => 'ahmad.azhari@tif.uad.ac.id',
            'avatar' => 'azhari.jpg'
        ]);

        $this->assertEquals('010', $dosen->nipy);
        $this->assertEquals('0505118901', $dosen->nidn);
        $this->assertEquals('Ahmad Azhari, S.Kom., M.Eng.', $dosen->nama);
        $this->assertEquals('AA', $dosen->jabfung);
        $this->assertEquals('ahmad.azhari@tif.uad.ac.id', $dosen->email_dosen);
        $this->assertEquals('azhari.jpg', $dosen->avatar);
    }
}
