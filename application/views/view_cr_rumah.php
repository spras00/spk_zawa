</div>	
  <?php           
            $relasi = array();
            if(empty($relasi)){echo "" ;}
            foreach ($rows as $row) {                
                $alternatif[$row->id_a] = $row->nm_a;
                $relasi[$row->id_a][$row->id_k] = $row->nm_cp;                
        }             
        ?>
<table align="center" class="table table-hover table-striped">
	  <thead><tr>
                <th>ID Rumah</th>
                <th>Nama Rumah</th>
                <?php
                $first = array_values($relasi);
                if(empty($first)){echo "" ;}
                else
                foreach ($first[0] as $key => $val):?>
                    <th><?=$key?></th>
                <?php endforeach?>
                <th></th>
            </tr></thead>    
            <?php 
                if(empty($first)){echo "" ;}
                else
            foreach ($alternatif as $key => $value):?>
            <tr>
                <td><?=$key?></td>
                <td id="mycell"><?=$value?></td>
                <?php foreach ($relasi[$key] as $val):?>
                    <td><?=$val?></td>
                <?php endforeach ?>
                <td align="center" class="col-md-1">
                    <a class="btn btn-xs btn-info" href="<?=site_url("cr_rumah/input/$key")?>">Ubah</a>
                </td>
            </tr>
            <?php endforeach?>
<div class="btn header-btn pull-right">
<a href="<?php echo site_url('hitung'); ?>">
<button type="button" class="btn btn-default" onclick="return confirm('Pastikan semua alternatif sudah diberi nilai ! Lanjutkan Ke Perhitungan ?');">
Perhitungan SAW
</button>
</a>
</div>
</table>
</div>