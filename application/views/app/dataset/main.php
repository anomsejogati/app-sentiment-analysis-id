<script src="<?= base_url('dist/js/dataset.js') ?>"></script>

<div class="pt-32pt">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Dataset</h2>
                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="<?= site_url('') ?>">Home</a></li>
                    <li class="breadcrumb-item active">Dataset</li>
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

    <div class="card">
        <div class="table-responsive"
                data-toggle="lists"
                data-lists-sort-by="js-lists-values-number"
                data-lists-values='["js-lists-values-employee-name", "js-lists-values-employer-name", "js-lists-values-projects", "js-lists-values-activity", "js-lists-values-earnings"]'>

            <div class="card-header">
                <form class="form-inline">                
                    <input type="text"
                        class="form-control search mb-2 mr-sm-2 mb-sm-0"
                        id="inlineFormFilterBy"
                        placeholder="Cari ...">

                    <select id="inlineFormRole"
                            class="custom-select mb-2 mr-sm-2 mb-sm-0">
                        <option value="">Semua</option>
                    </select>

                    <div class="ml-auto mb-2 mb-sm-0 custom-control-inline mr-0">
                        <a class="btn btn-rounded btn-sm btn-light reportDetailBtn">
                            <i class="material-icons fs18">arrow_drop_down</i>
                        </a>
                    </div>
                </form>
            </div>
            
            <div class="table-dataset">
                <?php $this->load->view('app/dataset/data'); ?>            
            </div>
                
        </div>

        
    </div>
    

</div>

<!-- // END Page Content -->