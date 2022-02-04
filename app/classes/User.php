<?php


namespace App\classes;


class User{
    protected $user = [];
    public function getAllUser(){
        $this->user = [
            0=>[
                'name' => 'Rakib',
                'mobile' => '01916687307',
                'location' => 'Dhanmondi',
            ],
            1=>[
                'name' => 'Hasan',
                'mobile' => '01916687307',
                'location' => 'Dhanmondi',
            ],
        ];
        return $this->user;
    }

}