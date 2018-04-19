<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Message()
    {
        return $this->hasMany('App\Message');
    }


    public function getIdParent() {
        return parent::__get('parent_id');
    }

}
