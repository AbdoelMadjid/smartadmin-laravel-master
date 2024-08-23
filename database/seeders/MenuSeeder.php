<?php

namespace Database\Seeders;

use App\Models\Konfigurasi\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * @var Menu $mm
         */

        $mm = Menu::create(['name' => 'Konfigurasi', 'url' => 'konfigurasi',  'category' => 'MASTER DATA', 'icon' => 'cog']);
        $mm->subMenus()->create(['name' => 'Menu', 'url' => $mm->url . '/menu', 'category' => $mm->category]);
    }
}
