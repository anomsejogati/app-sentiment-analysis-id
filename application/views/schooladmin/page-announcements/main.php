<script src="<?= base_url('assets/public/js/ckeditor-4.14-full/ckeditor.js'); ?>"></script>
<script src="<?= base_url('dist/js/schooladmin/announcements.js') ?>"></script>

<div class="pt-32pt">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Pengumuman</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="<?= site_url('') ?>">Home</a></li>

                    <li class="breadcrumb-item active">

                    Pengumuman

                    </li>

                </ol>

            </div>
        </div>

        <div class="row"
                role="tablist">
            <div class="col-auto">
                <a class="btn btn-outline-secondary addBtn">Tambah Pengumuman</a>
            </div>
        </div>

    </div>
</div>

<!-- BEFORE Page Content -->

<!-- // END BEFORE Page Content -->

<!-- Page Content -->

<div class="container page__container page__container page-section">

    <div class="card mb-0 data_panel">

        <div class="table-responsive"
                data-toggle="lists"
                data-lists-sort-by="js-lists-values-employee-name"
                data-lists-values='["js-lists-values-employee-name", "js-lists-values-employer-name", "js-lists-values-projects", "js-lists-values-activity", "js-lists-values-earnings"]'>

            <div class="card-header">
                <form class="form-inline">
                    <label class="mr-sm-2 form-label"
                            for="inlineFormFilterBy">Filter:</label>
                    <input type="text"
                            class="form-control search mb-2 mr-sm-2 mb-sm-0"
                            id="inlineFormFilterBy"
                            placeholder="Search ...">                                    

                    <!-- <div class="ml-auto mb-2 mb-sm-0 custom-control-inline mr-0">
                        <label class="form-label mb-0"
                                for="active">Aktif</label>
                        <div class="custom-control custom-checkbox-toggle ml-8pt">
                            <input checked=""
                                    type="checkbox"
                                    id="active"
                                    class="custom-control-input">
                            <label class="custom-control-label"
                                    for="active">Active</label>
                        </div>
                    </div> -->
                </form>
            </div>

            <table class="table mb-0 thead-border-top-0 table-nowrap">
                <thead>
                    <tr>

                        <th width="10%">No</th>

                        <th class="" width="25%">
                            <a href="javascript:void(0)"
                                class="sort"
                                data-sort="js-lists-values-date-post">Tgl. Post</a>
                        </th>

                        <th class="" width="40%">
                            <a href="javascript:void(0)"
                                class="sort"
                                data-sort="js-lists-values-title">Judul</a>
                        </th>
                        
                        <th width="20%" 
                            class="pl-0"></th>
                    </tr>
                </thead>
                <tbody class="list" id="list-announcements">

                    <tr>

                        <td>1</td>
                        <td class="js-lists-values-projects small date">15 September 2020</td>
                        <td class="js-lists-values-projects small title">Pelaksanaan Ujian Tengah Semester</td>
                        <td class="text-right pl-0">
                            <a class="cursor_pointer text-primary mr-2 editBtn"><i class="material-icons fs18">border_color</i></a>
                            <a class="cursor_pointer text-danger deleteBtn"><i class="material-icons fs20">delete_forever</i></a> 
                        </td>
                    </tr>

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

    <div class="row mb-32pt add_panel" style="display: none;">
        <div class="col-lg-4">
            <div class="page-separator">
                <div class="page-separator__text title_form">Tambah Pengumuman</div>
            </div>
            <p class="card-subtitle text-70 mb-16pt mb-lg-0 desc_form">Form ini digunakan untuk menambahkan data pengumuman sekolah.</p>
        </div>
        <div class="col-lg-8 d-flex align-items-center">
            <div class="flex"
                    style="max-width: 100%">

                <div class="form-group">
                    <label class="form-label">Tanggal</label>
                    <input id="date"
                            type="hidden"
                            class="form-control flatpickr-input"
                            data-toggle="flatpickr"
                            value="today">
                </div>

                <div class="form-group">
                    <label class="form-label"
                            for="title">Judul Pengumuman:</label>
                    <input type="text"
                            class="form-control"
                            id="title"
                            placeholder="">
                </div>

                <div class="form-group">
                    <label class="form-label">Isi Pengumuman:</label>
                    <textarea id="content" name="content"></textarea>
                </div>

                <div class="form-group row">
                    <div class="col-lg-6">
                        <p class="strong text-accent msg-validation"></p>
                    </div>
                    <div class="col-lg-6 text-right">
                        <button type="button" class="btn btn-outline-primary btn-rounded mr-2 saveBtn" style="width: 125px"><i class="batch-icon-stiffy icon--left"></i>Simpan</button>
                        <button type="button" class="btn btn-outline-accent btn-rounded cancelBtn" style="width: 125px"><i class="batch-icon-delete icon--left"></i>Batal</button>                    
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<!-- // END Page Content -->