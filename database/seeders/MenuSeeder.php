<?php

namespace Database\Seeders;

use App\Models\Konfigurasi\Menu;
<<<<<<< HEAD
=======
use App\Models\Permission;
use App\Traits\HasMenuPermission;
>>>>>>> 4656ac1d484d792549066f2657c52872817354e6
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Cache;

class MenuSeeder extends Seeder
{
<<<<<<< HEAD
=======
    use HasMenuPermission;
>>>>>>> 4656ac1d484d792549066f2657c52872817354e6
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cache::forget('menus');
        /**
         * @var Menu $mm
         */
<<<<<<< HEAD
        $mm = Menu::firstOrCreate(['url' => 'konfigurasi'], ['name' => 'Konfigurasi', 'category' => 'Intel Application', 'icon' => 'settings']);

        $sm = $mm->subMenus()->create(['name' => 'Menu', 'url' => $mm->url . '/menu', 'category' => $mm->category]);
=======
        $mm = Menu::firstOrCreate(['url' => 'konfigurasi'], ['name' => 'Konfigurasi', 'category' => 'MASTER DATA', 'icon' => 'cog']);
        $this->attachMenupermission($mm, ['read'], ['admin']);

        $sm = $mm->subMenus()->create(['name' => 'Menu', 'url' => $mm->url . '/menu', 'category' => $mm->category]);
        $this->attachMenupermission($sm, ['create', 'read', 'update', 'delete', 'sort'], ['admin']);

        $sm = $mm->subMenus()->create(['name' => 'Role', 'url' => $mm->url . '/roles', 'category' => $mm->category]);
        $this->attachMenupermission($sm, ['create', 'read', 'update', 'delete'], ['admin']);

        $sm = $mm->subMenus()->create(['name' => 'Permission', 'url' => $mm->url . '/permissions', 'category' => $mm->category]);
        $this->attachMenupermission($sm, ['create', 'read', 'update', 'delete'], ['admin']);

        $sm = $mm->subMenus()->create(['name' => 'Akses Role', 'url' => $mm->url . '/akses-role', 'category' => $mm->category]);
        $this->attachMenupermission($sm, ['read', 'update'], ['admin']);

        $sm = $mm->subMenus()->create(['name' => 'Akses User', 'url' => $mm->url . '/akses-user', 'category' => $mm->category]);
        $this->attachMenupermission($sm, ['read', 'update'], ['admin']);

        $sm = $mm->subMenus()->create(['name' => 'Users', 'url' => $mm->url . '/users', 'category' => $mm->category]);
        $this->attachMenupermission($sm, null, ['admin']);
>>>>>>> 4656ac1d484d792549066f2657c52872817354e6
    }
}
