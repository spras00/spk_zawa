<?php if (validation_errors()){
    echo ' <div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times</button><b>You\'ve made some errors! Please check them below: <br><br></b>' ;
    echo validation_errors();
    echo '</div>';                                 
}
?>
<?php echo form_open('rumah/input');?>
<div class="form-horizontal">
			<div class="form-group">
				<label for="id_rumah" class="control-label col-sm-4">ID RUMAH</label>
				<div class="col-xs-4">
				<input type="text" class="form-control" name="id_a" placeholder="Nama Rumah">
				</div>
			</div>
			<div class="form-group">
				<label for="nm_alternatif" class="control-label col-sm-4">NAMA RUMAH</label>
				<div class="col-xs-4">
				<input type="text" class="form-control" name="nm_a" placeholder="Nama Rumah">
				</div>
			</div>
			<div class="form-group">
				<label for="lokasi" class="control-label col-sm-4">LOKASI</label>
				<div class="col-xs-4">
				<input type="text" class="form-control" name="lokasi" placeholder="Lokasi">
				</div>
			</div>
			<div class="form-group">
				<label for="harga" class="control-label col-sm-4">HARGA (Rp) </label>
				<div class="col-xs-4">
				<input type="text" class="form-control" name="harga" placeholder="Harga">
				</div>

			</div>
			<div class="form-group">
				<label for="luas" class="control-label col-sm-4">LUAS</label>
				<div class="col-xs-4">
				<input type="text" class="form-control" name="luas" placeholder="Luas">
				</div>
			</div>
			<div class="form-group">
				<label for="tipe" class="control-label col-sm-4">TIPE</label>
				<div class="col-xs-4">
				<input type="text" class="form-control" name="tipe" placeholder="Tipe Kamar Tidur">
				</div>
			</div>
			<div class="form-group">
				<label for="fasilitas" class="control-label col-sm-4">FASILITAS</label>
				<div class="col-xs-4">
				<input type="text" class="form-control" name="fasilitas" placeholder="Fasilitas">
				</div>
			</div>
			<div class="form-group"> 
    					<div class="col-sm-offset-4 col-sm-4">
      					<button type="submit" class="btn btn-success btn-block">Simpan</button>
      					<button type="reset" onclick="location.href='<?php echo base_url();?>Rumah'" class="btn btn-danger btn-block">Batal</button>
  						</div>
  			</div>
</div>
<?php echo form_close();?>