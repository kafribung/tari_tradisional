<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Import DB yg login
use Auth;

class Dance extends Model
{
    protected $touches = ['user'];
    protected $guarded = ['created_at', 'updated_at'];
    
    
    // Relasi Many to One  (User)
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // Mutator
    public function getImgAttribute($value)
    {
        return url('dances', $value);
    }

    // Is Login
    public function isLogin()
    {
        $user = Auth::check();
        if ($user) {
            return Auth::user()->id == $this->user_id;
        } else return false;
    }
}
