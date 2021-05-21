<?php

namespace App\Repository;

class DataRepo
{
    public function data()
    {
        $data = [
            'name' => "Carlos",
            'age' => 22,
            'location' => ['city' => 'Bucaramanga', 'state' => 'Santander', 'country' => 'Colombia']
        ];
        return $data;
    }
}
