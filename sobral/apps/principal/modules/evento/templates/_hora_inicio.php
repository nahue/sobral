<?php 
    use_helper('DateForm');
    echo select_time_tag("evento[hora_inicio]", $hora_inicio, array('include_second' => false, '12hour_time' => true), ($hora_asociada == 0)? array('disabled' => true):array());
?>