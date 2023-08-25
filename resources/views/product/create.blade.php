<x-app-layout>
    <div class=" container mx-auto flex flex-col items-center ">
        <div class="h-16 "></div>
        <h2 class="text-4xl text-center mt-7">Create your sneakers</h2>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        @endif
        <form action="{{route('products.store')}} " method="post" enctype="multipart/form-data" class="flex flex-col gap-5">
            @csrf

            <div class="flex flex-col">
                <label for="title">Title</label>
                <input type="text" name="title" placeholder="Sneaker name">
            </div>

            <div class="flex flex-col">
                <label for="price">Price</label>
                <input type="number" name="price" placeholder="Sneaker price">
            </div>

            <div class="flex flex-col">
                <label for="description">Description</label>
                <input type="text" name="description" placeholder="Sneaker description">
            </div>

            <div class="flex flex-col">
                <label for="num_color">Number of colors</label>
                <input type="number" name="num_color" placeholder="Sneaker colors">
            </div>

            <div class="flex flex-col">
                <label for="gender">Gender</label>
                <input type="string" name="gender" placeholder="Sneaker colors">
            </div>

            <div class="flex flex-col">
                <label for="brand_id">Brand</label>
                <input type="number" name="brand_id" placeholder="Sneaker brand">
            </div>

            <div class="flex flex-col">
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
            </div>

            <button type="submit" class="p-5 bg-red-600 w-36 ml-24 rounded-md">Create sneaker</button>




        </form>
    </div>
</x-app-layout>
