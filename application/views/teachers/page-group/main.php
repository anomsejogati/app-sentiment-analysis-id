<script src="<?= base_url('dist/js/teachers/group-classes.js') ?>"></script>

<!-- Page Content -->

<div class="mdk-box bg-primary js-mdk-box mb-0"
        data-effects="blend-background">
    <div class="mdk-box__content">
        <div class="hero py-64pt text-center text-sm-left">
            <div class="container page__container">
                <h1 class="text-white">Bahasa Inggris</h1>
                <p class="lead text-white-50 measure-hero-lead txtMotivation" contenteditable="false">Berikan kata-kata motivasi untuk siswa Anda.</p>
                <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                    <a class="cursor_pointer btn btn-white mb-16pt mb-sm-0 mr-sm-16pt addMotivationBtn">Tambahkan Sekarang</a>
                    <a href="<?= site_url('grup/preview/bahasa-inggris/x-ipa-1') ?>" class="btn btn-outline-white previewBtn">Pratinjau Kelas <i class="material-icons icon--right">visibility</i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="navbar navbar-expand-sm navbar-light bg-white border-bottom-2 navbar-list p-0 m-0 align-items-center">
    <div class="container page__container">
        <ul class="nav navbar-nav flex align-items-sm-center">
            <li class="nav-item navbar-list__item">
                <div class="media align-items-center">
                    <span class="media-left mr-16pt">
                        <img src="<?= base_url() ?>assets/public/images/avatar/avatar5.jpg"
                                width="40"
                                alt="avatar"
                                class="rounded-circle">
                    </span>
                    <div class="media-body">
                        <a class="card-title m-0"
                            href="">Tiffaini, S.Pd</a>
                        <p class="text-50 lh-1 mb-0">Pendidikan Bahasa Inggris</p>
                    </div>
                </div>
            </li>
            <li class="nav-item navbar-list__item">
                <i class="material-icons text-muted icon--left">class</i>
                X IPA 1
            </li>
            <li class="nav-item navbar-list__item">
                <i class="material-icons text-muted icon--left">people</i>
                32
            </li>
            <li class="nav-item ml-sm-auto text-sm-center flex-column navbar-list__item">
                <div class="rating rating-24">
                    <div class="rating__item"><i class="material-icons">star</i></div>
                    <div class="rating__item"><i class="material-icons">star</i></div>
                    <div class="rating__item"><i class="material-icons">star</i></div>
                    <div class="rating__item"><i class="material-icons">star</i></div>
                    <div class="rating__item"><i class="material-icons">star_border</i></div>
                </div>
                <p class="lh-1 mb-0"><small class="text-muted">20 ratings</small></p>
            </li>
        </ul>
    </div>
</div>

<div class="page-section bg-white border-bottom-2">

    <div class="container page__container">
        <div class="row ">
            <div class="col-md-7">
                <div class="page-separator">
                    <div class="page-separator__text">Deskripsi Mata Pelajaran</div>
                </div>
                <p class="text-70 txtDescription" contenteditable="false">Mata pelajaran bahasa Inggris pada kelas X ini akan mengajarkan kalian tentang penggunaan bentuk waktu pada sebuah kalimat yang mana materi ini selanjutnya akan menjadi dasar untuk kalian berlatih percakapan di dalam lingkungan sekolah.</p>
                <button type="button"
                    id="editDescriptionBtn" 
                    class="btn btn-outline-primary mb-3">Ubah <i class="material-icons icon--right">edit</i></button>
            </div>
            <div class="col-md-5">
                <div class="page-separator">
                    <div class="page-separator__text bg-white">Apa yang akan dipelajari</div>
                </div>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center li_item">
                        <span class="material-icons text-50 mr-8pt">check</span>
                        <span class="text-70 dataList">Simple Present Tense</span>
                    </li>
                    <li class="d-flex align-items-center li_item">
                        <span class="material-icons text-50 mr-8pt">check</span>
                        <span class="text-70 dataList">Simple Past Tense</span>
                    </li>
                    <li class="d-flex align-items-center li_item">
                        <span class="material-icons text-50 mr-8pt">check</span>
                        <span class="text-70 dataList">Future Tense</span>
                    </li>
                </ul>

                <button type="button"
                    id="addWwylBtn" 
                    class="btn btn-outline-primary">Tambah <i class="material-icons icon--right">add_circle_outline</i></button>
            </div>
        </div>
    </div>

</div>

<div class="page-section border-bottom-2">
    <div class="container page__container">

        <div class="row mb-32pt">
            <div class="col-lg-12 d-flex align-items-center">
                <div class="flex"
                    style="max-width: 100%">

                    <div class="card dashboard-area-tabs p-relative o-hidden mb-0">

                        <div class="card-header p-0 nav">
                            <div class="row no-gutters"
                                role="tablist">
                                <div class="col-auto">
                                    <a href="#tab1"
                                    data-toggle="tab"
                                    role="tab"
                                    aria-selected="true"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                                        <span class="h2 mb-0 mr-2"><i class="material-icons fs-2x">aspect_ratio</i></span>
                                        <span class="flex d-flex flex-column">
                                            <strong class="card-title">Sesi</strong>
                                            <small class="card-subtitle text-50">2 Sesi</small>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-auto border-left border-right">
                                    <a href="#tab2"
                                    data-toggle="tab"
                                    role="tab"
                                    aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                        <span class="h2 mb-0 mr-2"><i class="material-icons fs-2x">assignment</i></span>
                                        <span class="flex d-flex flex-column">
                                            <strong class="card-title">Tugas</strong>
                                            <small class="card-subtitle text-50">4 tugas</small>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-auto border-left border-right">
                                    <a href="#tab3"
                                    data-toggle="tab"
                                    role="tab"
                                    aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                        <span class="h2 mb-0 mr-2"><i class="material-icons fs-2x">dvr</i></span>
                                        <span class="flex d-flex flex-column">
                                            <strong class="card-title">Kuis</strong>
                                            <small class="card-subtitle text-50">4 kuis</small>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-auto border-left border-right">
                                    <a href="#tab4"
                                    data-toggle="tab"
                                    role="tab"
                                    aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                        <span class="h2 mb-0 mr-2"><i class="material-icons fs-2x">developer_board</i></span>
                                        <span class="flex d-flex flex-column">
                                            <strong class="card-title">Diskusi</strong>
                                            <small class="card-subtitle text-50">4 Topik</small>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-auto border-left border-right">
                                    <a href="#tab5"
                                    data-toggle="tab"
                                    role="tab"
                                    aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                        <span class="h2 mb-0 mr-2"><i class="material-icons fs-2x">equalizer</i></span>
                                        <span class="flex d-flex flex-column">
                                            <strong class="card-title">Nilai</strong>
                                            <small class="card-subtitle text-50">Akademik dan Perkembangan Diri</small>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>     
                        
                    </div>

                </div>
            </div>
        </div>

        <div class="tab-content">

            <div id="tab1" class="tab-pane active text-70">
                <?php $this->load->view('teachers/page-group/main-sessions'); ?>
            </div>
            
            <div id="tab2" class="tab-pane text-70">
                <?php $this->load->view('teachers/page-group/main-assignments'); ?>
            </div>

            <div id="tab3" class="tab-pane text-70">
                <?php $this->load->view('teachers/page-group/main-quizzes'); ?>
            </div>

            <div id="tab4" class="tab-pane text-70">
                <?php $this->load->view('teachers/page-group/main-group-discussions'); ?>
            </div>

            <div id="tab5" class="tab-pane text-70">
                <?php $this->load->view('teachers/page-group/main-reports'); ?>
            </div>
        
        </div>

    </div>
</div>                


<div class="page-section bg-white border-bottom-2">

    <div class="container page__container">
        <div class="page-separator">
            <div class="page-separator__text">Umpan Balik Siswa dan Orang Tua</div>
        </div>
        <div class="row mb-32pt">
            <div class="col-md-3 mb-32pt mb-md-0">
                <div class="display-1">4.7</div>
                <div class="rating rating-24">
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                </div>
                <p class="text-muted mb-0">20 ratings</p>
            </div>
            <div class="col-md-9">

                <div class="row align-items-center mb-8pt"
                        data-toggle="tooltip"
                        data-title="75% rated 5/5"
                        data-placement="top">
                    <div class="col-md col-sm-6">
                        <div class="progress"
                                style="height: 8px;">
                            <div class="progress-bar bg-secondary"
                                    role="progressbar"
                                    aria-valuenow="75"
                                    style="width: 75%"
                                    aria-valuemin="0"
                                    aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-md-auto col-sm-6 d-none d-sm-flex align-items-center">
                        <div class="rating">
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mb-8pt"
                        data-toggle="tooltip"
                        data-title="16% rated 4/5"
                        data-placement="top">
                    <div class="col-md col-sm-6">
                        <div class="progress"
                                style="height: 8px;">
                            <div class="progress-bar bg-secondary"
                                    role="progressbar"
                                    aria-valuenow="16"
                                    style="width: 16%"
                                    aria-valuemin="0"
                                    aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-md-auto col-sm-6 d-none d-sm-flex align-items-center">
                        <div class="rating">
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mb-8pt"
                        data-toggle="tooltip"
                        data-title="12% rated 3/5"
                        data-placement="top">
                    <div class="col-md col-sm-6">
                        <div class="progress"
                                style="height: 8px;">
                            <div class="progress-bar bg-secondary"
                                    role="progressbar"
                                    aria-valuenow="12"
                                    style="width: 12%"
                                    aria-valuemin="0"
                                    aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-md-auto col-sm-6 d-none d-sm-flex align-items-center">
                        <div class="rating">
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mb-8pt"
                        data-toggle="tooltip"
                        data-title="9% rated 2/5"
                        data-placement="top">
                    <div class="col-md col-sm-6">
                        <div class="progress"
                                style="height: 8px;">
                            <div class="progress-bar bg-secondary"
                                    role="progressbar"
                                    aria-valuenow="9"
                                    style="width: 9%"
                                    aria-valuemin="0"
                                    aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-md-auto col-sm-6 d-none d-sm-flex align-items-center">
                        <div class="rating">
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mb-8pt"
                        data-toggle="tooltip"
                        data-title="0% rated 0/5"
                        data-placement="top">
                    <div class="col-md col-sm-6">
                        <div class="progress"
                                style="height: 8px;">
                            <div class="progress-bar bg-secondary"
                                    role="progressbar"
                                    aria-valuenow="0"
                                    aria-valuemin="0"
                                    aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-md-auto col-sm-6 d-none d-sm-flex align-items-center">
                        <div class="rating">
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="pb-16pt mb-16pt border-bottom row">
            <div class="col-md-3 mb-16pt mb-md-0">
                <div class="d-flex">
                    <a href="student-profile.html"
                        class="avatar avatar-sm mr-12pt">
                        <!-- <img src="LB" alt="avatar" class="avatar-img rounded-circle"> -->
                        <span class="avatar-title rounded-circle">IN</span>
                    </a>
                    <div class="flex">
                        <p class="small text-muted m-0">2 days ago</p>
                        <a href="student-profile.html"
                            class="card-title">Intan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="rating mb-8pt">
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                </div>
                <p class="text-70 mb-0">Thank you Ibu Guru yang Chantiiiq. Suka cara ngajarnya!</p>
            </div>
        </div>

        <div class="pb-16pt mb-16pt border-bottom row">
            <div class="col-md-3 mb-16pt mb-md-0">
                <div class="d-flex">
                    <a href="student-profile.html"
                        class="avatar avatar-sm mr-12pt">
                        <!-- <img src="UK" alt="avatar" class="avatar-img rounded-circle"> -->
                        <span class="avatar-title rounded-circle">AB</span>
                    </a>
                    <div class="flex">
                        <p class="small text-muted m-0">2 days ago</p>
                        <a href="student-profile.html"
                            class="card-title">Ambaria</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="rating mb-8pt">
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                </div>
                <p class="text-70 mb-0">This class is truly extraordinary. All videos really explain everything clearly. I couldn't be happier! Love love love.....</p>
            </div>
        </div>

        <div class="pb-16pt mb-24pt row">
            <div class="col-md-3 mb-16pt mb-md-0">
                <div class="d-flex">
                    <a href="student-profile.html"
                        class="avatar avatar-sm mr-12pt">
                        <!-- <img src="AD" alt="avatar" class="avatar-img rounded-circle"> -->
                        <span class="avatar-title rounded-circle">DN</span>
                    </a>
                    <div class="flex">
                        <p class="small text-muted m-0">2 days ago</p>
                        <a href="student-profile.html"
                            class="card-title">Dono</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="rating mb-8pt">
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                </div>
                <p class="text-70 mb-0">Paling suka kalo disuruh berdiri di depan kelas... (kenangan sebelum PJJ)</p>
            </div>
        </div>

        <div class="pb-16pt mb-24pt row">
            <div class="col-md-3 mb-16pt mb-md-0">
                <div class="d-flex">
                    <a href="student-profile.html"
                        class="avatar avatar-sm mr-12pt">
                        <!-- <img src="AD" alt="avatar" class="avatar-img rounded-circle"> -->
                        <span class="avatar-title rounded-circle">KS</span>
                    </a>
                    <div class="flex">
                        <p class="small text-muted m-0">2 days ago</p>
                        <a href="student-profile.html"
                            class="card-title">Kasino</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="rating mb-8pt">
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                </div>
                <p class="text-70 mb-0">Cantik tapi ..... (isi sendiri)</p>
            </div>
        </div>

        <div class="pb-16pt mb-24pt row">
            <div class="col-md-3 mb-16pt mb-md-0">
                <div class="d-flex">
                    <a href="student-profile.html"
                        class="avatar avatar-sm mr-12pt">
                        <!-- <img src="AD" alt="avatar" class="avatar-img rounded-circle"> -->
                        <span class="avatar-title rounded-circle">ID</span>
                    </a>
                    <div class="flex">
                        <p class="small text-muted m-0">2 days ago</p>
                        <a href="student-profile.html"
                            class="card-title">Indro</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="rating mb-8pt">
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                </div>
                <p class="text-70 mb-0">Ibunya cantik... Cocok buat jadi calon Kaka Ipar :D</p>
            </div>
        </div>


    </div>

</div>

<!-- // END Page Content -->