<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProductReviewRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'review_text' => ['required', 'string', 'between:10,255'],
            'rating' => ['required', 'numeric', 'between:1,10'],
            'product_id' => ['required', 'integer', Rule::exists('products', 'id')],
            'user_name' => ['required', 'string', 'max:255'],
        ];
    }
}
