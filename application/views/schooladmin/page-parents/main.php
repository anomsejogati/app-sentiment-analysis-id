<div class="pt-32pt">
                    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                                <h2 class="mb-0">Data Orang Tua</h2>

                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="<?= site_url('') ?>">Home</a></li>

                                    <li class="breadcrumb-item active">

                                        Siswa: 

                                    </li>

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

                    <div class="card mb-0">

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

                                    <div class="ml-auto mb-2 mb-sm-0 custom-control-inline mr-0">
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
                                    </div>
                                </form>
                            </div>

                            <table class="table mb-0 thead-border-top-0 table-nowrap">
                                <thead>
                                    <tr>

                                        <th class="text-center">
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-employee-name">Nama Siswa</a>
                                        </th>

                                        <th class="text-center" 
                                            style="width: 200px;">
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-employer-name">No. HP</a>
                                        </th>

                                        <th class="text-center"
                                            style="width: 350px;">
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-projects">Alamat</a>
                                        </th>
                                        
                                        <th style="width: 50px;"
                                            class="pl-0"></th>
                                    </tr>
                                </thead>
                                <tbody class="list"
                                       id="staff">

                                    <tr class="selected">

                                        <td>

                                            <div class="media flex-nowrap align-items-center"
                                                 style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">

                                                    <img src="<?= base_url() ?>assets/public/images/people/110/guy-1.jpg"
                                                         alt="Avatar"
                                                         class="avatar-img rounded-circle">

                                                </div>
                                                <div class="media-body">

                                                    <div class="d-flex flex-column">
                                                        <p class="mb-0"><strong class="js-lists-values-employee-name">Prabowo Adi Nugroho</strong></p>
                                                        <small class="js-lists-values-employee-email text-50">adi.nugroho@appso.id</small>
                                                    </div>

                                                </div>
                                            </div>

                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center">
                                                081224561238
                                            </div>
                                        </td>

                                        <td class="js-lists-values-projects small">Jl. Nakula Sadewa No. 1</td>                                        
                                        
                                        <td class="text-right pl-0">
                                            <a href=""
                                               class="text-50"><i class="material-icons">more_vert</i></a>
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

                </div>

                <!-- // END Page Content -->