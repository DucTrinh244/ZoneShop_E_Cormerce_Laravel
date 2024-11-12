<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $table = 'tbl_comments';
    protected $fillable = [
        'post_id',
        'user_id',
        'content',
        'timestamp',
    ];

    public function post()
    {
        return $this->belongsTo(Posts::class, 'post_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
