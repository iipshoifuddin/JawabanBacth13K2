<?php

function randomize($data)
{
    if(!is_int($data))
    {
        return 0;
    }

    $data=abs($data);

    for($i=1; $i<=10; $i++)
    {
        if($i%2!==0)
        {
            $range_angka[]=$i;
        }  
    }

    $jumlah=0;
    for($j=0; $j<$data; $j++)
    {
        shuffle($range_angka);
        $angka=$range_angka[0];
        $deret[$j]=$angka;
        $jumlah=$jumlah+$angka;
    }
    
    echo "Array : [". implode($deret, ',')."]<br />";


    return $jumlah;

}

echo "sum :". randomize(6);

?>
