<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Models\review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = review::all();
        return view('admin.comment',compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $review = review::all();
        return view('landing.comment',compact('review'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReviewRequest $request)
    {
        try{
            Review::create([
                'name' =>$request->name,
                'email' =>$request->email,
                'comment' =>$request->comment,
            ]);

            return redirect()->back()->with('success','Komentar berhasil di tambahkan');
        }catch(\Throwable $th) {
            return redirect()->back()->with('error', 'komentar gagal ditambahkan perikasa inputan anda!');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $reviews = review::FindOrFail($id);
        $reviews->delete();

        return redirect()->back()->with('success','Komentar berhasil di hapus');
    }
}
