<div class="input_worksheet_generator_panel" style="display: none;">

    <div class="page-separator">
        <div class="page-separator__text">Pengaturan</div>
    </div>

    <div class="accordion js-accordion accordion--boxed list-group-flush mb-3"
        id="parent2">

        <div class="accordion__item">
            <div class="cursor_pointer accordion__toggle collapsed"
                data-toggle="collapse"
                data-target="#course-toc-1"
                data-parent="#parent2">
                <div class="flex mr-2">
                    <span class="mr-3 title_session">Worksheet Generator</span>                                                        
                </div>
                <span class="accordion__toggle-icon material-icons">keyboard_arrow_down</span>
            </div>

            <div class="accordion__menu open"
                id="course-toc-1">                                                    

                <div class="accordion__menu-link section_1">
                    <div class="flex" style="width: 100%">
                        <form id="form-worksheet-generator">

                            <div class="form-group row">
                                <div class="col-lg-2">
                                    <span class="text-dark fs13">Topik - Sub Topik</span>                            
                                </div>
                                <div class="col-lg-5">                                
                                    <select data-toggle="select"
                                            class="form-control form-control-sm gen_topic_id_1">
                                        <option value=''>-- Pilih --</option>
                                    </select>
                                </div>
                                <div class="col-lg-5">
                                    <select data-toggle="select"
                                            class="form-control form-control-sm gen_subtopic_id_1">
                                        <option value=''>-- Pilih --</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-2">
                                    <span class="text-dark fs13">Nomor Awal - Akhir</span>                            
                                </div>
                                <div class="col-lg-5">                                
                                    <input data-toggle="touch-spin"
                                        data-min="1"
                                        data-max="1"
                                        data-step="1"
                                        type="text"
                                        value="1"
                                        class="form-control number_start_1" />
                                </div>
                                <div class="col-lg-5">
                                    <input data-toggle="touch-spin"
                                        data-min="2"
                                        data-max="10"
                                        data-step="1"
                                        type="text"
                                        value="2"
                                        class="form-control number_end_1" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-2">
                                    <span class="text-dark fs13 mt-2">Tipe Soal</span>                            
                                </div>
                                <div class="col-lg-5">
                                    <select class="form-control custom-select question_type_id_1">
                                        <option value="1">Single Answer</option>
                                        <option value="2">Multiple Answer</option>
                                        <option value="3">True or False</option>
                                        <option value="4">Essay</option>
                                        <option value="5">Fill in the Blank - Exact Answer</option>
                                    </select>
                                </div>
                                <div class="col-lg-5">                                
                                    <div class="row mt-2">
                                        <div class="custom-control custom-radio ml-3 mr-4">
                                            <input id="easy_1"
                                                   name="difficulty_1"
                                                   type="radio"
                                                   class="custom-control-input"
                                                   value="1">
                                            <label for="easy_1"
                                                   class="custom-control-label">Easy</label>
                                        </div>
                                        <div class="custom-control custom-radio mr-4">
                                            <input id="normal_1"
                                                   name="difficulty_1"
                                                   type="radio"
                                                   class="custom-control-input"
                                                   value="2" 
                                                   checked>
                                            <label for="normal_1"
                                                   class="custom-control-label">Normal</label>
                                        </div>
                                        <div class="custom-control custom-radio mr-4">
                                            <input id="hard_1"
                                                   name="difficulty_1"
                                                   type="radio"
                                                   class="custom-control-input"
                                                   value="3">
                                            <label for="hard_1"
                                                   class="custom-control-label">Hard</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input id="genius_1"
                                                   name="difficulty_1"
                                                   type="radio"
                                                   class="custom-control-input"
                                                   value="4">
                                            <label for="genius_1"
                                                   class="custom-control-label">Genius</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>                    
                    </div>
                </div>

                <div class="accordion__menu-link addSectionPanel">
                    <span class="d-inline-flex icon--left">
                        
                    </span>
                    <div class="flex">
                        <a class="cursor_pointer text-primary mr-3 addSectionBtn">Tambah Sesi <i class="material-icons">add_circle_outline</i></a>
                        <a class="cursor_pointer text-accent mr-3 removeSectionBtn" style="display: none;">Hapus Sesi <i class="material-icons">delete_forever</i></a>
                    </div>

                    <a class="cursor_pointer btn btn-sm btn-outline-dark btn-rounded generateWsBtn"><i class="material-icons icon--left">autorenew</i>Generate Worksheet</a>
                    <a class="btn btn-light btn-sm loadingBtn" style="display: none;">
                        <div class="avatar avatar-xs  mr-2">
                            <img src="<?= base_url() ?>assets/public/images/loading.gif" class="avatar-img" />
                        </div>
                        Loading ...
                    </a>
                    
                </div>

            </div>
        </div>

        
    </div>

    <div class="output-worksheet" style="display: none;">
        <?php $this->load->view('teachers/page-quizzes/output-worksheet'); ?>
    </div>

</div>