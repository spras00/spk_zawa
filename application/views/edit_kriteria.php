<?php if (validation_errors()){
    echo ' <div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times</button><b>You\'ve made some errors! Please check them below: <br><br></b>' ;
    echo validation_errors();
    echo '</div>';                                 
}
?>
<?php echo form_open('kriteria/edit/'.$kriteria['id_k']);?>
<div class="form-horizontal">
		<div class="form-group">
				<label for="id_k" class="control-label col-sm-4">NIM</label>
				<div class="col-xs-4">
				<input type="text" class="form-control" name="id_k" value="<?php echo $kriteria['id_k']?>" readonly>
				</div>
			</div>
			<div class="form-group">
				<label for="nama_kriteria" class="control-label col-sm-4">NAMA</label>
				<div class="col-xs-4">
				<input type="text" class="form-control" name="nm_k" value="<?php echo $kriteria['nm_k']?>">
				</div>
			</div>
			<div class="form-group">
				<label for="atribut" class="control-label col-sm-4">ATRIBUT</label>
				<div class="col-xs-2">
				<input type="radio" class="radio-inline" name="atribut" value="1" <?php if($kriteria['atribut'] == '1') echo 'checked';?>> BENEFIT </input>
			</div>
				<div class="col-xs-2">
				<input type="radio" class="radio-inline" name="atribut" value="0" <?php if($kriteria['atribut'] == '0') echo 'checked';?>> 
				COST </input>
			</div>
			</div>
			<div class="form-group">
				<label for="bobot" class="control-label col-sm-4">BOBOT</label>
				<div class="col-xs-4">
				<input type="text" class="form-control" name="bobot" value="<?php echo $kriteria['bobot']; ?>">
			</div>
			</div>
			<div class="form-group"> 
    					<div class="col-sm-offset-4 col-sm-4">
      					<button type="submit" class="btn btn-success btn-block">Simpan</button>
  						</div>
  			</div>
	</div>