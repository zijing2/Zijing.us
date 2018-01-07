<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Project
 */
class Project extends Model
{
    protected $table = 'project';

    //protected $primaryKey = 'name';

	public $timestamps = true;

    protected $fillable = [
	'name',
        'project_group',
        'sub_title',
        'descri',
        'create_at',
        'image',
        'link'
    ];

    protected $guarded = [];

        
}
