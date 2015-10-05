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
        return $this->embedsMany('App\Models\Task');
    }
}
