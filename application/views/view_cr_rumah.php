</div>	
<table align="center" class="table table-condensed">
	<thead>
		 <tr> 
	    	<th rowspan='2'>Alternatif</th> 
		    <th colspan='5'>Kriteria</th> 
	  	</tr> 
		<tr>
			<th>
				C1
			</th>
			<th>
				C2
			</th>
			<th>
				C3
			</th>
			<th>
				C4
			</th>
			<th>
				C5
			</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
		<?php
		foreach ($cr_rumah as $crm) {?>
			<tr>
				<th><?php echo $crm['nm_a']; ?></th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<a href="<?php echo base_url('cr_rumah/input/'.$crm['id_a']); ?>">
						<button type="button" class="btn btn-default">
							Edit
  						<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</button>
					</a>
				</td>
			</tr> <?php
		} ?>
</table>
</div>
