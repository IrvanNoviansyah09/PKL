<!DOCTYPE html>
<head>
    <title>surat dispensasi</title>
    <meta charset="utf-8">
    <style>
        #judul {
            text-align: center;
        }

        #halaman {
            width: auto;
            height: auto;
            position: absolute;
            padding-top: 30px;
            padding-left: 30px;
            padding-right: 30px;
            padding-bottom: 80px;
        }

        #tabel {
            padding-left: 30px;
            padding-right: 30px;
        }

        .footer {
            position: fixed;
            bottom: 0;
            text-align: center;
            font-size: 11px;
            font-family: 'Times New Roman', Times, serif;
            
        }
        #font{
            font-family:'Times New Roman', Times, serif;
            font-size: medium;

        }
    </style>

</head>

<body>
    <img src="{{asset('gambar/umbhead.jpeg')}}" width="333" height="85"><br><br>
    <div id="halaman">
        <div style="width: 30%; text-align: left; float: right;"><span id="tanggalwaktu"></span></div>


        <h3 id=judul>SURAT PEMINJAMAN BARANG INVENTARIS</h3>

        <p>Assalamu’alaikum Warahmatullahi Wabarakaatuh,</p>
        <p>Ba’da salam, teriring doa agar segala kegiatan yang kita lakukan semoga selalu
            mendapatkan ridho dari Allah SWT., amin.
        </p>
        <p>Sehubungan dengan akan dilaksanakannya kegiatan {{$umum->perihal_peminjaman}} pada tanggal {{$umum->tanggal_peminjaman}}
            s.d {{$umum->tanggal_pengembalian}}, dengan ini saya mohon
            kesediaan Bapak/Ibu untuk dapat meminjamkan barang inventaris ini selama kegiatan kepada:
        </p>

        <table id="tabel">
            <tr>
                <td style="width: 30%;">NPM</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$umum->nim}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Nama</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$umum->nama}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Nama Barang</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$umum->nama_barang}}</td>
            </tr>

        </table>

        <p>Demikian surat pengajuan ini saya sampaikan, atas perhatian dan perkenannya
            saya ucapkan terima kasih.</p>

        <p>Wassalamu’alaikum Warahmatullahi Wabarakaatuh.</p><br><br><br><br>

        <div style="width: 35%; text-align: left; float: right;">Kepala Bagian Kemahasiswaan,</div><br><br><br><br><br><br>
        <div style="width: 35%; text-align: left; float: right;"><b><u>Herman Ariadi, Ns., M.Kep.</u></b></div><br>
        <div style="width: 33%; text-align: left; float: right;">NIDN. 1125078701</div>
    </div>
    <div class="footer">
        <i>Jl. Gubernur Syarkawi/Lingkar Utara Desa Semangat Dalam Handil Bakti, Kecamatan Alalak, Kabupaten Barito Kuala</i>
        <i>Telp./Fax. (0511) 336 3002 • Email: ft@umbjm.ac.id • Website: ft.umbjm.ac.id</i>
    </div>

    <script>
        var tw = new Date();
        if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
        else(a = tw.getTime());
        tw.setTime(a);
        var tahun = tw.getFullYear();
        var hari = tw.getDay();
        var bulan = tw.getMonth();
        var tanggal = tw.getDate();
        var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
        var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");
        document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " + tahun;
    </script>
    <script>
    window.print();
</script>
</body>

</html>