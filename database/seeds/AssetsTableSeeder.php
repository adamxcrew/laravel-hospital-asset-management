<?php

use App\Asset;
use App\Hospital;
use Illuminate\Database\Seeder;

/**
 * Class AssetsTableSeeder
 */
class AssetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $assets = [
            'gloves',
            'masks',
            'respirators',
            'protective overalls',
            'protective glasses',
        ];

        foreach ($assets as $asset) {
            factory(Asset::class)->create([
                'name'        => $asset,
                'description' => $asset
            ]);
        }
    }
}
