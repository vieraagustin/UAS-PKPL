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
        if ($alamatPengiriman == 'Sewon, Bantul') {
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
        if ($this->banyakPesanan($banyakPesanan) == false) {
            return 'Transaksi Gagal, Belum Dipesan';
        }
        if ($this->statusPembayaran($statusPembayaran) == false) {
            return 'Transaksi Gagal, Pembayaran belum lunas';
        }
        if ($this->lokasiPengiriman($alamatPengiriman) == false) {
            return 'Transaksi Gagal, Lokasi pengiriman tidak di ketahui';
        }
        if ($this->metodePembayaran($metodePembayaran) == false) {
            return 'Transaksi Gagal, Metode pembayaran tidak di dukung';
        }
        return 'Transaksi Selesai Di Proses';
    }
}

$transaksi = new PesenCatering;
$cek = $transaksi->main('100 box','Lunas', 'Sewon,  Bantul', 'Transfer');
echo $cek;