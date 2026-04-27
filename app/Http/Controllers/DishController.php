<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Dish;
use App\Models\Order;
class DishController extends Controller
{
    public function index()
    {
        $ansang = Dish::where('category_id', 1)->get();
    $anvat = Dish::where('category_id', 2)->get();
    $nuocuong = Dish::where('category_id', 3)->get();

    return view('menu', compact('ansang', 'anvat', 'nuocuong'));
}
    public function home() {
    $dishes = Dish::all(); 
    return view('home', compact('dishes'));
}
    public function datmon($id)
    {
        $dish = Dish::find($id);
        return view('datmon', compact('dish'));
    }
    public function storeOrder(Request $request)
{
    $request->validate([
        'dish_id' => 'required|exists:dishes,id',
        'quantity' => 'required|integer|min:1',
    ]);

    Order::create([
        'user_id' => Auth::id(), // 🔥 nằm ở đây
        'dish_id' => $request->dish_id,
        'quantity' => $request->quantity,
    ]);

    return back()->with('success', 'Đặt món thành công!');
}
}
