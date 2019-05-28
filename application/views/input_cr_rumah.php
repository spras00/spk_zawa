<?php if (validation_errors()){
    echo ' <div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times</button><b>You\'ve made some errors! Please check them below: <br><br></b>' ;
    echo validation_errors();
    echo '</div>';                                 
}
?>
<?php echo form_open('cr_rumah/input/'.$rows[0]->id_a );?>
<div class="form-horizontal">
		 <?php foreach($rows as $row): ?>                    
            <div class="form-group">
                <label><?=$row->nm_k?> <span class="text-danger">*</span></label>
                <select class="form-control" name="id_cp[<?=$row->ID?>]">
                    <option></option>
                    <?=get_crips_option( $row->id_k, set_value("id_cp[$row->ID]", $row->id_cp))?>
                </select>
            </div>
            <?php endforeach?>		
			<div class="form-group"> 
    					<div class="col-sm-offset-4 col-sm-4">
      					<button type="submit" class="btn btn-success btn-block">Simpan</button>
      					<button type="reset" onclick="location.href='<?php echo base_url();?>cr_rumah'" class="btn btn-danger btn-block">Batal</button>
  						</div>
  			</div>
</div>
<?php echo form_close();?>