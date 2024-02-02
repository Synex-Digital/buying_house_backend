@extends('frontend.index')
@section('content')
<main>
    <section style="background-image: url({{ asset('frontend/asset') }}/assets/office.webp)">
        <div class="pt-20 text-white font-ru bg-[#515a60d6]">
            <h2
                class="flex justify-center mt-20 mb-5 text-5xl font-semibold"
            >
                Mission Vision
            </h2>
            <div class="flex justify-center items-center gap-x-4 pb-20">
                <a href="{{ route('mission.and.vission') }}">Home </a>
                <div class="w-3 h-3 bg-primary rounded-full"></div>
                <p>Mission Vision</p>
            </div>
        </div>
    </section>
    <section class="bg-white py-16">
        <div class="container mx-auto px-2 text-justify font-ru">
            <h6 class="font-semibold text-textcolor smd:max-sm:text-center text-2xl">Mission</h6>
            <p class="font-medium mt-5 mb-7 text-ptagcolor">
                Our mission is to serve our clients in the area of
                supply chain management solutions for betterment of
                their business. We endeavor to provide superior client
                service and build long-term client relationships.
            </p>
            <h6 class="font-semibold text-textcolor smd:max-sm:text-center text-2xl">Vision</h6>
            <p class="font-medium mt-5 text-ptagcolor">
                To be recognized as one of the leading apparel,
                handicraft, decorative items, glassware, wooden gifts
                and soft toys and textile sourcing company in the global
                market as measured by successful client relationships.
            </p>
        </div>
    </section>
</main>
@endsection