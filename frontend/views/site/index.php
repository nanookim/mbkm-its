<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'MBKM ITSPKU';
?>
<div class="site-index">
    <!-- Customers -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="<?= Url::to('@web/landing/images/logotype.png') ?>"
                                         alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="<?= Url::to('@web/landing/images/merdeka.png') ?>"
                                         alt="alternative" width="120px">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="<?= Url::to('@web/landing/images/tutwuri.png') ?>"
                                         alt="alternative" width="80px">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="<?= Url::to('@web/landing/images/kampus.png') ?>"
                                         alt="alternative" width="150px">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="<?= Url::to('@web/landing/images/ssbi.png') ?>"
                                         alt="alternative" width="80px">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="<?= Url::to('@web/landing/images/inspiratif.png') ?>"
                                         alt="alternative" width="150px">
                                </div>
                            </div> <!-- end of swiper-wrapper -->
                        </div> <!-- end of swiper container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of customers -->


    <!-- Description -->
    <div id="timeline" class="cards-1">
        <div class="container">
            <div class="above-heading">Timeline Kegiatan</div>
            <h3 class="h2-heading">Pelaksanaan Program Kampus Mengajar Angkatan 8 Semester Ganjil 2024/2025</h3>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <table class="styled-table">
                        <thead>
                        <tr>
                            <th>Program</th>
                            <th>Deskripsi</th>
                            <th>Periode</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Pendaftaran Kampus Mengajar Angkatan 8</td>
                            <td>Pada tahapan ini Mahasiswa sudah bisa mendaftarkan diri pada program melalui
                                <a href="https://kampusmerdeka.kemdikbud.go.id/program/mengajar" target="_blank">
                                    situs resmi Kampus Merdeka
                                </a>
                            </td>
                            <td>(06 Mei – 02 Juni 2024)</td>
                        </tr>
                        <tr>
                            <td>Proses Seleksi Administrasi dan Tes Substansi</td>
                            <td>Periode waktu dilaksanakannya rangkaian seleksi Program Kampus Mengajar yang wajib
                                diikuti oleh seluruh calon peserta (Mahasiswa dan Dosen Pembimbing Lapangan) Program
                                Kampus Mengajar Angkatan 8.
                            </td>
                            <td>(06 Mei – 06 Agustus 2024)</td>
                        </tr>
                        <tr>
                            <td>Pengumuman dan Konfirmasi Penerimaan Mahasiswa</td>
                            <td>Mahasiswa dinyatakan lulus dan melakukan konfirmasi menerima program di laman Program
                                MBKM.
                            </td>
                            <td>(07 – 09 Agustus 2024)</td>
                        </tr>
                        <tr>
                            <td>Pemetaan Sekolah Penugasan</td>
                            <td>Proses penempatan peserta di sekolah penugasan. Peserta akan ditempatkan di sekolah yang
                                terdekat dari wilayah domisili oleh Tim Program Kampus Mengajar berkolaborasi bersama
                                para pemangku kepentingan terkait.
                            </td>
                            <td>(12 – 23 Agustus 2024)</td>
                        </tr>
                        <tr>
                            <td>Pengumuman penempatan DPL dan Mahasiswa</td>
                            <td>Mahasiswa dan DPL akan menerima pengumuman hasil penempatan sekolah penugasan Program
                                Kampus Mengajar Angkatan 8.
                            </td>
                            <td>(23 Agustus 2024)</td>
                        </tr>
                        <tr>
                            <td>Pembekalan Peserta</td>
                            <td>Mahasiswa, DPL, dan Koordinator PT akan diberi pembekalan yang dilakukan secara daring
                                dalam bentuk materi, pelatihan, dan workshop.
                            </td>
                            <td>(26 Agustus - 2 September 2024)</td>
                        </tr>
                        <tr>
                            <td>Koordinasi dan Komunikasi Mahasiswa dan DPL dengan Dinas Pendidikan dan Sekolah</td>
                            <td>Peserta yang sudah memperoleh informasi penempatan dan berkoordinasi dengan kelompok
                                serta DPL dapat melakukan koordinasi dengan pemangku kepentingan terkait di wilayah
                                setempat.
                            </td>
                            <td>(23 Agustus - 13 September 2024)</td>
                        </tr>
                        <tr>
                            <td>Pelepasan Mahasiswa</td>
                            <td>Seluruh peserta akan dilepaskan serentak secara nasional untuk bertugas di sekolah yang
                                sudah ditetapkan.
                            </td>
                            <td>(3 September 2024)</td>
                        </tr>
                        <tr>
                            <td>Penugasan</td>
                            <td>Selama masa penugasan, peserta wajib melakukan kegiatan di sekolah penugasan dan mengisi
                                laporan yang telah ditetapkan oleh Tim Program Kampus Mengajar.
                            </td>
                            <td>(9 September - 27 Desember 2024)</td>
                        </tr>
                        <tr>
                            <td>Penarikan Mahasiswa</td>
                            <td>Di akhir periode penugasan, seluruh peserta akan ditarik kembali dari sekolah penugasan
                                secara nasional dan serentak.
                            </td>
                            <td>(Desember 2024)</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-1"></div>
            </div>

            <style>
                .rounded-card {
                    border-radius: 12px; /* Radius sudut untuk rounded effect */
                    background-color: #f8f9fa; /* Warna latar belakang card */
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan card untuk efek kedalaman */
                    border: 1px solid #ddd; /* Border card untuk batas yang jelas */
                }

                .card {
                    padding: 16px; /* Jarak dalam card */
                    text-align: center; /* Teks rata tengah */
                    font-family: Arial, sans-serif; /* Font standar untuk card */
                }
                .styled-table {
                    width: 100%;
                    border-collapse: collapse;
                    font-family: Arial, sans-serif;
                }

                .styled-table thead tr {
                    background-color: #4CAF50;
                    color: white;
                    text-align: center;
                }

                .styled-table th, .styled-table td {
                    padding: 12px;
                    border-bottom: 2px solid #ddd;
                }

                .styled-table tbody tr:nth-child(odd) {
                    background-color: #f9f9f9;
                }

                .styled-table tbody tr:nth-child(even) {
                    background-color: #ffffff;
                }

                .styled-table tbody td {
                    text-align: justify;
                }

                .styled-table a {
                    color: #4CAF50;
                    text-decoration: none;
                }
            </style>

        </div>
    </div>

    <!-- Features -->
    <div id="features" class="tabs ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="<?= Url::to('@web/landing/images/details-lightbox.png') ?>"
                             alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <h3>PERSYARATAN MBKM ITSPKU</h3>
                    <hr>
                    <ul class="list-unstyled li-space-lg" style="text-align: left">
                        <li class="media">
                            <i class="fas fa-circle"></i>
                            <div class="media-body">Merupakan mahasiswa ITS PKU Muhammadiyah Surakarta.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-circle"></i>
                            <div class="media-body">Mahasiswa aktif angkatan 2021 atau angkatan 2022</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-circle"></i>
                            <div class="media-body">Memiliki IP semester lalu ≥ 2.8.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-circle"></i>
                            <div class="media-body">Tidak sedang menerima hibah sejenis MBKM (kampus mengajar,
                                PMM,
                                dll)
                            </div>
                        </li>
                        <li class="media">
                            <i class="fas fa-circle"></i>
                            <div class="media-body">Rencana studi MBKM mendapat persetujuan dari koordinator
                                program
                                studi.
                            </div>
                        </li>
                        <li class="media">
                            <i class="fas fa-circle"></i>
                            <div class="media-body">Untuk kegiatan kelompok, harus memiliki proposal kegiatan
                                yang
                                telah
                                disetujui oleh pembimbing dan disahkan oleh program studi.
                            </div>
                        </li>
                        <li class="media">
                            <i class="fas fa-circle"></i>
                            <div class="media-body">Wajib memiliki rekening Bank Muamalat Atas Nama sendiri,
                                bukan
                                atas
                                nama orang lain.
                            </div>
                        </li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div>

    </div> <!-- end of tabs -->
    <!-- end of features -->


    <!-- Details -->
    <div id="details" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Ketentuan Pendaftar</h2>
                        <div style="text-align: left">
                            <p>Mahasiswa yang memenuhi persyaratan akan mendaftar dan memilih salah satu program
                                yang
                                dibuka
                                oleh prodi masing-masing. Terdapat dua kategori program: </p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-circle"></i>
                                    <div class="media-body">Program kategori individu.</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-circle"></i>
                                    <div class="media-body">Program kategori kelompok, dilaksanakan berkelompok
                                        yang
                                        terdiri
                                        atas 6 orang.
                                    </div>
                                </li>
                            </ul>
                            <strong># Proses seleksi kelulusan ditentukan oleh prodi Anda. </strong>
                        </div>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="<?= Url::to('@web/landing/images/details-lightbox.png') ?>"
                             alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details -->


    <!-- Newsletter -->
    <div class="form" id="panduan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h2>Panduan Pengguna</h2>
                        <div class="row">
                            <div class="col-6">
                                <div class="card text-center p-3 rounded-card">
                                    <span>Panduan Pendaftaran Mahasiswa</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center p-3 rounded-card">
                                    <span>Panduan Pelaporan Mahasiswa</span>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="icon-container">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form -->
    <!-- end of newsletter -->
</div>
