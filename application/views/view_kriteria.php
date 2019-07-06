</div>
<div class="table-responsive">
<div class="btn header-btn pull-right">
<a href="<?php echo site_url('kriteria/input'); ?>">
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
				ID KRITERIA
			</th>
			<th>
				NAMA KRITERIA
			</th>
			<th>
				ATRIBUT
			</th>
			<th>
				BOBOT
			</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
		<?php
		$sum = 0;
		foreach ($kriteria as $kr) {?>	
			<tr>
				<td>
					<?php echo $kr['id_k']; ?>
				</td>
				<td>
					<?php echo $kr['nm_k']; ?>
				</td>
				<td>
					<?php if ($kr['atribut'] == '1') echo "BENEFIT"; else echo "COST"; ?>
				</td>
				<td>
					<?php echo $kr['bobot']; ?>
				</td>
				<td align="center" class="col-md-1">
					<a href="<?php echo base_url('kriteria/edit/'.$kr['id_k']); ?>">
						<button type="button" class="btn btn-default">
							Ubah
  						<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</button>
					</a>
				</td>
				<td align="center" class="col-md-1">
					<a href="<?php echo base_url('kriteria/delete/'.$kr['id_k']); ?>" onclick="return confirm('Hapus Data Kriteria?');">
						<button type="button" class="btn btn-danger">
							Hapus
						<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						</button>
					</a>
				</td>
			</tr><?php
		} ?>
</table>
</div>
</div>
