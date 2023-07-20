<?php 

$fetchInternDetails = $this->db->query("SELECT * FROM interns WHERE interns_id='{$_SESSION['internName']}'");

$row = $fetchInternDetails->row();

if(isset($row))
{
	echo $row->intern_name;
}


?>