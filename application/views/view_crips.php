</div>
 <?php           
            foreach ($rows as $row) {                
                $kriteria[$row->id_k] = $row->nm_k;             
            }                                
        ?>
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
			</th>
		</tr>
	</thead>
		<?php 
		foreach ($kriteria as $key => $value):?>
			<tr>
				<td class="col-md-4">
					<?=$key?>
				</td>
				<td class="col-md-4">
					<?=$value?>
				</td>
				<td align="center">
					<a href="<?=site_url("crips/detail/$key"); ?>">
						<button type="button" class="btn btn-default">
							Lihat Nilai
  						<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
						</button>
					</a>
				</td>
			</tr>
			<?php endforeach ?>
</table>
</div>
