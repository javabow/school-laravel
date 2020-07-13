<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Corcel\Model\Post as Corcel;

class blog extends Corcel
{
    
	//lock untuk table dalam database
	//protected $table = "wp_posts";

	public function getYoastDescription()
    {
        return array_key_exists('_yoast_wpseo_metadesc', $this->getMetasAttribute()) ? $this->getMetasAttribute()['_yoast_wpseo_metadesc'] : '';
    }

}
