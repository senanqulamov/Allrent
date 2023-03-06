<?php

namespace App\Http\Controllers\helpers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Log;
use stdClass;

class LoggerController extends Controller
{
    /*
    *Custom logs by Senan
    TODO) Log types: Info log , Action log , Activity Log
    ! Info log - information about any action on web server
    ! Action log - Every function returns action log to this controller
    ! Activity log - Security and maintenance logs for users and moderators
    */

    public function log_user_actions($data)
    {
        Log::create($data);
    }

    public function log_admin_actions($data)
    {
        Log::create($data);
    }

    public function push_action_log($data)
    {
        Log::create($data);
    }

    public function push_info_log($data)
    {
        Log::create($data);
    }

    public function show_user_logs($user_id)
    {
        $logs = Log::where('user_id', $user_id)
            ->orderBy('created_at', 'desc')
            ->get();
        return $logs;
    }

    public function show_logs()
    {
        $logs = Log::orderBy('created_at', 'desc')->get();
        return $logs;
    }

    // public function create_log_data($data){
    //     $data = new stdClass();
    // }
}
