<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Library extends Eloquent{
    
    public $timestamps = false;
    protected $fillable = array('link','version','released_date','user_iduser','rating_idrating','name', 'description');    

}
?>