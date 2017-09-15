<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $fillable = ['name', 'created_by', 'updated_by'];
	// protected $guarded = [];
    //
    static public function tagList()
    {
        $tag = self::orderBy('id')->pluck('name', 'id');
        return $tag;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function posts()
    {
        return $this->belongsToMany('App\Models\Post');
    }
}
