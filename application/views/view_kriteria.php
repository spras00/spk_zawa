<div class="btn header-btn">
	<a href="<?php echo site_url('kriteria/input'); ?>">
		<button type="button" class="btn btn-default" action="">
		<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
		Tambah Data
		</button>
	</a>
</div>	
</div>
<table align="center" class="table table-condensed">
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
			<th>
				EDIT
			</th>
			<th>
				HAPUS
			</th>
		</tr>
	</thead>
		<?php
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
				<td>
					<a href="<?php echo base_url('kriteria/edit/'.$kr['id_k']); ?>">
						<button type="button" class="btn btn-default">
  						<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</button>
					</a>
				</td>
				<td>
					<a href="<?php echo base_url('kriteria/delete/'.$kr['id_k']); ?>">
						<button type="button" class="btn btn-danger">
						<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						</button>
					</a>
				</td>
			</tr> <?php
		} ?>
</table>
</div>
