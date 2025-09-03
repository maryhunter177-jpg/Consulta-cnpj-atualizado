<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CnpjController;

Route::get('/cnpj', [CnpjController::class, 'consultar']);
