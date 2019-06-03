</div>
 <?php           
            foreach ($rows as $row) {                
                $kriteria[$row->id_k] = $row->nm_k;             
            }                                
        ?>
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
				LIHAT NILAI CRIPS
			</th>
		</tr>
	</thead>
		<?php 
		foreach ($kriteria as $key => $value):?>
			<tr>
				<td>
					<?=$key?>
				</td>
				<td>
					<?=$value?>
				</td>
				<td>
					<a href="<?=site_url("crips/detail/$key"); ?>">
						<button type="button" class="btn btn-default">
  						<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
						</button>
					</a>
				</td>
			</tr>
			<?php endforeach ?>
</table>
</div>
