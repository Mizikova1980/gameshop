<?php

namespace App\Http\Controllers;

use App\Mail\OrderCompleted;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
       $orders = Order::all();
       return view('order.index', compact('orders'));
    }

    public function create()
    {
        return view('order.create');
    }

    public function store(Request $request)
    {
        $data=request()->validate([
            'user_id' => 'integer',
            'state' => 'integer',
           ]);

        Product::create($data);
        return redirect()->route('products.index');
    }


    public function show(Order $order)
    {

        $userId = $order->user_id;
        $user = User::find($userId);
        $userEmail = $user->email;
        $products = $order->products();
        
        return view('order.show', compact(['order', 'userEmail', 'products']));
    }

    public function edit(Order $order)
    {
        return view('order.edit', compact('order'));
    }

    public function update(Order $order)
    {
        $data=request()->validate([
            'user_id' => 'integer',
            'state' => 'integer',
           ]);

        $order->update($data);
        return redirect()->route('orders.index');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index');
    }

    public function buy(int $id)
    {
        $product = Product::query()->find($id);
        $userId = Auth::id();

        if (!$product) {
            return redirect()->route('home');
        }

        $currentOrder = Order::getCurrentOrder($userId);


        if (!$currentOrder) {

            $data = [
                'user_id' => $userId,
                'state' => Order::STATE_CURRENT,
            ];
            $currentOrder = new Order($data);
            $currentOrder->save($data);

        }

        (new OrderProduct([
            'order_id' => $currentOrder->id,
            'product_id' => $product->id,
        ]))->save();

        return redirect()->route('orders.current');

    }

    public function current ()
    {
        $categories = Category::all();

        $order=Order::getCurrentOrder(Auth::id());
        $sum = $order->getSum();
        return view('cart2', ['categories' => $categories,
                               'order' => $order ?? [],
                               'sum' => $order ? $sum : 0
                            ]);
    }

    public function process()
    {
        $currentOrder = Order::getCurrentOrder(Auth::id());
        if (!$currentOrder) {
            return redirect()->route('home');
        }
        $admin=User::query()->where('isAdmin', '=', 1)->first();

        Mail::to($admin)->send(new OrderCompleted($currentOrder, Auth::user()));

        $currentOrder->saveAsProcessed();

        return view('order.completed');
    }


}
