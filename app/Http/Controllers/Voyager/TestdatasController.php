<?php

namespace App\Http\Controllers\Voyager;

use TCG\Voyager\Http\Controllers\VoyagerBreadController as BaseVoyagerBreadController;
use App\Testdata;
use Illuminate\Http\Request;

class TestdatasController extends BaseVoyagerBreadController
{
    //
    public function index(Request $request) {
#        $testdatas = App\Testdata::All();
        $view = 'vendor.voyager.testdatas.browse';
#        return Voyager::view($view, ['list' => $sales]);
        #$name = "Carycha";
        #$testdatas = Testdata::All();
        $testdatas = Testdata::All()->groupby('age');

#        return \TCG\Voyager\Facades\Voyager::view($view, compact("name", $name));
        return View($view, compact("testdatas", $testdatas));
    }
}
