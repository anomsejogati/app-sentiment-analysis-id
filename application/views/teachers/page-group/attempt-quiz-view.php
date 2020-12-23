<!-- <script src="<?= base_url('assets/public/js/ckeditor-4.14-full/ckeditor.js'); ?>"></script> -->
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


<script src="<?= base_url('dist/js/teachers/attempt-quiz.js') ?>"></script>
<!-- Page Content -->
<div class="container mt-2 mb-2">
    <ol class="breadcrumb p-0 m-0">
        <li class="breadcrumb-item"><a href="<?= site_url('') ?>">Home</a></li>
        <li class="breadcrumb-item"><a>Grup</a></li>
        <li class="breadcrumb-item"><a href="<?= site_url('grup/bahasa-inggris/x-ipa-1') ?>">Bahasa Inggris - X IPA 1</a></li>
        <li class="breadcrumb-item"><a href="<?= site_url('grup/bahasa-inggris/#kuis') ?>">Kuis</a></li>
        <li class="breadcrumb-item active">Post Test 1</li>
    </ol>
</div>
<div class="navbar navbar-light border-0 navbar-expand mb-3">                
    <div class="container page__container">
        <div class="media flex-nowrap">
            <div class="media-left mr-16pt">
                <a href="<?= site_url('grup/bahasa-inggris/x-ipa-1/post-test-1/'.$students['nisn']) ?>"><img src="<?= base_url() ?>assets/public/images/menu/section_quiz.png"
                            width="40"
                            alt=""
                            class="rounded"></a>
            </div>
            <div class="media-body">
                <a href="<?= site_url('grup/bahasa-inggris/x-ipa-1/tugas/1') ?>"
                    class="card-title text-body mb-0">Post Test 1</a>
                <p class="lh-1 d-flex align-items-center mb-0">
                    <span class="text-50 small">Halaman ini digunakan untuk mengoreksi kuis dan memberikan nilai</span>
                </p>
            </div>
        </div>
        <div class="row"
            role="tablist">
            <div class="col-auto">
                <a onclick="window.history.go(-1); return false;" class="btn btn-outline-secondary"><i class="material-icons mr-2">reply</i> Kembali</a>
            </div>
        </div>
    </div>
</div>

<div class="border-bottom-2 py-16pt navbar-light bg-white border-bottom-2">
    <div class="container page__container">
        <div class="row align-items-center">
            <div class="d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0">
                <div class="avatar avatar-lg mr-8pt">
                    <img src="<?= base_url() ?>assets/public/images/avatar/<?= $students['picture'] ?>"
                        class="avatar-img rounded-circle">
                </div>
                <div class="flex">
                    <div class="card-title mb-4pt"><?= $students['student_name'] ?></div>
                    <p class="card-subtitle text-70"><?= $students['nisn'] ?></p>
                </div>
            </div>
            <div class="d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0">
                <div class="avatar avatar-lg mr-8pt">
                    <img src="<?= base_url() ?>assets/public/images/menu/fast-time.png"
                        class="avatar-img rounded-circle">
                </div>
                <div class="flex">
                    <div class="card-title mb-4pt">Waktu Pengerjaan</div>
                    <p class="card-subtitle text-70">24 Sep 2020 10:30:26</p>
                </div>
            </div>
            <div class="d-flex col-md align-items-center">
                <div class="avatar avatar-md mr-8pt">
                    <img src="<?= base_url() ?>assets/public/images/menu/resume.png"
                        class="avatar-img">
                </div>
                <div class="flex">
                    <div class="card-title mb-4pt fs-2x">86</div>
                    <p class="card-subtitle text-70">
                        <a class="mr-3 text-success"><i class="material-icons">done</i> <span class="correct_answer">6</span></a>
                        <a class="mr-3 text-accent"><i class="material-icons">clear</i> <span class="wrong_answer">3</span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-section border-bottom-2">
    <div class="container page__container">

        <div class="row">
            <div class="col-lg-3 mt-1">
                <div class="page-separator">
                    <div class="page-separator__text">Navigasi Soal</div>
                </div>
                <a class="btn icon-holder icon-holder--small icon-holder--success rounded-circle d-inline-flex icon--left mb-2 numberBtn">
                    1
                </a>
                <a class="btn icon-holder icon-holder--small icon-holder--danger rounded-circle d-inline-flex icon--left mb-2 numberBtn">
                    2
                </a>
                <a class="btn icon-holder icon-holder--small icon-holder--success rounded-circle d-inline-flex icon--left mb-2 numberBtn">
                    3
                </a>
                <a class="btn icon-holder icon-holder--small icon-holder--success rounded-circle d-inline-flex icon--left mb-2 numberBtn">
                    4
                </a>
                <a class="btn icon-holder icon-holder--small icon-holder--success rounded-circle d-inline-flex icon--left mb-2 numberBtn">
                    5
                </a>
                <a class="btn icon-holder icon-holder--small icon-holder--danger rounded-circle d-inline-flex icon--left mb-2 numberBtn">
                    6
                </a>
                <a class="btn icon-holder icon-holder--small icon-holder--danger rounded-circle d-inline-flex icon--left mb-2 numberBtn">
                    7
                </a>
                <a class="btn icon-holder icon-holder--small icon-holder--success rounded-circle d-inline-flex icon--left mb-2 numberBtn">
                    8
                </a>
                <a class="btn icon-holder icon-holder--small icon-holder--success rounded-circle d-inline-flex icon--left mb-2 numberBtn">
                    9
                </a>
                <a class="btn icon-holder icon-holder--small icon-holder--warning rounded-circle d-inline-flex icon--left mb-2 numberBtn">
                    10
                </a>
                
            </div>

            <div class="col-lg-9">
                <div class="d-flex align-items-center">
                    <div class="flex">
                        <div class="page-separator">
                            <div class="page-separator__text question_no">No. 1</div>
                        </div>
                    </div>
                    <a class="cursor_pointer btn btn-rounded btn-light ml-3 mr-2 mb-3 prevBtn"><i class="fa fa-angle-left"></i></a>
                    <a class="cursor_pointer btn btn-rounded btn-light mb-3 nextBtn"><i class="fa fa-angle-right"></i></a>
                </div>
                

                <div class="question_panel question_no_1">
                    <div class="card-group-row__col col-md-12">
                        <div class="card card-group-row__card card-sm">                    
                            <div class="card-body d-flex align-items-center">
                                <div class="flex">                                                    
                                    <p class="text-70 measure-lead fs14">Are you ..... to a new school with your brother?</p>

                                    <ul class="list-quiz">
                                        <li class="list-quiz-item">
                                            <span class="list-quiz-badge">A</span>
                                            <span class="list-quiz-text">go</span>
                                        </li>
                                        <li class="list-quiz-item active">
                                            <span class="list-quiz-badge bg-primary text-white"><i class="material-icons">check</i></span>
                                            <span class="list-quiz-text">going</span>
                                        </li>
                                        <li class="list-quiz-item">
                                            <span class="list-quiz-badge">C</span>
                                            <span class="list-quiz-text">went</span>
                                        </li>
                                        <li class="list-quiz-item">
                                            <span class="list-quiz-badge">D</span>
                                            <span class="list-quiz-text">goes</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>

                <div class="question_panel question_no_2" style="display: none;">
                    <div class="card-group-row__col col-md-12">
                        <div class="card card-group-row__card card-sm">
                            <div class="card-body d-flex align-items-center">
                                <div class="flex">                                                    
                                    <p class="text-70 measure-lead fs14">What are you doing? I am ..... for my Go-Jek Driver.</p>

                                    <ul class="list-quiz">
                                        <li class="list-quiz-item active">
                                            <span class="list-quiz-badge bg-primary text-white"><i class="material-icons">check</i></span>
                                            <span class="list-quiz-text">waiting</span>
                                        </li>
                                        <li class="list-quiz-item">
                                            <span class="list-quiz-badge">B</span>
                                            <span class="list-quiz-text">singing</span>
                                        </li>
                                        
                                        <li class="list-quiz-item text-accent strong">
                                            <span class="list-quiz-badge bg-accent text-white">C</span>
                                            <span class="list-quiz-text">sleeping</span>
                                        </li>
                                        <li class="list-quiz-item">
                                            <span class="list-quiz-badge">D</span>
                                            <span class="list-quiz-text">staying</span>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>

                <div class="question_panel question_no_3" style="display: none;">
                    <div class="card-group-row__col col-md-12">
                        <div class="card card-group-row__card card-sm">
                            <div class="card-body d-flex align-items-center">
                                <div class="flex">                                                    
                                    <p class="text-70 measure-lead fs14">
                                        <table>
                                            <tr>
                                                <td>John</td>
                                                <td>: Hi.. My name is John. What is your name?</td>
                                            </tr>
                                            <tr>
                                                <td>Mc Kennedy</td>
                                                <td>: __________</td>
                                            </tr>
                                        </table>                        
                                    </p>

                                    <ul class="list-quiz">
                                        <li class="list-quiz-item">
                                            <span class="list-quiz-badge">A</span>
                                            <span class="list-quiz-text">Hi.. My name is Mc</span>
                                        </li>
                                        <li class="list-quiz-item active">
                                            <span class="list-quiz-badge bg-primary text-white"><i class="material-icons">check</i></span>
                                            <span class="list-quiz-text">Hi.. My name is Mc Kennedy</span>
                                        </li>
                                        
                                        <li class="list-quiz-item active">
                                            <span class="list-quiz-badge bg-primary text-white"><i class="material-icons">check</i></span>
                                            <span class="list-quiz-text">Hi.. My name is Mc Kennedy but you can call me Edy</span>
                                        </li>
                                        <li class="list-quiz-item">
                                            <span class="list-quiz-badge">D</span>
                                            <span class="list-quiz-text">Hi.. My name is Edy</span>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>

                <div class="question_panel question_no_4" style="display: none;">
                    <div class="card-group-row__col col-md-12">
                        <div class="card card-group-row__card card-sm">
                            <div class="card-body d-flex align-items-center">
                                <div class="flex">                                                    
                                    <p class="text-70 measure-lead fs14">
                                        Read this following dialog and choose the correct answer!                        
                                        <table>
                                            <tr>
                                                <td>Nami</td>
                                                <td>:  Hello, Sanji.</td>
                                            </tr>
                                            <tr>
                                                <td>Sanji</td>
                                                <td>:  Hi, Nami. Nice to see you.</td>
                                            </tr>
                                            <tr>
                                                <td>Nami</td>
                                                <td>: Nice to see you, too. How are you?</td>
                                            </tr>
                                            <tr>
                                                <td>Sanji</td>
                                                <td>:  Fine, thank you. And you?</td>
                                            </tr>
                                            <tr>
                                                <td>Nami</td>
                                                <td>:  I am very well, thanks.</td>
                                            </tr>
                                            <tr>
                                                <td>Sanji</td>
                                                <td>:  May I introduce my friends? This is Luffy, Zoro and Robin.</td>
                                            </tr>
                                            <tr>
                                                <td>Nami</td>
                                                <td>:  How do you do everybody? Glad to meet you.</td>
                                            </tr>
                                            <tr>
                                                <td>Luffy</td>
                                                <td>:  How do you do Nami? Glad to meet you, too.</td>
                                            </tr>
                                            <tr>
                                                <td>Nami</td>
                                                <td>:  Are you all students?</td>
                                            </tr>
                                            <tr>
                                                <td>Zoro</td>
                                                <td>:  Yes, we are.</td>
                                            </tr>
                                            <tr>
                                                <td>Nami</td>
                                                <td>:  I am sorry, friends. I have to go now.</td>
                                            </tr>
                                            <tr>
                                                <td>Robin</td>
                                                <td>:  Okay! Goodbye, Nami.</td>
                                            </tr>
                                            <tr>
                                                <td>Nami</td>
                                                <td>:  Good bye, everybody. See you next time.</td>
                                            </tr>
                                        </table>
                                        "May I introduce my friends?" <br>
                                        The expressions above to express....                    
                                    </p>

                                    <ul class="list-quiz">
                                        <li class="list-quiz-item">
                                            <span class="list-quiz-badge">A</span>
                                            <span class="list-quiz-text">an introduction myself</span>
                                        </li>
                                        <li class="list-quiz-item active">
                                            <span class="list-quiz-badge bg-primary text-white"><i class="material-icons">check</i></span>
                                            <span class="list-quiz-text">an introduction people</span>
                                        </li>
                                        
                                        <li class="list-quiz-item">
                                            <span class="list-quiz-badge">C</span>
                                            <span class="list-quiz-text">a greeting</span>
                                        </li>
                                        <li class="list-quiz-item">
                                            <span class="list-quiz-badge">D</span>
                                            <span class="list-quiz-text">a parting</span>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>

                <div class="question_panel question_no_5" style="display: none;">
                    <div class="card-group-row__col col-md-12">
                        <div class="card card-group-row__card card-sm">
                            <div class="card-body d-flex align-items-center">
                                <div class="flex">                                                    
                                    <p class="text-70 measure-lead fs14">
                                    "How do you do, everybody?"<br>
                                    Everybody means ....
                                    </p>

                                    <ul class="list-quiz">
                                        <li class="list-quiz-item">
                                            <span class="list-quiz-badge">A</span>
                                            <span class="list-quiz-text">Nami</span>
                                        </li>                        
                                        <li class="list-quiz-item">
                                            <span class="list-quiz-badge">B</span>
                                            <span class="list-quiz-text">Robin</span>
                                        </li>
                                        <li class="list-quiz-item">
                                            <span class="list-quiz-badge">C</span>
                                            <span class="list-quiz-text">Sanji, Luffy, Zoro, and Robin</span>
                                        </li>
                                        <li class="list-quiz-item active">
                                            <span class="list-quiz-badge bg-primary text-white"><i class="material-icons">check</i></span>
                                            <span class="list-quiz-text">Luffy, Zoro, and Robin</span>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>

                <div class="question_panel question_no_6" style="display: none;">
                    <div class="card-group-row__col col-md-12">
                        <div class="card card-group-row__card card-sm">
                            <div class="card-body d-flex align-items-center">
                                <div class="flex">                                                    
                                    <p class="text-70 measure-lead fs14">
                                        If someone asks you "how do you do?", what do you answer to that expression?
                                    </p>

                                    <ul class="list-quiz">
                                        <li class="list-quiz-item">
                                            <span class="list-quiz-badge">A</span>
                                            <span class="list-quiz-text">How are you?</span>
                                        </li>                      
                                        <li class="list-quiz-item active">
                                            <span class="list-quiz-badge bg-primary text-white"><i class="material-icons">check</i></span>
                                            <span class="list-quiz-text">How do you do?</span>
                                        </li>  
                                        <li class="list-quiz-item">
                                            <span class="list-quiz-badge">C</span>
                                            <span class="list-quiz-text">What is your name?</span>
                                        </li>
                                        <li class="list-quiz-item text-accent strong">
                                            <span class="list-quiz-badge bg-accent text-white">D</span>
                                            <span class="list-quiz-text">You're welcome</span>
                                        </li>
                                        
                                    </ul>
                                    
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>

                <div class="question_panel question_no_7" style="display: none;">
                    <div class="card-group-row__col col-md-12">
                        <div class="card card-group-row__card card-sm">
                            <div class="card-body d-flex align-items-center">
                                <div class="flex">                                                    
                                    <p class="text-70 measure-lead fs14">
                                        <table>
                                            <tr>
                                                <td>Joko</td>
                                                <td>: Sri, ...</td>
                                            </tr>
                                            <tr>
                                                <td>Sri</td>
                                                <td>:  I am delighted to meet you.</td>
                                            </tr>
                                            <tr>
                                                <td>Santo</td>
                                                <td>:  I am delighted to meet you, too.</td>
                                            </tr>
                                        </table>                    
                                    </p>

                                    <ul class="list-quiz">
                                        <li class="list-quiz-item">
                                            <span class="list-quiz-badge bg-accent text-white">A</span>
                                            <span class="list-quiz-text text-accent strong">Santo is my friend</span>
                                        </li>                      
                                        <li class="list-quiz-item active">
                                            <span class="list-quiz-badge bg-primary text-white"><i class="material-icons">check</i></span>
                                            <span class="list-quiz-text">I would like you to meet my friend, Santo.</span>
                                        </li>  
                                        <li class="list-quiz-item">
                                            <span class="list-quiz-badge">C</span>
                                            <span class="list-quiz-text">Please introduce yourself</span>
                                        </li>
                                        <li class="list-quiz-item">
                                            <span class="list-quiz-badge">D</span>
                                            <span class="list-quiz-text">Don't you know Santo is my friend</span>
                                        </li>
                                        
                                    </ul>
                                    
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>

                <div class="question_panel question_no_8" style="display: none;">
                    <div class="card-group-row__col col-md-12">
                        <div class="card card-group-row__card card-sm">
                            <div class="card-body d-flex align-items-center">
                                <div class="flex">                                                    
                                    <p class="text-70 measure-lead fs14">
                                        <table>
                                            <tr>
                                                <td>Irma</td>
                                                <td>: Excuse me, __________ (8) Cahyo?</td>
                                            </tr>
                                        </table>                        
                                    </p>

                                    <ul class="list-quiz">
                                        <li class="list-quiz-item active">
                                            <span class="list-quiz-badge bg-primary text-white"><i class="material-icons">check</i></span>
                                            <span class="list-quiz-text">Are you</span>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>

                <div class="question_panel question_no_9" style="display: none;">
                    <div class="card-group-row__col col-md-12">
                        <div class="card card-group-row__card card-sm">
                            <div class="card-body d-flex align-items-center">
                                <div class="flex">                                                    
                                    <p class="text-70 measure-lead fs14">
                                        <table>
                                            <tr>
                                                <td>Cahyo</td>
                                                <td>:  Yes, __________ (9)</td>
                                            </tr>
                                        </table>                        
                                    </p>

                                    <ul class="list-quiz">                     
                                        <li class="list-quiz-item active">
                                            <span class="list-quiz-badge bg-primary text-white"><i class="material-icons">check</i></span>
                                            <span class="list-quiz-text">that's right</span>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>

                <div class="question_panel question_no_10" style="display: none;">
                    <div class="card-group-row__col col-md-12">
                        <div class="card card-group-row__card card-sm">
                            <div class="card-body d-flex align-items-center">
                                <div class="flex">                                                    
                                    <p class="text-70 measure-lead fs14">
                                        Have a book borrowing conversation at the library!
                                    </p>

                                    <strong>Jawaban:</strong>
                                    <p>
                                        A: What can I do for you?<br>
                                        B: I am trying to find this book.<br>
                                        A: What's the problem?<br>
                                        B: It doesn't seem like this library has it.<br>
                                        A: Have you checked the computer?<br>
                                        B: I have already.<br>
                                        A: What did it say?<br>
                                        B: It says the book is on the shelf, but I didn't find it there.<br>
                                        A: I can always borrow the book from another library.<br>
                                        B: You can do that?<br>
                                        A: I'll make the call and contact you when it gets in.<br>
                                        B: That's fantastic. Thank you.
                                    </p>

                                    <div class="form-group">                                        
                                        <div style="height: 150px;" 
                                            class="description" 
                                            data-toggle="quill"
                                            data-quill-placeholder="Tambahkan komentar disini ..."
                                            data-quill-modules-toolbar='[["bold", "italic"], ["link", "blockquote", "code"], [{"list": "ordered"}, {"list": "bullet"}]]'>                                    
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label"
                                        for="">Poin</label>
                                        <input data-toggle="touch-spin"
                                            data-min="0"
                                            data-max="30"
                                            data-step="1"
                                            type="text"
                                            value="20"
                                            class="form-control score" />
                                    </div>

                                    <div class="form-group text-right">
                                        <a class="btn btn-rounded btn-success-dark mb-16pt mb-sm-0 ml-sm-16pt saveScoreBtn" style="width: 120px;"><i class="batch-icon-stiffy icon--left"></i>Simpan</a>                                        
                                    </div>
                                    
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>


<!-- // END Page Content -->