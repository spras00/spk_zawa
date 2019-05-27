</div>
<div class="btn header-btn pull-right">
<a href="<?php echo site_url('rumah/input'); ?>">
<button type="button" class="btn btn-default ">
<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
Tambah Data
</button>
</a>
</div>	
<table align="center" class="table table-condensed">
	<thead>
		<tr>
			<th>
				NAMA RUMAH
			</th>
			<th>
				LOKASI
			</th>
			<th>
				HARGA (Rp)
			</th>
			<th>
				LUAS TANAH
			</th>
			<th>
				TIPE KAMAR TIDUR
			</th>
			<th>
				FASILITAS
			</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
		<?php
		foreach ($rumah as $rm) {?>
			<tr>
				<td>
					<?php echo $rm['nm_a']; ?>
				</td>
				<td>
					<?php echo $rm['lokasi']; ?>
				</td>
				<td>
					<?php echo number_format($rm['harga'], 0, ".","."); ?>
				</td>
				<td>
					<?php echo $rm['luas']; ?>
				</td>
				<td>
					<?php echo $rm['tipe']; ?>
				</td>
				<td>
					<?php echo $rm['fasilitas']; ?>
				</td>
				<td>
					<a href="<?php echo base_url('rumah/edit/'.$rm['id_a']); ?>">
						<button type="button" class="btn btn-default">
							Edit
  						<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</button>
					</a>
				</td>
				<td>
					<a href="<?php echo base_url('rumah/delete/'.$rm['id_a']); ?>">
						<button type="button" class="btn btn-danger">
							Hapus
						<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						</button>
					</a>
				</td>
			</tr> <?php
		} ?>
</table>
</div>