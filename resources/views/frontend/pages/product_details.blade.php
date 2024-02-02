@extends('frontend.index')
@section('content')
<main>
    <section style="background-image: url({{ asset('frontend/asset') }}/assets/office.webp)">
        <div class="pt-20 text-white font-ru bg-[#515a60d6]">
            <h2
                class="flex justify-center mt-20 mb-5 text-5xl font-semibold"
            >
                Product
            </h2>
            <div class="flex justify-center items-center gap-x-4 pb-20">
                <a href="{{ route('home') }}">Home </a>
                <div class="w-3 h-3 bg-primary rounded-full"></div>
                <p>Product Details</p>
            </div>
        </div>
    </section>
    <section class="bg-white py-16">
        <div
            class="container mx-auto px-2 sm:flex justify-between font-ru"
        >
            <div class="sm:w-[62%]">
                <h1 class="font-medium text-textcolor text-3xl mb-5">
                    {{ $product->title }}
                </h1>
                <img width="100%" src="{{ asset('images/product/' . $product->thumbnail[0]->images) }}" />
            </div>
            <div class="sm:w-[34%] bg-slate-50 smd:max-sm:mt-5">
                <h6
                    class="bg-primary p-5 text-center text-3xl font-medium text-white"
                >
                    Product Information
                </h6>
                <div class="p-7">
                    <p class="text-ptagcolor p-6 bg-white border-b">
                        <span class="font-medium text-textcolor"
                            >Title: </span
                        >
                        {{ $product->title }}
                    </p>
                    <p class="text-ptagcolor p-6 bg-white border-b">
                        <span class="font-medium text-textcolor"
                            >Category: </span
                        >{{ strtoupper($product->parent_category->category_name) }}
                    </p>
                    <p class="text-ptagcolor p-6 bg-white border-b">
                        <span class="font-medium text-textcolor"
                            >Sub Category: </span
                        >{{ $product->category ? strtoupper($product->category->category_name) : 'N/A' }}
                    </p>
                    <p class="text-ptagcolor p-6 bg-white border-b">
                        <span class="font-medium text-textcolor"
                            >Condition: </span
                        >New
                    </p>
                    <p class="text-ptagcolor p-6 bg-white border-b">
                        <span class="font-medium text-textcolor"
                            >Status: </span
                        >{{ strtoupper($product->status) }}
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection