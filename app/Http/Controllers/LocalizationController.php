<?php
/**
 * Created by PhpStorm.
 * User: KEUDEM
 * Date: 26/12/2020
 * Time: 11:05
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App;

class LocalizationController extends Controller
{
    public function index()
    {
        return redirect()->route('dashboard');
    }
    public function lang_change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
        return redirect()->route('dashboard');
    }
}