@extends('frontend.index')
@section('content')
    <main>
        <section style="background-image: url({{ asset('frontend/asset') }}/assets/office.webp)">
            <div class="pt-20 text-white font-ru bg-[#515a60d6]">
                <h2 class="flex justify-center mt-20 mb-5 text-5xl font-semibold">
                    @if ($cat)
                        {{ $cat->parentcategory?$cat->parentcategory->category_name : 'All Category' }}
                    @endif
                </h2>
                <div class="flex justify-center items-center gap-x-4 pb-20">
                    <a href="{{ route('home') }}">Home </a>
                    <div class="w-3 h-3 bg-primary rounded-full"></div>
                    <p>{{ $cat?$cat->category_name:'All Category' }}</p>
                </div>
            </div>
        </section>
        <section class="bg-white py-16">
            <div class="container mx-auto px-2 font-ru sm:flex justify-between">
                <div class="sm:w-[32%] border-t ">
                    @foreach ($categories as $category)
                    <div class="w-full cursor-pointer pt-5">
                        <a href="#" class="font-medium smd:max-sm:px-6 sm:px-2 md:px-6 z-10 hovercategorydiv border py-4 flex justify-between toggle-category">
                            {{-- {{ route('categories.product', ['id' => $category->id]) }} --}}
                            {{ strtoupper($category->category_name) }}
                            <span class="text-xl sm:hidden lg:block">></span><span class="hovercategory"></span></a>
                            <ul class="mt-5 pl-4" style="padding-left: 12px; display: none;">
                                {{-- {{ $category->childCategories }} --}}
                                @if ($category->childCategories)
                                    @foreach ($category->childCategories as $child)
                                    <a href="{{ route('subcategories.product', ['id' => $child->id]) }}" class="font-medium smd:max-sm:px-6 sm:px-2 md:px-6 z-10 hovercategorydiv border py-4 flex justify-between">
                                        {{ strtoupper($child->category_name) }}
                                        <span class="text-xl sm:hidden lg:block">></span><span class="hovercategory"></span></a>
                                    @endforeach
                                @endif
                            </ul>
                    </div>
                    @endforeach
                </div>
                <div class="sm:w-[65%] flex flex-wrap gap-4 smd:max-sm:mt-5">
                    @foreach ($products as $product)
                        <a class="block sm:w-[48%] xl:w-[32%] cursor-pointer shadow-lg rounded-md p-3 hover:border-primary border"
                            href="{{ route('product.details', ['id' => $product->id]) }}">
                            <img class="" class="object-cover" src="{{ asset('images/product/' . $product->thumbnail[0]->images) }}" alt="">
                            <p class="font-medium text-center mt-3">
                                {{ strtoupper($product->parentcategory) }}
                            </p>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
        $(".toggle-category").click(function () {
            var $ul = $(this).next("ul");
            $ul.slideToggle();

            // Change icon based on the visibility of the ul
            var $toggleIcon = $(this).find(".toggle-icon");
            $toggleIcon.text($ul.is(":visible") ? "v" : ">");
        });
    });
    </script>
@endsection
