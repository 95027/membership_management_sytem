<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Rap2hpoutre\FastExcel\FastExcel;
use Barryvdh\DomPDF\Facade\Pdf;

class HomeController extends Controller
{
    public function home(Request $request){
        if(Auth::id()){

            $usertype = auth()->user()->usertype;

            if($usertype == "user"){

                $curruser = Auth()->user()->id;
                $members = Membership::where('userid', $curruser)->latest()->get();
                return view('dashboard', compact('members'))->with('new', $curruser);
            }
            elseif($usertype == "admin"){

                $keyword = $request->get('search');

                if(!empty($keyword)){
                    $members = Membership::where('name', 'LIKE', "%$keyword%")
                    ->orWhere('email', 'LIKE', "%$keyword%")
                    ->latest()->paginate(5);
                }
                else{
                    $members = Membership::latest()->paginate(5);
                }
                return view('admin.adminhome', compact('members'));
            }
            else{
                return redirect()->back();
            }
        }
    }

    public function export(){
        $members = Membership::all();

        return(new FastExcel($members))->download('file.xlsx');
    }

    public function pdf(){
        $members = Membership::all();

        $pdf = Pdf::loadView('pdf.list', ['members'=>$members]);
        return $pdf->download('list.pdf');
    }
}
