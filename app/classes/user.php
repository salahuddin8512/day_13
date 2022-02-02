<?php


namespace App\classes;


class user
{
    protected $user =[];
    public function getAllUser()
    {
        $this->user=[
            0=>[
                'name'      =>  'Salah Uddin',
                'mobile'    =>  '017197',
                'location'  =>  'Gazipur',
            ],
            1=>[
                'name'      =>  'Jahid',
                'mobile'    =>  '017197',
                'location'  =>  'Gazipur',
            ],
        ];
        return $this->user;
    }
}