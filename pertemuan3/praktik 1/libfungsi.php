<?php
    
    function winRate($menang, $kalah){
        $total = $menang + $kalah;
        $wr = $menang / $total;

        return $wr;
    }

    function cekTier($wr){
        if($wr >= 0.7) {
            return 'mythic';
        } elseif ($wr >= 0.45){
            return 'Legend';
        } elseif ($wr >= 0.2){
            return 'Epic';
        } else {
            return 'Master';
        }
    }

    function predikat($wr){
        switch (cekTier($wr)){
            case 'Mythic':
                return 'Sangat Memuaskan';
                break;
            case 'Lagend':
                return 'Memuaskan';
                break;
            case 'Epic':
                return 'cukup';
                break;
            default:
                return 'Kurang';
                break;
        }
    }

?>