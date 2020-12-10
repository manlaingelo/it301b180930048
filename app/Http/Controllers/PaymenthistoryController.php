<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paymenthistory;
use App\Paymenttypes;
use Auth;
class PaymenthistoryController  extends Controller
{
    public function index()
    {
        $payments=Paymenttypes::all();
        $user = Paymenthistory::whereUsermail('mike@mike.com')->first();
        $usermail = Auth::user();
        $paymentid = 'Эрүүл чийрэг';
        $start_at='2020-12-11';
        $months='1';
        $desc='k5y07N3';
        $paystatus='Төлөгдсөн';
        return view('payments',compact('user','usermail','paymentid','start_at','months','desc','paystatus','payments'));
    }
}
