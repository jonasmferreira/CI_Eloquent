<?php
/* import namespace Eloquent */
use \Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent{
	protected $table = 'users';
	protected $guarded = array('id');
}