<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectGroup
 */
class ProjectGroup extends Model
{
    protected $table = 'project_group';

    //protected $primaryKey = 'name';
	public $timestamps = true;

    protected $fillable = [
	'name',
        'full_name',
        'descr',
        'image',
        'create_at'
    ];

    protected $guarded = [];

        
}
