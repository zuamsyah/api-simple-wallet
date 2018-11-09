<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'transaction_id' => $this->transaction_id,
            'date' => $this->date,
            'type' => $this->type,
            'id' => $this->id,
            'amount' => $this->amount,
            'expense_id' => $this->expense_id,
            'category_id' => $this->category_id
        ];
    }
}
