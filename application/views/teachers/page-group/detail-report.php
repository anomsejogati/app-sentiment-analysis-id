<div class="row mb-lg-8pt">

    <div class="col-lg-6">

        <div class="card">
            <div class="card-header d-flex align-items-center">
                <div class="h2 mb-0 mr-3">86</div>
                <div class="flex">
                    <p class="card-title">UTS 1</p>
                    <p class="card-subtitle text-50">Nilai Tertinggi</p>
                </div>
                <div class="dropdown">
                    <a href="#"
                        class="btn btn-sm btn-outline-secondary dropdown-toggle"
                        data-toggle="dropdown">Nilai Tertinggi</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href=""
                            class="dropdown-item">Nilai Tertinggi</a>
                        <a href=""
                            class="dropdown-item">Nilai Terendah</a>
                    </div>
                </div>
            </div>
            <div class="card-body p-24pt">
                <div class="chart"
                        style="height: 344px;">
                    <canvas id="topicIqChart"
                            class="chart-canvas js-update-chart-line"
                            data-chart-hide-axes="true"
                            data-chart-points="true"
                            data-chart-suffix=" points"
                            data-chart-line-border-color="primary"></canvas>
                </div>
            </div>
        </div>

    </div>

    <div class="col-lg-6">

        <div class="card">
            <div class="card-header d-flex align-items-center border-0">
                <div class="h2 mb-0 mr-3">8.42</div>
                <div class="flex">
                    <p class="card-title">UTS + UAS</p>
                    <p class="card-subtitle text-50">Rata-rata nilai UTS dan UAS</p>
                </div>
                <i class="material-icons text-muted ml-2">trending_up</i>
            </div>
            <div class="card-body pt-0">
                <div class="chart"
                        style="height: 128px;">
                    <canvas id="iqChart"
                            class="chart-canvas js-update-chart-line"
                            data-chart-hide-axes="false"
                            data-chart-points="true"
                            data-chart-suffix="pt"
                            data-chart-line-border-color="primary"></canvas>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex align-items-center border-0">
                <div class="h2 mb-0 mr-3">8.82</div>
                <div class="flex">
                    <p class="card-title">Latihan</p>
                    <p class="card-subtitle text-50">Rata-rata nilai latihan</p>
                </div>
                <i class="material-icons text-muted ml-2">trending_up</i>
            </div>
            <div class="card-body pt-0">
                <div class="chart"
                        style="height: 128px;">
                    <canvas id="iqChart1"
                            class="chart-canvas js-update-chart-line"
                            data-chart-hide-axes="false"
                            data-chart-points="true"
                            data-chart-suffix="pt"
                            data-chart-line-border-color="primary"></canvas>
                </div>
            </div>
        </div>

    </div>

    <div class="col-lg-12">

        <div class="page-separator">
            <div class="page-separator__text">Kompetensi</div>
        </div>

        <table class="table mb-0 table-nowrap">
            <tbody class="list">
                
                <tr>
                    <td class="pr-0" style="width: 100px;">
                        Pengetahuan
                    </td>
                    <td>
                        <div class="form-group">
                            <textarea name="" id="" class="form-control"></textarea>
                        </div>
                    </td>                    
                </tr>

                <tr>
                    <td class="pr-0" style="width: 100px;">
                        Keterampilan
                    </td>
                    <td>
                        <div class="form-group">
                            <textarea name="" id="" class="form-control"></textarea>
                        </div>
                    </td>                    
                </tr>

                <tr>
                    <td class="pr-0" style="width: 100px;">
                        Sikap Spiritual dan Sosial
                    </td>
                    <td>
                        <div class="form-group">
                            <textarea name="" id="" class="form-control"></textarea>
                        </div>
                    </td>                    
                </tr>

                <tr>
                    <td class="pr-0" style="width: 100px;">
                        
                    </td>
                    <td class="text-right">
                        <button type="button" class="btn btn-outline-primary btn-rounded mr-2 saveCompetenceBtn" style="width: 125px"><i class="batch-icon-stiffy icon--left"></i>Simpan</button>
                        <button type="button" class="btn btn-outline-accent btn-rounded cancelCompetenceBtn" style="width: 125px"><i class="batch-icon-delete icon--left"></i>Batal</button>
                    </td>        
                </tr>

                
            </tbody>
        </table>

    </div>

</div>