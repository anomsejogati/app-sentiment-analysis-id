            <div class="mdk-drawer js-mdk-drawer layout-compact__drawer"
                 id="default-drawer">
                <div class="mdk-drawer__content "
                     data-responsive-width="992px"
                     data-layout="compact">

                    <div class="sidebar sidebar-mini sidebar-dark-pickled-bluewood sidebar-left d-flex flex-column">

                        <!-- Brand -->
                        <a href="<?= site_url(''); ?>"
                           class="sidebar-brand p-0 navbar-height d-flex justify-content-center">

                            <span class="avatar avatar-sm ">

                                <span class="avatar-title rounded"><img src="<?= base_url() ?>assets/sekolah/20190001/logo/20190001.png"
                                         class="rounded-circle"
                                         alt="logo" 
                                         width="60"/></span>

                            </span>

                        </a>

                        <div class="flex d-flex flex-column justify-content-start"
                             data-perfect-scrollbar>
                            <ul class="nav flex-shrink-0 flex-nowrap flex-column sidebar-menu mb-0 sm-item-bordered"
                                role="tablist">                                

                                <li class="sidebar-menu-item  <?php if($menu == 'students')echo 'active'; ?> "
                                    data-title="Siswa">
                                    <a class="sidebar-menu-button"
                                    href="<?= site_url('siswa') ?>"
                                       aria-selected="false">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">people</i>
                                        <span class="sidebar-menu-text">Siswa</span>
                                    </a>
                                </li>

                                <li class="sidebar-menu-item  <?php if($menu == 'questions')echo 'active'; ?> "
                                    data-title="Soal">
                                    <a class="sidebar-menu-button"
                                    href="<?= site_url('soal') ?>"
                                       aria-selected="false">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">chrome_reader_mode</i>
                                        <span class="sidebar-menu-text">Soal</span>
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <ul class="nav flex-column sidebar-menu align-items-center mb-12pt "
                            role="tablist">
                            <li class="sidebar-account"
                                style="width: 40px;">
                                <a class="p-4pt d-flex align-items-center justify-content-center" 
                                    data-partial-height="44" 
                                    data-toggle="popover" 
                                    data-trigger="click">
                                    <img width="32"
                                         height="32"
                                         class="rounded-circle"
                                         src="<?= base_url() ?>assets/public/images/avatar/avatar5.jpg"
                                         alt="account" />
                                </a>
                            </li>
                        </ul>

                    </div>

                    <div class="sidebar sidebar-light sidebar-left flex sidebar-secondary pt-16pt"
                         data-perfect-scrollbar>

                        <div class="tab-content">

                            <div class="tab-pane"
                                 id="sm_account_1">
                                <div class="sidebar-heading">Account</div>
                                <ul class="sidebar-menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="edit-account.html">
                                            <span class="sidebar-menu-text">Edit Account</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="billing.html">Billing</a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="billing-history.html">Payments</a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="login.html">Logout</a>
                                    </li>
                                </ul>
                            </div>                        
                            
                        </div>
                    </div>

                </div>
            </div>