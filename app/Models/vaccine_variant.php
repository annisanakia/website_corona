<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class vaccine_variant extends Model {
    use SoftDeletes;

    protected $table = 'vaccine_variant';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
    
    public static $rules = array(
        'id' => 'required',
    );
    
    public function validate($data)
    {
        $v = Validator::make($data, vaccine_variant::$rules);
        return $v;
    }
}
