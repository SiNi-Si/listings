<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

    protected $table = "company";

    public function webHost() {
        return $this->belongsTo(WebHost::class);
    }

}