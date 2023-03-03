<?php

namespace App\Http\Controllers\helpers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Balance;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use stdClass;

class BalanceController extends Controller
{
    public function get_balance($user_id)
    {
        $data = new stdClass();

        if (isset($user_id)) {
            $user_balance = Balance::where('user_id', $user_id)
                ->get()
                ->first();

            //! logging details
            $user = User::where('ID', $user_id)
                ->get()
                ->first();
            $data->details = $user->username . "'s Balance details asked";
            //! logging details

            return $user_balance;
        } else {
            $balances = Balance::all();
            return $balances;
        }

        //TODO  Logging actions
        $data->type = 'info-log';
        $data->user_id = $user_id;
        if (Auth::user()->is_admin == 1) {
            $data->admin_id = $user_id;
        }
        $data->info =
            'Balance info requested by ' .
            Auth::user()->username .
            ' . ID: ' .
            Auth::user()->ID;

        (new LoggerController())->log_user_actions($data);
    }

    public function show_transactions($user_id)
    {
        $data = new stdClass();

        if (isset($user_id)) {
            $user_transactions = Transaction::where('user_id', $user_id)->get();

            //! logging details
            $user = User::where('ID', $user_id)
                ->get()
                ->first();
            $data->details = $user->username . "'s transaction details asked";
            //! logging details

            return $user_transactions;
        } else {
            $transactions = Transaction::all();
            return $transactions;
        }

        //TODO  Logging actions
        $data->type = 'info-log';
        $data->user_id = $user_id;
        if (Auth::user()->is_admin == 1) {
            $data->admin_id = $user_id;
        }
        $data->info =
            'Transaction info requested by ' .
            Auth::user()->username .
            ' . ID: ' .
            Auth::user()->ID;

        (new LoggerController())->log_user_actions($data);
    }

    public function income_transaction()
    {
        $user_id = Auth::user()->ID;
        $user = User::find($user_id);
        $user_balance = Balance::find($user_id);

        $balance = 0;
        $message = 'Balance updated succesfully';
        $type = 'info';

        if (isset($user_balance)) {
            $user_balance->balance = $balance;
            $user_balance->save();
        } else {
            $message = 'Balance created and updated succesfully';
            $data = [
                'user_id' => $user_id,
                'balance' => $balance,
            ];
            Balance::create($data);
        }

        return redirect()
            ->back()
            ->with(['message' => $message, 'type' => $type]);
    }

    public function income_transaction_manual($user_id, Request $request)
    {
        $user_id = Auth::user()->ID;
        $user = User::find($user_id);
        $user_balance = Balance::find($user_id);

        $message = 'Balance updated succesfully';
        $type = 'info';

        if (isset($user_balance)) {
            $user_balance->balance = $user_balance->balance + $request->amount;
            $user_balance->save();
        } else {
            $message = 'Balance created and updated succesfully';
            $data = [
                'user_id' => $user_id,
                'balance' => $request->amount,
            ];
            Balance::create($data);
        }

        return redirect()
            ->back()
            ->with(['message' => $message, 'type' => $type]);
    }

    public function expense_transaction()
    {
        $user_id = Auth::user()->ID;
        $user = User::find($user_id);
        $user_balance = Balance::find($user_id);

        $balance = 0;
        $message = 'Balance updated succesfully';
        $type = 'info';

        if (isset($user_balance)) {
            $user_balance->balance = $balance;
            $user_balance->save();
        } else {
            $message = 'Balance created and updated succesfully';
            $data = [
                'user_id' => $user_id,
                'balance' => $balance,
            ];
            Balance::create($data);
        }

        return redirect()
            ->back()
            ->with(['message' => $message, 'type' => $type]);
    }

    public function expense_transaction_manual($user_id, Request $request)
    {
        $user_id = Auth::user()->ID;
        $user = User::find($user_id);
        $user_balance = Balance::find($user_id);

        $message = 'Balance updated succesfully';
        $type = 'info';

        if (isset($user_balance)) {
            $user_balance->balance = $user_balance->balance - $request->amount;
            $user_balance->save();
        } else {
            $message = 'Balance created and updated succesfully';
            $data = [
                'user_id' => $user_id,
                'balance' => 0 - $request->amount,
            ];
            Balance::create($data);
        }

        return redirect()
            ->back()
            ->with(['message' => $message, 'type' => $type]);
    }

    // public function comissions()
    // {
    //     $comissions = DB::table('comissions')->get();
    //     return view('', compact('comissions' , 'page_title'));
    // }
}
