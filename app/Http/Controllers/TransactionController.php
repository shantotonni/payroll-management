<?php

namespace App\Http\Controllers;

use App\TransactionCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    public function index(){

        $transaction=TransactionCode::orderBy('created_at','desc')->get();
        return view('transaction.index',compact('transaction'));

    }

    public function create()
    {
        $transaction=new TransactionCode();

        return view('transaction.create',compact('transaction'));

    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'type' => 'required',
            'code'=>'required',
            'status'=>'required',
            'last_number'=>'required',
            'increment'=>'required'
        ]);

        if ($validator->fails()) {

            return Redirect::route('transaction.create')->withErrors($validator)->withInput();
        }

        $transaction=new TransactionCode();
        $transaction->title=$request->title;
        $transaction->type=$request->type;
        $transaction->code=$request->code;
        $transaction->status=$request->status;
        $transaction->last_number=$request->last_number;
        $transaction->increment=$request->increment;
        $transaction->save();

        return Redirect::route('transaction.index')->with('msg','Transaction Code Created Successfully');

    }

    public function show($id){
        $transaction=TransactionCode::find($id);
        return view('transaction.show',compact('transaction'));
    }

    public function edit($id){

        $transaction=TransactionCode::find($id);

        return view('transaction.edit',compact('transaction'));
    }

    public function update(Request $request,$id){

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'type' => 'required',
            'code'=>'required',
            'status'=>'required',
            'last_number'=>'required',
            'increment'=>'required'
        ]);

        if ($validator->fails()) {

            return Redirect::route('transaction.edit')->withErrors($validator)->withInput();
        }

        $transaction=TransactionCode::find($id);
        $transaction->title=$request->title;
        $transaction->type=$request->type;
        $transaction->code=$request->code;
        $transaction->status=$request->status;
        $transaction->last_number=$request->last_number;
        $transaction->increment=$request->increment;
        $transaction->save();

        return Redirect::route('transaction.index')->with('msg','Transaction Code Updated Successfully');

    }

    public function delete($id){

        $response = [];
        $response['result'] = 'error';
        $response['message'] = 'Unknown';

        $transaction = TransactionCode::where('id', $id)->first();

        try {
            if (count($transaction) > 0) {
                if ($transaction->delete()) {

                    $response['result'] = 'success';
                    $response['message'] = 'Transaction Code Deleted Successfully.';
                } else {
                    $response['message'] = 'Unable to remove Transaction Code';
                }
            } else {
                $response['message'] = 'Transaction Code data not found.';
            }
        } catch (\Throwable $e) {
            $response['message'] = $e->getMessage();
        }

        return json_encode($response);

    }


}
