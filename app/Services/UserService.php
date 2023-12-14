<?php
namespace App\Services;

use App\Models\User;

class UserService{

    /**
     * Create user.
     */
    public function store(array $data){

        return User::create($data);
    }

    /**
     * Get users.
     */
    public function all(){
        return User::get();
    }

     /**
     * Get me info by id.
     */
    public function getMeInfo($id){
        return User::find($id);
    }

}

?>
