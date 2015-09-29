<?php

namespace App\Models;

use Eloquent;

/**
 * Task Moddel
 *
 * @author Hafiz Waheeduddin
 */
class Task extends Eloquent
{
    protected $fillable = ['title', 'description'];


    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
