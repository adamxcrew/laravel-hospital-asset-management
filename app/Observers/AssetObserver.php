<?php

namespace App\Observers;

use App\Asset;
use App\Stock;
use App\Hospital;

/**
 * Class AssetObserver
 * @package App\Observers
 */
class AssetObserver
{
    /**
     * Handle the asset "created" event.
     *
     * @param Asset $asset
     * @return void
     */
    public function created(Asset $asset)
    {
        $hospitals  = Hospital::all();

        foreach ($hospitals as $hospital) {
            factory(Stock::class)->create([
                'asset_id'    => $asset->id,
                'hospital_id' => $hospital->id,
            ]);
        }
    }

    /**
     * Handle the asset "updated" event.
     *
     * @param Asset $asset
     * @return void
     */
    public function updated(Asset $asset)
    {
        //
    }

    /**
     * Handle the asset "deleted" event.
     *
     * @param Asset $asset
     * @return void
     */
    public function deleted(Asset $asset)
    {
        //
    }

    /**
     * Handle the asset "restored" event.
     *
     * @param Asset $asset
     * @return void
     */
    public function restored(Asset $asset)
    {
        //
    }

    /**
     * Handle the asset "force deleted" event.
     *
     * @param Asset $asset
     * @return void
     */
    public function forceDeleted(Asset $asset)
    {
        //
    }
}
