<?php

namespace App\Http\Controllers;



class NotificationController extends Controller
{
    public function markasread($id) 
    { 
      if($id)
      {
        $notification = auth()->user()->notifications->where('id', $id)->first();

        if ($notification) {
            $notification->markAsRead();
            return redirect()->route($notification->data['route'],$notification->data['url_address']);
        }
      }
      
    }
}
