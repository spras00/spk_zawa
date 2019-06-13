<table class="table table-collapse">
    <tr><thead>
        <th>#</th>
        <?php foreach($kriteria as $key => $val):?>
        <th><?=$key?></th>
        <?php endforeach?>
        <th>Total</th>
        <th>Rank</th>
    </thead></tr>  
    <tr>
        <td>Bobot Kriteria</td>
        <?php foreach($kriteria as $key => $val):?>
        <td><?=$kriteria[$key]->bobot?></td>
        <?php endforeach?>
        <th></th>
        <th></th>
    </tr>  
    <?php foreach($rank as $key => $val):?>
    <tr>
        <td><?=$key?></td>
        <?php foreach($hasil[$key] as $k => $v):?>
        <td><?=round($v, 4)?></td>
        <?php endforeach?>  
        <th><?=round($total[$key], 4)?></th>
        <th><?=$rank[$key]?></th>
    </tr>
    <?php endforeach?> 
</table>
