<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; // Import the Session facade
use App\Models\Product; // Import Product model
use App\Models\ProductVariation; // Import ProductVariation model
use App\Models\Order; // Import Order model
use App\Models\OrderItem; // Import OrderItem model

class CheckoutController extends Controller
{
    // Display checkout page
    public function index()
    {
        // Retrieve cart data from session
        $cart = Session::get('cart', []);
        $cartDetails = [];
        $totalSubtotal = 0;

        // Prepare cart details for checkout view
        foreach ($cart as $productId => $variations) {
            $product = Product::find($productId);
            if (!$product) {
                continue; // Skip if product is not found
            }

            // Decode product images
            $images = $product->product_images ? json_decode($product->product_images, true) : [];
            $firstImage = !empty($images) ? asset('images/products/' . $images[0]) : null;

            foreach ($variations as $variationId => $item) {
                $variation = ProductVariation::find($variationId);
                if (!$variation) {
                    continue; // Skip if variation is not found
                }

                $subtotal = (float) $variation->code * (int) $item['quantity']; // Calculate subtotal
                $totalSubtotal += $subtotal;

                $cartDetails[] = [
                    'product' => $product,
                    'variation' => $variation,
                    'quantity' => $item['quantity'],
                    'subtotal' => $subtotal,
                    'image' => $firstImage,
                ];
            }
        }

        return view('frontend.checkout', compact('cartDetails', 'totalSubtotal'));
    }

    // Process checkout and place order
    public function store(Request $request)
    {
        // Validate the request
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email|max:255',
        //     'address' => 'required|string',
        //     'phone' => 'required|string|max:15',
        // ]);
    
        // Retrieve cart data from session
        $cart = Session::get('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart')->with('error', 'Your cart is empty.');
        }
    
        // Create a new order
        $order = Order::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'total' => 0, // Placeholder, updated after items are added
            'status' => 'pending', // Default status
        ]);
    
        $total = 0;
    
        // Add items to the order
        foreach ($cart as $productId => $variations) {
            foreach ($variations as $variationId => $item) {
                $variation = ProductVariation::find($variationId);
                if (!$variation) {
                    continue; // Skip if variation not found
                }
    
                $subtotal = $variation->code * $item['quantity'];
                $total += $subtotal;
    
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $productId,
                    'variation_id' => $variationId,
                    'quantity' => $item['quantity'],
                    'price' => $variation->code,
                    'subtotal' => $subtotal,
                ]);
            }
        }
    
        // Update the total in the order
        $order->update(['total' => $total]);
    
        // Clear the cart session
        Session::forget('cart');
    
        // Redirect to a thank-you page
        return redirect()->route('checkout.thankYou', ['orderId' => $order->id])
        ->with('success', 'Your order has been placed successfully!');
    }
    

    // Thank-you page
    public function thankYou($orderId)
{
    $order = Order::findOrFail($orderId);

    return view('frontend.thank-you', compact('order'));
}

}
