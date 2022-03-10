<x-guest-margin>
    <div class="container px-6 mx-auto my-24">
          <h1 class="mb-4 text-3xl font-bold">{{$category->name }}</h1>

          <p class="mb-6">
            {{ $category->description }}
          </p>

          <p class="mb-6">
            {{ $category->image_url }}
          </p>

          <div class="mt-2">
            <img src="{{ asset('/storage/' .$category->image_url) }}">
        </div>

      </div>
    </x-guest-margin>

