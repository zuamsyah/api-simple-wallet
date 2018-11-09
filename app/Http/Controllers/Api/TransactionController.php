<?php

namespace App\Http\Controllers\Api;

use App\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TransactionResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::all()->sortBy('transaction_id');
        return TransactionResource::collection($transactions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = $this->validator_create($input);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Could not create new transaction.',
                'errors' => $validator->errors(),
                'code' => 400
            ], 400);
        }

        if (Transaction::create($input)) {
            return response()->json([
                'message' => 'OK',
                'code' => 200
            ],200);
        } else {
            return response()->json([
                'message' => 'Internal Error',
                'code' => 500
            ],500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json([
                'message' => 'Could not find the transaction',
                'code' => 404
            ],404);
        }
        return new TransactionResource($transaction);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $transaction = Transaction::find($id);
        $validator = $this->validator_update($input);

        if (!$transaction) {
            return response()->json([
                'message' => 'Could not find the transaction',
                'code' => 404
            ],404);
        }
        
        if ($validator->fails()) {
            return response()->json([
                'message'       =>  'Could not update Transaction.',
                'errors'        =>  $validator->errors(),
                'code'   =>  400
            ],400);
        }

        if ($transaction->update($input)) {
            return response()->json([
                'message' => 'The resource is created successfully',
                'code' => 201
            ],201);
        } else {
            return response()->json([
                'message' => 'Internal Error',
                'code' => 500
            ],500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaction = Transaction::find($id);
        if (!$transaction) {
            return response()->json([
                'message' => 'Could not find the transaction',
                'code' => 404
            ],404);
        } elseif ($transaction->delete()) {
            return response()->json(null, 204);
        } else {
            return response()->json([
                'message' => 'Bad Request',
                'code' => 400
            ],400);
        }
    }

    /**
     * Validator create
     * @param type $data
     * @return type
     */
    private function validator_create($data){
        return Validator::make($data, [
            'type'          => 'required',
            'id'            => 'required|integer',
            'amount'        => 'required|integer',
            'expense_id'    => 'required|integer',
            'category_id'   => 'required|integer'
        ]);
    }

    /**
     * Validator update
     * @param type $data
     * @return type
     */
    private function validator_update($data){
        $rules = [];
        if (array_key_exists('type', $data)){
            $rules['type'] = 'required';
        }
        if (array_key_exists('id', $data)){
            $rules['id'] = 'required|integer';
        }
        if (array_key_exists('amount', $data)){
            $rules['amount'] = 'required|integer';
        }
        if (array_key_exists('expense_id', $data)){
            $rules['expense_id'] = 'required|integer';
        }
        if (array_key_exists('category_id', $data)){
            $rules['category_id'] = 'required|integer';
        }
        return Validator::make($data,
            $rules
        );    
    }
}
