<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fare;
use App\Models\Operator;
use App\Models\FareAsOperator;
use App\Http\Validators\ValidateFareIsAble;


class FareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fares = Fare::all();
        return view('fare.index')->with('fares', $fares);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $operators = Operator::all();
        return view('fare.create')->with('operators', $operators);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $value = $request->input('value');
        $operatorId = $request->input('operator_id');

        $validator = ValidateFareIsAble::Validate($operatorId, $value);

        if (!$validator) {
            return back()->with('error', "Não foi possivel criar uma fare esta operadora já tem uma fare ativa de mesmo valor");
        }

        $fare = Fare::create(['value' => $value]);
        $fareAsOperator = FareAsOperator::create(['fare_id' => $fare->id, 'operator_id' => $operatorId]);    
        return redirect('/')->with('flash_message', 'Fare Addedd!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fare = Fare::find($id);
        $operators = Operator::all();
        return view('fare.edit')->with('fares', $fare)->with('operators', $operators);
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
        $value = $request->input('value');
        $operatorId = $request->input('operator_id');
        $isActive = $request->input('isActive');

        if($isActive == "1") {
            $validator = ValidateFareIsAble::Validate($operatorId, $value);

            if (!$validator) {
                return back()->with('error', "Não foi possivel editar a fare esta operadora já tem uma fare ativa de mesmo valor");
            }
        }

        $fare = Fare::find($id);
        $input = $request->all();
        $fare->update($input);
        return redirect('/')->with('flash_message', 'Fare Updated!');  
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
