</div>
<div class="btn header-btn pull-left">
<a href="<?php echo site_url('crips/input'); ?>">
<button type="button" class="btn btn-default ">
<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
Tambah Data
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
				NAMA KRITERIA
			</th>
			<th>
				NAMA CRIPS
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
        foreach($rows as $row):?>
        <tr>
            <td><?=$row->id_cp ?></td>
            <td><?=$row->nm_k?></td>
            <td><?=$row->nm_cp?></td>
            <td><?=$row->skor?></td>
				<td align="center" class="col-md-1">
					<a href="<?=site_url("crips/edit/$row->id_cp"); ?>">
						<button type="button" class="btn btn-default">
							Ubah
  						<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</button>
					</a>
				</td>
				<td align="center" class="col-md-1">	
					<a href="<?=site_url("crips/delete/$row->id_cp"); ?>"  onclick="return confirm('Hapus Data Crips?');">
						<button type="button" class="btn btn-danger">
							Hapus
						<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						</button>
					</a>
				</td>
		</tr>
	<?php endforeach;?>
</table>
</div>
