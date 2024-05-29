<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Order;
use Artesaos\SEOTools\Facades\SEOMeta;
class WelcomeController extends Controller
{
    public function __invoke()
    {
        SEOMeta::setTitle("Mushugranel | Botánica Semillas a granel y mayoreo.");
        if (auth()->user()) {
            $pendiente = Order::where('status', 1)->where('user_id', auth()->user()->id)->count();
            if ($pendiente) {
                $mensaje = "Hola tienes: $pendiente ordenes pendientes. <a class='font-bold' href='" . route('orders.index') ."?status=1'>Ir a pagar</a>";
                session()->flash('flash.banner', $mensaje);
            }
        }
        $categories = Category::all();
        return view('welcome', compact('categories'));
    }
}
