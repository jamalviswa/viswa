<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sitesetting extends Model
{
    use HasFactory;

    protected $table = 'sitesettings';

    protected $fillable = ['site_title','meta_description','meta_keywords','logo','favicon','mobile_number','telephone_number','email','alt_email','address','map_url','facebook_url','whatsapp_url','linkedin_url','instagram_url','twitter_url'];
}
