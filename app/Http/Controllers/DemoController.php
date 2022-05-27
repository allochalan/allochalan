<?php
namespace App\Http\Controllers;



use App\Models\UserSource;

class DemoController extends Controller
{
    public function test()
    {
        $model = new UserSource();
        dd($model);
    }
}
