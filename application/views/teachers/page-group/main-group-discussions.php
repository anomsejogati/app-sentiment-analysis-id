<div class="flex"
    style="max-width: 100%">

    <div class="card m-0">

        <div class="table-responsive"
                data-toggle="lists"
                data-lists-sort-by="js-lists-values-discussion-name"
                data-lists-values='["js-lists-values-discussion-name", "js-lists-values-discussion-created", "js-lists-values-activity"]'>

            <div class="card-header">
                <div class="search-form">
                    <input type="text"
                            class="form-control search"
                            placeholder="Cari ...">
                    <button class="btn"
                            type="button"><i class="material-icons">search</i></button>
                </div>
            </div>

            <table class="table mb-0 thead-border-top-0 table-nowrap">
                <thead>
                    <tr>

                        <th style="width: 320px;">
                            <a href="javascript:void(0)"
                                class="sort"
                                data-sort="js-lists-values-discussion-name">Grup Diskusi</a>
                        </th>

                        <th style="width: 37px;">Jumlah Topik</th>

                        <th style="width: 120px;">
                            <a href="javascript:void(0)"
                                class="sort"
                                data-sort="js-lists-values-activity">Komentar</a>
                        </th>
                        <th>
                        
                        </th>
                    </tr>
                </thead>
                <tbody class="list"
                        id="search">

                    <tr>
                        <td>
                            <div class="d-flex flex-column">
                                <a href="<?= site_url('grup/bahasa-inggris/x-ipa-1/diskusi/diskusi-modul-1') ?>" class="mb-0 card-title"><strong class="js-lists-values-discussion-name">Diskusi Modul 1</strong></a>
                                <small class="js-lists-values-discussion-created text-50">dibuat pada: 15 Juli 2020, 09:12:32</small>
                            </div>
                        </td>
                        <td>
                            <a href=""
                                class="chip chip-outline-secondary">1</a>
                        </td>
                        <td class="text-50 js-lists-values-activity small">3</td> 
                        <td>
                            <a class="cursor_pointer text-primary mr-1 editGroupDiscussion"><i class="material-icons fs18">border_color</i></a>
                            <a class="cursor_pointer text-danger deleteGroupDiscussionBtn1"><i class="material-icons fs18">delete_forever</i></a>                            
                        </td>
                    </tr>

                    <tr>

                        <td>

                            <div class="d-flex flex-column">
                                <a href="<?= site_url('grup/bahasa-inggris/x-ipa-1/diskusi/diskusi-modul-2') ?>" class="mb-0 card-title"><strong class="js-lists-values-discussion-name">Diskusi Modul 2</strong></a>
                                <small class="js-lists-values-discussion-created text-50">dibuat pada: 15 Juli 2020, 09:12:32</small>
                            </div>

                        </td>

                        <td>

                            <a href=""
                                class="chip chip-outline-secondary">1</a>

                        </td>

                        <td class="text-50 js-lists-values-activity small">1</td> 
                        <td>
                            <a class="cursor_pointer text-primary mr-1 editGroupDiscussion"><i class="material-icons fs18">border_color</i></a>
                            <a class="cursor_pointer text-danger deleteGroupDiscussionBtn"><i class="material-icons fs18">delete_forever</i></a>
                        </td>                       
                    </tr>

                    <tr>

                        <td>

                            <div class="d-flex flex-column">
                                <a href="<?= site_url('grup/bahasa-inggris/x-ipa-1/diskusi/diskusi-modul-3') ?>" class="mb-0 card-title"><strong class="js-lists-values-discussion-name">Diskusi Modul 3</strong></a>
                                <small class="js-lists-values-discussion-created text-50">dibuat pada: 15 Juli 2020, 09:12:32</small>
                            </div>

                        </td>

                        <td>

                            <a href=""
                                class="chip chip-outline-secondary">1</a>

                        </td>

                        <td class="text-50 js-lists-values-activity small">5</td>  
                        <td>
                            <a class="cursor_pointer text-primary mr-1 editGroupDiscussion"><i class="material-icons fs18">border_color</i></a>
                            <a class="cursor_pointer text-danger deleteGroupDiscussionBtn"><i class="material-icons fs18">delete_forever</i></a>
                        </td>                      
                    </tr>

                    <tr>

                        <td>

                            <div class="d-flex flex-column">
                                <a href="<?= site_url('grup/bahasa-inggris/x-ipa-1/diskusi/diskusi-modul-4') ?>" class="mb-0 card-title"><strong class="js-lists-values-discussion-name">Diskusi Modul 4</strong></a>
                                <small class="js-lists-values-discussion-created text-50">dibuat pada: 15 Agustus 2020, 09:12:07</small>
                            </div>

                        </td>

                        <td>

                            <a href=""
                                class="chip chip-outline-secondary">2</a>

                        </td>

                        <td class="text-50 js-lists-values-activity small">2</td>  
                        <td>
                            <a class="cursor_pointer text-primary mr-1 editGroupDiscussion"><i class="material-icons fs18">border_color</i></a>
                            <a class="cursor_pointer text-danger deleteGroupDiscussionBtn"><i class="material-icons fs18">delete_forever</i></a>
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