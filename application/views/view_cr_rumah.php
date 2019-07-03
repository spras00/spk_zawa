</div>	
  <?php           
            $relasi = array();
            if(empty($relasi)){echo "" ;}
            foreach ($rows as $row) {                
                $alternatif[$row->id_a] = $row->nm_a;
                $relasi[$row->id_a][$row->id_k] = $row->nm_cp;                
        }             
        ?>
<table align="center" class="table table-hover">
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
                <td><?=$value?></td>
                <?php foreach ($relasi[$key] as $val):?>
                    <td><?=$val?></td>
                <?php endforeach ?>
                <td align="center" class="col-md-1">
                    <a class="btn btn-xs btn-info" href="<?=site_url("cr_rumah/input/$key")?>">Ubah</a>
                </td>
            </tr>
            <?php endforeach?>
<div class="btn header-btn pull-right">
<button type="button" id="next" class="btn btn-default" onclick="c_null()">
Perhitungan SAW
</button>
</div>
</table>
</div>
<script>
    function c_null() {
    var a = <?php echo json_encode($relasi); ?>;
    var go = "<?php echo site_url('hitung'); ?>";

        for(var i in a){
            if(a.hasOwnProperty(i)){
                for(var j in a[i]){
                    if(a[i].hasOwnProperty(j)){
                        if (a[i][j] == null) {
                            alert("Nilai "+(j)+" pada "+(i)+" tidak boleh kosong.");
                                            }
                                        }
                                    }
                                }//else return false;
                            }
                            if (a[i][j] != null){
                                if (confirm("Lanjutkan ke perhitungan?"))
                                window.location.href = go;
                            }
                        }
</script>