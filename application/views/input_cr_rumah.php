<?php if (validation_errors()){
    echo ' <div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times</button><b>You\'ve made some errors! Please check them below: <br><br></b>' ;
    echo validation_errors();
    echo '</div>';                                 
}
?>
<?php echo form_open('cr_rumah/input/');?>
<div class="form-horizontal">
			<div class="form-group">
				<label for="alt" class="control-label col-sm-4">NAMA ALTERNATIF</label>
				<div class="col-xs-4">
				<select class="form-control" name="alt">
					<option value="">-- Pilih Alternatif Rumah --</option>
					<?php foreach ($alternatif as $a) {
						echo '<option value="'.$a->id_a.'">'.$a->nm_a.'</option>';
					}?>
				</select>
				</div>
			</div>
			<div class="form-group">
				<label for="harga" class="control-label col-sm-4">HARGA</label>
				<div class="col-xs-4">
				<select class="form-control" name="harga">
					<option value="">-- Pilih Range Harga --</option>
					<?php foreach ($harga as $h) {
						echo '<option value="'.$h->id_cp.'">'.$h->nm_cp.'</option>';
					}?>
				</select>
				</div>
			</div>
			<div class="form-group">
				<label for="lokasi" class="control-label col-sm-4">LOKASI</label>
				<div class="col-xs-4">
				<select class="form-control" name="lokasi">
					<option value="">-- Pilih Lokasi --</option>
					<?php foreach ($lokasi as $lok) {
						echo '<option value="'.$lok->id_cp.'">'.$lok->nm_cp.'</option>';
					}?>
				</select>
				</div>
			</div>
			<div class="form-group">
				<label for="luas" class="control-label col-sm-4">LUAS</label>
				<div class="col-xs-4">
				<select class="form-control" name="luas">
					<option value="">-- Pilih Luas --</option>
					<?php foreach ($luas as $l) {
						echo '<option value="'.$l->id_cp.'">'.$l->nm_cp.'</option>';
					}?>
				</select>
				</div>
			</div>
			<div class="form-group">
				<label for="tipe" class="control-label col-sm-4">TIPE</label>
				<div class="col-xs-4">
				<select class="form-control" name="tipe">
					<option value="">-- Pilih Tipe --</option>
					<?php foreach ($tipe as $t) {
						echo '<option value="'.$t->id_cp.'">'.$t->nm_cp.'</option>';
					}?>
				</select>
				</div>
			</div>
			<div class="form-group">
				<label for="fasilitas" class="control-label col-sm-4">FASILITAS</label>
				<div class="col-xs-4">
				<select class="form-control" name="fasilitas">
					<option value="">-- Pilih Fasilitas --</option>
					<?php foreach ($fasilitas as $f) {
						echo '<option value="'.$f->id_cp.'">'.$f->nm_cp.'</option>';
					}?>
				</select>
				</div>
			</div>
			<div class="form-group"> 
    					<div class="col-sm-offset-4 col-sm-4">
      					<button type="submit" class="btn btn-success btn-block">Simpan</button>
      					<button type="reset" onclick="location.href='<?php echo base_url();?>cr_rumah'" class="btn btn-danger btn-block">Batal</button>
  						</div>
  			</div>
</div>
<?php echo form_close();?>