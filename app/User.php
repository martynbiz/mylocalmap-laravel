<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password', 'role'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];


    // relationships

    /**
    * User has many listings
    * @return \Illuminte\Database\Eloquent\Relations\HasMany
    */
    public function listings()
    {
        return $this->hasMany('App\Listing');
    }


    // access stuff

    /**
     *
     */
    public function isAdmin() {
        return ($this->role == 'admin');
    }

    /**
     * Checks if the item passed belongs to this user
     */
    public function isOwnerOf($item) {
        return ($item->user_id == $this->id);
    }

    /**
     * Checks if the user is the owner of the item, or admin
     */
    public function canUpdate($item) {
        return ($this->isAdmin() or $item->user_id == $this->id);
    }

    /**
     * Checks if the user is the owner of the item, or admin
     */
    public function canDelete($item) {
        return ($this->isAdmin() or $item->user_id == $this->id);
    }

}
