<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
    protected $fillable = ['user_id', 'parent_id', 'comment_body', 'file'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id')->with('replies');
    }

    public function getFileUrlAttribute()
    {
        return $this->file ? asset('storage/comments/' . $this->file) : null;
    }
}
