<?php
namespace App\Models;

use Moloquent;

/**
 * Task Moddel
 *
 * @author Hafiz Waheeduddin
 */
class Category extends Moloquent
{
    public function tasks()
    {
        return $this->hasMany('App\Models\Task', 'category_id');
    }
}
