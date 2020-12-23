<script src="<?= base_url('assets/public/js/ckeditor-4.14-full/ckeditor.js'); ?>"></script>
<script src="<?= base_url('dist/js/teachers/questions.js') ?>"></script>

<div class="pt-32pt">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Ubah Soal</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="<?= site_url('') ?>">Home</a></li>

                    <li class="breadcrumb-item"><a href="<?= site_url('soal') ?>">Soal</a></li>

                    <li class="breadcrumb-item active">Ubah</li>
                </ol>

            </div>
        </div>

    </div>
</div>

<!-- BEFORE Page Content -->

<!-- // END BEFORE Page Content -->

<!-- Page Content -->

<div class="page-section border-bottom-2">
    <div class="container page__container">
        <div class="row align-items-start">
            <div class="col-md-8">

                <div class="page-separator">
                    <div class="page-separator__text">Soal</div>
                </div>

                <div class="card card-body question_section_1">

                    <div class="form-group">
                        <label class="form-label">Topik</label>
                        <select name="category"
                                class="form-control custom-select">
                            <option value="">-- Pilih --</option>                                            
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Sub Topik</label>
                        <select name="category"
                                class="form-control custom-select">
                            <option value="">-- Pilih --</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Tipe Soal</label>
                        <select name="question_type" 
                                class="form-control custom-select question_type">
                            <option value="1">Single Answer</option>
                            <option value="2">Multiple Answer</option>
                            <option value="3">True or False</option>
                            <option value="4">Essay</option>
                            <option value="5">Fill in the Blank - Exact Answer</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Header Soal</label>
                        <div style="height: 150px;" id="question_header">
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Soal</label>
                        <!-- <textarea class="form-control" rows="3" placeholder="Question"></textarea> -->
                        <textarea id="question_content" name="question_content"></textarea>
                        <!-- <small class="form-text text-muted">Shortly describe the question.</small> -->
                    </div>                                    

                    <div class="form-group">
                        <label class="form-label">Jawaban</label>
                    </div>

                    <div class="single_choice_panel answer_panel">
                        <div class="form-group d-flex flex-column flex-sm-row">
                            <div class="custom-control custom-radio">
                                <input id="singleCheck01" 
                                    name="singleCheck_1"
                                    type="radio"
                                    class="custom-control-input">
                                <label for="singleCheck01"
                                    class="custom-control-label"></label>
                            </div>
                            <input type="text"
                                class="form-control"
                                id="singleAnswerText1">
                        </div>
                        <div class="form-group d-flex flex-column flex-md-row">
                            <div class="custom-control custom-radio">
                                <input id="singleCheck02" 
                                    name="singleCheck_1"
                                    type="radio"
                                    class="custom-control-input">
                                <label for="singleCheck02"
                                    class="custom-control-label"></label>
                            </div>
                            <input type="text"
                                class="form-control"
                                id="singleAnswerText2">
                        </div>
                        <div class="form-group d-flex flex-column flex-md-row">
                            <div class="custom-control custom-radio">
                                <input id="singleCheck03" 
                                    name="singleCheck_1"
                                    type="radio"
                                    class="custom-control-input">
                                <label for="singleCheck03"
                                    class="custom-control-label"></label>
                            </div>
                            <input type="text"
                                class="form-control"
                                id="singleAnswerText3">
                        </div>
                        <div class="form-group d-flex flex-column flex-md-row">
                            <div class="custom-control custom-radio">
                                <input id="singleCheck04" 
                                    name="singleCheck_1"
                                    type="radio"
                                    class="custom-control-input">
                                <label for="singleCheck04"
                                    class="custom-control-label"></label>
                            </div>
                            <input type="text"
                                class="form-control"
                                id="singleAnswerText4">
                        </div>
                    </div>

                    <div class="multiple_choice_panel answer_panel" style="display: none;">
                        <div class="form-group d-flex flex-column flex-sm-row">
                            <div class="custom-control custom-checkbox">
                                <input id="customCheck01"
                                    type="checkbox"
                                    class="custom-control-input">
                                <label for="customCheck01"
                                    class="custom-control-label"></label>
                            </div>
                            <input type="text"
                                class="form-control"
                                id="multipleAnswerText1">
                        </div>
                        <div class="form-group d-flex flex-column flex-md-row">
                            <div class="custom-control custom-checkbox">
                                <input id="customCheck02"
                                    type="checkbox"
                                    class="custom-control-input">
                                <label for="customCheck02"
                                    class="custom-control-label"></label>
                            </div>
                            <input type="text"
                                class="form-control"
                                id="multipleAnswerText2">
                        </div>
                        <div class="form-group d-flex flex-column flex-md-row">
                            <div class="custom-control custom-checkbox">
                                <input id="customCheck03"
                                    type="checkbox"
                                    class="custom-control-input">
                                <label for="customCheck03"
                                    class="custom-control-label"></label>
                            </div>
                            <input type="text"
                                class="form-control"
                                id="multipleAnswerText3">
                        </div>
                        <div class="form-group d-flex flex-column flex-md-row">
                            <div class="custom-control custom-checkbox">
                                <input id="customCheck04"
                                    type="checkbox"
                                    class="custom-control-input">
                                <label for="customCheck04"
                                    class="custom-control-label"></label>
                            </div>
                            <input type="text"
                                class="form-control"
                                id="multipleAnswerText4">
                        </div>
                    </div>

                    <div class="truefalse_choice_panel answer_panel" style="display: none;">
                        <div class="form-group d-flex flex-column flex-sm-row">
                            <div class="custom-control custom-radio mr-3">
                                <input id="truefalseCheck01" 
                                    name="truefalseCheck_1"
                                    type="radio"
                                    class="custom-control-input">
                                <label for="truefalseCheck01"
                                    class="custom-control-label">True</label>
                            </div>

                            <div class="custom-control custom-radio">
                                <input id="truefalseCheck02" 
                                    name="truefalseCheck_1"
                                    type="radio"
                                    class="custom-control-input">
                                <label for="truefalseCheck02"
                                    class="custom-control-label">False</label>
                            </div>
                        </div>
                    </div>

                    <div class="essay_panel answer_panel" style="display: none;">
                        <div style="height: 150px;"
                            data-toggle="quill"
                            data-quill-modules-toolbar='[["bold", "italic"], ["link", "blockquote", "code", "image"], [{"list": "ordered"}, {"list": "bullet"}]]'>
                            
                        </div>
                    </div>

                    <div class="form-group mt-2">
                        <label class="form-label">Tingkat Kesulitan</label>
                        <select name="category"
                                class="form-control custom-select">
                            <option value="1">Easy</option>
                            <option value="2">Normal</option>
                            <option value="3">Hard</option>
                            <option value="4">Genius</option>
                        </select>
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

                </div>

            </div>
            <div class="col-md-4">

                <div class="card">
                    <div class="card-header text-center">
                        <button type="button" class="btn btn-primary btn-rounded mr-2 updateBtn" style="width: 150px"><i class="batch-icon-stiffy icon--left"></i>Simpan</button>
                    </div>
                    <div class="list-group list-group-flush">                                        
                        <div class="list-group-item">
                            <a href="<?= site_url('soal') ?>" class="text-danger cancelBtn"><strong>Batal</strong></a>
                        </div>
                    </div>
                </div>

                <div class="page-separator">
                    <div class="page-separator__text">Deskripsi</div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Mata Pelajaran</label>
                            <select name="category"
                                    class="form-control custom-select">
                                <option value="vuejs">Bahasa Inggris</option>
                                <option value="vuejs">Matematika</option>
                                <option value="vuejs">Bahasa Indonesia</option>
                            </select>
                        </div>

                        <div class="form-group mb-0">
                            <label class="form-label">Tingkat</label>
                            <select name="category"
                                    class="form-control custom-select">
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>
                        </div>


                        <div class="form-group mb-0">
                            <label class="form-label">Jurusan</label>
                            <select name="course"
                                    id="course"
                                    data-toggle="select"
                                    data-tags="false"
                                    data-multiple="true"
                                    data-minimum-results-for-search="0"
                                    class="form-control"
                                    data-placeholder="">
                                <option data-avatar-src="public/images/paths/angular_40x40@2x.png">IPA</option>
                                <option data-avatar-src="public/images/paths/swift_40x40@2x.png">IPS</option>
                                <option data-avatar-src="public/images/paths/swift_40x40@2x.png">Rekayasa Perangkat Lunak</option>
                                <option data-avatar-src="public/images/paths/swift_40x40@2x.png">Teknik Komputer dan Jaringan</option>
                                <option data-avatar-src="public/images/paths/swift_40x40@2x.png">Akuntansi</option>
                            </select>
                            <small class="form-text text-muted">Kosongkan bila soal dapat digunakan disemua jurusan.</small>
                        </div>

                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- // END Page Content -->