<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{

    protected $fillable = ['name', 'approved'];

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function approve()
    {
        if($this->approved){
            $this->update(['approved' => false]);

            return 'deactivated';
        }

        $this->update(['approved' => true]);
        return 'active';
    }
}
