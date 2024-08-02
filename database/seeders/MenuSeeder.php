<?php

namespace Database\Seeders;

use App\Models\Konfigurasi\Menu;
use App\Models\Permission;
use App\Traits\HasMenuPermission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Cache;

class MenuSeeder extends Seeder
{
    use HasMenuPermission;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cache::forget('menus');
        /**
         * @var Menu $mm
         */
        $mm = Menu::firstOrCreate(['url' => 'konfigurasi'], ['name' => 'Konfigurasi', 'category' => 'MASTER DATA', 'icon' => 'settings']);
        $this->attachMenupermission($mm, ['read'], ['admin']);

        $sm = $mm->subMenus()->create(['name' => 'Menu', 'url' => $mm->url . '/menu', 'category' => $mm->category]);
        $this->attachMenupermission($sm, ['create', 'read', 'update', 'delete', 'sort'], ['admin']);
    }
}
