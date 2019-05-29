<?php 
    

    function option_crips( $id_k, $selected = ''){

    $CI =& get_instance();    
    $rows = $CI->Model_Crips->crips_kriteria($id_k);
    
    $a = '';
    foreach($rows as $row){
        if($selected==$row->id_cp)
            $a.="<option value='$row->id_cp' selected>$row->nm_cp</option>";
        else
            $a.= "<option value='$row->id_cp'>$row->nm_cp</option>";
    }
    return $a;
    }

?>