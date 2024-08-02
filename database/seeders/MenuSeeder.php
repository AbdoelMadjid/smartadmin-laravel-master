<?php

namespace Database\Seeders;

use App\Models\Konfigurasi\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Cache;

class MenuSeeder extends Seeder
{
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
        $mm->subMenus()->create(['name' => 'Menu', 'url' => $mm->url . '/menu', 'category' => $mm->category]);
    }
}
