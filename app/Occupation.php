<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    protected $fillable = [
        'code',
        'occupation',
    ];

    public static function selectlist()
    {
        $occupations = Occupation::all();
        $list = array();
        $list += array( "" => "選択してください" );
        foreach ($occupations as $occupation) {
            $list += array($occupation->occupations => $occupation->occupations);
        }
        
        return $list;
    }
}
