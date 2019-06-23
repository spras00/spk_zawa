</div>
<?=print_error()?>
<?php echo form_open('rumah/edit/'.$rumah['id_a']);?>
<div class="form-horizontal">
			<div class="form-group">
				<label for="id_alternatif" class="control-label col-sm-4">ID RUMAH</label>
				<div class="col-xs-4">
				<input type="text" class="form-control" name="id_a" value="<?php echo $rumah['id_a']?>" readonly>
				</div>
			</div>
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
				<input type="text" class="form-control" name="fasilitas" value="<?php echo $rumah['fasilitas']?>">
			</div>
			</div>
			<div class="form-group"> 
    					<div class="col-sm-offset-4 col-sm-4">
      					<button type="submit" class="btn btn-success btn-block">Simpan</button>
      					<button type="reset" onclick="location.href='<?php echo base_url();?>Rumah'" class="btn btn-danger btn-block">Batal</button>
  						</div>
  			</div>
	</div>