<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'post';
    protected $primaryKey = "id";
    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->hasOne(Kategori::class, 'id', 'kategori_id');
    }
}
