<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toy;
use App\Models\Cart;
use Carbon\Carbon;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

        return view('toys.cart')->with('toy',$toy );
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
        ;

      $toy = Toy::find($id);
      $date = Carbon::now();

      $name = $request->input('name');
      if($name = 'plan1')
      {
        $date1 = $date->addDays(7);

      }
      else if($name = 'plan2') {
        $date1 = $date->addMonths(1);


      }
      else {
        $date1 = $date->addYears(1);

      }





      $cart =Cart::create([
        'toy_id'=> $toy->toy_name,
        'total_cost'=>$toy->cost_per_week,
        'quantity' =>1,
        'date_of_delivery'=> $date,
        'date_of_return'=> $date1
      ]);
      return redirect('/sucess');

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
