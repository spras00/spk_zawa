</div>	
  <?php           
            $relasi = array(); 
            foreach ($rows as $row) {                
                $alternatif[$row->id_a] = $row->nm_a;
                $relasi[$row->id_a][$row->id_k] = $row->nm_cp;                
            }                                
        ?>
<table align="center" class="table table-condensed">
	  <thead><tr>
                <th>Kode</th>
                <th>Nama</th>
                <?php 
                $first = array_values($relasi);
                foreach ($first[0] as $key => $val):?>
                    <th><?=$key?></th>
                <?php endforeach ?>
                <th></th>
            </tr></thead>    
            <?php foreach ($alternatif as $key => $value):?>
            <tr>
                <td><?=$key?></td>
                <td><?=$value?></td>
                <?php foreach ($relasi[$key] as $val):?>
                    <td><?=$val?></td>
                <?php endforeach ?>
                <td>
                    <a class="btn btn-xs btn-warning" href="<?=site_url("cr_rumah/input/$key")?>">Ubah</a>
                </td>
            </tr>
            <?php endforeach?>
</table>
</div>
