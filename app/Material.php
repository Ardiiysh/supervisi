<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'name', 'lesson','material','material_name','supervisor_name','status','comment','tanggal_upload'
    ];

    protected $table = "materials";
}
