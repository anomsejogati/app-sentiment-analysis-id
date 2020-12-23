<script src="<?= base_url('assets/public/js/ckeditor-4.14-full/ckeditor.js'); ?>"></script>
<!-- <link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet"> -->
<!-- Include the Quill library -->
<!-- <script src="https://cdn.quilljs.com/1.0.0/quill.js"></script> -->

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


<script src="<?= base_url('dist/js/teachers/get-assignment.js') ?>"></script>
<!-- Page Content -->
<div class="container mt-2 mb-2">
    <ol class="breadcrumb p-0 m-0">
        <li class="breadcrumb-item"><a href="<?= site_url('') ?>">Home</a></li>
        <li class="breadcrumb-item"><a>Grup</a></li>
        <li class="breadcrumb-item"><a href="<?= site_url('grup/bahasa-inggris/x-ipa-1') ?>">Bahasa Inggris - X IPA 1</a></li>
        <li class="breadcrumb-item active">Tugas - 1</li>
    </ol>
</div>
<div class="navbar navbar-light border-0 navbar-expand">                
    <div class="container page__container">
        <div class="media flex-nowrap">
            <div class="media-left mr-16pt">
                <a href="<?= site_url('grup/bahasa-inggris/x-ipa-1/tugas/1') ?>"><img src="<?= base_url() ?>assets/public/images/menu/section_assignment.png"
                            width="40"
                            alt=""
                            class="rounded"></a>
            </div>
            <div class="media-body">
                <a href="<?= site_url('grup/bahasa-inggris/x-ipa-1/tugas/1') ?>"
                    class="card-title text-body mb-0">Introducing Oneself and Others</a>
                <p class="lh-1 d-flex align-items-center mb-0">
                    <span class="text-50 small">Halaman ini digunakan untuk mengoreksi tugas dan memberikan nilai</span>
                </p>
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


<div class="page-section border-bottom-2">
    <div class="container page__container">

        <div class="row">

            <div class="col-lg-6">
                <div class="page-separator">
                    <div class="page-separator__text">Pilih Siswa</div>
                </div>     
                <div class="card mb-lg-32pt">
                    <div class="table-responsive"
                        data-toggle="lists"
                        data-lists-sort-by="js-lists-values-from"
                        data-lists-sort-desc="true"
                        data-lists-values='["js-lists-values-name", "js-lists-values-status", "js-lists-values-policy", "js-lists-values-reason", "js-lists-values-days", "js-lists-values-available", "js-lists-values-from", "js-lists-values-to"]'>

                        <table class="table mb-0 thead-border-top-0 table-nowrap table_1">
                            <thead>
                                <tr>
                                    <th style="width: 18px;"
                                        class="pr-0">
                                        No
                                    </th>
                                    <th>
                                        <a href="javascript:void(0)"
                                        class="sort"
                                        data-sort="js-lists-values-name">Nama Siswa</a>
                                    </th>   
                                    <th>Nilai</th>                                                         
                                </tr>
                            </thead>
                            <tbody class="list" id="table_1">

                                <?php $no = 1; foreach($students as $row): ?>
                                <tr class="cursor_pointer student_id_<?= $row->student_id ?>" id="<?= $row->student_id ?>">
                                    <td class="pr-0">
                                        <?= $no++ ?>
                                    </td>

                                    <td>
                                        <div class="media flex-nowrap align-items-center"
                                            style="white-space: nowrap;">
                                            <div class="avatar avatar-sm mr-8pt">

                                                <img src="<?= base_url() ?>assets/public/images/avatar/<?= $row->picture ?>"
                                                    class="avatar-img rounded-circle">

                                            </div>
                                            <div class="media-body">

                                                <div class="d-flex align-items-center">
                                                    <div class="flex d-flex flex-column">
                                                        <p class="mb-0"><strong class="js-lists-values-name student_name"><?= $row->student_name ?></strong></p>
                                                        <small class="js-lists-values-email text-50 nisn"><?= $row->nisn ?></small>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    </td>      
                                    
                                    <td class="score"></td>

                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer p-8pt">

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

            <div class="col-lg-6">
                <div class="page-separator">
                    <div class="page-separator__text">Koreksi dan Nilai</div>
                </div>

                <form id="form-mark">
                    <div class="form-group">
                        <label class="form-label"
                            for="name">Nama Siswa</label>
                            <input id="name"
                                type="text"                                
                                class="form-control name" readonly/>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label class="form-label"
                                for="file">Unduh</label><br>
                            <a href=""><i class="material-icons mt-1 mr-2">file_download</i> File Tugas</a>
                        </div>
                        <div class="form-group col-lg-8">
                            <label class="form-label"
                                for="score">Nilai</label>
                                <input id="score"
                                    data-toggle="touch-spin"
                                    data-min="0"
                                    data-max="100"
                                    data-step="1"
                                    type="text"
                                    value="0"
                                    class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Komentar</label>
                        <div style="height: 150px;" id="comment">
                            
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button type="button" class="btn btn-outline-primary btn-rounded saveBtn" style="width: 125px">Simpan <i class="material-icons ml-1">done</i></button>
                    </div>
                </form>
            
            </div>

        </div>

    </div>
</div>


<!-- // END Page Content -->