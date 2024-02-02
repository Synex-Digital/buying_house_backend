@extends('frontend.index')
@section('content')
    <main>
        <section style="background-image: url({{ asset('frontend/asset') }}/assets/office.webp)">
            <div class="pt-20 text-white font-ru bg-[#515a60d6]">
                <h2 class="flex justify-center mt-20 mb-5 text-5xl font-semibold">
                    All Products
                </h2>
                <div class="flex justify-center items-center gap-x-4 pb-20">
                    <a href="{{ route('home') }}">Home </a>
                    <div class="w-3 h-3 bg-primary rounded-full"></div>
                    <p>All Products</p>
                </div>
            </div>
        </section>
        <section class="bg-white py-16">
            <div class="container mx-auto px-2 font-ru sm:flex justify-between">
                <div class="sm:w-[32%] border-t ">
                    @foreach ($categories as $category)
                    <div class="w-full cursor-pointer pt-5">
                        <a href="{{ route('categories.product', ['id' => $category->id]) }}" class="font-medium smd:max-sm:px-6 sm:px-2 md:px-6 z-10 hovercategorydiv border py-4 flex justify-between">
                            {{ strtoupper($category->category_name) }}
                            <span class="text-xl sm:hidden lg:block">></span><span class="hovercategory"></span></a>
                    </div>
                    @endforeach
                </div>
                <div class="sm:w-[65%] flex flex-wrap gap-4 smd:max-sm:mt-5">
                    @foreach ($products as $product)
                        <a class="block sm:w-[48%] xl:w-[32%] cursor-pointer shadow-lg rounded-md p-3 hover:border-primary border"
                            href="{{ route('product.details', ['id' => $product->id]) }}">
                            <img class="" class="object-cover" src="{{ asset('images/product/' . $product->thumbnail[0]->images) }}" alt="">
                            <p class="font-medium text-center mt-3">
                                {{ strtoupper($product->title) }}
                            </p>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
