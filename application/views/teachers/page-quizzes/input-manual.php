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

<div class="input_manual_panel" style="display: none;">

    <div class="row">
        <div class="col-lg-8 panel_question">
            <div class="panel-question panel_question_1">
                <div class="page-separator">
                    <div class="page-separator__text">Soal 1</div>
                </div>
    
                <div class="card card-body question_section_1">

                    <div class="row">
                        <div class="col-lg-6 d-flex align-items-center">                            
                        </div>
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="flex"
                                    style="max-width: 100%">

                                <label class="form-label"
                                        for="public_1">Jadikan Publik</label><br>
                                <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                                    <input type="checkbox"
                                            id="public_1"
                                            class="custom-control-input">
                                    <label class="custom-control-label"
                                            for="public_1">Ya</label>
                                </div>
                                <label class="form-label mb-0"
                                        for="public_1">Ya</label>
                            </div><br>
                            
                        </div>
                        <div class="col-lg-6"></div>
                        <div class="col-lg-6"><small>Dengan menjadikan publik bearti Anda setuju soal ini dapat digunakan oleh sekolah lain.</small></div>
                    </div>
    
                    <div class="form-group">
                        <label class="form-label">Topik</label>
                        <select name="topic_id_1"
                                class="form-control custom-select topic_id_1">
                            <option value="">-- Pilih --</option>   
                            <option value="1">Present Tense</option>                                         
                        </select>
                    </div>
    
                    <div class="form-group">
                        <label class="form-label">Sub Topik</label>
                        <select name="subtopic_id_1"
                                class="form-control custom-select subtopic_id_1">
                            <option value="">-- Pilih --</option>
                        </select>
                    </div>
    
                    <div class="form-group">
                        <label class="form-label">Tipe Soal</label>
                        <select id="question_type_id_1" 
                                name="question_type" 
                                class="form-control custom-select question_type_id">
                            <option value="1">Single Answer</option>
                            <option value="2">Multiple Answer</option>
                            <option value="3">True or False</option>
                            <option value="4">Essay</option>
                            <option value="5">Fill in the Blank - Exact Answer</option>
                        </select>
                    </div>
    
                    <div class="form-group">
                        <label class="form-label">Header Soal</label>
                        <div style="height: 150px;" id="question_header_1">
                            
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label class="form-label">Soal</label>
                        <!-- <textarea class="form-control" rows="3" placeholder="Question"></textarea> -->
                        <textarea id="question_content_1" name="question_content"></textarea>
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

                        <div class="form-group">
                            <label class="form-label"
                            for="">Poin</label>
                            <input data-toggle="touch-spin"
                                data-min="0"
                                data-max="100"
                                data-step="1"
                                type="text"
                                value="20"
                                class="form-control score_1" />
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

        </div>

        <div class="col-lg-4">

            <div class="page-separator">
                <div class="page-separator__text">Navigasi</div>
            </div>

            <div class="card">
                <div class="card-header text-center">
                    <button type="button" class="btn btn-primary btn-rounded saveBtn2" style="width: 150px"><i class="batch-icon-stiffy icon--left"></i>Simpan</button>
                </div>
                <div class="list-group list-group-flush">                                        
                    <div class="list-group-item">
                        <a class="cursor_pointer text-danger cancelBtn"><strong>Batal</strong></a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header text-center">
                    <button type="button" class="btn btn-rounded btn-outline-light addQuestion" style="width: 150px">Tambah Soal</button>
                </div>
                <div class="list-group list-group-flush question_nav">    

                    <div class="list-group-item cursor_pointer bg-warning-light">
                        <div class="d-flex align-items-center selectQuestionBtn" id="selectQuestionBtn_1">
                            <div class="flex">
                                <span class="card-title">Soal 1</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        
    </div>


</div>