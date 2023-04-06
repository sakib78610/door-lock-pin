<?php

namespace Sakib78610\Doorspin\Controllers;

use Illuminate\Http\Request;
use Sakib78610\Doorspin\DoorsPin;

class DoorPinController
{
    public function __invoke(DoorsPin $doorsPin) {
        $pin = $doorsPin->generateRandomDoorPin();
        return view('doorspin::index', compact('pin'));
    }


}
