<?php

namespace App\Http\Controllers\Voyager;

use TCG\Voyager\Http\Controllers\VoyagerBreadController as BaseVoyagerBreadController;
use App\Testdata;
use Illuminate\Http\Request;
use App\Customer;

class AnalyticsController extends BaseVoyagerBreadController
{
    //
    public function index(Request $request) {
        $view = 'vendor.voyager.analytics.browse';
#        return Voyager::view($view, ['list' => $sales]);
        #$name = "Carycha";
        #$testdatas = Testdata::All()->groupby('age');
        $testdatas = Customer::All();

#        return \TCG\Voyager\Facades\Voyager::view($view, compact("name", $name));
        return View($view, compact("testdatas", $testdatas));
    }
}
