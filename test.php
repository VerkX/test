<?php
    $data = [
        0 => ['nim' => 1001, 'nama' => 'Andi'],
        1 => ['nim' => 1002, 'nama' => 'Budi'],
        2 => ['nim' => 1003, 'nama' => 'Cani'],
        3 => ['nim' => 1004, 'nama' => 'Dani'],
        4 => ['nim' => 1005, 'nama' => 'Endi'],
        5 => ['nim' => 1006, 'nama' => 'Fadi'],
        6 => ['nim' => 1007, 'nama' => 'Gani'],
        7 => ['nim' => 1008, 'nama' => 'Hani'],
        8 => ['nim' => 1009, 'nama' => 'Jali'],
        9 => ['nim' => 1010, 'nama' => 'Keni'],
        10 => ['nim' => 1011, 'nama' => 'Lani'],
    ];
    

        $arr = [4,3,4];
        $result_arr = [];

        $randKelompok=rand(3,4);

        foreach($arr as $k => $v){
            $result_arr[$k] = array_splice($data,0,$randKelompok);
        }
        print_R($result_arr);

    






?>