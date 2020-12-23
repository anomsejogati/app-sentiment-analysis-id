<div class="card stack">
    <div class="list-group list-group-flush">                            

        <div class="cursor_pointer list-group-item d-flex flex-column flex-sm-row align-items-sm-center px-12pt getStudentBtn">
            <div class="flex d-flex align-items-center mr-sm-16pt mb-8pt mb-sm-0">
                <a href="instructor-edit-quiz.html"
                    class="avatar overlay overlay--primary avatar-4by3 mr-12pt">
                    <img src="<?=base_url() ?>assets/public/images/paths/craft_200x168.png"
                            alt="Craft by inVision"
                            class="avatar-img rounded">
                    <span class="overlay__content"></span>
                </a>
                <div class="flex">
                    <a class="card-title mb-4pt">Post Test 1</a>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div class="flex text-center d-flex align-items-center mr-16pt">
                    <span class="text-50 text-headings text-uppercase mr-12pt">Mengerjakan</span>
                    <span class="badge badge-dark badge-notifications">32/32</span>
                </div>

                <a class="cursor_pointer nav_student"><i class="material-icons fs24">arrow_drop_down</i></a>
                <div class="dropdown ml-2">
                    <a href="#"
                    data-toggle="dropdown"
                    data-caret="false"
                    class="text-muted"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-left">                                                        
                        <a href="<?= site_url('ubah-kuis') ?>" class="cursor_pointer dropdown-item editQuiz">Ubah</a>
                        <a class="cursor_pointer dropdown-item text-danger deleteQuizBtn1">Hapus</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="student_panel card mb-lg-32pt" style="display: none;">
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
                            <th>Waktu Mengerjakan</th>
                            <th>Flag</th>
                            <th>Nilai</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="list" id="table_1">

                        <?php $no = 1; foreach($students as $row): ?>
                        <tr class="cursor_pointer student_id_<?= $row->student_id ?>" id="<?= $row->student_id ?>">
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
                            <td class="time">24 Sep 2020 10:30:26</td>
                            <td class="flag"></td>
                            <td class="score"></td>
                            <td>
                                <a class="text-primary" href="<?= site_url('grup/bahasa-inggris/x-ipa-1/kuis/post-test-1/'.$row->nisn); ?>"><i class="material-icons">camera_front</i></a>
                            </td>

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

        <div class="cursor_pointer list-group-item d-flex flex-column flex-sm-row align-items-sm-center px-12pt">
            <div class="flex d-flex align-items-center mr-sm-16pt mb-8pt mb-sm-0">
                <a href="instructor-edit-quiz.html"
                    class="avatar overlay overlay--primary avatar-4by3 mr-12pt">
                    <img src="<?=base_url() ?>assets/public/images/paths/craft_200x168.png"
                            alt="Craft by inVision"
                            class="avatar-img rounded">
                    <span class="overlay__content"></span>
                </a>
                <div class="flex">
                    <a class="card-title mb-4pt">Post Test 2</a>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div class="flex text-center d-flex align-items-center mr-16pt">
                    <span class="text-50 text-headings text-uppercase mr-12pt">Mengerjakan</span>
                    <span class="badge badge-accent badge-notifications">0/0</span>
                </div>
            
                <a class="cursor_pointer nav_student"><i class="material-icons fs24">arrow_drop_down</i></a>
                <div class="dropdown ml-2">
                    <a href="#"
                    data-toggle="dropdown"
                    data-caret="false"
                    class="text-muted"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-left">                                                        
                        <a href="<?= site_url('ubah-kuis') ?>" class="cursor_pointer dropdown-item editQuiz">Ubah</a>
                        <a class="cursor_pointer dropdown-item text-danger deleteQuizBtn">Hapus</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="cursor_pointer list-group-item d-flex flex-column flex-sm-row align-items-sm-center px-12pt">
            <div class="flex d-flex align-items-center mr-sm-16pt mb-8pt mb-sm-0">
                <a href="instructor-edit-quiz.html"
                    class="avatar overlay overlay--primary avatar-4by3 mr-12pt">
                    <img src="<?=base_url() ?>assets/public/images/paths/craft_200x168.png"
                            alt="Craft by inVision"
                            class="avatar-img rounded">
                    <span class="overlay__content"></span>
                </a>
                <div class="flex">
                    <a class="card-title mb-4pt">Post Test 3</a>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div class="flex text-center d-flex align-items-center mr-16pt">
                    <span class="text-50 text-headings text-uppercase mr-12pt">Mengerjakan</span>
                    <span class="badge badge-accent badge-notifications">0/0</span>
                </div>
            
                <a class="cursor_pointer nav_student"><i class="material-icons fs24">arrow_drop_down</i></a>
                <div class="dropdown ml-2">
                    <a href="#"
                    data-toggle="dropdown"
                    data-caret="false"
                    class="text-muted"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-left">                                                        
                        <a href="<?= site_url('ubah-kuis') ?>" class="cursor_pointer dropdown-item editQuiz">Ubah</a>
                        <a class="cursor_pointer dropdown-item text-danger deleteQuizBtn">Hapus</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="cursor_pointer list-group-item d-flex flex-column flex-sm-row align-items-sm-center px-12pt">
            <div class="flex d-flex align-items-center mr-sm-16pt mb-8pt mb-sm-0">
                <a href="instructor-edit-quiz.html"
                    class="avatar overlay overlay--primary avatar-4by3 mr-12pt">
                    <img src="<?=base_url() ?>assets/public/images/paths/craft_200x168.png"
                            alt="Craft by inVision"
                            class="avatar-img rounded">
                    <span class="overlay__content"></span>
                </a>
                <div class="flex">
                    <a class="card-title mb-4pt">UTS</a>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div class="flex text-center d-flex align-items-center mr-16pt">
                    <span class="text-50 text-headings text-uppercase mr-12pt">Mengerjakan</span>
                    <span class="badge badge-accent badge-notifications">0/0</span>
                </div>
            
                <a class="cursor_pointer nav_student"><i class="material-icons fs24">arrow_drop_down</i></a>
                <div class="dropdown ml-2">
                    <a href="#"
                    data-toggle="dropdown"
                    data-caret="false"
                    class="text-muted"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-left">                                                        
                        <a href="<?= site_url('ubah-kuis') ?>" class="cursor_pointer dropdown-item editQuiz">Ubah</a>
                        <a class="cursor_pointer dropdown-item text-danger deleteQuizBtn">Hapus</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

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