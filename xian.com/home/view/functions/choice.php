<?php
function choice1($var)
{
	if ($var == "") {
		return false;
	}else{
		return "Holiday like '%$var%'";
	}

}

function choice2($var)
{
	
	if (strcmp($var, "150元以内")==0) {
		$choice2_sql = "Price<150";
	}elseif (strcmp($var, "150-199元")==0) {
		$choice2_sql = "Price>=150 and Price<200";
	}elseif (strcmp($var, "200-249元")==0) {
		$choice2_sql = "Price>=200 and Price<250";
	}elseif (strcmp($var, "250-399元")==0) {
		$choice2_sql = "Price>=250 and Price<400";
	}elseif (strcmp($var, "400-499元")==0) {
		$choice2_sql = "Price>=400 and Price<500";
	}elseif (strcmp($var, "500-599元")==0) {
		$choice2_sql = "Price>=500 and Price<600";
	}elseif (strcmp($var, "600-699元")==0) {
		$choice2_sql = "Price>=600 and Price<700";
	}elseif (strcmp($var, "700元以上")==0) {
		$choice2_sql = "Price>=700";
	}

	return @$choice2_sql;

}
function choice3($var)
{
	if ($var == "") {
		return false;
	}else{
		return "Major_flower like '%$var%'";
	}
}
?>