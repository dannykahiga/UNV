<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    public $primaryKey = 'project_ref';

    public $incrementing = false;

    protected $fillable = [
        'project_ref',
        'title',
        'country',
        'gcf_date',
        'start_date',
        'duration',
        'end_date',
        'status'
    ];

    public function office()
    {
      return $this->belongsTo('App\Office');
    }
}
