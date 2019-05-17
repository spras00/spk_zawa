<table align="center" class="table table-condensed">
	<thead>
		<tr>
			<th>
				ID CRIPS
			</th>
			<th>
				NAMA HIMPUNAN
			</th>
			<th>
				ID KRITERIA
			</th>
			<th>
				SKOR
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
		foreach ($crips as $crp) {?>
			<tr>
				<td>
					<?php echo $crp['id_cp']; ?>
				</td>
				<td>
					<?php echo $crp['nm_cp']; ?>
				</td>
				<td>
					<?php echo $crp['id_k']; ?>
				</td>
				<td>
					<?php echo $crp['skor']; ?>
				</td>
				<td>
					<a href="<?php echo base_url('crips/edit/'.$crp['id_cp']); ?>">
						<button type="button" class="btn btn-default">
  						<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</button>
					</a>
				</td>
				<td>
					<a href="<?php echo base_url('crips/delete/'.$crp['id_cp']); ?>">
						<button type="button" class="btn btn-danger">
						<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						</button>
					</a>
				</td>
			</tr> <?php
		} ?>
</table>
</div>