<?php

namespace ConfrariaWeb\Template\Models;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $fillable = [
        'name', 'user_id'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
