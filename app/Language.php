<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
        'code',
        'languages',
    ];

    public static function selectlist()
    {
        $languages = Language::all();
        $list = array();
        $list += array( "" => "選択してください" );
        foreach ($languages as $language) {
            $list += array($language->languages => $language->languages);
        }

        return $list;
    }
}
