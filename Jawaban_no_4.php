<?php
function findSame($data)
{
	foreach ($data as $key => $value) {
		
		for ($i=0; $i <strlen($data[0]) ; $i++) 
		{ 
			$n_index[$i]=substr($data[0], $i,1);
		}
		foreach ($n_index as $key_index => $value_index) 
		{
			//echo "<>".$value_index;
			$posisi=strpos($value,$value_index);
			if($posisi!=false)
			{
				
				$new_data[]=$value;
			}
		}
	}
	$final_data=array_unique($new_data);
	//sort($final_data);
	//bubble_sort($final_data);
	return $final_data;
	/*foreach ($data as $key => $isi ) {
		$posisi=strpos($kalimat,$isi);
		$p_kalimat=strlen($kalimat);
		if ($posisi!== FALSE && $posisi==0)
		{
		  	$kalimat=substr($kalimat, strlen($isi),strlen($kalimat)-1);
			$a++;
		}
		else {
		  //echo "Tidak ketemu";
		}	
	}*/
	//return $a;
}


$data=array("cat", "listen", "code", "act", "silent", "tac");
print_r(findSame($data));
//print_r(bubble_sort());
?>