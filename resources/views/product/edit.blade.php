<x-app-layout>
<div class="h-16"></div>
    <div class="container mx-auto text-center flex flex-col items-center">
        <h2 class="text-3xl mt-5 mb-10">Edit</h2>
        <form action="{{route('products.update',$product->id)}} " method="post" enctype="multipart/form-data"
              class="flex flex-col gap-5 ">
            @csrf
            @method('PATCH')

            <div class="flex flex-col">
                <label for="title">Title</label>
                <input class="rounded-md" type="text" name="title" value="{{$product->title}}">
            </div>

            <div class="flex flex-col">
                <label for="price">Price</label>
                <input class="rounded-md" type="number" name="price" value="{{$product->price}}">
            </div>

            <div class="flex flex-col">
                <label for="description">Description</label>
                <input class="rounded-md" type="text" name="description" value="{{$product->description}}">
            </div>

            <div class="flex flex-col">
                <label for="num_color">Number of colors</label>
                <input class="rounded-md" type="number" name="num_color" value="{{$product->num_color}}">
            </div>

            <div class="flex flex-col">
                <label for="gender">Gender</label>
                <input class="rounded-md" type="text" name="gender" value="{{$product->gender}}">
            </div>

            <div class="flex flex-col">
                <label for="brand_id">Brand</label>
                <input class="rounded-md" type="number" name="brand_id" value="{{$product->brand_id}}">
            </div>

        @can('update',$product)
        <form action="{{route('products.destroy',$product->id)}}" method="post">
            @csrf
            @method("delete")
            <button class="text-red-600 bg-black rounded-md h-10" type="submit">Delete</button>
        </form>
        @endcan

            <button type="submit" class="p-5 bg-red-600 w-36 mt-5 mb-5  rounded-md">Create sneaker</button>
        </form>

    </div>
</x-app-layout>
