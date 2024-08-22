<?php

namespace App\Models;

<<<<<<< HEAD
=======
use App\Models\Konfigurasi\Menu;
>>>>>>> 4656ac1d484d792549066f2657c52872817354e6
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission as ModelsPermission;

class Permission extends ModelsPermission
{
    use HasFactory;
<<<<<<< HEAD
=======

    public function menus()
    {
        return $this->belongsToMany(Menu::class);
    }
>>>>>>> 4656ac1d484d792549066f2657c52872817354e6
}
