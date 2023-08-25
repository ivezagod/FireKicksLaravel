<div class="relative">
    <input type="text" name="search" class="bg-white  h-7 w-56 mr-4 border-none " wire:model = 'search'>

    @if($searchData)
    <div class=" w-56 h-44 bg-white absolute   overflow-hidden   ">


        @foreach($searchData as $data)
            <a href="{{route('products.show',$data->id)}}">
            <div class="flex ">
            <img class="w-12 h-9 mt-2 ml-2 " src="{{$data->image}}" alt="">
            <div class="mt-3 ml-4">{{$data->title}}</div>
                <div class="mt-3 mr-2">{{$data->price}}$</div>

            </div>
            </a>
        @endforeach
    </div>
    @endif
</div>
