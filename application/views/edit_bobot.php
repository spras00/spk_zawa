</div>
<?=print_error()?>
<?php echo form_open('kriteria/edit_b');?>
<div class="form-horizontal">
		 <div class="col-md-offset-4 col-md-4">
		 <?php foreach($rows as $row): ?>              
            <div class="form-group">
              <div class="col-xs-4">
                <label class="control-label col-sm-4"><?=$row['id_k']?></label>
                <label class="control-label col-sm-4"><?=$row['nm_k']?></label>
              </div>
              <div>
                <input type="text" class="form-control" name="bobot[<?=$row['id_k']?>]" value="<?php echo $row['bobot']?>">
              </div>
            </div>
            <?php endforeach?>
            </div>		
			<div class="form-group"> 
    					<div class="col-sm-offset-4 col-sm-4">
      					<button type="submit" class="btn btn-success btn-block">Simpan</button>
      					<button type="reset" onclick="location.href='<?php echo base_url();?>kriteria'" class="btn btn-danger btn-block">Batal</button>
  						</div>

<?php echo form_close();?>
</div>