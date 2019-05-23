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
				TAMBAH NILAI CRIPS
			</th>
			<th>
				LIHAT NILAI CRIPS
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
					<a href="<?php echo base_url('crips/input/'.$kr['id_k']); ?>">
						<button type="button" class="btn btn-default" action="">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
						Tambah Data
						</button>
					</a>
				</td>
				<td>
					<a href="<?php echo base_url('crips/detail/'.$kr['id_k']); ?>">
						<button type="button" class="btn btn-default">
  						<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
						</button>
					</a>
				</td>
			</tr> <?php
		} ?>
</table>
</div>
