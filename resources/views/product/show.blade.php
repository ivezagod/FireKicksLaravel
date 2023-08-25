<x-app-layout>
    <div class="h-16" ></div>
    <div class="container mx-auto">
    <div class=" mt-36 flex flex-col  lg:flex-row lg:gap-16">
        <div>


        <div class="bg-zinc-500/10 ml-10 ">

            <img class="w-156 " src="/{{$sneaker->image}}" alt="">
        </div>
            <img class="w-16 h-16 lg:ml-10 ml-96 mb-5" src="{{$sneaker->brand->image}}">

            @can('update',$sneaker)
                <a href="{{route('products.edit',$sneaker->id)}}" class="text-xl text-red-600 bg-black p-1  ml-56 ">Edit</a>
            @endcan
        </div>
        <div class="flex flex-col items-center w-156 md:ml-24 ">
        <h3 class="text-5xl ">{{$sneaker->title}}</h3>
            <p>------------------------------</p>
            <div class="flex">
                <div class="w-24 md:hidden"></div>
            <p class="text-3xl md:mb-10">{{$sneaker->price}}$</p>
            </div>
            <p class="md:mb-10">Lorem ipsum dolor sit amet.</p>


            <p class="mr-16 mb-5">Dostupne velicine:</p>



            <div>
                <div class=" w-80   h-44 flex flex-wrap gap-10">
                    @foreach($sneaker->numbers as $number)
                        <div class="bg-gray-500 w-10 h-10 text-center cursor-pointer clicked:bg-gray-900">
                            <p class="mt-2">{{$number->number}}</p>
                        </div>
                    @endforeach

                </div>
            </div>
            <form action="{{route('orders.store')}}" class="mr-36" method="post">
                @csrf
                <input type="hidden" value="{{$sneaker->id}}" name="product_id">
                <input type="hidden" value="{{auth()->user()->id}}">
                <div class="mt-36">

                <label for="qty" class="">Quantity:</label>
                <input type="text" name="qty" value="1" class="w-10 border-none bg-gray-500">
                </div>
                <button type="submit" class="bg-red-500 ml-36  p-4 rounded-md md:mb-10">Dodaj u korpu</button>
            </form>


        </div>
    </div>
    </div>
</x-app-layout>



