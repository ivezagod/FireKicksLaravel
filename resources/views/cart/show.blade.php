<x-app-layout>
    <div class="h-16"></div>

    <div class="container mx-auto">
        <h1 class="text-center text-4xl mt-5">My Cart</h1>
            <div class=" flex flex-col  gap-6 border-none p-4 text-xl ">

        @foreach($carts as $cart)



                <div class="flex justify-between gap-6 items-center text-2xl bg-gray-200 p-2">


                <p class="text-xl font-bold">{{$cart->product->title}}</p>
                <img class="w-48 mt-4" src="{{$cart->product->image}}" alt="">
                <p>Pairs: {{$cart->qty}}</p>
                <p class="mt-2">Price: {{$cart->qty * $cart->product->price}}$</p>
                <form action="{{route('orders.destroy',$cart->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="product_id" value="{{$cart->product_id}}">
                    <input type="hidden" name="order_id" value="{{$cart->order_id}}">
                    <button type="submit" class="bg-gray-300 md:w-48 h-16 rounded-md">Remove Product</button>
                </form>
                </div>
                @endforeach
            </div>

            <div class="flex flex-col items-center">
                @if($order->product === null )
                <p class="text-3xl mb-5 mt-5">Total: {{$order->total}}$</p>
                @else
                    Total: 0
                @endif
            </div>
            <div class="flex flex-col items-center" >
                <form action="{{route('carts.destroy',$order->id)}}" method="post" class="">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="order_id" value="{{$order->id}}">
                    <button type="submit" class="p-4 bg-red-500 w-24 rounded-md text-xl mb-10">Buy</button>
                </form>
            </div>
    </div>
</x-app-layout>
