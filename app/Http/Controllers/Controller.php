<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Models\Core\ActivityList;
>>>>>>> 02b12afbcfc48a7aa01129d319afbe25f6726349
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
>>>>>>> 02b12afbcfc48a7aa01129d319afbe25f6726349

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
<<<<<<< HEAD
=======

    /**
     * Get status Activity.
     *
     * @param  int  $type
     * @param  bool  $custom
     * @param  string  $message
     * @return string
     */
    protected function getStatus($type, $custom = false, $message = null)
    {
        return $custom ? $message : ActivityList::find($type)->name;
    }

    /**
     * Store a new log.
     *
     * @param  string  $header
     * @param  string  $ip
     * @param  string  $action
     * @param  bool  $withPerformedOn
     * @param  \Illuminate\Database\Eloquent\Model  $performedOn
     * @return \Illuminate\Http\Response
     */
    public function createLog($header, $ip, $action, $withPerformedOn = false, $performedOn = null)
    {
        if ($withPerformedOn) {
            activity()
                ->causedBy(Auth::user()->id)
                ->performedOn($performedOn)
                ->withProperties([
                    'url' => URL::full(),
                    'ip' => $ip,
                    'user_agent' => $header,
                ])
                ->log($action);
        } else {
            activity()
                ->causedBy(Auth::user()->id)
                ->withProperties([
                    'url' => URL::full(),
                    'ip' => $ip,
                    'user_agent' => $header,
                ])
                ->log($action);
        }
    }
>>>>>>> 02b12afbcfc48a7aa01129d319afbe25f6726349
}
