<?php
namespace App\Models;

use Eloquent;

/**
 * Task Moddel
 *
 * @author Hafiz Waheeduddin
 */
class Category extends Eloquent
{
    public function tasks()
    {
        return $this->hasMany('App\Models\Task', 'category_id');
    }
}
