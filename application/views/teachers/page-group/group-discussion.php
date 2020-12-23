<?php
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
// $uri_segments[4]
?>
<!-- KaTeX dependency -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.11.1/dist/katex.min.css" integrity="sha256-V8SV2MO1FUb63Bwht5Wx9x6PVHNa02gv8BgH/uH3ung=" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/katex@0.11.1/dist/katex.min.js" integrity="sha256-F/Xda58SPdcUCr+xhSGz9MA2zQBPb0ASEYKohl8UCHc=" crossorigin="anonymous"></script>

<!-- Quill dependency -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/quill@1.3.7/dist/quill.snow.css" integrity="sha256-jyIuRMWD+rz7LdpWfybO8U6DA65JCVkjgrt31FFsnAE=" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/quill@1.3.7/dist/quill.min.js" integrity="sha256-xnX1c4jTWYY3xOD5/hVL1h37HCCGJx+USguyubBZsHQ=" crossorigin="anonymous"></script>

<!-- MathQuill dependency -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@edtr-io/mathquill@0.11.0/build/mathquill.css" integrity="sha256-Qy/E+9TDDKI7fQ+y2hHMCBV96QiZs9mXWMOrD+/14IU=" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@edtr-io/mathquill@0.11.0/build/mathquill.min.js" integrity="sha256-1XldAnavTLoExr6gc0l1JD8cIzqRYhbi1eksEWsYdpY=" crossorigin="anonymous"></script>


<script src="<?= base_url('assets/public/js/mathquill/mathquill4quill.js'); ?>"></script>
<link rel="stylesheet" href="<?= base_url('assets/public/js/mathquill/mathquill4quill.css'); ?>">
<script src="<?= base_url('dist/js/teachers/group-discussion.js') ?>"></script>
<div class="pt-32pt">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Grup Diskusi</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="<?= site_url('') ?>">Home</a></li>
                    <li class="breadcrumb-item"><a>Grup</a></li>
                    <li class="breadcrumb-item"><a href="<?= site_url('grup/bahasa-inggris/x-ipa-1') ?>">Bahasa Inggris - X IPA 1</a></li>
                    <li class="breadcrumb-item"><a>Diskusi</a></li>
                    <li class="breadcrumb-item active"><a href="<?= site_url('grup/bahasa-inggris/x-ipa-1/diskusi/'.$uri_segments[4]) ?>">Diskusi Modul 1</a></li>
                </ol>

            </div>
        </div>
        <div class="row"
            role="tablist">
            <div class="col-auto">
                <a onclick="window.history.go(-1); return false;" class="btn btn-outline-secondary"><i class="material-icons mr-2">reply</i> Kembali</a>
            </div>
        </div>
    </div>
</div>

<!-- Page Content -->

<div class="container page__container">
    <div class="page-section">

        <div class="data_panel">
            <div class="page-separator">
                <div class="page-separator__text">Topik Diskusi</div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center"
                            style="white-space: nowrap;">
                        <div class="col-lg-auto">
                            <form class="search-form search-form--dark d-lg-inline-flex mb-8pt mb-lg-0">
                                <input type="text"
                                        class="form-control w-lg-auto"
                                        placeholder="Cari ...">
                                <button class="btn"
                                        type="submit"><i class="material-icons">search</i></button>
                            </form>
                        </div>
                        <div class="col-lg d-flex flex-wrap align-items-center">
                            <div class="ml-lg-auto dropdown">
                                <a href="#"
                                    class="btn btn-link dropdown-toggle text-70"
                                    data-toggle="dropdown">Semua Topik</a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href=""
                                        class="dropdown-item active">Semua Topik</a>
                                    <a href=""
                                        class="dropdown-item">Topik Saya</a>
                                </div>
                            </div>
                            <div class="dropdown mr-8pt">
                                <a href="#"
                                    class="btn btn-link dropdown-toggle text-70"
                                    data-toggle="dropdown">Terbaru</a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href=""
                                        class="dropdown-item active">Terbaru</a>
                                    <a href=""
                                        class="dropdown-item">Belum ada komentar</a>
                                </div>
                            </div>
                            <a class="btn btn-accent addTopicBtn">Tambah Topik</a>
                        </div>
                    </div>
                </div>

                <div class="list-group list-group-flush">

                    <div class="list-group-item p-3">
                        <div class="row align-items-start">
                            <div class="col-md-3 mb-8pt mb-md-0">
                                <div class="media align-items-center">
                                    <div class="media-left mr-12pt">
                                        <div class="avatar avatar-sm mr-8pt">
                                        <img src="<?= base_url() ?>assets/public/images/avatar/avatar2.jpg" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column media-body media-middle">
                                        <a href=""
                                            class="card-title">Ayu Diah</a>
                                        <small class="text-muted">2 hari yang lalu</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-8pt mb-md-0">
                                <p class="mb-8pt"><a href="<?= site_url('grup/bahasa-inggris/x-ipa-1/diskusi/diskusi-modul-1/topik/apa-bahasa-inggrisnya-kunduran-trek') ?>"
                                        class="text-body"><strong>Apa bahasa Inggrisnya kunduran trek?</strong></a></p>

                                <a class="chip chip-outline-secondary">Sentence</a>

                            </div>
                            <div class="col-auto d-flex flex-column align-items-center justify-content-center">
                                <h5 class="m-0">4</h5>
                                <p class="lh-1 mb-0"><small class="text-70">jawaban</small></p>
                            </div>
                        </div>
                    </div>               

                </div>

                <div class="card-footer">

                    <ul class="pagination justify-content-start pagination-xsm m-0">
                        <li class="page-item disabled">
                            <a class="page-link"
                                href="#"
                                aria-label="Previous">
                                <span aria-hidden="true"
                                        class="material-icons">chevron_left</span>
                                <span>Prev</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link"
                                href="#"
                                aria-label="Page 1">
                                <span>1</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link"
                                href="#"
                                aria-label="Page 2">
                                <span>2</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link"
                                href="#"
                                aria-label="Next">
                                <span>Next</span>
                                <span aria-hidden="true"
                                        class="material-icons">chevron_right</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row mb-32pt add_panel" style="display: none;">
            <div class="col-lg-4">
                <div class="page-separator">
                    <div class="page-separator__text title_form">Tambah Topik</div>
                </div>
                <p class="card-subtitle text-70 mb-16pt mb-lg-0 desc_form">Form ini digunakan untuk menambahkan data topik diskusi.</p>
            </div>
            <div class="col-lg-8 d-flex align-items-center">
                <div class="flex"
                    style="max-width: 100%">

                    <div class="form-group">
                        <label class="form-label"
                            for="title">Judul Topik:</label>
                        <input type="text"
                            class="form-control"
                            id="title"
                            placeholder="">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Keterangan:</label>
                        <div style="height: 150px;" id="content">
                        
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Tags</label>
                        <select name="tags"
                                id="tags"
                                data-toggle="select"
                                data-tags="true"
                                data-multiple="true"
                                data-minimum-results-for-search="0"
                                class="form-control"
                                data-placeholder="">                                                
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <p class="text-accent msg-validation"></p>
                        </div>

                        <div class="col-lg-6 text-right">
                            <button type="button" class="btn btn-outline-primary btn-rounded mt-2 mr-2 saveBtn" style="width: 125px">Simpan</button>
                            <button type="button" class="btn btn-outline-accent btn-rounded mt-2 cancelBtn" style="width: 125px">Batal</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
</div>

<!-- // END Page Content -->