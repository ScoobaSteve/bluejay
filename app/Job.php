<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'jobs';

    protected $fillable = ['user_id', 'client_id', 'description', 'budget', 'complete'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function client()
    {
        return $this->belongsTo('App\Client', 'client_id');
    }

}
