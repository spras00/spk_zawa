<?php if (validation_errors()){
    echo ' <div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times</button><b>You\'ve made some errors! Please check them below: <br><br></b>' ;
    echo validation_errors();
    echo '</div>';                                 
}
?>
<?php echo form_open('kriteria/input');?>
<div class="form-horizontal">
			<div class="form-group">
				<label for="id_k" class="control-label col-sm-4">ID KRITERIA</label>
				<div class="col-xs-4">
				<input type="text" class="form-control" name="id_k" placeholder="ID Kriteria">
				</div>
			</div>
			<div class="form-group">
				<label for="nama_kriteria" class="control-label col-sm-4">NAMA KRITERIA</label>
				<div class="col-xs-4">
				<input type="text" class="form-control" name="nm_k" placeholder="Nama Kriteria">
				</div>
			</div>
			<div class="form-group">
				<label for="atribut" class="control-label col-sm-4">ATRIBUT</label>
			<div class="col-xs-2">
				<input type="radio" class="radio-inline" name="atribut" 
				value="1"> BENEFIT </input>
			</div>
			<div class="col-xs-2">
				<input type="radio" class="radio-inline" name="atribut" 
				value="0"> COST </input>
			</div>
			</div>
			<div class="form-group">
				<label for="bobot" class="control-label col-sm-4">BOBOT</label>
				<div class="col-xs-4">
				<input type="text" class="form-control" name="bobot" placeholder="BOBOT">
				</div>
			</div>
			<div class="form-group"> 
    					<div class="col-sm-offset-4 col-sm-4">
      					<button type="submit" class="btn btn-success btn-block">Simpan</button>
      					<button type="reset" onclick="location.href='<?php echo base_url();?>Kriteria'" class="btn btn-danger btn-block">Batal</button>
  						</div>
  			</div>
</div>
<?php echo form_close();?>