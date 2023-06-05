<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CompanyComponent;
use App\Http\Livewire\ClientComponent;
use App\Http\Livewire\ServiceComponent;
use App\Http\Livewire\InvoiceComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/clients', [ClientComponent::class, 'index'])->name('clients.index');
Route::get('/clients/create', [ClientComponent::class, 'create'])->name('clients.create');
Route::post('/clients', [ClientComponent::class, 'store'])->name('clients.store');
Route::get('/clients/{client}/edit', [ClientComponent::class, 'edit'])->name('clients.edit');
Route::put('/clients/{client}', [ClientComponent::class, 'update'])->name('clients.update');
Route::delete('/clients/{client}', [ClientComponent::class, 'destroy'])->name('clients.destroy');


Route::get('/companies', [CompanyComponent::class, 'index'])->name('companies.index');
Route::get('/companies/create', [CompanyComponent::class, 'create'])->name('companies.create');
Route::post('/companies', [CompanyComponent::class, 'store'])->name('companies.store');
Route::get('/companies/{company}/edit', [CompanyComponent::class, 'edit'])->name('companies.edit');
Route::put('/companies/{company}', [CompanyComponent::class, 'update'])->name('companies.update');
Route::delete('/companies/{company}', [CompanyComponent::class, 'destroy'])->name('companies.destroy');


Route::get('/services', [ServiceComponent::class, 'index'])->name('services.index');
Route::get('/services', [ServiceComponent::class, 'create'])->name('services.create');
Route::post('/services', [ServiceComponent::class, 'store'])->name('services.store');
Route::get('/services/{service}/edit', [ServiceComponent::class, 'edit'])->name('services.edit');
Route::put('/services/{service}', [ServiceComponent::class, 'update'])->name('services.update');
Route::delete('/services/{service}', [ServiceComponent::class, 'destroy'])->name('services.destroy');

Route::get('/invoices', [InvoiceComponent::class, 'index'])->name('invoices.index');
Route::get('/invoices/create', [InvoiceComponent::class, 'create'])->name('invoices.create');
Route::post('/invoices', [InvoiceComponent::class, 'store'])->name('invoices.store');
Route::get('/invoices/{invoice}/edit', [InvoiceComponent::class, 'edit'])->name('invoices.edit');
Route::put('/invoices/{invoice}', [InvoiceComponent::class, 'update'])->name('invoices.update');
Route::delete('/invoices/{invoice}', [InvoiceComponent::class, 'destroy'])->name('invoices.destroy');

