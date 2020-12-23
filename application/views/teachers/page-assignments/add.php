                <script src="<?= base_url('dist/js/teachers/add-assignment.js') ?>"></script>
                <!-- Page Content -->
                <div class="container mt-2 mb-2">
                    <ol class="breadcrumb p-0 m-0">
                        <li class="breadcrumb-item"><a href="<?= site_url('') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a>Grup</a></li>
                        <li class="breadcrumb-item"><a href="<?= site_url('grup/bahasa-inggris/x-ipa-1') ?>">Bahasa Inggris - X IPA 1</a></li>
                        <li class="breadcrumb-item active">Tambah Tugas</li>
                    </ol>
                </div>
                <div class="navbar navbar-light border-0 navbar-expand">                
                    <div class="container page__container">
                        <div class="media flex-nowrap">
                            <div class="media-left mr-16pt">
                                <a href="<?= site_url('tambah-tugas') ?>"><img src="<?= base_url() ?>assets/public/images/menu/section_assignment.png"
                                         width="40"
                                         alt=""
                                         class="rounded"></a>
                            </div>
                            <div class="media-body">
                                <a href="<?= site_url('tambah-tugas') ?>"
                                   class="card-title text-body mb-0">Tambah Tugas</a>
                                <p class="lh-1 d-flex align-items-center mb-0">
                                    <span class="text-50 small">Halaman ini digunakan untuk membuat tugas baru</span>
                                </p>
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
                                                <div class="col-auto tab_1">
                                                    <a href="#tab1"
                                                    data-toggle="tab"
                                                    role="tab"
                                                    aria-selected="true"
                                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                                                        <span class="h2 mb-0 mr-2"><i class="material-icons fs-2x">assignment</i></span>
                                                        <span class="flex d-flex flex-column">
                                                            <strong class="card-title">1</strong>
                                                            <small class="card-subtitle text-50">Data Tugas</small>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="col-auto border-left border-right">
                                                    <a href="#tab2"
                                                    data-toggle="tab"
                                                    role="tab"
                                                    aria-selected="false"
                                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start tab_2">
                                                        <span class="h2 mb-0 mr-2"><i class="material-icons fs-2x">people</i></span>
                                                        <span class="flex d-flex flex-column">
                                                            <strong class="card-title">2</strong>
                                                            <small class="card-subtitle text-50">Pengaturan</small>
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
                                <form id="form-assignment">
                                    <div class="flex" style="max-width: 100%">

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <div class="input-group input-group-merge">
                                                    <input type="text" class="form-control form-control-prepended name" placeholder="Nama Tugas...">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <span class="material-icons">bookmark</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                            <div class="form-group col-md-3">
                                                <select class="form-control category">
                                                    <option value="">-- Kategori --</option>
                                                    <option value="1">Individu</option>
                                                    <option value="2">Kelompok</option>
                                                </select>
                                            </div>
    
                                            <div class="form-group col-md-3">
                                                <input id="datetime" 
                                                    type="text"
                                                    class="form-control datetime"
                                                    placeholder="Batas Akhir Pengumpulan"
                                                    data-toggle="daterangepicker"
                                                    data-daterangepicker-opens="left"
                                                    data-daterangepicker-time-picker="true"
                                                    data-daterangepicker-locale-format="DD-MM-Y H:ma"
                                                    data-daterangepicker-single-date-picker="true">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div style="height: 150px;" 
                                                class="description" 
                                                data-toggle="quill"
                                                data-quill-placeholder="Deskripsi ..."
                                                data-quill-modules-toolbar='[["bold", "italic"], ["link", "blockquote", "code"], [{"list": "ordered"}, {"list": "bullet"}]]'>                                    
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input file">
                                                <label for="file" class="custom-file-label">Pilih file</label>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <p class="text-danger msg-validation"></p>                                            
                                            </div>
                                            <div class="col-lg-6 text-right">
                                                <button type="button" class="btn btn-outline-primary btn-rounded mt-2 saveBtn1" style="width: 125px">Simpan <i class="material-icons ">navigate_next</i></button>                                            
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                            
                            <div id="tab2" class="tab-pane text-70">
                                
                                <div class="row">

                                    <div class="col-lg-5">
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
                                                            <th></th>                                                         
                                                        </tr>
                                                    </thead>
                                                    <tbody class="list" id="table_1">
                                                        <?php $no = 1; foreach($students as $row): ?>
                                                        <tr>
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
                                                            
                                                            <td><a class="btn btn-light btn-rounded selectBtn"><i class="material-icons">navigate_next</i></a></td>
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

                                    <div class="col-lg-2">
                                        <div class="align-vertical-center">
                                            <button type="button" class="btn btn-light btn-rounded btn-block selectAllBtn"><i class="fa fa-angle-double-right"></i></button>
                                            <button type="button" class="btn btn-light btn-rounded btn-block removeAllBtn"><i class="fa fa-angle-double-left"></i></button>
                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                        <div class="page-separator">
                                            <div class="page-separator__text">Ditugaskan Ke</div>
                                        </div>
                                        <div class="card mb-lg-32pt">
                                            <div class="table-responsive"
                                                data-toggle="lists"
                                                data-lists-sort-by="js-lists-values-from"
                                                data-lists-sort-desc="true"
                                                data-lists-values='["js-lists-values-name", "js-lists-values-status", "js-lists-values-policy", "js-lists-values-reason", "js-lists-values-days", "js-lists-values-available", "js-lists-values-from", "js-lists-values-to"]'>

                                                <table class="table mb-0 thead-border-top-0 table-nowrap table_2">
                                                    <thead>
                                                        <tr>

                                                            <th style="width: 18px;" class="pr-0">
                                                                No
                                                            </th>

                                                            <th>
                                                                <a href="javascript:void(0)"
                                                                class="sort"
                                                                data-sort="js-lists-values-name">Nama Siswa</a>
                                                            </th>     
                                                            
                                                            <th style="width: 18px;" class="pr-0">
                                                                
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="list" id="table_2">


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

                                    <div class="col-lg-12 text-right">
                                        <button type="button" class="btn btn-outline-primary btn-rounded mt-2 saveBtn2" style="width: 125px">Simpan <i class="material-icons ml-1">done</i></button>
                                    </div>

                                </div>                                

                            </div>
                        
                        </div>

                    </div>
                </div>
                

                <!-- // END Page Content -->