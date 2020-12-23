<table class="table mb-0 thead-border-top-0">
    <thead>
        <tr>
            <th style="width: 50px;">
                No
            </th>

            <th>
                <a style="width: 120px;"
                    class="sort"
                    data-sort="js-list-date">Nama</a>
            </th>

            <th>
                Komentar
            </th>
        </tr>
    </thead>
    <tbody class="list"
            id="comments">
            
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
                <?= htmlspecialchars($row['comment']) ?>
            </td>
            
        </tr>


        <?php endforeach; ?>

    </tbody>
</table>
<div class="card-footer">            
    <?= $pagination; ?>
</div>