                <script src="<?= base_url('dist/js/schooladmin/classes.js') ?>"></script>
                
                <div class="pt-32pt">
                    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                                <h2 class="mb-0">Data Kelas</h2>

                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="<?= site_url('') ?>">Home</a></li>

                                    <li class="breadcrumb-item active">

                                        Data Kelas

                                    </li>

                                </ol>

                            </div>
                        </div>

                        <div class="row"
                             role="tablist">
                            <div class="col-auto">
                                <button type="button" class="btn btn-light backBtn" style="display: none;">
                                        <i class="material-icons icon--left">reply</i> Kembali
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- BEFORE Page Content -->

                <!-- // END BEFORE Page Content -->

                <!-- Page Content -->

                <div class="container page__container page__container page-section">

                    <div class="row card-group-row">

                        <div class="col-sm-4 card-group-row__col cursor_pointer card_panel_1">

                            <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card" data-toggle="popover" data-trigger="click" data-original-title="" title="" data-domfactory-upgraded="overlay">

                                <div class="card-body d-flex flex-column">
                                    <div class="d-flex align-items-center">
                                        <div class="flex">
                                            <div class="d-flex align-items-center">
                                                <div class="rounded mr-12pt z-0 o-hidden">
                                                    <div class="overlay">
                                                        <img src="<?= base_url() ?>assets/public/images/paths/react_40x40@2x.png" alt="Angular" class="rounded" width="40" height="40">
                                                        <span class="overlay__content overlay__content-transparent">
                                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                                <small class="h6 small text-white mb-0" style="font-weight: 500;">80%</small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <div class="card-title">X IPA 1</div>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Nanang Acilis</small></p>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="student-path.html" data-toggle="tooltip" data-title="Kelas" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite" data-original-title="" title="">class</a>

                                    </div>

                                </div>
                            </div>

                            <div class="popoverContainer d-none">
                                <div class="media">
                                    <div class="media-left mr-12pt">
                                        <img src="<?= base_url() ?>assets/public/images/paths/react_40x40@2x.png" alt="Angular" class="rounded" width="40" height="40">
                                    </div>
                                    <div class="media-body">
                                        <div class="card-title">X IPA 1</div>
                                        <p class="text-50 d-flex lh-1 mb-0 small">Nanang Acilis</p>
                                    </div>
                                </div>

                                <p class="mt-16pt text-70">Grup Mata Pelajaran: 2</p>
                                <p class="mt-16pt text-70">Siswa: </p>

                                <div class="my-32pt" id="group_1">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn btn-primary mr-8pt addGroupBtn" >Tambah Grup</a>
                                        <a class="btn btn-outline-secondary ml-0 getGroupBtn">Lihat Grup</a>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <small class="text-50 mr-8pt">Penilaian siswa</small>
                                    <div class="rating mr-8pt">
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                                    </div>
                                    <small class="text-50">4/5</small>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="text-50 mr-8pt">Nilai rata-rata siswa</small>
                                    <div class="rating mr-8pt">                                        
                                    </div>
                                    <small class="text-50">7.85</small>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-4 card-group-row__col cursor_pointer card_panel_2">

                            <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card" data-toggle="popover" data-trigger="click" data-original-title="" title="" data-domfactory-upgraded="overlay">

                                <div class="card-body d-flex flex-column">
                                    <div class="d-flex align-items-center">
                                        <div class="flex">
                                            <div class="d-flex align-items-center">
                                                <div class="rounded mr-12pt z-0 o-hidden">
                                                    <div class="overlay">
                                                        <img src="<?= base_url() ?>assets/public/images/paths/react_40x40@2x.png" alt="Angular" class="rounded" width="40" height="40">
                                                        <span class="overlay__content overlay__content-transparent">
                                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                                <small class="h6 small text-white mb-0" style="font-weight: 500;">80%</small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <div class="card-title">X IPA 2</div>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Mada Matilda</small></p>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="student-path.html" data-toggle="tooltip" data-title="Kelas" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite" data-original-title="" title="">class</a>

                                    </div>

                                </div>
                            </div>

                            <div class="popoverContainer d-none">
                                <div class="media">
                                    <div class="media-left mr-12pt">
                                        <img src="<?= base_url() ?>assets/public/images/paths/react_40x40@2x.png" alt="Angular" class="rounded" width="40" height="40">
                                    </div>
                                    <div class="media-body">
                                        <div class="card-title">X IPA 2</div>
                                        <p class="text-50 d-flex lh-1 mb-0 small">Mada Matilda</p>
                                    </div>
                                </div>

                                <p class="mt-16pt text-70">Grup Mata Pelajaran: 2</p>
                                <p class="mt-16pt text-70">Siswa: </p>

                                <div class="my-32pt" id="group_1">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn btn-primary mr-8pt addGroupBtn" >Tambah Grup</a>
                                        <a class="btn btn-outline-secondary ml-0 getGroupBtn">Lihat Grup</a>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <small class="text-50 mr-8pt">Penilaian siswa</small>
                                    <div class="rating mr-8pt">
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                                    </div>
                                    <small class="text-50">4/5</small>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="text-50 mr-8pt">Nilai rata-rata siswa</small>
                                    <div class="rating mr-8pt">                                        
                                    </div>
                                    <small class="text-50">7.85</small>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-4 card-group-row__col cursor_pointer card_panel_3">

                            <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card" data-toggle="popover" data-trigger="click" data-original-title="" title="" data-domfactory-upgraded="overlay">

                                <div class="card-body d-flex flex-column">
                                    <div class="d-flex align-items-center">
                                        <div class="flex">
                                            <div class="d-flex align-items-center">
                                                <div class="rounded mr-12pt z-0 o-hidden">
                                                    <div class="overlay">
                                                        <img src="<?= base_url() ?>assets/public/images/paths/redis_40x40@2x.png" alt="Angular" class="rounded" width="40" height="40">
                                                        <span class="overlay__content overlay__content-transparent">
                                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                                <small class="h6 small text-white mb-0" style="font-weight: 500;">80%</small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <div class="card-title">X IPS 1</div>
                                                    <p class="flex text-50 lh-1 mb-0"><small>Zidna Aisya Karima</small></p>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="student-path.html" data-toggle="tooltip" data-title="Kelas" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite" data-original-title="" title="">class</a>

                                    </div>

                                </div>
                            </div>

                            <div class="popoverContainer d-none">
                                <div class="media">
                                    <div class="media-left mr-12pt">
                                        <img src="<?= base_url() ?>assets/public/images/paths/redis_40x40@2x.png" alt="Angular" class="rounded" width="40" height="40">
                                    </div>
                                    <div class="media-body">
                                        <div class="card-title">X IPS 1</div>
                                        <p class="text-50 d-flex lh-1 mb-0 small">Zidna Aisya Karima</p>
                                    </div>
                                </div>

                                <p class="mt-16pt text-70">Grup Mata Pelajaran: 2</p>
                                <p class="mt-16pt text-70">Siswa: </p>

                                <div class="my-32pt" id="group_1">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn btn-primary mr-8pt addGroupBtn" >Tambah Grup</a>
                                        <a class="btn btn-outline-secondary ml-0 getGroupBtn">Lihat Grup</a>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <small class="text-50 mr-8pt">Penilaian siswa</small>
                                    <div class="rating mr-8pt">
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                                    </div>
                                    <small class="text-50">4/5</small>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="text-50 mr-8pt">Nilai rata-rata siswa</small>
                                    <div class="rating mr-8pt">                                        
                                    </div>
                                    <small class="text-50">7.85</small>
                                </div>
                            </div>

                        </div>


                    </div>

                    <?php $this->load->view('schooladmin/page-classes/group-data'); ?>
                    <?php $this->load->view('schooladmin/page-classes/group-add'); ?>

                </div>

                <!-- // END Page Content -->

                