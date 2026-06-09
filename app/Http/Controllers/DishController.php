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
    'user_id' => Auth::id(),
    'dish_id' => $request->dish_id,
    'quantity' => $request->quantity,
    'status' => 'pending', 
]);

    return back()->with('success', 'Đặt món thành công!');
}
public function delete($id) {
    $order = Order::find($id);

    if (!$order) {
        return back()->with('error', 'Không tìm thấy món!');
    }

    $order->delete();

    return back()->with('success', 'Đã xóa món khỏi danh sách!');
}
public function thanhtoan()
{
    $orders = Order::with('dish')
        ->where('user_id', Auth::id())
        ->where('status', 'pending') 
        ->get();

    return view('thanhtoan', compact('orders'));
}
public function xulyThanhtoan()
{
    $orders = Order::with('dish')
        ->where('user_id', Auth::id())
        ->where('status', 'pending') 
        ->get();

    if ($orders->isEmpty()) {
        return redirect('/thanhtoan')
            ->with('error', 'Chưa có món để thanh toán!');
    }

    $total = 0;
    foreach ($orders as $order) {
        $total += $order->quantity * $order->dish->price;
    }

    Order::where('user_id', Auth::id())
        ->where('status', 'pending')
        ->update(['status' => 'paid']);

    return redirect('/thanhtoan')
        ->with('success', 'Thanh toán thành công! Tổng tiền: ' . number_format($total) . ' VND');
}
}
