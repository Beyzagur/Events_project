<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class EventImport implements ToModel
{
    public function model(array $row){
        return new User([
            'category'=>$row[1],
            'name'=>$row[2],
            'date'=>$row[3],
            'time'=>$row[4],
            'city'=>$row[5],
            'place'=>$row[6],
        ]);
    }
}
