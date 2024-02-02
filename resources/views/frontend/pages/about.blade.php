@extends('frontend.index')
@section('content')
<main>
    <section style="background-image: url({{ asset('frontend/asset') }}/assets/office.webp)">
        <div class="pt-20 text-white font-ru bg-[#515a60d6]">
            <h2
                class="flex justify-center mt-20 mb-5 text-5xl font-semibold"
            >
                About Us
            </h2>
            <div class="flex justify-center items-center gap-x-4 pb-20">
                <a href="{{ route('home') }}">Home </a>
                <div class="w-3 h-3 bg-primary rounded-full"></div>
                <p>About Us</p>
            </div>
        </div>
    </section>
    <section class="bg-white py-16">
        <div class="container mx-auto px-2 sm:flex">
            <div class="sm:w-[40%]">
                <img src="{{ asset('frontend/asset') }}/assets/single-img-07.jpg" />
            </div>
            <div class="sm:w-[60%] font-ru sm:ml-5 lg:ml-10 text-justify">
                <h6 class="text-primary font-medium smd:max-sm:mt-5 smd:max-sm:text-center">WHO WE ARE</h6>
                <h5 class="text-5xl text-textcolor mt-7 smd:max-sm:text-center">About</h5>
                <p class="text-ptagcolor mt-10 mb-5">
                    We LN Associate Limited is one of the Leading
                    Apparel Sourcing, Manufacturing and Buying office in
                    Dhaka, Bangladesh since 2007.
                </p>
                <p class="text-ptagcolor my-5">
                    We are strongly capable to handle any products among
                    Knit, Woven, Denim & Sweater for Men’s, Ladies ,
                    Boys and girls.
                </p>
                <p class="text-ptagcolor my-5">
                    Also we have a great number of sourcing of all kinds
                    of raw materials and garment factories, textile
                    mills & washing plants..
                </p>
                <p class="text-ptagcolor font-medium my-5">
                    We are exporting Circular Knit (T-Shirt, Polo Shirt,
                    Tank Top or Vest, Ladies Blouse & Tops, Fleece,
                    Polar Fleece), Flat Knit (Sweater 3gg, 5gg, 7gg,
                    12gg, 14gg), Woven ( Shirt, Pants, Shorts), Denim
                    (Long & short pants, yoga & cargo pants) & Under
                    Garments (Lingerie, Swim Wear, Beach Wear etc.),
                    Uniform, Children Wear, Fleece Jackets, Sweat Shirt,
                    Sports Wear, Night Wear, Polyester Jersey and Face
                    Mask etc.
                </p>
                <p class="text-ptagcolor my-5">
                    LN Associate Limited has been doing business with
                    European, American, Canadian, Australian, New
                    Zealand & South Africans clothing brands.
                </p>
                <p class="text-ptagcolor my-5">
                    We have skilled and well trained Merchandising team,
                    Quality assurance team, Garment technical team,
                    Planning team, Social Compliance audit team,
                    Commercial and shipping team.
                </p>
                <p class="text-ptagcolor my-5">
                    Our motto is “ Deliver on time in undamaged
                    condition at competitive price “
                </p>
                <p class="text-ptagcolor my-5">
                    We are very eager to be a proud member of your
                    esteemed organization with your kind consideration
                    !!
                </p>
                <div class="flex gap-x-5 mt-7">
                    <a
                        class="uppercase font-ru font-medium !bg-white text-primary px-6 py-2 button !z-10"
                        ><span class="hoverspan"></span>view more</a
                    >
                    <a
                        class="uppercase font-ru !bg-white font-medium text-primary px-6 py-2 button !z-10"
                        ><span class="hoverspan"></span>contact us</a
                    >
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-10">
            <div class="text-center">
                <h5 class="text-primary text-xl font-semibold">
                    TEAMMEMBERS
                </h5>
                <h4 class="text-5xl text-textcolor font-medium mt-7">
                    The Textiles Experts!
                </h4>
                <div class="mt-10 sm:flex gap-x-5">
                    <div>
                        <img
                            class="md:w-[250px] h-[350px] sm:w-[200px] sm:h-[300px]"
                            src="{{ asset('frontend/asset') }}/assets/bg2.jpg"
                        />
                        <div
                            class="bg-white relative shadow-lg inline-block bottom-8 font-ru md:p-3 p-3 sm:p-1"
                        >
                            <p
                                class="font-medium text-primary text-2xl"
                            >
                                Jahid
                            </p>
                            <p class="text-textcolor font-medium">
                                INTERNATIONAL,<br />
                                MARKETING DIRECTOR
                            </p>
                        </div>
                    </div>
                    <div>
                        <img
                            class="md:w-[250px] h-[350px] sm:w-[200px] sm:h-[300px]"
                            src="{{ asset('frontend/asset') }}/assets/bg2.jpg"
                        />
                        <div
                            class="bg-white relative shadow-lg inline-block bottom-8 font-ru md:p-3 p-3 sm:p-1"
                        >
                            <p
                                class="font-medium text-primary text-2xl"
                            >
                                Jahid
                            </p>
                            <p class="text-textcolor font-medium">
                                INTERNATIONAL,<br />
                                MARKETING DIRECTOR
                            </p>
                        </div>
                    </div>
                    <div>
                        <img
                            class="md:w-[250px] h-[350px] sm:w-[200px] sm:h-[300px]"
                            src="{{ asset('frontend/asset') }}/assets/bg2.jpg"
                        />
                        <div
                            class="bg-white relative shadow-lg inline-block bottom-8 font-ru md:p-3 p-3 sm:p-1"
                        >
                            <p
                                class="font-medium text-primary text-2xl"
                            >
                                Jahid
                            </p>
                            <p class="text-textcolor font-medium">
                                INTERNATIONAL,<br />
                                MARKETING DIRECTOR
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection