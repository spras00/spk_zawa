<?php if (validation_errors()){
    echo ' <div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times</button><b>You\'ve made some errors! Please check them below: <br><br></b>' ;
    echo validation_errors();
    echo '</div>';                                 
}
?>
<?php echo form_open('crips/input');?>
<div class="form-horizontal">
			<div class="form-group">
				<label for="id_k" class="control-label col-sm-4">NAMA KRITERIA</label>
				<div class="col-xs-4">
				<select class="form-control" name="id_k">
					<option value="">	Pilih Kriteria 	</option>
					<?php foreach ($kriteria as $k) {
						echo '<option value="'.$k->id_k.'">'.$k->id_k.' - '.$k->nm_k.'</option>';
					}?>
				</select>
				</div>
			</div>
			<div class="form-group">
				<label for="id_cp" class="control-label col-sm-4">ID CRIPS</label>
				<div class="col-xs-4">
				<input type="text" class="form-control" name="id_cp" placeholder="ID Kriteria">
				</div>
			</div>
			<div class="form-group">
				<label for="nama_crips" class="control-label col-sm-4">NAMA CRIPS</label>
				<div class="col-xs-4">
				<input type="text" class="form-control" name="nm_cp" placeholder="Nama Kriteria">
				</div>
			</div>
			<div class="form-group">
				<label for="skor" class="control-label col-sm-4">SKOR</label>
				<div class="col-xs-4">
				<select class="form-control" name="skor">
					<option value="">	Pilih Skor 	</option>
					<option value="0">0</option>
					<option value="25">25</option>
					<option value="50">50</option>
					<option value="75">75</option>
					<option value="100">100</option>
				</select>
				</div>
			</div>
			<div class="form-group"> 
    					<div class="col-sm-offset-4 col-sm-4">
      					<button type="submit" class="btn btn-success btn-block">Simpan</button>
      					<button type="reset" onclick="location.href='<?php echo base_url();?>Crips'" class="btn btn-danger btn-block">Batal</button>
  						</div>
  			</div>
</div>
<?php echo form_close();?>