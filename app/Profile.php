<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'title', 'description', 'url', 'image',
    ];

    public function url()
    {
        return str_replace('https://', '', $this->url);
    }

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/BBvfuYhEp514HhrDZ0acfDWB0WOLqO8IkTBo8uOz.jpeg';
        
        return '/storage/' . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
