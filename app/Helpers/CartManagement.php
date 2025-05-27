<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Cookie;
use App\Models\Product;

class CartManagement
{

    public $cart =[];
    public function isInCart($productId)
{
    foreach ($this->cart as $item) {
        if ($item['product_id'] == $productId) {
            return true;
        }
    }
    return false;
}
    // Get cart items from cookie (returns array)
    public static function get()
    {
        return self::getCartItemsFromCookie();
    }

    // Add product to cart or increase quantity
    public static function addToCart($product_id)
    {
        $cart_items = self::getCartItemsFromCookie();

        // Check if product already in cart
        $existing_key = null;
        foreach ($cart_items as $key => $item) {
            if ($item['product_id'] == $product_id) {
                $existing_key = $key;
                break;
            }
        }

        if ($existing_key !== null) {
            // Increase quantity and update total_amount
            $cart_items[$existing_key]['quantity']++;
            $cart_items[$existing_key]['total_amount'] =
                $cart_items[$existing_key]['quantity'] * $cart_items[$existing_key]['unit_amount'];
        } else {
            // Fetch product from DB and add new item
            $product = Product::find($product_id);
            if ($product) {
                $cart_items[] = [
                    'product_id'   => $product->id,
                    'name'         => $product->name,
                    'image'        => $product->images[0] ?? null,
                    'quantity'     => 1,
                    'unit_amount'  => $product->price,
                    'total_amount' => $product->price,
                ];
            }
        }

        self::addCartItemsToCookie($cart_items);

        return count($cart_items);
    }
    // Add product to cart or increase quantity
    public static function addItemToCartWithQty($product_id,$qty=1)
    {
        $cart_items = self::getCartItemsFromCookie();

        // Check if product already in cart
        $existing_item = null;
        foreach ($cart_items as $key => $item) {
            if ($item['product_id'] == $product_id) {
                $existing_item = $key;
                break;
            }
        }

        if ($existing_item !== null) {
            // Increase quantity and update total_amount
            $cart_items[$existing_item]['quantity'] =$qty;
            $cart_items[$existing_item]['total_amount'] =$cart_items[$existing_item]['quantity']*$cart_items[$existing_item]['unit_amount'];
           
        } else {
            // Fetch product from DB and add new item
            $product = Product::find($product_id);
            if ($product) {
                $cart_items[] = [
                    'product_id'   => $product->id,
                    'name'         => $product->name,
                    'image'        => $product->images[0] ?? null,
                    'quantity'     => $qty,
                    'unit_amount'  => $product->price,
                    'total_amount' => $product->price,
                ];
            }
        }

        self::addCartItemsToCookie($cart_items);

        return count($cart_items);
    }

    // Remove an item from cart by product_id
    public static function removeCartItem($product_id)
    {
        $cart_items = self::getCartItemsFromCookie();

        // Remove item matching product_id
        $cart_items = array_filter($cart_items, fn($item) => $item['product_id'] != $product_id);

        // Re-index array (important after filter)
        $cart_items = array_values($cart_items);

        self::addCartItemsToCookie($cart_items);

        return $cart_items;
    }

    // Clear all cart items (remove cookie)
    public static function clearCart()
    {
        Cookie::queue(Cookie::forget('cart_items'));
    }

    // Get cart items from cookie safely
    public static function getCartItemsFromCookie()
    {
        $cart_items_json = Cookie::get('cart_items');
        $cart_items = json_decode($cart_items_json, true);

        return is_array($cart_items) ? $cart_items : [];
    }

    // Save cart items array to cookie (30 days)
    public static function addCartItemsToCookie(array $cart_items)
    {
        Cookie::queue('cart_items', json_encode($cart_items), 60 * 24 * 30);
    }

    // Increment quantity for specific product
    public static function incrementQuantity($product_id)
    {
        $cart_items = self::getCartItemsFromCookie();

        foreach ($cart_items as $key => $item) {
            if ($item['product_id'] == $product_id) {
                $cart_items[$key]['quantity']++;
                $cart_items[$key]['total_amount'] =
                    $cart_items[$key]['quantity'] * $cart_items[$key]['unit_amount'];
                break;
            }
        }

        self::addCartItemsToCookie($cart_items);

        return $cart_items;
    }

    // Decrement quantity for specific product if quantity > 1
    public static function decrementQuantity($product_id)
    {
        $cart_items = self::getCartItemsFromCookie();

        foreach ($cart_items as $key => $item) {
            if ($item['product_id'] == $product_id && $cart_items[$key]['quantity'] > 1) {
                $cart_items[$key]['quantity']--;
                $cart_items[$key]['total_amount'] =
                    $cart_items[$key]['quantity'] * $cart_items[$key]['unit_amount'];
                break;
            }
        }

        self::addCartItemsToCookie($cart_items);

        return $cart_items;
    }

    // Calculate total price of all items
    public static function calculateGrandTotal(array $items)
    {
        return array_sum(array_column($items, 'total_amount'));
    }
}
