<?php

namespace App\Models;

use Moloquent;

/**
 * Task Moddel
 *
 * @author Hafiz Waheeduddin
 */
class Task extends Moloquent
{
    protected $fillable = ['title', 'description'];


    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
