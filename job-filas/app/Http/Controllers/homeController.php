<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\TestJob;

class homeController extends Controller
{
    public function index()
    {
        TestJob::dispatch('Exemplo de messagem');

        return "Processo Concluído";
    }
}
