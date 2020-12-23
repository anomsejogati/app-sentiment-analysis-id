<div id="tab_1" class="tab-pane active text-70">

    <form id="testForm">
        <div class="form-group">
            <label>Input Text</label>
            <textarea id="input_text" class="form-control"></textarea>
        </div>
        <div class="form-group text-right">
            <button type="button" class="btn btn-outline-primary btn-rounded mr-2 generateBtn" style="width: 125px"><i class="batch-icon-stiffy icon--left"></i>Generate</button>
        </div>        
    </form>

    <h5>Hasil</h5>
    <div class="generate_panel mb-5">

    </div>

</div>

<div id="tab_2" class="tab-pane text-70">
    
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
                        <label class="mt-2"></label>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn bg-alt border-left border-top border-top-sm-0 rounded-0 executeBtn"><i class="material-icons text-primary icon-20pt">refresh</i></button>
    </div>

    <table class="table mb-0 thead-border-top-0">
        <thead>
            <tr>
                <th style="width: 50px;">
                    No
                </th>

                <th>
                    <a style="width: 120px;"
                        class="sort"
                        data-sort="js-list-date">Name</a>
                </th>

                <th>
                    Comment
                </th>
                <th>
                    Stemming
                </th>
            </tr>
        </thead>
        <tbody class="list"
                id="stemming">
                
            <?php 
                $no = $start;
                foreach($data['data'] as $row):
            ?>

            <tr>
                <td class="pr-0">
                    <?= $no++; ?>
                </td>
                <td>
                    <strong class="js-lists-values-employee-name"><?= $row['name'] ?></strong></p>
                    <small class="js-lists-values-employee-email text-50"><?= $row['time'] ?></small>                            
                </td>
                <td>
                    <?= $row['cleansing'] ?>
                </td>
                <td>
                    <?= $row['stemming'] ?>
                </td>
            </tr>


            <?php endforeach; ?>

        </tbody>
    </table>

</div>

<div class="card-footer">            
    <?= $pagination; ?>
</div>