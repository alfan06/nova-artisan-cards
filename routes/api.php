<?php

use Alfan06\NovaArtisanCards\DatabaseBackup\DatabaseBackupController;
use Alfan06\NovaArtisanCards\DatabaseSeed\DatabaseSeedController;
use Alfan06\NovaArtisanCards\HorizonClear\HorizonClearController;
use Alfan06\NovaArtisanCards\MaintenanceMode\MaintenanceModeController;
use Alfan06\NovaArtisanCards\MigrateFresh\MigrateFreshController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Card API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your card. These routes
| are loaded by the ServiceProvider of your card. You're free to add
| as many additional routes to this file as your card may require.
|
*/

Route::post('/artisan/migrate-fresh', MigrateFreshController::class);

Route::post('/artisan/down', [MaintenanceModeController::class, 'down']);

Route::post('/artisan/up', [MaintenanceModeController::class, 'up']);

Route::post('/artisan/database-backup', DatabaseBackupController::class);

Route::post('/artisan/horizon-clear', [HorizonClearController::class, 'clear']);

Route::post('/artisan/database-seed', [DatabaseSeedController::class, 'seed']);
