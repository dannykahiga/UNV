<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $table  = 'offices';
    public $primaryKey = 'id';

    protected $fillable = [
        'project_ref',
        'name',
        'grant',
        'disbursement',
    ];

    public function projects()
    {
      // code...
      return $this->hasMany('App\Project');
    }
}
