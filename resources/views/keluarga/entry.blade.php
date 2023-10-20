@extends('layouts.main')

@section('css')
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
  <!-- DataTables -->
  <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">

  <!-- Responsive datatable examples -->
  <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
  <div class="container-fluid">
    <div>
      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-boxed">

            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a data-bs-toggle="tab" href="#hal1" role="tab" aria-controls="hal1" aria-selected="true"
                  class="nav-link active"><strong>Hal
                    1</strong></a></li>
              <li class="nav-item"><a data-bs-toggle="tab" href="#hal2" role="tab" aria-controls="hal2" aria-selected="false" class="nav-link"><strong>Hal
                    2</strong></a></li>
              <li class="nav-item"><a data-bs-toggle="tab" href="#hal3" role="tab" aria-controls="hal3" aria-selected="false" class="nav-link"><strong>Hal
                    3</strong></a></li>
              <li class="nav-item"><a data-bs-toggle="tab" href="#hal4" role="tab" aria-controls="hal4" aria-selected="false" class="nav-link"><strong>Hal
                    4</strong></a></li>
              <li class="nav-item"><a data-bs-toggle="tab" href="#hal5" role="tab" aria-controls="hal5" aria-selected="false" class="nav-link"><strong>Hal
                    5</strong></a></li>
              <li class="nav-item"><a data-bs-toggle="tab" href="#hal6" role="tab" aria-controls="hal6" aria-selected="false" class="nav-link"><strong>Hal
                    6</strong></a></li>
              <li class="nav-item"><a data-bs-toggle="tab" href="#hal7" role="tab" aria-controls="hal7" aria-selected="false" class="nav-link"><strong>Hal
                    7</strong></a></li>
            </ul>

            <div class="tab-content">
              <div id="hal1" role="tabpanel" class="tab-pane active">
                <div class="row text-center">
                  <div class="col-md-3 pt-2"><img src="https://webapps.bps.go.id/olah/seruti/bps.png" style="width: 90px;"></div>
                  <div class="col-md-6">
                    <div><img src="https://webapps.bps.go.id/olah/seruti/garuda.png" style="width: 70px;"></div>
                    <h4>KUESIONER KELUARGA</h4>
                  </div>
                  <div class="col-md-3 pt-2">
                    <h4 class="bg-primary p-1" style="display: inline-block;">
                      PDC2023.KK
                    </h4>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    SELAMAT PAGI/SIANG/SORE/MALAM. KAMI/SAYA DARI BPS SEDANG MENGUMPULKAN
                    DATA/INFORMASI KEADAAN EKONOMI RUMAH TANGGA SEPERTI PENGELUARAN,
                    PENDAPATAN, DAN INVESTASI RUMAH TANGGA. UNTUK ITU, KAMI/SAYA AKAN
                    MEWAWANCARAI BAPAK/IBU BESERTA ANGGOTA RUMAH TANGGA LAINNYA. SELURUH
                    DATA YANG BAPAK/IBU BERIKAN KEPADA KAMI AKAN DIRAHASIAKAN DAN HANYA AKAN
                    DIGUNAKAN UNTUK KEPERLUAN PERENCANAAN PEMBANGUNAN. BOLEH SAYA MULAI
                    WAWANCARA SEKARANG?
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1"><input type="text" maxlength="1" class="my-1 field-center field-number form-control form-control-sm rounded-0">
                  </div>
                  <label class="col col-form-label">Ya bersedia =&gt; Mulai wawancara</label>
                </div>
                <div class="row">
                  <div class="col-md-1"><input type="text" maxlength="1" class="my-1 field-center field-number form-control form-control-sm rounded-0">
                  </div>
                  <label class="col col-form-label">Bersedia dengan perjanjian di lain waktu =&gt;
                    <b>Blok VII. Catatan</b></label>
                </div>
                <div class="row">
                  <div class="col-md-1"><input type="text" maxlength="1" class="my-1 field-center field-number form-control form-control-sm rounded-0">
                  </div> <label class="col col-form-label">Tidak bersedia =&gt; Lengkapi isian Blok I, Blok II, dan Blok Catatan.
                    Lampirkan Berita Acara Nonrespon. Selesai dan segera laporkan ke
                    pengawas</label>
                </div>

                <div class="row text-center">
                  <table class="table table-bordered">
                    <tbody>
                      <tr class="table-info text-center">
                        <th colspan="4">
                          <h5>BLOK I. KETERANGAN TEMPAT</h5>
                        </th>
                      </tr>
                      <tr>
                        <td width="60px">101</td>
                        <td class="text-left">Provinsi</td>
                        <td class="col-4 text-left">MALUKU</td>
                        <td class="col-4 p-2"><input type="text" maxlength="2"
                            class=" text-center text-muted field-number form-control form-control-sm rounded-0" value="81" @disabled(true)>
                        </td>
                      </tr>
                      <tr>
                        <td>102</td>
                        <td class="text-left">Kabupaten/Kota *)</td>
                        <td class="text-left">KEPULAUAN ARU</td>
                        <td class="p-2"><input type="text" maxlength="2"
                            class="text-center text-muted field-number form-control form-control-sm rounded-0" value="05" @disabled(true)></td>
                      </tr>
                      <tr>
                        <td>103</td>
                        <td class="text-left">Kecamatan</td>
                        <td class="text-left">PULAU-PULAU ARU</td>
                        <td class="p-2"><input type="text" maxlength="3" class="text-center form-control field-number form-control-sm rounded-0"
                            onkeypress='valid_number(event)'></td>
                      </tr>
                      <tr>
                        <td>104</td>
                        <td class="text-left">Desa/Kelurahan *)</td>
                        <td class="text-left">WANGEL</td>
                        <td class="p-2"><input type="text" maxlength="3" class="text-center form-control field-number form-control-sm rounded-0"
                            onkeypress='valid_number(event)'></td>
                      </tr>
                      <tr>
                        <td>105</td>
                        <td class="text-left">Nama SLS</td>
                        <td class="text-left">
                          PEMUKIMAN PENDUDUK
                        </td>
                        <td class="p-2"><input type="text" maxlength="4" class="text-center form-control form-control-sm rounded-0"></td>
                      </tr>
                      <tr>
                        <td>106</td>
                        <td class="text-left">Nama Kepala Keluarga</td>
                        <td colspan="2" class="p-2"><input type="text" maxlength="50"
                            class="field-left text-uppercase form-control form-control-sm rounded-0"></td>
                      </tr>
                      <tr>
                        <td>107</td>
                        <td class="text-left">Jumlah Anggota Keluarga</td>
                        <td colspan="2" class="p-2"><input type="text" maxlength="2"
                            class="text-center form-control field-number form-control-sm rounded-0" onkeypress='valid_number(event)'></td>
                      </tr>
                      <tr>
                        <td>108</td>
                        <td class="text-left">Nomor Kartu Keluarga</td>
                        <td colspan="2" class="p-2"><input type="text" maxlength="16"
                            class="text-center form-control field-number form-control-sm rounded-0" onkeypress='valid_number(event)'></td>
                      </tr>
                      <tr>
                        <td>109</td>
                        <td class="text-left">Nama Kepala Rumah tangga (KRT)</td>
                        <td colspan="2" class="p-2"><input type="text" maxlength="50"
                            class="field-left text-uppercase form-control form-control-sm rounded-0"></td>
                      </tr>
                      <tr>
                        <td>110</td>
                        <td class="text-left">Nomor Urut Bangunan Tempat Tinggal</td>
                        <td colspan="2" class="p-2"><input type="text" maxlength="2"
                            class="text-center form-control field-number form-control-sm rounded-0" onkeypress='valid_number(event)'></td>
                      </tr>
                      <tr>
                        <td>111</td>
                        <td class="text-left">Alamat (Nama Jalan/Gang/RT/RW/Dusun)</td>
                        <td colspan="2" class="p-2"><input type="text" maxlength="100"
                            class="field-left text-uppercase form-control form-control-sm rounded-0"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="row text-center">
                  <table class="table table-bordered mb-0">
                    <tbody>
                      <tr class="table-info text-center">
                        <th colspan="5">
                          <h5>BLOK II. KETERANGAN PENCACAHAN</h5>
                        </th>
                      </tr>
                      <tr>
                        <th colspan="2">Uraian</th>
                        <th>Nama dan Kode</th>
                        <th>Waktu</th>
                        <th>Tanda Tangan</th>
                      </tr>
                      <tr>
                        <td width="60px">201</td>
                        <td>Pencacah</td>
                        <td>
                          <div class="d-flex flex-column">
                            <div class="p-1">Nama Pencacah</div>
                            <div class="p-1 row"><input type="text" maxlength="5"
                                class="my-1 field-center field-number form-control form-control-sm rounded-0">
                            </div>
                          </div>
                        </td>
                        <td class="col-2">
                          <div class="d-flex flex-column">
                            <div class="row"><label class="col-md-4 offset-md-2 col-form-label">Tgl</label>
                              <div class="col-md-4"><input type="text" maxlength="2"
                                  class="my-1 field-center field-number form-control form-control-sm rounded-0"></div>
                            </div>
                            <div class="row"><label class="col-md-4 offset-md-2 col-form-label">Bln</label>
                              <div class="col-md-4"><input type="text" maxlength="2"
                                  class="my-1 field-center field-number form-control form-control-sm rounded-0"></div>
                            </div>
                          </div>
                        </td>
                        <td class="col-2"><input type="text" maxlength="1" class="my-1 field-center field-number form-control form-control-sm rounded-0">
                        </td>
                      </tr>
                      <tr>
                        <td>202</td>
                        <td>Pengawas</td>
                        <td>
                          <div class="d-flex flex-column">
                            <div class="p-1">Nama Pengawas</div>
                            <div class="p-1 row"><input type="text" maxlength="5"
                                class="my-1 field-center field-number form-control form-control-sm rounded-0">
                            </div>
                          </div>
                        </td>

                        <td>
                          <div class="d-flex flex-column">
                            <div class="row"><label class="col-md-4 offset-md-2 col-form-label">Tgl</label>
                              <div class="col-md-4"><input type="text" maxlength="2"
                                  class="my-1 field-center field-number form-control form-control-sm rounded-0"></div>
                            </div>
                            <div class="row"><label class="col-md-4 offset-md-2 col-form-label">Bln</label>
                              <div class="col-md-4"><input type="text" maxlength="2"
                                  class="my-1 field-center field-number form-control form-control-sm rounded-0"></div>
                            </div>
                          </div>
                        </td>
                        <td><input type="text" maxlength="1" class="my-1 field-center field-number form-control form-control-sm rounded-0">
                        </td>
                      </tr>
                      <tr>
                        <td>203</td>
                        <td>Hasil pencacahan</td>
                        <td colspan="4">
                          <div class="d-flex flex-row justify-content-around">
                            <div class="text-left" style="width: 700px;">
                              <ul class="leaders">
                                <li><span>Terisi lengkap</span><span>1</span></li>
                                <li><span>Terisi tidak lengkap</span><span>2</span></li>
                                <li><span>Tidak ada ART/responden yang dapat memberi jawaban
                                    sampai akhir masa pencacahan</span><span>3</span></li>
                                <li><span>Responden menolak</span><span>4</span></li>
                                <li><span>Rumah tangga pindah/bangunan sensus sudah tidak
                                    ada</span><span>5</span></li>
                              </ul>
                            </div>
                            <div class="align-self-center" style="width: 120px;"><input type="text" maxlength="1"
                                class="my-1 field-center field-number form-control form-control-sm rounded-0"></div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div id="hal2" role="tabpanel" class="tab-pane">
                <div class="row text-center">
                  <table class="table table-bordered">
                    <tbody>
                      <tr class="table-info text-center colspan="10">
                        <h5>BLOK III. KETERANGAN RUMAH TANGGA</h5>
                        </th>
                      </tr>
                      <tr>
                        <th>No Urut ART</th>
                        <th>
                          Nama Anggota Rumah Tangga (ART)<br><br><!----></th>
                        <th>
                          Apakah Hubungan (nama) dengan Kepala Rumah Tangga?
                          <br> <small>(kode)</small>
                        </th>
                        <th>
                          Apakah Status Perkawinan (nama)?<br> <small>
                            Belum Kawin - 1 <br>
                            Kawin - 2 <br>
                            Cerai Hidup - 3 <br>
                            Cerai Mati - 4
                          </small></th>
                        <th>
                          Apakah (nama) Laki - Laki atau Perempuan?<br> <small>
                            Laki-laki - 1 <br>
                            Perempuan - 2
                          </small></th>
                        <th>
                          Berapakah Umur (nama)? <br> <small> Jika umur ≥ 97 tahun, tulis "97" </small></th>
                        <th><small> Untuk ART yang berumur 5 tahun ke atas,</small> <br>
                          Apa Ijazah/ STTB Tertinggi yang Dimiliki (nama)? <br> <small>(kode)</small></th> <!---->
                      </tr>
                      <tr>
                        <td width="60px" class="p-1">(1)</td>
                        <td class="p-1">(2)</td>
                        <td width="150px" class="p-1">(3)</td>
                        <td width="150px" class="p-1">(4)</td>
                        <td width="150px" class="p-1">(5)</td>
                        <td width="150px" class="p-1">(6)</td>
                        <td width="150px" class="p-1">(7)</td> <!---->
                      </tr>
                      <tr class="">
                        <td class="p-1"><input type="text" maxlength="2" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <td class="p-1 d-flex"><input type="text" maxlength="100" class="field-left text-uppercase form-control form-control-sm rounded-0"
                            style="flex: 4 1 0%;"> <!----></td>
                        <td class="p-1"><input type="text" maxlength="1" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <td class="p-1"><input type="text" maxlength="1" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <td class="p-1"><input type="text" maxlength="1" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <td class="p-1"><input type="text" maxlength="2" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <td class="p-1"><input type="text" maxlength="2" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <!---->
                      </tr>
                      <tr class="">
                        <td class="p-1"><input type="text" maxlength="2" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <td class="p-1 d-flex"><input type="text" maxlength="100" class="field-left text-uppercase form-control form-control-sm rounded-0"
                            style="flex: 4 1 0%;"> <!----></td>
                        <td class="p-1"><input type="text" maxlength="1" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <td class="p-1"><input type="text" maxlength="1" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <td class="p-1"><input type="text" maxlength="1" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <td class="p-1"><input type="text" maxlength="2" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <td class="p-1"><input type="text" maxlength="2" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <!---->
                      </tr>
                      <tr class="">
                        <td class="p-1"><input type="text" maxlength="2" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <td class="p-1 d-flex"><input type="text" maxlength="100" class="field-left text-uppercase form-control form-control-sm rounded-0"
                            style="flex: 4 1 0%;"> <!----></td>
                        <td class="p-1"><input type="text" maxlength="1" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <td class="p-1"><input type="text" maxlength="1" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <td class="p-1"><input type="text" maxlength="1" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <td class="p-1"><input type="text" maxlength="2" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <td class="p-1"><input type="text" maxlength="2" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <!---->
                      </tr>
                      <tr class="">
                        <td class="p-1"><input type="text" maxlength="2" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <td class="p-1 d-flex"><input type="text" maxlength="100" class="field-left text-uppercase form-control form-control-sm rounded-0"
                            style="flex: 4 1 0%;"> <!----></td>
                        <td class="p-1"><input type="text" maxlength="1" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <td class="p-1"><input type="text" maxlength="1" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <td class="p-1"><input type="text" maxlength="1" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <td class="p-1"><input type="text" maxlength="2" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <td class="p-1"><input type="text" maxlength="2" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <!---->
                      </tr>
                      <tr class="">
                        <td class="p-1"><input type="text" maxlength="2" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <td class="p-1 d-flex"><input type="text" maxlength="100" class="field-left text-uppercase form-control form-control-sm rounded-0"
                            style="flex: 4 1 0%;"> <!----></td>
                        <td class="p-1"><input type="text" maxlength="1" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <td class="p-1"><input type="text" maxlength="1" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <td class="p-1"><input type="text" maxlength="1" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <td class="p-1"><input type="text" maxlength="2" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <td class="p-1"><input type="text" maxlength="2" class="field-center field-number form-control form-control-sm rounded-0">
                        </td>
                        <!---->
                      </tr>
                    </tbody> <!---->
                  </table>
                </div>
                <div class="row text-center">
                  <table class="table table-bordered">
                    <tbody>
                      <tr class="table-info text-center colspan="4">
                        <h5>
                          BLOK IV.1. KONSUMSI DAN PENGELUARAN BAHAN MAKANAN, BAHAN MINUMAN
                          DAN ROKOK SEMINGGU TERAKHIR (DALAM RUPIAH)
                        </h5>
                        </th>
                      </tr>
                      <tr>
                        <td colspan="4" class="font-italic">
                          Pada <b>triwulan II dan IV</b>, isian blok ini menggunakan
                          <b>kuesioner Seruti Makanan (VSERUTI.MAK)</b> yang disisipkan pada
                          halaman ini. Sedangkan pada <b>triwulan I</b>, blok ini
                          terintegrasi dengan
                          <b>kuesioner Susenas KP Maret dan September.</b>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="row text-left">
                  <table class="table table-bordered mb-0">
                    <tbody>
                      <tr class="table-info text-center">
                        <th colspan="4">
                          <h5>
                            BLOK IV.2.A. PENGELUARAN BUKAN MAKANAN SELAMA SEBULAN DAN TIGA
                            BULAN TERAKHIR (DALAM RUPIAH)
                          </h5>
                        </th>
                      </tr>
                      <tr class="text-center bg-blok">
                        <th>No.</th>
                        <th>Rincian</th>
                        <th>Sebulan Terakhir (Rp)</th>
                        <th>Tiga Bulan Terakhir (Rp)</th>
                      </tr>
                      <tr class="text-center bg-blok">
                        <td width="60px" class="p-1">(1)</td>
                        <td class="p-1">(2)</td>
                        <td class="p-1 col-4">(3)</td>
                        <td class="p-1 col-4">(4)</td>
                      </tr>
                      <tr class="bg-light text-body">
                        <td class="font-weight-bold text-center">401</td>
                        <td class="font-weight-bold">
                          Pakaian, alas kaki, dan tutup kepala <br>[402+403]
                        </td>
                        <td></td>
                        <td class="py-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-danger px-1"><span>Jumlah Seharusnya:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value="">170.000</label></div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">402</td>
                        <td>
                          Pakaian dan tutup kepala
                          <small>
                            (kain, pakaian jadi, masker kain, seragam sekolah, topi,
                            aksesoris pakaian, ongkos jahit, laundry, dsb)</small>
                        </td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">403</td>
                        <td>
                          Alas kaki
                          <small>(sendal, sepatu, sol dan jasa pemeliharaannya)</small>
                        </td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr class="bg-light text-body">
                        <td class="font-weight-bold text-center">404</td>
                        <td class="font-weight-bold">
                          Perumahan, listrik, air, dan bahan bakar memasak <br>[406a +
                          406b + 406c + 406d + 407 + 408 + 409 + 410 + 411 + 412]
                        </td>
                        <td class="py-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-danger px-1"><span>Jumlah Seharusnya:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value="">470.000</label></div>
                        </td>
                        <td class="py-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-danger px-1"><span>Jumlah Seharusnya:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value=""></label></div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">405</td>
                        <td class="d-flex"><span class="mr-1">
                            Status penguasaan bangunan tempat tinggal yang ditempati*
                            <br> <small>[triwulan I disalin dari VSEN.KP Rincian 199]</small></span><input type="text" maxlength="1"
                            class="my-1 field-center field-number ml-auto mr-1 form-control form-control-sm rounded-0" style="width: 100px;"></td>
                        <td>
                          <ul class="leaders">
                            <li><span>Milik sendiri</span><span>1</span></li>
                            <li><span>Kontrak</span><span>2</span></li>
                            <li><span>Sewa</span><span>3</span></li>
                          </ul>
                        </td>
                        <td>
                          <ul class="leaders">
                            <li><span>Bebas sewa</span><span>4</span></li>
                            <li><span>Dinas</span><span>5</span></li>
                            <li><span>Lainnya</span><span>6</span></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">406</td>
                        <td>
                          a. Jika milik sendiri/bebas sewa, perkiraan sewa*: <br> <small>[triwulan I disalin dari VSEN.KP Rincian 200]</small></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-primary px-1"><span>KP R. 200:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value="">400.000</label></div>
                        </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="text-center"></td>
                        <td>
                          b. Jika kontrak, nilai kontrak*: <br> <small>[triwulan I dapat disalin dari VSEN.KP Rincian 201]</small></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-primary px-1"><span>KP R. 201:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value=""></label></div>
                        </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="text-center"></td>
                        <td>
                          c. Jika sewa, nilai sewa*: <br> <small>[triwulan I disalin dari VSEN.KP Rincian 202]</small></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-primary px-1"><span>KP R. 202:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value=""></label></div>
                        </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="text-center"></td>
                        <td>
                          d. Jika dinas/lainnya, perkiraan sewa*: <br> <small>[triwulan I disalin dari VSEN.KP Rincian 203]</small></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-primary px-1"><span>KP R. 203:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value=""></label></div>
                        </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="text-center">407</td>
                        <td>
                          Pemeliharaan rumah dan perbaikan ringan <br> <small>(cat kayu, kapur, cat tembok, genteng, kaca jendela, engsel,
                            dsb)</small></td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">408</td>
                        <td>
                          Listrik (PLN, non PLN, termasuk biaya bahan bakar generator)*
                          <br> <small>[triwulan I disalin dari VSEN.KP Rincian 206, 211]</small>
                        </td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-primary px-1"><span>KP R. 206 + 211 + (213/12) + (214/12):</span> <label
                              contenteditable="false" style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value=""></label></div>
                        </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="text-center">409</td>
                        <td>
                          Air (PAM, pikulan, beli, dsb)* <br> <small>[triwulan I disalin dari VSEN.KP Rincian 208]</small></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-primary px-1"><span>KP R. 208:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value=""></label></div>
                        </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="text-center">410</td>
                        <td>
                          Gas (LPG, gas kota, biogas)* <br> <small>
                            [triwulan I disalin dari VSEN.KP Rincian 225, 227, 232]
                          </small></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-primary px-1"><span>KP R. 225 + 227 + 232:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value=""></label></div>
                        </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="text-center">411</td>
                        <td>
                          Bahan bakar lainnya (minyak tanah, kayu bakar, arang, dsb)* <br> <small>[triwulan I disalin dari VSEN.KP Rincian 229, 231, 233]
                          </small></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-primary px-1"><span>KP R. 220 + 229 + 231 + 233:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value="">70.000</label>
                          </div>
                        </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="text-center">412</td>
                        <td>Biaya pengumpulan/pemungutan sampah/limbah</td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                        <td></td>
                      </tr>
                      <tr class="bg-light text-body">
                        <td class="font-weight-bold text-center">413</td>
                        <td class="font-weight-bold">
                          Furnitur, peralatan, dan pemeliharaan rumah [414 + 415 + 416]
                        </td>
                        <td class="py-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-danger px-1"><span>Jumlah Seharusnya:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value="">33.000</label></div>
                        </td>
                        <td class="py-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-danger px-1"><span>Jumlah Seharusnya:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value=""></label></div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">414</td>
                        <td>
                          Furnitur, peralatan, dan barang pecah belah <br> <small>(meja, mesin cuci, AC, sprei, gorden, piring, wajan, sapu,
                            servis AC, dsb)</small></td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div id="hal3" role="tabpanel" class="tab-pane">
                <div class="row text-left">
                  <table class="table table-bordered mb-0">
                    <tbody>
                      <tr class="table-info text-center text-center">
                        <th colspan="4">
                          <h5>
                            BLOK IV.2.A. PENGELUARAN BUKAN MAKANAN SELAMA SEBULAN DAN TIGA
                            BULAN TERAKHIR (DALAM RUPIAH)
                          </h5>
                        </th>
                      </tr>
                      <tr class="text-center bg-blok">
                        <th>No.</th>
                        <th>Rincian</th>
                        <th>Sebulan Terakhir (Rp)</th>
                        <th>Tiga Bulan Terakhir (Rp)</th>
                      </tr>
                      <tr class="text-center bg-blok">
                        <td width="60px" class="p-1">(1)</td>
                        <td class="p-1">(2)</td>
                        <td class="p-1 col-4">(3)</td>
                        <td class="p-1 col-4">(4)</td>
                      </tr>
                      <tr>
                        <td class="text-center">415</td>
                        <td>
                          Bahan pembersih dan pemeliharaan rumah* <br> <small>(deterjen, sabun cuci piring, karbol, kapur barus, dsb)
                            [triwulan I disalin dari VSEN.KP Rincian 244, 245, 247,
                            dsb]</small></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-primary px-1"><span>KP R. 244 + 245 + 247:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value="">33.000</label></div>
                        </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="text-center">416</td>
                        <td>
                          Biaya jasa pekerja domestik (pembantu ruta, supir, dsb)
                          <br> <small>[triwulan I disalin dari VSEN.KP Rincian 277]</small>
                        </td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-primary px-1"><span>KP R. 277:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value=""></label></div>
                        </td>
                        <td></td>
                      </tr>
                      <tr class="bg-light text-body">
                        <td class="font-weight-bold text-center">417</td>
                        <td class="font-weight-bold">
                          Transportasi <br>[418 + 419 + 420 + 421 + 422 + 423 + 424 + 425]
                        </td>
                        <td class="py-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-danger px-1"><span>Jumlah Seharusnya:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value=""></label></div>
                        </td>
                        <td class="py-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-danger px-1"><span>Jumlah Seharusnya:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value=""></label></div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">418</td>
                        <td>
                          Pembelian kendaraan <br> <small>(sepeda motor, mobil, sepeda, perahu motor, dsb)</small></td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">419</td>
                        <td>
                          Bahan bakar kendaraan (bensin, solar, dsb) *<br> <small>
                            [triwulan I disalin dari VSEN.KP Rincian 216, 218]
                          </small></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-primary px-1"><span>KP R. 216 + 218:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value=""></label></div>
                        </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="text-center">420</td>
                        <td>
                          Pemeliharaan, pelumas, dan suku cadang kendaraan <br> <small>(biaya servis, ganti oli, ganti ban, isi angin, cuci kendaraan,
                            dsb)</small></td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">421</td>
                        <td>
                          Sewa kendaraan, tol, parkir, dan biaya SIM <br> <small>(termasuk kursus mengemudi)</small></td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">422</td>
                        <td>
                          Biaya angkutan penumpang darat <br> <small>(bus, angkot, taksi, ojek, kereta api, becak, dsb)</small></td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">423</td>
                        <td>
                          Biaya angkutan penumpang air <br> <small>(ferry, perahu motor, kapal laut, dsb)</small></td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">424</td>
                        <td>Biaya angkutan penumpang udara</td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">425</td>
                        <td>
                          Ongkos kirim dan pengiriman barang lainnya <br>
                          (ongkir belanja online, jasa kurir, jasa pesan antar makanan, dsb)
                        </td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr class="bg-light text-body">
                        <td class="font-weight-bold text-center">426</td>
                        <td class="font-weight-bold">Komunikasi <br>[427 + 428 + 429]</td>
                        <td class="py-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-danger px-1"><span>Jumlah Seharusnya:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value=""></label></div>
                        </td>
                        <td class="py-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-danger px-1"><span>Jumlah Seharusnya:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value=""></label></div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">427</td>
                        <td>
                          Alat komunikasi dan informasi <br> <small>(HP, komputer, laptop, printer, aksesoris, dan
                            perbaikannya)</small></td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">428</td>
                        <td>
                          Rekening telepon, pulsa, paket data, dan biaya internet* <br> <small>
                            [triwulan I disalin dari VSEN.KP Rincian 235, 236, 238]</small></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-primary px-1"><span>KP R. 235 + 236 + 238:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value=""></label></div>
                        </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="text-center">429</td>
                        <td>Langganan TV kabel dan streaming film/musik</td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                        <td></td>
                      </tr>
                      <tr class="bg-light text-body">
                        <td class="font-weight-bold text-center">430</td>
                        <td class="font-weight-bold">
                          Rekreasi, Olahraga, dan Budaya <br>
                          [431 + 432 + 433 + 434 + 435 + 436 ]
                        </td>
                        <td></td>
                        <td class="py-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-danger px-1"><span>Jumlah Seharusnya:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value=""></label></div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">431</td>
                        <td>
                          Mainan, barang rekreasi, alat musik, dan alat olahraga <br> <small>(kamera, gitar, bola, raket, alat kemah, termasuk perbaikan,
                            dsb)</small></td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">432</td>
                        <td>
                          Tiket wisata, bioskop, pertunjukan, dan biaya olahraga <br> <small>(gym, renang, klub/kursus hobi, nonton pertandingan, game
                            online, dsb)</small></td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">433</td>
                        <td>
                          Hewan dan tanaman peliharaan <br> <small>(kandang, akuarium, pot, pupuk, makanan hewan, vaksin hewan,
                            dsb)</small></td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">434</td>
                        <td>
                          Buku, majalah, surat kabar, dan alat tulis <br> <small>(buku pelajaran, novel, komik, buku/majalah digital, pensil,
                            pulpen, dsb)</small></td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">435</td>
                        <td>
                          Paket liburan, umroh, haji, dan perjalanan rohani <br> <small>(biaya akomodasi, wisata, makan-minum yang tidak dapat
                            dipisahkan)</small></td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">436</td>
                        <td>
                          Hotel dan akomodasi lainnya <br> <small>(hotel, villa, bungalow, homestay, dsb)</small></td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr class="bg-light text-body">
                        <td class="font-weight-bold text-center">437</td>
                        <td class="font-weight-bold">
                          Barang dan Jasa Lainnya <br>
                          [438 + 439 + 440 + 441 + 442]
                        </td>
                        <td class="py-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-danger px-1"><span>Jumlah Seharusnya:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value="">110.000</label></div>
                        </td>
                        <td class="py-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-danger px-1"><span>Jumlah Seharusnya:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value=""></label></div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">438</td>
                        <td>
                          Produk perawatan diri, kosmetik, dan kecantikan* <br> <small>(sabun mandi, parfum, dsb)
                            <br>
                            [triwulan I disalin dari VSEN.KP Rincian 241, 242]</small></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-primary px-1"><span>KP R. 241:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value="">41.000</label></div>
                        </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="text-center">439</td>
                        <td>
                          Jasa perawatan diri dan kecantikan* <br> <small>(salon, lulur/spa, cukur rambut, cream bath, dsb)
                            <br>[triwulan I disalin dari VSEN.KP Rincian 243]
                          </small></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-primary px-1"><span>KP R. 243:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value=""></label></div>
                        </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="text-center">440</td>
                        <td>Pembelian perhiasan, jam tangan, tas, koper, dan stroller</td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">441</td>
                        <td>
                          Biaya administrasi dan jasa lembaga keuangan <br> <small>(biaya bulanan bank, transfer antar bank, top up, dsb)</small></td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">442</td>
                        <td>
                          Biaya jasa lainnya <br> <small>(fotokopi, jasa pemuka agama, paspor/visa, penitipan
                            anak/lansia, dsb)</small></td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr class="bg-light text-body">
                        <td class="font-weight-bold text-center">443</td>
                        <td class="font-weight-bold">
                          Pajak dan Premi Asuransi <br>[444 + 445]
                        </td>
                        <td></td>
                        <td class="py-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-danger px-1"><span>Jumlah Seharusnya:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value="">526.250</label></div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">444</td>
                        <td>Pajak (PBB, STNK, PPh, dsb)</td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">445</td>
                        <td>Premi asuransi (kesehatan, kerugian, kecelakaan, dsb)</td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr class="bg-light text-body">
                        <td class="font-weight-bold text-center">446</td>
                        <td class="font-weight-bold">
                          Keperluan Pesta dan Upacara/Kenduri <br>
                          [447 + 448 + 449 + 450]
                        </td>
                        <td></td>
                        <td class="py-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-danger px-1"><span>Jumlah Seharusnya:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value=""></label></div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">447</td>
                        <td>Perkawinan</td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">448</td>
                        <td>Ulang tahun dan khitanan</td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">449</td>
                        <td>Pemakaman</td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">450</td>
                        <td>
                          <div class="form-inline"><label class="mr-1"> Lainnya, tuliskan </label><input type="text" maxlength="100"
                              class="my-1 field-left col-6 form-control form-control-sm rounded-0"> <label class="ml-1"></label></div>
                        </td>
                        <td></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr class="bg-blok text-body">
                        <td class="font-weight-bold text-center">451</td>
                        <td class="font-weight-bold">
                          TOTAL PENGELUARAN BUKAN MAKANAN <br>
                          [ 401 + 404 + 413 + 417 + 426 + 430 + 437 + 443 + 446 ]
                        </td>
                        <td class="py-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-danger px-1"><span>Jumlah Seharusnya:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value="">613.000</label></div>
                        </td>
                        <td class="py-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-danger px-1"><span>Jumlah Seharusnya:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value="">696.250</label></div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div id="hal4" role="tabpanel" class="tab-pane">
                <div class="row text-left">
                  <table class="table table-bordered">
                    <tbody>
                      <tr class="table-info text-center text-center">
                        <th colspan="4">
                          <h5>
                            BLOK IV.2.B PENGELUARAN KESEHATAN DAN PENDIDIKAN SELAMA TIGA
                            BULAN TERAKHIR (DALAM RUPIAH)
                          </h5>
                        </th>
                      </tr>
                      <tr class="text-center bg-blok">
                        <th>No.</th>
                        <th>Rincian</th>
                        <th>Total</th>
                        <th><i>Out of Pocket</i> (OOP)</th>
                      </tr>
                      <tr class="text-center bg-blok">
                        <td width="60px" class="p-1">(1)</td>
                        <td class="p-1">(2)</td>
                        <td class="p-1 col-4">(3)</td>
                        <td class="p-1 col-4">(4)</td>
                      </tr>
                      <tr class="bg-light text-body">
                        <td class="font-weight-bold text-center">452</td>
                        <td class="font-weight-bold">
                          Kesehatan <br>
                          [453 + 454 + 455]
                        </td>
                        <td class="py-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-danger px-1"><span>Jumlah Seharusnya:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value=""></label></div>
                        </td>
                        <td class="py-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-danger px-1"><span>Jumlah Seharusnya:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value=""></label></div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">453</td>
                        <td>
                          Obat-obatan dan produk kesehatan <br> <small>(obat resep/bebas, vitamin, jamu, kacamata, kursi roda, alat
                            KB, dsb)</small></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">454</td>
                        <td>
                          Biaya rawat jalan dan laboratorium <br> <small>(konsultasi, ambulans, pengobatan tradisional, tes CV19,
                            imunisasi, dsb)</small></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">455</td>
                        <td>
                          Biaya rawat inap <br> <small>(biaya kamar, konsultasi, obat, dsb yang tidak dapat
                            dipisahkan)</small></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr class="bg-light text-body">
                        <td class="font-weight-bold text-center">456</td>
                        <td class="font-weight-bold">
                          Pendidikan <br>
                          [457 + 458 + 459 + 460 + 461 + 462 ]
                        </td>
                        <td class="py-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-danger px-1"><span>Jumlah Seharusnya:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value="">922.500</label></div>
                        </td>
                        <td class="py-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-danger px-1"><span>Jumlah Seharusnya:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value="">50.000</label></div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">457</td>
                        <td>Biaya pra sekolah</td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">458</td>
                        <td>Biaya sekolah dasar (SD) / sederajat</td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">459</td>
                        <td>Biaya sekolah menengah pertama (SMP) / sederajat</td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">460</td>
                        <td>Biaya sekolah menengah atas (SMA) / sederajat</td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">461</td>
                        <td>Biaya pendidikan tinggi</td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr>
                        <td class="text-center">462</td>
                        <td>Biaya kursus dan bimbingan belajar di luar sekolah</td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                        <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value=""></td>
                      </tr>
                      <tr class="bg-blok text-body">
                        <td class="font-weight-bold text-center">463</td>
                        <td class="font-weight-bold">
                          TOTAL PENGELUARAN KESEHATAN DAN PENDIDIKAN <br>
                          [ 452 + 456 ]
                        </td>
                        <td class="py-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-danger px-1"><span>Jumlah Seharusnya:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value="">922.500</label></div>
                        </td>
                        <td class="py-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                          <div class="d-flex justify-content-between text-danger px-1"><span>Jumlah Seharusnya:</span> <label contenteditable="false"
                              style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value="">50.000</label></div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="row text-left">
                  <table class="table table-bordered">
                    <tbody>
                      <tr class="table-info text-center text-center">
                        <th colspan="2">
                          <h5>BLOK IV.3 PERSEPSI TERHADAP KONDISI EKONOMI RUMAH TANGGA</h5>
                        </th>
                      </tr>
                      <tr>
                        <td>
                          <table class="table table-bordered">
                            <tbody>
                              <tr class="text-center bg-blok">
                                <th>No.</th>
                                <th>Pertanyaan</th>
                                <th>
                                  Perubahan (kode) <br> <small>Meningkat - 1 &nbsp;&nbsp;&nbsp;&nbsp; Menurun - 3
                                    <br>
                                    Tetap - 2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tidak
                                    relevan - 5</small></th>
                                <th>
                                  Jika kolom (3) berkode 1 atau 3, <br>
                                  Persentase Perubahan (%)
                                </th>
                              </tr>
                              <tr class="text-center bg-blok">
                                <td width="60px" class="p-1">(1)</td>
                                <td class="p-1">(2)</td>
                                <td class="p-1 col-3">(3)</td>
                                <td class="p-1 col-3">(4)</td>
                              </tr>
                              <tr>
                                <td>464</td>
                                <td>
                                  Bagaimana kecenderungan
                                  <b>pengeluaran konsumsi rumah tangga</b>
                                  Anda pada triwulan ini dibanding triwulan sebelumnya?
                                  [kode 1-3]
                                </td>
                                <td><input type="text" maxlength="1" class="my-1 field-center field-number form-control form-control-sm rounded-0">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                              <tr>
                                <td>465</td>
                                <td>
                                  Bagaimana kecenderungan
                                  <b>konsumsi bahan makanan/minuman</b>
                                  rumah tangga Anda pada triwulan ini dibanding triwulan
                                  sebelumnya? [kode 1-3,5]
                                </td>
                                <td><input type="text" maxlength="1" class="my-1 field-center field-number form-control form-control-sm rounded-0">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                              <tr>
                                <td>466</td>
                                <td>
                                  Bagaimana kecenderungan
                                  <b>konsumsi makanan/minuman jadi yang diperoleh dari
                                    restoran/warung makan/kaki lima/dsb</b>
                                  rumah tangga Anda pada triwulan ini dibanding triwulan
                                  sebelumnya? [kode 1-3, 5]
                                </td>
                                <td><input type="text" maxlength="1" class="my-1 field-center field-number form-control form-control-sm rounded-0">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                              <tr>
                                <td>467</td>
                                <td>
                                  Bagaimana kecenderungan <b>belanja online</b> rumah tangga
                                  Anda pada triwulan ini dibanding triwulan sebelumnya?
                                  [kode 1-3, 5]
                                </td>
                                <td><input type="text" maxlength="1" class="my-1 field-center field-number form-control form-control-sm rounded-0">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                              <tr>
                                <td>468</td>
                                <td>
                                  Bagaimana kecenderungan
                                  <b>upah/gaji yang diterima</b> rumah tangga Anda pada
                                  triwulan ini dibanding triwulan sebelumnya? [kode 1-3, 5]
                                </td>
                                <td><input type="text" maxlength="1" class="my-1 field-center field-number form-control form-control-sm rounded-0">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                              <tr>
                                <td>469</td>
                                <td>
                                  Bagaimana kecenderungan
                                  <b>keuntungan dari usaha rumah</b> tangga Anda pada
                                  triwulan ini dibanding triwulan sebelumnya? [kode 1-3, 5]
                                </td>
                                <td><input type="text" maxlength="1" class="my-1 field-center field-number form-control form-control-sm rounded-0">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <table class="table-no-bordered">
                            <tbody>
                              <tr>
                                <td>470.</td>
                                <td colspan="3">
                                  Apakah rumah tangga Anda melakukan aktivitas ekonomi
                                  berikut ini dalam rangka memenuhi kebutuhan pengeluaran
                                  konsumsi rumah tangga selama tiga bulan terakhir ini:
                                </td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>a. Mengambil tabungan/deposito?</td>
                                <td>Ya - 1 &nbsp;&nbsp;&nbsp;&nbsp; Tidak - 5</td>
                                <td class="p-1"><input type="text" maxlength="1"
                                    class="my-1 field-center field-number form-control form-control-sm rounded-0"></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>b. Melakukan kredit/pinjaman?</td>
                                <td>Ya - 1 &nbsp;&nbsp;&nbsp;&nbsp; Tidak - 5</td>
                                <td class="p-1"><input type="text" maxlength="1"
                                    class="my-1 field-center field-number form-control form-control-sm rounded-0"></td>
                              </tr>
                              <tr>
                                <td>471.</td>
                                <td colspan="3">
                                  a. <b>[Ditanyakan khusus pada triwulan IV]</b> Apakah
                                  rumah tangga Anda memperoleh bonus/tambahan penghasilan
                                  pada akhir tahun?
                                </td>
                              </tr>
                              <tr>
                                <td></td>
                                <td colspan="2">
                                  Ya - 1 =&gt; rincian 471.a Tidak - 5 Tidak Tahu - 9
                                </td>
                                <td class="p-1"><input type="text" maxlength="1"
                                    class="my-1 field-center field-number form-control form-control-sm rounded-0"></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td colspan="2">
                                  b. (Jika 471.a = 1), Berapakah bonus/tambahan pengasilan
                                  yang akan diperoleh? (Rupiah)
                                </td>
                                <td class="p-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                              <tr>
                                <td>472.</td>
                                <td colspan="3">
                                  a. <b>[Ditanyakan khusus pada triwulan IV]</b> Apakah
                                  rumah tangga Anda memiliki rencana dan sudah menyiapkan
                                  anggaran untuk liburan akhir tahun?
                                </td>
                              </tr>
                              <tr>
                                <td></td>
                                <td colspan="2">
                                  Ya - 1 =&gt; rincian 471.b Tidak - 5 Tidak Tahu - 9
                                </td>
                                <td class="p-1"><input type="text" maxlength="1"
                                    class="my-1 field-center field-number form-control form-control-sm rounded-0"></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td colspan="2">
                                  b. (Jika 472.a = 1), Berapakah nilai anggaran yang sudah
                                  disiapkan ? (Rupiah)
                                </td>
                                <td class="p-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div id="hal5" role="tabpanel" class="tab-pane">
                <div class="row text-left">
                  <table class="table table-bordered mb-0">
                    <tbody>
                      <tr class="table-info text-center text-center">
                        <th colspan="2">
                          <h5>
                            BLOK V. PENDAPATAN, PENERIMAAN, DAN PENGELUARAN BUKAN KONSUMSI
                            SELAMA TIGA BULAN TERAKHIR (DALAM RUPIAH)
                          </h5>
                        </th>
                      </tr>
                      <tr>
                        <td width="60px" class="borderless-right">501.</td>
                        <td>
                          Jika terdapat ART (10 tahun ke atas) yang
                          <b>bekerja dengan menerima upah/gaji</b> selama tiga bulan
                          terakhir, maka isikan keterangan pekerjaan pada tabel berikut:
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <table class="table table-bordered">
                            <tbody>
                              <tr class="text-center bg-blok">
                                <th>No. Urut ART</th>
                                <th>Nama</th>
                                <th>Kategori Lapangan Usaha*)</th>
                                <th>Jenis Pekerjaan **)</th>
                                <th>
                                  Upah/gaji dalam Bentuk Uang <br> <small>(gaji, tunjangan, uang makan, dsb)</small></th>
                                <th>
                                  Upah/gaji dalam Bentuk Barang/Jasa <br> <small>(rumah dinas, kendaraan dinas, makanan, dsb)
                                  </small></th>
                                <th>Lembur, Honorarium, THR, dsb.</th>
                              </tr>
                              <tr class="text-center bg-blok">
                                <td width="80px" class="p-1">(1)</td>
                                <td class="p-1">(2)</td>
                                <td class="p-1 col-1">(3)</td>
                                <td class="p-1 col-1">(4)</td>
                                <td class="p-1 col-2">(5)</td>
                                <td class="p-1 col-2">(6)</td>
                                <td class="p-1 col-2">(7)</td>
                              </tr>
                              <tr>
                                <td colspan="4" class="text-center">JUMLAH</td>
                                <td class="p-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                  <div class="d-flex justify-content-between text-danger px-1"><span></span> <label contenteditable="false"
                                      style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value="">0</label></div>
                                </td>
                                <td class="p-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                  <div class="d-flex justify-content-between text-danger px-1"><span></span> <label contenteditable="false"
                                      style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value="">0</label></div>
                                </td>
                                <td class="p-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                  <div class="d-flex justify-content-between text-danger px-1"><span></span> <label contenteditable="false"
                                      style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value="">0</label></div>
                                </td>
                              </tr> <!---->
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td width="60px" class="borderless-right">502.</td>
                        <td>
                          Jika terdapat ART (10 tahun ke atas) yang
                          <b>memiliki usaha rumah</b>
                          tangga selama tiga bulan terakhir, maka isikan keterangan usaha
                          rumah tangga pada tabel berikut:
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <table class="table table-bordered mb-0">
                            <tbody>
                              <tr class="text-center bg-blok">
                                <th>No. Urut ART</th>
                                <th>Nama</th>
                                <th>Kategori Lapangan Usaha*)</th>
                                <th>Jenis Pekerjaan **)</th>
                                <th>Nilai Produksi</th>
                                <th>
                                  Biaya Produksi <br> <small>(bahan baku dan penolong, biaya listrik, transportasi,
                                    upah/gaji, sewa bangunan, dsb)</small></th>
                                <th>
                                  Jika menggunakan tenaga kerja, <br> <small>
                                    Persentase Biaya Produksi yang Dibayarkan untuk
                                    Upah/Gaji (%)</small></th>
                                <th>
                                  Nilai Produksi yang Belum Terjual Serta Bahan Baku dan
                                  Penolong yang Belum Digunakan Pada Saat Pencacahan (Stok
                                  akhir)
                                </th>
                              </tr>
                              <tr class="text-center bg-blok">
                                <td width="80px" class="p-1">(1)</td>
                                <td class="p-1">(2)</td>
                                <td width="80px" class="p-1">(3)</td>
                                <td width="80px" class="p-1">(4)</td>
                                <td class="p-1 col-2">(5)</td>
                                <td class="p-1 col-2">(6)</td>
                                <td class="p-1 col-1">(7)</td>
                                <td class="p-1 col-2">(8)</td>
                              </tr>
                              <tr class="">
                                <td class="p-1"><input type="text" maxlength="2"
                                    class="my-1 field-center field-number form-control form-control-sm rounded-0"></td>
                                <td class="p-1"><input type="text" maxlength="100" class="my-1 field-center form-control form-control-sm rounded-0">
                                </td>
                                <td class="p-1"><input type="text" maxlength="2"
                                    class="my-1 field-center field-number form-control form-control-sm rounded-0"></td>
                                <td class="p-1"><input type="text" maxlength="1"
                                    class="my-1 field-center field-number form-control form-control-sm rounded-0"></td>
                                <td class="p-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td class="p-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td class="p-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td class="p-1 d-flex"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0"
                                    value=""> <!----></td>
                              </tr>
                              <tr>
                                <td colspan="4" class="text-center">JUMLAH</td>
                                <td class="p-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                  <div class="d-flex justify-content-between text-danger px-1"><span></span> <label contenteditable="false"
                                      style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value="">3.875.000</label></div>
                                </td>
                                <td class="p-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                  <div class="d-flex justify-content-between text-danger px-1"><span></span> <label contenteditable="false"
                                      style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value="">155.000</label></div>
                                </td>
                                <td></td>
                                <td class="p-1"><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                  <div class="d-flex justify-content-between text-danger px-1"><span></span> <label contenteditable="false"
                                      style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value="">0</label></div>
                                </td>
                              </tr> <!---->
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td class="borderless-right">503.</td>
                        <td><b>Pendapatan kepemilikan yang diterima dan dibayarkan</b> oleh
                          rumah tangga selama tiga bulan terakhir
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <table>
                            <tbody>
                              <tr class="text-center bg-blok">
                                <th>No.</th>
                                <th>Rincian Pendapatan Kepemilikan</th>
                                <th>Diterima</th>
                                <th>Dibayar</th>
                              </tr>
                              <tr class="text-center bg-blok">
                                <td width="60px" class="p-1">(1)</td>
                                <td class="p-1">(2)</td>
                                <td class="p-1 col-4">(3)</td>
                                <td class="p-1 col-4">(4)</td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>Sewa Lahan</td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>
                                  Withdrawal (Keuntungan dari Perusahaan Tidak Berbadan
                                  Hukum)
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td></td>
                              </tr>
                              <tr>
                                <td colspan="2" class="text-center">
                                  Jumlah (Rincian 1 + 2)
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                  <div class="d-flex justify-content-between text-danger px-1"><span>Jumlah Seharusnya:</span> <label contenteditable="false"
                                      style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value=""></label></div>
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                  <div class="d-flex justify-content-between text-danger px-1"><span></span> <label contenteditable="false"
                                      style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value=""></label></div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div id="hal6" role="tabpanel" class="tab-pane">
                <div class="row text-left">
                  <table class="table table-bordered mb-0">
                    <tbody>
                      <tr class="table-info text-center text-center">
                        <th colspan="2">
                          <h5>
                            BLOK V. PENDAPATAN, PENERIMAAN, DAN PENGELUARAN BUKAN KONSUMSI
                            SELAMA TIGA BULAN TERAKHIR (DALAM RUPIAH)
                          </h5>
                        </th>
                      </tr>
                      <tr>
                        <td width="60px" class="borderless-right">504.</td>
                        <td><b>Transfer berjalan</b> selama tiga bulan terakhir</td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <table>
                            <tbody>
                              <tr class="text-center bg-blok">
                                <th rowspan="2">No.</th>
                                <th rowspan="2">Rincian</th>
                                <th colspan="2">Transfer Diterima (dari)</th>
                                <th colspan="2">Transfer Dibayar/Diberikan (kepada)</th>
                              </tr>
                              <tr class="text-center bg-blok">
                                <th>Uang</th>
                                <th>Barang/Jasa</th>
                                <th>Uang</th>
                                <th>Barang/Jasa</th>
                              </tr>
                              <tr class="text-center bg-blok">
                                <td width="60px" class="p-1">(1)</td>
                                <td class="p-1 col-4">(2)</td>
                                <td class="p-1 col-2">(3)</td>
                                <td class="p-1 col-2">(4)</td>
                                <td class="p-1 col-2">(5)</td>
                                <td class="p-1 col-2">(6)</td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>Pemerintah</td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Rumah Tangga</td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Lainnya</td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                              <tr>
                                <td colspan="2" class="text-center">Jumlah [1 + 2 + 3]</td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                  <div class="d-flex justify-content-between text-danger px-1"><span></span> <label contenteditable="false"
                                      style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value="">1.398.750</label></div>
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                  <div class="d-flex justify-content-between text-danger px-1"><span></span> <label contenteditable="false"
                                      style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value="">21.000</label></div>
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                  <div class="d-flex justify-content-between text-danger px-1"><span></span> <label contenteditable="false"
                                      style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value="">60.000</label></div>
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                  <div class="d-flex justify-content-between text-danger px-1"><span></span> <label contenteditable="false"
                                      style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value=""></label></div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td width="60px" class="borderless-right">505.</td>
                        <td><b>Aset Rumah Tangga</b> selama tiga bulan terakhir</td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <table>
                            <tbody>
                              <tr class="text-center bg-blok">
                                <th>No.</th>
                                <th>Rincian</th>
                                <th>Bangunan Tempat Tinggal</th>
                                <th>Bangunan Usaha</th>
                                <th>
                                  Non Bangunan <br>
                                  (kendaraan, alat produksi, dll)
                                </th>
                                <th>Lahan</th>
                              </tr>
                              <tr class="text-center bg-blok">
                                <td width="60px" class="p-1">(1)</td>
                                <td class="p-1 col-4">(2)</td>
                                <td class="p-1 col-2">(3)</td>
                                <td class="p-1 col-2">(4)</td>
                                <td class="p-1 col-2">(5)</td>
                                <td class="p-1 col-2">(6)</td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>Pembelian/Pembuatan Sendiri</td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Pemberian dari Pihak Lain</td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Penjualan</td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>Memberikan kepada Pihak Lain</td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>
                                  Nilai Seluruh Aset yang Dimiliki Rumah Tangga Saat
                                  Pencacahan <br>
                                  [dinilai dengan kondisi aset saat pencacahan]
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                              <tr>
                                <td>6</td>
                                <td>Nilai Pembelian/Perolehan Aset/ Barang Modal</td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                  <!---->
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                  <!---->
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                  <!---->
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                  <!---->
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div id="hal7" role="tabpanel" class="tab-pane">
                <div class="row text-left">
                  <table class="table table-bordered">
                    <tbody>
                      <tr class="table-info text-center text-center">
                        <th colspan="2">
                          <h5>
                            BLOK VI. POSISI ASET DAN KEWAJIBAN RUMAH TANGGA PADA SAAT
                            PENCACAHAN (DALAM RUPIAH)
                          </h5>
                        </th>
                      </tr>
                      <tr>
                        <td>
                          <table class="table table-bordered mb-0">
                            <tbody>
                              <tr class="text-center bg-blok">
                                <th colspan="2">Rincian</th>
                                <th>Nilai</th>
                                <th colspan="2">Rincian</th>
                                <th>Nilai</th>
                              </tr>
                              <tr class="text-center bg-blok">
                                <td colspan="2" class="p-1">(1)</td>
                                <td width="240px" class="p-1">(2)</td>
                                <td colspan="2" class="p-1">(3)</td>
                                <td width="240px" class="p-1">(4)</td>
                              </tr>
                              <tr>
                                <th colspan="2" class="font-weight-bold">
                                  POSISI AKHIR ASET
                                </th>
                                <th></th>
                                <th colspan="2" class="font-weight-bold">
                                  POSISI AKHIR KEWAJIBAN
                                </th>
                                <th></th>
                              </tr>
                              <tr>
                                <td colspan="2">
                                  601. Uang Tunai (di dompet, brankas, e-money/e-wallet)
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td rowspan="3">608. Sisa Pinjaman</td>
                                <td>a. Bank dan Lembaga Pembiayaan</td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                              <tr>
                                <td rowspan="2">
                                  602. Simpanan (Tabungan, Giro, Deposito)
                                </td>
                                <td>a. Bank &amp; Lembaga Keuangan Lainnya</td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td>b. Koperasi Simpan Pinjam</td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                              <tr>
                                <td>b. Koperasi Simpan Pinjam &amp; Credit Union</td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td>c. Lainnya (rentenir, pinjaman online, dsb)</td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                              <tr>
                                <td colspan="2">603. Sisa Piutang</td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td colspan="2">
                                  609. Nilai Modal Usaha dari Pihak Lain (jika memiliki URT)
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                              <tr>
                                <td rowspan="3">604. Surat Berharga yang Dimiliki</td>
                                <td>a. Saham terdaftar di Bursa Efek</td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td colspan="2">
                                  610. Sisa Kredit Barang yang Belum Dibayar
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                              <tr>
                                <td>b. Saham tidak terdaftar di Bursa Efek</td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td rowspan="2">611. Sisa Nilai Gadaian</td>
                                <td>Di PT. Pegadaian (Persero)</td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  c. Surat Berharga Lainnya (SUN, obligasi, reksadana, dll.)
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td>Di Tempat Gadai Barang Lainnya</td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                              <tr>
                                <td rowspan="2">605. Nilai Peyertaan Modal Usaha</td>
                                <td>
                                  a. Di Perusahaan Tidak Berbadan Hukum (CV, Firma, UD, PD,
                                  dsb)
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                                <td colspan="2">
                                  612. Jumlah Uang Arisan yang Telah Diterima dari Arisan
                                  yang sedang Aktif Diikuti
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                              <tr>
                                <td>b. Di Usaha Rumah Tangga (milik pihak lain)</td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                              <tr>
                                <td colspan="2">
                                  606. Sisa Kredit Barang yang Belum Diterima (jika memiliki
                                  URT)
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                              <tr>
                                <td colspan="2">
                                  607. Jumlah Iuran Arisan yang Telah Dibayar dari Arisan
                                  yang sedang Aktif Diikuti
                                </td>
                                <td><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                </td>
                              </tr>
                              <tr class="text-center bg-blok">
                                <th colspan="2" class="font-weight-bold">
                                  JUMLAH POSISI ASET [601 + 602 + … + 607]
                                </th>
                                <th><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                  <div class="d-flex justify-content-between text-danger px-1"><span></span> <label contenteditable="false"
                                      style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value="">100.000</label></div>
                                </th>
                                <th colspan="2" class="font-weight-bold">
                                  JUMLAH POSISI KEWAJIBAN [608 + 609 + … + 612]
                                </th>
                                <th><input type="text" class="my-1 field-right form-control form-control-sm rounded-0" value="">
                                  <div class="d-flex justify-content-between text-danger px-1"><span></span> <label contenteditable="false"
                                      style="margin-right: 5px; margin-bottom: 0px; letter-spacing: 1px;" value=""></label></div>
                                </th>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="row text-left">
                  <table class="table table-bordered mb-0">
                    <tbody>
                      <tr class="table-info text-center text-center">
                        <th colspan="2">
                          <h5>BLOK VIII. CATATAN</h5>
                        </th>
                      </tr>
                      <tr>
                        <td>
                          <table class="table table-bordered">
                            <tbody>
                              <tr class="text-center bg-blok">
                                <th width="160px" class="p-1">Kunjungan</th>
                                <th class="p-1">Tanggal</th>
                                <th class="p-1">Mulai wawancara</th>
                                <th class="p-1">Selesai wawancara</th>
                              </tr>
                              <tr class="text-center">
                                <td>I</td>
                                <td class="p-1">
                                  <div class="d-flex justify-content-center align-items-center"><input type="text" maxlength="2"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 80px;">
                                    <span>/</span> <input type="text" maxlength="2"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 80px;">
                                    <span>/</span> <input type="text" value="2023"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 150px;">
                                  </div>
                                </td>
                                <td class="p-1">
                                  <div class="d-flex justify-content-center align-items-center"><input type="text" maxlength="2"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 80px;">
                                    <span>:</span> <input type="text" maxlength="2"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 80px;">
                                  </div>
                                </td>
                                <td class="p-1">
                                  <div class="d-flex justify-content-center align-items-center"><input type="text" maxlength="2"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 80px;">
                                    <span>:</span> <input type="text" maxlength="2"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 80px;">
                                  </div>
                                </td>
                              </tr>
                              <tr class="text-center">
                                <td>II</td>
                                <td class="p-1">
                                  <div class="d-flex justify-content-center align-items-center"><input type="text" maxlength="2"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 80px;">
                                    <span>/</span> <input type="text" maxlength="2"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 80px;">
                                    <span>/</span> <input type="text" value="2023"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 150px;">
                                  </div>
                                </td>
                                <td class="p-1">
                                  <div class="d-flex justify-content-center align-items-center"><input type="text" maxlength="2"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 80px;">
                                    <span>:</span> <input type="text" maxlength="2"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 80px;">
                                  </div>
                                </td>
                                <td class="p-1">
                                  <div class="d-flex justify-content-center align-items-center"><input type="text" maxlength="2"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 80px;">
                                    <span>:</span> <input type="text" maxlength="2"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 80px;">
                                  </div>
                                </td>
                              </tr>
                              <tr class="text-center">
                                <td>III</td>
                                <td class="p-1">
                                  <div class="d-flex justify-content-center align-items-center"><input type="text" maxlength="2"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 80px;">
                                    <span>/</span> <input type="text" maxlength="2"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 80px;">
                                    <span>/</span> <input type="text" value="2023"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 150px;">
                                  </div>
                                </td>
                                <td class="p-1">
                                  <div class="d-flex justify-content-center align-items-center"><input type="text" maxlength="2"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 80px;">
                                    <span>:</span> <input type="text" maxlength="2"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 80px;">
                                  </div>
                                </td>
                                <td class="p-1">
                                  <div class="d-flex justify-content-center align-items-center"><input type="text" maxlength="2"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 80px;">
                                    <span>:</span> <input type="text" maxlength="2"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 80px;">
                                  </div>
                                </td>
                              </tr>
                              <tr class="text-center">
                                <td>IV</td>
                                <td class="p-1">
                                  <div class="d-flex justify-content-center align-items-center"><input type="text" maxlength="2"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 80px;">
                                    <span>/</span> <input type="text" maxlength="2"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 80px;">
                                    <span>/</span> <input type="text" value="2023"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 150px;">
                                  </div>
                                </td>
                                <td class="p-1">
                                  <div class="d-flex justify-content-center align-items-center"><input type="text" maxlength="2"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 80px;">
                                    <span>:</span> <input type="text" maxlength="2"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 80px;">
                                  </div>
                                </td>
                                <td class="p-1">
                                  <div class="d-flex justify-content-center align-items-center"><input type="text" maxlength="2"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 80px;">
                                    <span>:</span> <input type="text" maxlength="2"
                                      class="my-1 field-center field-number form-control form-control-sm rounded-0" style="width: 80px;">
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td colspan="4">
                                  <textarea type="text" maxlength="500" class="my-1 field-left form-control form-control-sm rounded-0" style="height: 200px; resize: none;"></textarea>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- <div class="card fixed-bottom mb-0">
        <div class="card-body p-2">
          <div class="row">
            <div class="col-md-5">
              <button class="btn btn-dark"><span>Kembali</span><kbd>Esc</kbd></button>
            </div>
            <div class="col-md-2 text-center">
              <button class="btn btn-primary">Prev</button>
              <button class="btn btn-outline-primary font-weight-bold">Hal 1</button>
              <button class="btn btn-primary">Next</button>
            </div>
            <div class="col-md-5 text-right"></div>
          </div>
        </div>
      </div> --}}

    </div>
  </div>
@endsection

@section('js')
  <!-- Required datatable js -->
  <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <!-- Buttons examples -->
  <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>
  <script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
  <script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
  <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

  <script src="{{ asset('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
  <script src="{{ asset('assets/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>

  <!-- Responsive examples -->
  <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

  <!-- Datatable init js -->
  <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>

  <script>
    function valid_number(evt) {
      var theEvent = evt || window.event;

      // Handle paste
      if (theEvent.type === 'paste') {
        key = event.clipboardData.getData('text/plain');
      } else {
        // Handle key press
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
      }
      var regex = /[0-9]|\./;
      if (!regex.test(key)) {
        theEvent.returnValue = false;
        if (theEvent.preventDefault) theEvent.preventDefault();
      }
    }
  </script>
@endsection
