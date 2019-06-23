</div>
 <?php           
			$relasi = array();
			$skor = array();  
            foreach ($rows as $row) {                
                $crips[$row->id_cp] = $row->nm_cp;
                $relasi[$row->id_cp][$row->id_k] = $row->id_k;
                $skor[$row->id_cp][$row->id_k] = $row->skor;
            }                                
        ?>
<div class="btn header-btn pull-left">
<a href="<?php echo site_url('crips/input/'.$row->id_k); ?>">
<button type="button" class="btn btn-default ">
<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
Tambah Data
</button>
</a>
</div>
<div class="btn header-btn pull-right">
<button type="button" onclick="location.href='<?php echo base_url();?>crips'" class="btn btn-default ">
<span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span>
Kembali
</button>
</a>
</div>
<table align="center" class="table table-hover">
	<thead>
		<tr>
			<th>
				ID CRIPS
			</th>
			<th>
				NAMA CRIPS
			</th>
			<th>
				ID KRITERIA
			</th>
			<th>
				SKOR
			</th>
			<th>
				
			</th>
			<th>
				
			</th>
		</tr>
	</thead>
		<?php 
		foreach ($crips as $key => $value):?>
			<tr>
				<td>
					<?=$key?>
				</td>
				<td>
					<?=$value?>
				</td>
				 <?php foreach ($relasi[$key] as $val):?>
                 <td><?=$val?></td>
                <?php endforeach ?>
				</td>
				 <?php foreach ($skor[$key] as $valu):?>
                 <td><?=$valu?></td>
                <?php endforeach ?>
				<td align="center" class="col-md-1">
					<a href="<?=site_url("crips/edit/$key"); ?>">
						<button type="button" class="btn btn-default">
							Ubah
  						<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</button>
					</a>
				</td>
				<td align="center" class="col-md-1">	
					<a href="<?=site_url("crips/delete/$key"); ?>"  onclick="return confirm('Hapus Data Crips?');">
						<button type="button" class="btn btn-danger">
							Hapus
						<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						</button>
					</a>
				</td>
			</tr>
		<?php endforeach ?>
</table>
</div>
