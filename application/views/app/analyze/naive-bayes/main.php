<script src="<?= base_url('dist/js/naive-bayes.js') ?>"></script>

<div class="pt-32pt">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Naive Bayes</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="<?= site_url('') ?>">Home</a></li>
                    <li class="breadcrumb-item active">Naive Bayes</li>

                </ol>

            </div>
        </div>

        <div class="row"
                role="tablist">
            <div class="col-auto">
                
            </div>
        </div>

    </div>
</div>

<!-- BEFORE Page Content -->

<!-- // END BEFORE Page Content -->

<!-- Page Content -->

<div class="container page__container page__container page-section">

    <div class="card card-form d-flex flex-column flex-sm-row mb-lg-32pt">
        <div class="card-form__body card-body-form-group flex execution_panel">
            <div class="row">
                <div class="col-sm-auto">
                    <div class="form-group">
                        <label class="mt-2" for="filter_name">Filter:</label>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="form-group">
                        <input id="start_number" class="form-control" placeholder="Start Number" />
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="form-group">
                        <input id="end_number" class="form-control" placeholder="End Number" />
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="form-group">
                        <label class="mt-2">[max 5000 rows per execute]</label>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn bg-alt border-left border-top border-top-sm-0 rounded-0 executeBtn"><i class="material-icons text-primary icon-20pt">refresh</i></button>
    </div>

    <div class="row mb-32pt">
        <div class="col-lg-12 d-flex align-items-center">
            <div class="flex"
                    style="max-width: 100%">

                <div class="card dashboard-area-tabs p-relative o-hidden mb-0">
                    <div class="card-header p-0 nav">
                        <div class="row no-gutters"
                                role="tablist">
                            <div class="col-auto">
                                <a href="#tab_1"
                                    data-toggle="tab"
                                    role="tab"
                                    aria-selected="true"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                                    <span class="h2 mb-0 mr-3">1</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Test</strong>
                                        <small class="card-subtitle text-50">Label & Score</small>
                                    </span>
                                </a>
                            </div>
                            <div class="col-auto border-left border-right">
                                <a href="#tab_2"
                                    data-toggle="tab"
                                    role="tab"
                                    aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3">2</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Data</strong>
                                        <small class="card-subtitle text-50">Stemming</small>
                                    </span>
                                </a>
                            </div>
                            <div class="col-auto border-left border-right">
                                <a href="#tab_3"
                                    data-toggle="tab"
                                    role="tab"
                                    aria-selected="false"
                                    class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                    <span class="h2 mb-0 mr-3">3</span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="card-title">Analyze</strong>
                                        <small class="card-subtitle text-50">Naive Bayes</small>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body tab-content table-classification">
                        
                        <?php 
                            $this->load->view('app/analyze/naive-bayes/data'); 
                        ?>

                    </div>
                </div>

            </div>
        </div>
    </div>
    

</div>

<!-- // END Page Content -->