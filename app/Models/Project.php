<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'partner_organization',
        'status',
        'start_date',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
