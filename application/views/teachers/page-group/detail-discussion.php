<?php
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
// $uri_segments[4]
?>
<script src="<?= base_url('dist/js/teachers/detail-discussion.js') ?>"></script>
<div class="pt-32pt">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Diskusi</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="<?= site_url('') ?>">Home</a></li>
                    <li class="breadcrumb-item"><a>Grup</a></li>
                    <li class="breadcrumb-item"><a href="<?= site_url('grup/bahasa-inggris/x-ipa-1') ?>">Bahasa Inggris - X IPA 1</a></li>
                    <li class="breadcrumb-item"><a>Diskusi</a></li>
                    <li class="breadcrumb-item active"><a href="<?= site_url('grup/bahasa-inggris/x-ipa-1/diskusi/'.$uri_segments[4]) ?>">Diskusi Modul 1</a></li>                    
                </ol>

            </div>
        </div>

    </div>
</div>

<!-- Page Content -->

<div class="container page__container">
    <div class="page-section">

        <div class="row">
            <div class="col-md-8">

                <h1 class="h2 measure-lead-max mb-2">Apa bahasa Inggrisnya kunduran trek?</h1>
                <p class="text-muted d-flex align-items-center mb-lg-32pt">
                    <a href="#"
                        class="mr-2 text-50">Oleh Ayu Diah</a>
                    <a href="#"
                        class="mr-2 text-50">26 Nov 2020 14:03:18</a>                    
                    <!-- <a href="#"
                        class="text-50"
                        style="text-decoration: underline;">Ubah</a> -->
                </p>

                <div class="card card-body">
                    <div class="d-flex">
                        <a href=""
                            class="avatar avatar-sm mr-12pt">
                            <img src="<?= base_url() ?>assets/public/images/avatar/avatar2.jpg"
                                class="avatar-img rounded-circle">
                        </a>
                        <div class="flex">
                            <p class="d-flex align-items-center mb-2">
                                <a href=""
                                    class="text-body mr-2"><strong>Ayu Diah</strong></a>
                                <small class="text-muted">1 jam yang lalu</small>
                            </p>
                            <p>Tanya guys, . Bahasa Inggrisnya "Kunduran Trek" itu apa ya? (ini kata dari bahasa Jawa) </p>                            
                            <div class="d-flex align-items-center">
                                <a href=""
                                    class="text-50 d-flex align-items-center text-decoration-0"><i class="material-icons mr-1"
                                        style="font-size: inherit;">favorite_border</i> 15</a>
                                <a href=""
                                    class="text-50 d-flex align-items-center text-decoration-0 ml-3"><i class="material-icons mr-1"
                                        style="font-size: inherit;">thumb_up</i> 7</a>
                                <a class="cursor_pointer text-50 d-flex align-items-center text-decoration-0 ml-3 addReplyBtn"><i class="material-icons mr-1"
                                        style="font-size: inherit;">add_comment</i> 4</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <a href=""
                        class="avatar avatar-sm mr-12pt">
                        <img src="<?= base_url() ?>assets/public/images/avatar/avatar5.jpg"
                            class="avatar-img rounded-circle">
                    </a>
                    <div class="flex">
                        <div class="form-group">
                            <label for="comment"
                                    class="form-label">Komentar Anda</label>
                            <textarea class="form-control"
                                        name="comment"
                                        id="comment"
                                        rows="3"
                                        placeholder="Ketikkan komentar Anda disini..."></textarea>
                        </div>
                        <button class="btn btn-outline-secondary postCommentBtn">Post Komentar</button>
                    </div>
                </div>

                <div class="pt-0 comments_panel">
                    <h4>4 Komentar</h4>

                    <div class="d-flex mb-3">
                        <a href=""
                            class="avatar avatar-sm mr-12pt">
                            <img src="<?= base_url() ?>assets/public/images/avatar/avatar3.jpg"
                                class="avatar-img rounded-circle">
                        </a>
                        <div class="flex">
                            <a href=""
                                class="text-body"><strong>Yovi Wahyu Prasetyo</strong></a><br>
                            <p class="mt-1 text-70">Kunduran/Keunduran Trek = Terundur Truk?</p>
                            <div class="d-flex align-items-center">
                                <small class="text-50 mr-2">2 menit yang lalu</small>
                                <a href=""
                                    class="text-50 d-flex align-items-center text-decoration-0"><i class="material-icons mr-1"
                                        style="font-size: inherit;">favorite_border</i> 1</a>
                                <a href=""
                                    class="text-50 d-flex align-items-center text-decoration-0 ml-3"><i class="material-icons mr-1"
                                        style="font-size: inherit;">thumb_up</i> 1</a>
                                <a class="cursor_pointer text-50 d-flex align-items-center text-decoration-0 ml-3 addReplyBtn"><i class="material-icons mr-1"
                                        style="font-size: inherit;">add_comment</i></a>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <a href=""
                            class="avatar avatar-sm mr-12pt">
                            <img src="<?= base_url() ?>assets/public/images/avatar/avatar3.jpg"
                                class="avatar-img rounded-circle">
                        </a>
                        <div class="flex">
                            <a href=""
                                class="text-body"><strong>Awim Ersa Firdaus</strong></a><br>
                            <p class="mt-1 text-70">Back track ...</p>
                            <div class="d-flex align-items-center">
                                <small class="text-50 mr-2">4 menit yang lalu</small>
                                <a href=""
                                    class="text-50 d-flex align-items-center text-decoration-0"><i class="material-icons mr-1"
                                        style="font-size: inherit;">favorite_border</i> 1</a>
                                <a href=""
                                    class="text-50 d-flex align-items-center text-decoration-0 ml-3"><i class="material-icons mr-1"
                                        style="font-size: inherit;">thumb_up</i> 1</a>
                                <a class="cursor_pointer text-50 d-flex align-items-center text-decoration-0 ml-3 addReplyBtn"><i class="material-icons mr-1"
                                        style="font-size: inherit;">add_comment</i></a>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <a href=""
                            class="avatar avatar-sm mr-12pt">
                            <img src="<?= base_url() ?>assets/public/images/avatar/avatar1.jpg"
                                class="avatar-img rounded-circle">
                        </a>
                        <div class="flex">
                            <a href=""
                                class="text-body"><strong>Rizal Rizky Firdaus</strong></a><br>
                                <p class="mt-1 text-70">Monggo gan disimak <a href="https://www.kompasiana.com/ajialjatimi/5517d827813311b5689de5c1/kunduran-keunduran-trek-terundur-truk" target="_new">disini</a> </p>
                            <div class="d-flex align-items-center">
                                <small class="text-50 mr-2">14 menit yang lalu</small>
                                <a href=""
                                    class="text-50 d-flex align-items-center text-decoration-0"><i class="material-icons mr-1"
                                        style="font-size: inherit;">favorite_border</i> 1</a>
                                <a href=""
                                    class="text-50 d-flex align-items-center text-decoration-0 ml-3"><i class="material-icons mr-1"
                                        style="font-size: inherit;">thumb_up</i> 1</a>
                                <a class="cursor_pointer text-50 d-flex align-items-center text-decoration-0 ml-3 addReplyBtn"><i class="material-icons mr-1"
                                        style="font-size: inherit;">add_comment</i></a>
                            </div>
                        </div>
                    </div>


                    <div class="d-flex mb-3">
                        <a href=""
                            class="avatar avatar-sm mr-12pt">
                            <img src="<?= base_url() ?>assets/public/images/avatar/avatar4.jpg"
                                class="avatar-img rounded-circle">
                        </a>
                        <div class="flex">
                            <a href=""
                                class="text-body"><strong>Nia Puspitasari</strong></a><br>
                                <p class="mt-1 text-70">Got hit by a truck that moving backward </p>
                            <div class="d-flex align-items-center">
                                <small class="text-50 mr-2">34 menit yang lalu</small>
                                <a href=""
                                    class="text-50 d-flex align-items-center text-decoration-0"><i class="material-icons mr-1"
                                        style="font-size: inherit;">favorite_border</i> 8</a>
                                <a href=""
                                    class="text-50 d-flex align-items-center text-decoration-0 ml-3"><i class="material-icons mr-1"
                                        style="font-size: inherit;">thumb_up</i> 3</a>
                                <a class="cursor_pointer text-50 d-flex align-items-center text-decoration-0 ml-3 addReplyBtn"><i class="material-icons mr-1"
                                        style="font-size: inherit;">add_comment</i></a>
                            </div>
                        </div>
                    </div>

                </div>
                
            </div>
            <div class="col-md-4">

                <div class="page-separator">
                    <div class="page-separator__text">Siswa Aktif</div>
                </div>
                <p class="text-70 mb-24pt">Daftar siswa yang aktif berdiskusi.</p>

                <div class="mb-4">

                    <div class="d-flex align-items-center mb-2">
                        <a href=""
                            class="avatar avatar-xs mr-8pt">
                            <img src="<?= base_url() ?>assets/public/images/avatar/avatar3.jpg"
                                    alt="course"
                                    class="avatar-img rounded-circle">
                        </a>
                        <a href=""
                            class="flex mr-2 text-body"><strong>Yovi Wahyu Prasetiyo</strong></a>
                        <span class="text-70 mr-2">1</span>
                        <i class="text-muted material-icons font-size-16pt">forum</i>
                    </div>

                    <div class="d-flex align-items-center mb-2">
                        <a href=""
                            class="avatar avatar-xs mr-8pt">
                            <img src="<?= base_url() ?>assets/public/images/avatar/avatar3.jpg"
                                    alt="course"
                                    class="avatar-img rounded-circle">
                        </a>
                        <a href=""
                            class="flex mr-2 text-body"><strong>Awim Ersa Firdaus</strong></a>
                        <span class="text-70 mr-2">1</span>
                        <i class="text-muted material-icons font-size-16pt">forum</i>
                    </div>

                    <div class="d-flex align-items-center mb-2">
                        <a href=""
                            class="avatar avatar-xs mr-8pt">
                            <img src="<?= base_url() ?>assets/public/images/avatar/avatar1.jpg"
                                    alt="course"
                                    class="avatar-img rounded-circle">
                        </a>
                        <a href=""
                            class="flex mr-2 text-body"><strong>Rizal Rizky Firdaus</strong></a>
                        <span class="text-70 mr-2">1</span>
                        <i class="text-muted material-icons font-size-16pt">forum</i>
                    </div>

                    <div class="d-flex align-items-center mb-2">
                        <a href=""
                            class="avatar avatar-xs mr-8pt">
                            <img src="<?= base_url() ?>assets/public/images/avatar/avatar4.jpg"
                                    alt="course"
                                    class="avatar-img rounded-circle">
                        </a>
                        <a href=""
                            class="flex mr-2 text-body"><strong>Nia Puspitasari</strong></a>
                        <span class="text-70 mr-2">1</span>
                        <i class="text-muted material-icons font-size-16pt">forum</i>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>

<!-- // END Page Content -->