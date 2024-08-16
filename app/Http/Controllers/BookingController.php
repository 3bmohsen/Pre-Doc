<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Booking;
class BookingController extends Controller
{

    public function booka($id ,request $request){
        $book = Booking::find($id);
        $book->approve = $request->yes;
        $book->save();

        return redirect("/doc/active/$book->doc_id")->with('success','تمت الموافقة على الحجز بنجاح');
    }

    public function bookd($id ,request $request){
        $book = Booking::find($id);
        $book->approve = $request->no;
        $book->save();

        return redirect("/doc/active/$book->doc_id")->with('success','تم رفض الحجز بنجاح');
    }
    public function recent(){
        $books = Booking::all();
        $count= $books->count();
        return view('pre-doc.admindash.recent',compact('books','count'));
    }
    public function create(request $request){
        $book = new Booking;
        $book->user_id = Auth::id();
        $book->doc_id = $request->doc_id;
        $book->session_date = $request->book_date;
        $book->address = $request->book_addr;
        $book->sug_price = $request->book_price;
        $book->approve = 'pending';
        $book->save();
        return redirect("/user/book/$request->doc_id")->with('success', 'تم إرسال طلب الحجز للدكتور');


    }
    public function history($id){
        $books = Booking::where('user_id', $id)->whereIn('approve', ['yes','no'])->get();
        return view('pre-doc.userdashb.history',compact('books'));
    }
    public function history4d($id){
        $books = Booking::where('doc_id', $id)->whereIn('approve', ['yes','no'])->get();
        return view('pre-doc.docdash.history',compact('books'));
    }
    public function show($id){
        $books = Booking::where('user_id', $id)->whereIn('approve', ['pending'])->get();
        return view('pre-doc.userdashb.active',compact('books'));
    }

    public function show4d($id){
        $books = Booking::where('doc_id', $id)->whereIn('approve', ['pending'])->get();
        return view('pre-doc.docdash.active',compact('books'));
    }
    public function update(request $request,$id){
        $c_usr = Auth::id();
        $book = Booking::find($id);
        $book->session_date = $request->book_date;
        $book->address = $request->book_addr;
        $book->sug_price = $request->book_price;
        $book->save();
        return redirect("/user/active/$c_usr")->with('success', 'تم تعديل طلب الحجز بنجاح');

    }
    public function destroy($id){
        $c_usr = Auth::id();
        $book = Booking::find($id);
        $book->delete();
        return redirect("/user/active/$c_usr")->with('success', 'تم حذف طلب الحجز بنجاح');


    }
}
