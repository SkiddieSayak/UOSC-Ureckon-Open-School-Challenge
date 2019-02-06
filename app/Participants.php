<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Participants extends Model
{
    use Notifiable;

    protected $fillable = ['team', 'school', 'event',
    'name1', 'name2', 'name3', 'name4', 'name5',
    'class1', 'class2', 'class3', 'class4', 'class5',
    'contact1', 'contact2', 'contact3', 'contact4', 'contact5', ];
}
