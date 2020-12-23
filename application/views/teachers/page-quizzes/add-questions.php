<form id="form-worksheet">
    <div class="page-separator">
        <div class="page-separator__text">Pilih Metode</div>
    </div>
    
    <div class="row card-group-row">

        <div class="col-sm-4 card-group-row__col">

            <div class="card input_method input_method_1 cursor_pointer js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card">

                <div class="card-body d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <div class="flex">
                            <div class="d-flex align-items-center">
                                <div class="rounded mr-12pt z-0 o-hidden">
                                    <div class="overlay">
                                        <img src="<?= base_url() ?>assets/public/images/menu/input_manual.png"
                                            width="40"
                                            height="40"                                                                 
                                            class="rounded">                                                            
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="card-title">Input Manual</div>
                                </div>
                            </div>
                        </div>

                        <a class="ml-4pt text-20 material-icons card-course__icon-favorite">check_circle_outline</a>

                    </div>

                </div>
            </div>

        </div>

        <div class="col-sm-4 card-group-row__col">

            <div class="card input_method input_method_2 cursor_pointer js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card">

                <div class="card-body d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <div class="flex">
                            <div class="d-flex align-items-center">
                                <div class="rounded mr-12pt z-0 o-hidden">
                                    <div class="overlay">
                                        <img src="<?= base_url() ?>assets/public/images/menu/input_worksheet_generator.png"
                                            width="40"
                                            height="40"                                                                 
                                            class="rounded">                                                            
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="card-title">Worksheet Generator</div>
                                </div>
                            </div>
                        </div>

                        <a class="ml-4pt text-20 material-icons card-course__icon-favorite">check_circle_outline</a>

                    </div>

                </div>
            </div>

        </div>

        <div class="col-sm-4 card-group-row__col">

            <div class="card input_method input_method_3 cursor_pointer js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card">

                <div class="card-body d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <div class="flex">
                            <div class="d-flex align-items-center">
                                <div class="rounded mr-12pt z-0 o-hidden">
                                    <div class="overlay">
                                        <img src="<?= base_url() ?>assets/public/images/menu/input_copy.png"
                                            width="40"
                                            height="40"                                                                 
                                            class="rounded">                                                            
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="card-title">Copy Soal</div>
                                </div>
                            </div>
                        </div>

                        <a class="ml-4pt text-20 material-icons card-course__icon-favorite">check_circle_outline</a>

                    </div>

                </div>
            </div>

        </div>

    </div>

    <?php 
        $this->load->view('teachers/page-quizzes/input-manual'); 
        $this->load->view('teachers/page-quizzes/input-worksheet-generator'); 
        $this->load->view('teachers/page-quizzes/input-copy'); 
    ?>


</form>