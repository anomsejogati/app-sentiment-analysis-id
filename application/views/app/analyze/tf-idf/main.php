<script src="<?= base_url('dist/js/tf-idf.js') ?>"></script>

<div class="pt-32pt">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">TF-IDF</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="<?= site_url('') ?>">Home</a></li>
                    <li class="breadcrumb-item active">TF-IDF</li>
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
                                        <small class="card-subtitle text-50">TF-IDF</small>
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
                                        <strong class="card-title">Result</strong>
                                        <small class="card-subtitle text-50">TF-IDF</small>
                                    </span>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card-body tab-content table-result">
                        
                        <?php 
                            $this->load->view('app/analyze/tf-idf/result'); 
                        ?>

                    </div>
                </div>

            </div>
        </div>
    </div>
    

</div>

<!-- // END Page Content -->