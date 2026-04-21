<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

use App\Models\User_login;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

use Carbon\Carbon;

class LoginDetailsController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
  }


  public function index()
  {

    $LoginDetails = User_login::latest()->simplePaginate(15);

    return view('admin.loginDetails.index', compact('LoginDetails'));
  }

}
