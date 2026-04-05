<?php
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', [PortfolioController::class, 'index']);

Route::get('/setup-database', function() {
    Artisan::call('db:seed', ['--force' => true]);
    return 'Database successfully seeded! You can now go back to the homepage.';
});