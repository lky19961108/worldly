<?php

namespace App\Models\Xiaomiquan;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    const TYPE_QA = 'q&a';
    const TYPE_TALK = 'talk';
    /**
     * @var array $guarded
     */
    protected $guarded = [];

    /**
     * @var array $hidden
     */
    protected $hidden = [
        'updated_at', 'deleted_at',
    ];
    protected $table = 'xiaomiquan_topics';
}
