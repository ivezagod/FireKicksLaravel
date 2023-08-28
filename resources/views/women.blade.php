<x-app-layout>
    <div class="container mx-auto ">


        <div class="h-16"></div>
        <div class="flex flex-col items-center  md:flex-wrap md:flex-row md:justify-between md:gap-4" >

            @foreach($sneakers as $sneaker)
                @if($sneaker->gender === 'Female')
                    <a href="{{route('products.show', $sneaker->id)}}">
                        <div class="mt-10">
                            <img src="{{$sneaker->image}}" alt="" class="w-80 h-64">
                            <img src="{{$sneaker->brand->image}}" alt="" class="ml-2 w-16 h-16 ">
                            <p class="text-black p-1">Dostupno boja: {{$sneaker->num_color}}</p>
                            <hr class="border-black">

                            <p class="text-black p-1">{{$sneaker->title}}</p>
                            <hr class="border-black w-44">
                            <p class="text-black mb-5 p-1">{{$sneaker->price}}$</p>

                        </div>
                    </a>
                @endif

            @endforeach

        </div>
    </div>
</x-app-layout>
