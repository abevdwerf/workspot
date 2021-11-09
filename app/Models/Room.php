<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function getFloorName()
    {
        if ($this->floor == 0)
        {
           return 'ground floor';
        }
        elseif ($this->floor == 1)
        {
            return $this->floor . 'st' . ' '. 'floor';
        }
        elseif ($this->floor == 2)
        {
            return $this->floor . 'nd' . ' '. 'floor';
        }
        elseif ($this->floor == 3)
        {
            return $this->floor . 'rd' . ' '. 'floor';
        }
        else
        {
            return $this->floor . 'th' . ' '. 'floor';
        }

    }
}
