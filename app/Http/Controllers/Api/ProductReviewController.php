<?php

namespace App\Http\Controllers\Api;
use App\Http\Requests\StoreProductReviewRequest;
use App\Models\ProductReview;
use Illuminate\Http\JsonResponse;

final class ProductReviewController
{
    public function store(StoreProductReviewRequest $request): JsonResponse
    {
        $productReview = ProductReview::create([
            'user_name' => $request->string('user_name'),
            'rating' => $request->float('rating'),
            'review_text' => $request->string('review_text'),
            'product_id' => $request->integer('product_id'),
        ]);

        return response()->json($productReview);
    }
}
