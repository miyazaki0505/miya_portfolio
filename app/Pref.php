<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pref extends Model
{
    protected $fillable = [
        'code',
        'prefectures',
    ];

    public static function selectlist()
    {
        $prefs = Pref::all();
        $list = array();
        $list += array( "" => "選択してください" );
        foreach ($prefs as $pref) {
            $list += array($pref->prefectures => $pref->prefectures);
        }
        
        return $list;
    }

}
