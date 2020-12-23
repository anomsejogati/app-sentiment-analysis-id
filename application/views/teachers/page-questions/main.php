<script src="<?= base_url('dist/js/teachers/questions.js') ?>"></script>

<div class="pt-32pt">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Soal</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="<?= site_url('') ?>">Home</a></li>

                    <li class="breadcrumb-item active">

                        Soal

                    </li>

                </ol>

            </div>
        </div>

        <div class="row"
                role="tablist">
            <div class="col-auto">
                <a href="<?= site_url('soal/tambah') ?>" class="btn btn-outline-secondary addQuestion">Tambah Soal</a>
            </div>
        </div>

    </div>
</div>

<!-- BEFORE Page Content -->

<!-- // END BEFORE Page Content -->

<!-- Page Content -->

<div class="container page__container page-section">
    <div class="flex search-form form-control-rounded search-form--light mb-16pt"
            style="min-width: 200px;">
        <input type="text"
                class="form-control"
                placeholder="Cari soal ..."
                id="searchSample02">
        <button class="btn pr-3"
                type="button"><i class="material-icons">search</i></button>
    </div>
    <div class="mb-32pt d-flex align-items-center">
        <small class="text-70 text-headings text-uppercase mr-3">Menampilkan 3 soal</small>
        <div class="dropdown ml-auto">
            <a href=""
                data-toggle="dropdown"
                class="dropdown-toggle text-70">Filter</a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item active">Semua Topik</a>
                <a class="dropdown-item customFilter">Kustom</a>
            </div>
        </div>
    </div>

    <div class="filter_panel" style="display: none">
        <div class="card card-form d-flex flex-column flex-sm-row mb-lg-32pt">
            <div class="card-form__body card-body-form-group flex">
                <div class="row">
                    <div class="col-sm-auto">
                        <div class="form-group">
                            <label for="filter_name">Tingkat</label><br>
                            <select id="filter_category"
                                    class="custom-select"
                                    style="width: 200px;">
                                <option value="all">-- Semua --</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <div class="form-group">
                            <label for="filter_category">Mata Pelajaran</label><br>
                            <select id="filter_category"
                                    class="custom-select"
                                    style="width: 200px;">
                                <option value="all">-- Semua --</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <div class="form-group">
                            <label for="filter_category">Topik</label><br>
                            <select id="filter_category"
                                    class="custom-select"
                                    style="width: 200px;">
                                <option value="all">-- Semua --</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <div class="form-group">
                            <label for="filter_category">Subtopik</label><br>
                            <select id="filter_category"
                                    class="custom-select"
                                    style="width: 200px;">
                                <option value="all">-- Semua --</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <div class="form-group">
                            <label for="filter_category">Tipe Soal</label><br>
                            <select id="filter_category"
                                    class="custom-select"
                                    style="width: 200px;">
                                <option value="all">-- Semua --</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
            </div>
            <button class="btn bg-alt border-left border-top border-top-sm-0 rounded-0 refreshBtn"><i class="material-icons text-primary icon-20pt">refresh</i></button>
        </div>
    </div>
    
    <?php $this->load->view('teachers/page-questions/data'); ?>
    

</div>