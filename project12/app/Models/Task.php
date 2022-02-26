<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Kyslik\ColumnSortable\Sortable;

class Task extends Model
{
    use HasFactory;
    use Sortable;

    public function taskOwner()
    {
        return $this->belongsTo(Owner::class, 'owner_id', 'id'); // uzduotis priklauso kurejui
    }

    public $sortable = ['id', 'title', 'description', 'start_date', 'end_date', 'owner_id'];
}
