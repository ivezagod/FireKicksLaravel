<x-app-layout>
<div class="h-16"></div>
    <div class="container mx-auto text-center flex flex-col items-center">
        <h2 class="text-3xl mt-5">Edit</h2>
        <form action="{{route('products.update',$product->id)}} " method="post" enctype="multipart/form-data"
              class="flex flex-col gap-5">
            @csrf
            @method('PATCH')

            <div class="flex flex-col">
                <label for="title">Title</label>
                <input type="text" name="title" value="{{$product->title}}">
            </div>

            <div class="flex flex-col">
                <label for="price">Price</label>
                <input type="number" name="price" value="{{$product->price}}">
            </div>

            <div class="flex flex-col">
                <label for="description">Description</label>
                <input type="text" name="description" value="{{$product->description}}">
            </div>

            <div class="flex flex-col">
                <label for="num_color">Number of colors</label>
                <input type="number" name="num_color" value="{{$product->num_color}}">
            </div>

            <div class="flex flex-col">
                <label for="gender">Gender</label>
                <input type="string" name="gender" value="{{$product->num_color}}">
            </div>

            <div class="flex flex-col">
                <label for="brand_id">Brand</label>
                <input type="number" name="brand_id" value="{{$product->brand_id}}">
            </div>


            <button type="submit" class="p-5 bg-red-600 w-36 ml-16 rounded-md">Create sneaker</button>
        </form>

        @can('update',$product)
        <form action="{{route('products.destroy',$product->id)}}" method="post">
            @csrf
            @method("delete")
            <button type="submit">Delete</button>
        </form>
        @endcan
    </div>
</x-app-layout>
