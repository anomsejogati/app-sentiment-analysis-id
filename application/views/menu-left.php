<div class="mdk-drawer js-mdk-drawer layout-compact__drawer"
        id="default-drawer">
    <div class="mdk-drawer__content js-sidebar-mini"
            data-responsive-width="992px"
            data-layout="compact">

        <div class="sidebar sidebar-mini sidebar-dark-pickled-bluewood sidebar-left d-flex flex-column">

            <!-- Brand -->
            <a href="<?= site_url(''); ?>"
                class="sidebar-brand p-0 navbar-height d-flex justify-content-center">

                <span class="avatar avatar-sm ">

                    <span class="avatar-title rounded"><img src="<?= base_url() ?>assets/public/images/025-webinar.png"
                                class="rounded"
                                alt="logo" 
                                width="60"/></span>

                </span>

            </a>

            <div class="flex d-flex flex-column justify-content-start"
                    data-perfect-scrollbar>
                <ul class="nav flex-shrink-0 flex-nowrap flex-column sidebar-menu mb-0 sm-item-bordered js-sidebar-mini-tabs"
                    role="tablist">
                    <li class="sidebar-menu-item active"
                        data-title="Student"
                        data-placement="right"
                        data-boundary="window">
                        <a class="sidebar-menu-button"
                            href="<?= site_url('') ?>"                            
                            aria-selected="true">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">home</i>
                            <span class="sidebar-menu-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item"
                        data-title="Apps"
                        data-placement="right"
                        data-container="body"
                        data-boundary="window">
                        <a class="sidebar-menu-button"
                            href="#sm_apps"
                            data-toggle="tab"
                            role="tab"
                            aria-controls="sm_apps">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">apps</i>
                            <span class="sidebar-menu-text">Apps</span>
                        </a>
                    </li>

                </ul>

            </div>

        </div>

        <div class="sidebar sidebar-light sidebar-left flex sidebar-secondary pt-16pt"
                data-perfect-scrollbar>

            <div class="tab-content">

                <div class="tab-pane "
                        id="sm_apps">
                    <div class="sidebar-heading">Apps</div>
                    <ul class="sidebar-menu">   
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                                href="<?= site_url('dataset') ?>">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">content_copy</span>
                                Dataset
                            </a>                            
                        </li>                                             
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                                href="<?= site_url('text-preprocessing') ?>">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">access_time</span>
                                Text Preprocessing
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                                href="<?= site_url('tf-idf') ?>">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">adjust</span>
                                TF-IDF
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button js-sidebar-collapse"
                                data-toggle="collapse"
                                href="#enterprise_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">donut_large</span>
                                Analyze
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent"
                                id="enterprise_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                        href="<?= site_url('naive-bayes') ?>">
                                        <span class="sidebar-menu-text">Naive Bayes</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                        href="<?= site_url('svm') ?>">
                                        <span class="sidebar-menu-text">SVM</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                        href="<?= site_url('knn') ?>">
                                        <span class="sidebar-menu-text">KNN</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
</div>