<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'project_creator');
    }

    public function contributions()
    {
        return $this->hasMany(Contribution::class, 'project_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'project_id');
    }

    public function votes()
    {
        return $this->hasMany(Vote::class, 'project_id');
    }

    public function updates()
    {
        return $this->hasMany(Update::class, 'project_id');
    }
}
