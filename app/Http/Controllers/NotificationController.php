<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function markread($id)
    {
        foreach (Auth::user()->notifications as $notif) {
            if ($notif->id == $id) {
                $notif->read_at = now();
                $notif->update();
            }
        }
        return redirect()->back();
    }

    public function markallread()
    {
        foreach (Auth::user()->notifications as $notif) {
            if ($notif->read_at == NULL) {
                $notif->read_at = now();
                $notif->update();
            }
        }
        return redirect()->back();
    }
}
