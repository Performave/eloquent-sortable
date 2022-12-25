<?php

namespace Performave\EloquentSortable\Test;

use Illuminate\Database\Eloquent\Model;
use Performave\EloquentSortable\Sortable;
use Performave\EloquentSortable\SortableTrait;

class Dummy extends Model implements Sortable
{
    use SortableTrait;

    protected $table = 'dummies';
    protected $guarded = [];
    public $timestamps = false;
}
