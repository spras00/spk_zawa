<i><h1 align="center"><?php echo $title2; ?></h1></i>
<div class="panel panel-default">
<div class="btn header-btn pull-right">
<a href="<?php echo site_url('cr_rumah'); ?>">
<button type="button" id="next" class="btn btn-default" >
Kembali
</button>
</a>
</div>
    <div class="panel-heading"><h4>Hasil Analisa</h4></div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr><thead>
                <th>Alternatif</th>
                <?php foreach($kriteria as $key => $val):?>
                <th><?=$val->nm_k?></th>
                <?php endforeach?>
            </thead></tr>    
            <?php foreach($matriks as $key => $val):?>
            <tr>
                <td><?=$rumah[$key]->nm_a?></td>
                <?php foreach($val as $k => $v):?>
                <td><?=$crips[$v]->nm_cp?></td>
                <?php endforeach?>  
            </tr>
            <?php endforeach?>        
        </table>
    </div>
    <div class="panel-body"> </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr><thead>
                <th>Alternatif</th>
                <?php foreach($kriteria as $key => $val):?>
                <th><?=$key?></th>
                <?php endforeach?>                
            </thead></tr>    
            <?php foreach($matriks as $key => $val):?>
            <tr>
                <td><?=$key?></td>
                <?php foreach($val as $k => $v):?>
                <td><?=$crips[$v]->skor?></td>
                <?php endforeach?>  
            </tr>
            <?php endforeach?>        
        </table>
    </div>
    
</div>

<div class="panel panel-info">
    <div class="panel-heading"><h4>Normalisasi</h4></div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr><thead>
                <th>Alternatif</th>
                <?php foreach($kriteria as $key => $val):?>
                <th><?=$key?></th>
                <?php endforeach?>
            </thead></tr>  
            <?php foreach($normal as $key => $val):?>
            <tr>
                <td><?=$key?></td>
                <?php foreach($val as $k => $v):?>
                <td><?=round($v, 4)?></td>
                <?php endforeach?>  
            </tr>
            <?php endforeach?>  
        </table>
    </div>
</div>

<div class="panel panel-success">
    <div class="panel-heading"><h4>Perankingan</h4></div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr><thead>
                <th></th>
                <?php foreach($kriteria as $key => $val):?>
                <th><?=$key?></th>
                <?php endforeach?>
                <th>Total</th>
                <th>Rank</th>
            </thead></tr>  
            <tr>
                <th bgcolor="#fffdc4">Bobot Kriteria</th>
                <?php foreach($kriteria as $key => $val):?>
                <td bgcolor="#fffdc4"><?=$kriteria[$key]->bobot?></td>
                <?php endforeach?>
                <th></th>
                <th></th>
            </tr>  
            <?php foreach($hasil as $key => $val):?>
             <tr>
        <td><?=$key?></td>
        <?php foreach($hasil[$key] as $k => $v):?>
        <td><?=round($v, 4)?></td>
        <?php endforeach?>  
        <th><?=round($total[$key], 4)?></th>
        <th><?=$rank[$key]?></th>
    </tr>
            <?php endforeach?> 
        </table>
    </div>
        <div class="btn header-btn pull-right">
            <a class="btn btn-success" href="<?=site_url('hitung/cetak')?>" target="_blank"> Cetak Hasil</a>
        </div>
    </div>