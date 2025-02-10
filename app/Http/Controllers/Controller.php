<?php

namespace App\Http\Controllers;

use App\Models\Enum\SessionEnum;
use Illuminate\Support\Facades\Session;

abstract class Controller
{
    public function successMessage(string $message)
    {
        Session::flash('message', ['msg' => $message, 'type' => SessionEnum::success]);
    }
}
