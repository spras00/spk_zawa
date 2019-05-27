</div>
<?php if (validation_errors()){
    echo ' <div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times</button><b>You\'ve made some errors! Please check them below: <br><br></b>' ;
    echo validation_errors();
    echo '</div>';                                 
}
?>
<?php echo form_open('rumah/edit/'.$rumah['id_a']);?>
<div class="form-horizontal">
			<div class="form-group">
				<label for="nm_alternatif" class="control-label col-sm-4">NAMA RUMAH</label>
				<div class="col-xs-4">
				<input type="text" class="form-control" name="nm_a" value="<?php echo $rumah['nm_a']?>">
				</div>
			</div>
			<div class="form-group">
				<label for="lokasi" class="control-label col-sm-4">LOKASI</label>
				<div class="col-xs-4">
				<input type="text" class="form-control" name="lokasi" value="<?php echo $rumah['lokasi']?>">
				</div>
			</div>
			<div class="form-group">
				<label for="harga" class="control-label col-sm-4">HARGA (Rp) </label>
				<div class="col-xs-4">
				<input type="text" class="form-control" name="harga" value="<?php echo $rumah['harga']?>">
				</div>

			</div>
			<div class="form-group">
				<label for="luas" class="control-label col-sm-4">LUAS</label>
				<div class="col-xs-4">
				<input type="text" class="form-control" name="luas" value="<?php echo $rumah['luas']?>">
				</div>
			</div>
			<div class="form-group">
				<label for="tipe" class="control-label col-sm-4">TIPE</label>
				<div class="col-xs-4">
				<input type="text" class="form-control" name="tipe" value="<?php echo $rumah['tipe']?>">
				</div>
			</div>
			<div class="form-group">
				<label for="fasilitas" class="control-label col-sm-4">FASILITAS</label>
				<div class="col-xs-4">
				<select class="form-control" name="fasilitas">
					<option value="">	Pilih Fasiltias	</option>
					<option value="Un Furnish">Un Furnish</option>
					<option value="Semi Furnish">Semi Furnish</option>
					<option value="Full Furnish">Full Furnish</option>
				</select>
				</div>
			</div>
			<div class="form-group"> 
    					<div class="col-sm-offset-4 col-sm-4">
      					<button type="submit" class="btn btn-success btn-block">Simpan</button>
  						</div>
  			</div>
	</div>