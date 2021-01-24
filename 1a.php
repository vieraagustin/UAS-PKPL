<?php
class PesenCatering
{
    function banyakPesanan($banyakPesanan)
    {
        if ($banyakPesanan == '100 box') {
            return TRUE;
        }
    }
    function statusPembayaran($statusPembayaran)
    {
        if ($statusPembayaran == 'Lunas') {
            return TRUE;
        }
    }
    function lokasiPengiriman($alamatPengiriman)
    {
        if ($alamatPengiriman == 'Sewon,Bantul') {
            return TRUE;
        }
    }
    function metodePembayaran($metodePembayaran)
    {
        if ($metodePembayaran == 'Transfer') {
            return TRUE;
        }
    }


    function main($banyakPesanan,$statusPembayaran, $alamatPengiriman, $metodePembayaran)
    {

        if ($this->banyakPesanan($banyakPesanan) == TRUE) {
            if ($this->statusPembayaran($statusPembayaran) == TRUE) {
                if ($this->lokasiPengiriman($alamatPengiriman) == TRUE) {
                    if ($this->metodePembayaran($metodePembayaran) == TRUE) {
                        return 'Belum Dipesan';
                    }
                    else {
                        return 'Metode pembayaran tidak di dukung';
                    }
                }else {
                    return 'Lokasi Pengiriman tidak di ketahui';
                }
            }else {
                return 'Pembayaran belum lunas';
                
            }
        
        }
    }
}

$transaksi = new PesenCatering;
$cek = $transaksi->main('100 box','Lunas', 'Sewon,Bantul', 'Transfer');
echo $cek;
