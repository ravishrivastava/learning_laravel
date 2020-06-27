<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CountryModel extends Model
{
    public function insert(Type $var = null)
    {
        DB::connection('main')->insert("insert into country (code, name, )")
    }
}
