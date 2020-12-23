<div id="tab_1" class="tab-pane active text-70">

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
                    Case Folding
                </th>
            </tr>
        </thead>
        <tbody class="list"
                id="case_folding">
                
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
                    <?= $row['case_folding'] ?>
                </td>
                
            </tr>


            <?php endforeach; ?>

        </tbody>
    </table>

</div>

<div id="tab_2" class="tab-pane text-70">
    
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
                    Tokenization
                </th>
            </tr>
        </thead>
        <tbody class="list"
                id="tokenization">
                
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
                    <?= $row['tokenization'] ?>
                </td>
                
            </tr>


            <?php endforeach; ?>

        </tbody>
    </table>

</div>

<div id="tab_3" class="tab-pane text-70">
    
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
                    Filtering
                </th>
            </tr>
        </thead>
        <tbody class="list"
                id="filtering">
                
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
                    <?= $row['filtering'] ?>
                </td>
                
            </tr>


            <?php endforeach; ?>

        </tbody>
    </table>

</div>

<div id="tab_4" class="tab-pane text-70">
    
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
                    Stemming
                </th>
            </tr>
        </thead>
        <tbody class="list"
                id="filtering">
                
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
                    <?= $row['filtering'] ?>
                </td>
                
            </tr>


            <?php endforeach; ?>

        </tbody>
    </table>

</div>

<div class="card-footer">            
    <?= $pagination; ?>
</div>