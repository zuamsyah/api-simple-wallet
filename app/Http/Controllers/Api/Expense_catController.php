<?php

namespace App\Http\Controllers\Api;

use App\Expense_cat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Expense_catResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;

class Expense_catController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expensecat = Expense_cat::all()->sortBy('expense_id');
        return Expense_catResource::collection($expensecat);
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
                'message'       =>  'Could not create new expense_cat.',
                'errors'        =>  $validator->errors(),
                'code'   =>  400
            ], 400);
        }

        if (Expense_cat::create($input)) {
            return response()->json([
                'message' => 'The resource is created successfully',
                'code'    => 201,
            ],201);
        } else {
            return response()->json([
                'message' => 'Internal Error',
                'code'    => 500,
            ],500);            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expense_cat  $expense_cat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $expense_cat = Expense_cat::find($id);

        if (!$expense_cat) {
            return response()->json([
                'message' => 'Could not find the expense_cat',
                'code' => 404
            ],404);
        }
        return new Expense_catResource($expense_cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expense_cat  $expense_cat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $expense_cat = Expense_cat::find($id);
        $validator = $this->validator_update($input);

        if (!$expense_cat) {
            return response()->json([
                'message' => 'Could not find the expense_cat',
                'code' => 404
            ],404);
        } 

        if ($validator->fails()) {
            return response()->json([
                'message'       =>  'Could not update expense_cat.',
                'errors'        =>  $validator->errors(),
                'code'   =>  400
            ],400);
        }

        if ($expense_cat->update($input)) {
                return response()->json([
                    'message' => 'OK',
                    'code'    => 200,
                ],200);
            } else {
                return response()->json([
                    'message' => 'Internal Error',
                    'code'    => 500,
                ],500);
            }    
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expense_cat  $expense_cat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expense_cat = Expense_cat::find($id);

        if (!$expense_cat) {
            return response()->json([
                'message' => 'Could not find the expense_cat',
                'code' => 404
            ],404);
        }

        if ($expense_cat->delete()) {
            return response()->json(null, 204);
        } else {
            return response()->json([
                'message' => 'Internal Error',
                'code' => 500,
            ],500);
        }    
    }

    /**
     * Validator create
     * @param type $data
     * @return type
     */
    private function validator_create($data){
        return Validator::make($data, [
            'name' => 'required|string'
        ]);
    }

    /**
     * Validator update
     * @param type $data
     * @return type
     */
    private function validator_update($data){
        $rules = [];
        if (array_key_exists('name', $data)){
            $rules['name'] = 'required|string';
        }

        return Validator::make($data,
            $rules
        );    
    }
}
