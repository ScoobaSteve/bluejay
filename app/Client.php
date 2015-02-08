<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'clients';

    protected $fillable = ['client_name', 'client_phone', 'client_address', 'user_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function jobs()
    {
        return $this->hasmany('App\Job', 'job_id');
    }

}
