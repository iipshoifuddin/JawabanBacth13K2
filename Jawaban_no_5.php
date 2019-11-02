<?php

function ganti_kata($kata, $vokal_awal, $vokal_ganti)
{
	//$kalimat=explode("", $kalimat);
	for($i=0; $i<strlen($kata); $i++)
	{
		$pecah_kata[$i]=substr($kata,$i,1);
	}

	for($j=0; $j<count($pecah_kata); $j++)
	{
		if($pecah_kata[$j]==$vokal_awal)
		{
			$pecah_kata[$j]=$vokal_ganti;
		}
	}
	$kata=implode("", $pecah_kata);
	return $kata;
}

echo ganti_kata("purwakarta","a","o");

?>