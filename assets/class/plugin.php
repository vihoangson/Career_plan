<?php

function get_db_cout_time(){
	$date1=date_create(date("Y-m-d h:n:s",time()));
	$date2=date_create("2015-12-31");
	$diff=date_diff($date1,$date2);
	return $diff;
}

function count_time(){
	$diff = get_db_cout_time();
	$days = $diff->days;
	$m = $diff->m;
	$d = $diff->d;
	$h = $diff->h;
	$m = $diff->m;
	$s = $diff->s;
	$html = "
	<center>
		<h1>".$days." Ngày</h1>
		<h3>".$m." Tháng ".$d." Ngày<br>".$h." Giờ ".$m." Phút ".$s." Giây </h3>
	</center>
	";
	return $html;
}
