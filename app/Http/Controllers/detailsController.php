<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Toy;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class detailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //



        $toy = Toy::all();
        $toy1 = Toy::where("category_type_1", "=", "Normal")->firstorFail();
        $toy2 = Toy::where("category_type_1", "=", "Special")->firstorFail();
        $toy3 = Toy::where("category_type_1", "=", "Pets")->firstorFail();



        return view('toys.details' , [
          'toy1'=> $toy1,
          'toy2'=> $toy2,
          'toy3'=> $toy3


        ]);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $toy = Toy::find($id);



      return view('toys.example' )->with('toy' , $toy);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
