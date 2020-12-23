                    <div class="card mb-lg-32pt">
                        <div class="table-responsive"
                             data-toggle="lists"
                             data-lists-sort-by="js-lists-values-from"
                             data-lists-sort-desc="true"
                             data-lists-values='["js-lists-values-name", "js-lists-values-status", "js-lists-values-policy", "js-lists-values-reason", "js-lists-values-days", "js-lists-values-available", "js-lists-values-from", "js-lists-values-to"]'>

                            <table class="table mb-0 thead-border-top-0 table-nowrap">
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
                                        <th>Tugas</th>
                                        <th>Kuis</th>
                                        <th>Keaktifan</th>
                                        <th>NA</th>
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
                                        <td class="score_assignment"></td>
                                        <td class="score_quiz"></td>
                                        <td class="score_activity"></td>
                                        <td class="score_final"></td>
                                        <td>
                                            <button type="button" class="btn btn-rounded btn-sm btn-light reportDetailBtn">
                                                <i class="material-icons fs18">arrow_drop_down</i>
                                            </button>
                                        </td>

                                    </tr>

                                    <tr class="report_detail_<?= $row->student_id ?>" style="display: none;">
                                        <td></td>
                                        <td colspan='7'>
                                            <?php $this->load->view('teachers/page-group/detail-report'); ?>
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