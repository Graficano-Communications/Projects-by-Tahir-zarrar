<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; // Correctly import the Session facade
use App\Models\Product; // Product model
use App\Models\ProductVariation; // Model for ProductVariation

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        
        // dd($request->all());
        $product = $request->input('product_id');
        $variation = $request->input('variation_id');
        $quantity = $request->input('quantity');
    
        // Get existing cart from session
        $cart = Session::get('cart', []);
        // dd($cart);
        // Update or add product to cart
        if (isset($cart[$product][$variation])) {
            $cart[$product][$variation]['quantity'] += $quantity;
        } else {
            $cart[$product][$variation] = [
                'product_id' => $product,
                'variation_id' => $variation,
                'quantity' => $quantity,
            ];
        }
    
        // Save the cart to session
        Session::put('cart', $cart);
    
        return redirect()->back()->with('status', 'Item added to cart successfully!');
    }
    

    // View the cart
    public function cart()
    {
       
        // Get the cart from the session
        $cart = Session::get('cart', []);
        // dd($cart);
        // Initialize an array to store the product and variation details
        $cartDetails = [];
    
        // Loop through each product in the cart
        foreach ($cart as $productId => $variations) {
            $product = Product::find($productId); // Get product using product_id
            
            if (!$product) {
                continue; // Skip if product is not found
            }
    
            // Decode product images (assumes product_images is stored as JSON)
            $images = $product->product_images ? json_decode($product->product_images, true) : [];
            $firstImage = !empty($images) ? asset('images/products/' . $images[0]) : null;
    
            // For each variation in the product
            foreach ($variations as $variationId => $item) {
                $variation = ProductVariation::find($variationId);
    
                if (!$variation) {
                    continue; // Skip if variation is not found
                }
    
                // Store the details in the cartDetails array
                $cartDetails[] = [
                    'product' => $product,
                    'variation' => $variation,
                    'quantity' => $item['quantity'],
                    'image' => $firstImage, // Include the first product image
                ];
            }
        }
    
        // Pass the cartDetails to the view
        return view('frontend.cart', compact('cartDetails'));
    }
    public function removeItem(Request $request)
    {
        // Get product and variation IDs from the request
        $productId = $request->input('product_id');
        $variationId = $request->input('variation_id');
    
        // Get the cart from session
        $cart = Session::get('cart', []);
    
        // Check if the product exists in the cart
        if (isset($cart[$productId][$variationId])) {
            // Remove the item from the cart
            unset($cart[$productId][$variationId]);
    
            // If there are no variations left for the product, remove the product from the cart
            if (empty($cart[$productId])) {
                unset($cart[$productId]);
            }
    
            // Save the updated cart back to the session
            Session::put('cart', $cart);
        }
    
        // Recalculate the total subtotal
        $totalSubtotal = 0;
        foreach ($cart as $items) {
            foreach ($items as $item) {
                $totalSubtotal += (float) $item['variation']->code * (int) $item['quantity'];
            }
        }
    
        // Return the updated subtotal as part of the response
        return response()->json([
            'success' => true,
            'message' => 'Item removed from cart',
            'totalSubtotal' => number_format($totalSubtotal, 2) // Return formatted subtotal
        ]);
    }
    
    
}