@extends('frontend.index')
@section('content')
     <main>
            <section style="background-image: url({{ asset('frontend/asset') }}/assets/office.webp)">
                <div class="pt-20 text-white font-ru bg-[#515a60d6]">
                    <h2
                        class="flex justify-center mt-20 mb-5 text-4xl sm:text-5xl font-semibold"
                    >
                        Offer & Services
                    </h2>
                    <div class="flex justify-center items-center gap-x-4 pb-20">
                        <a href="{{ route('home') }}">Home </a>
                        <div class="w-3 h-3 bg-primary rounded-full"></div>
                        <p>Services</p>
                    </div>
                </div>
            </section>
            <section class="bg-white py-16">
                <div class="container mx-auto px-2 md:flex justify-between">
                    <div class="md:w-[50%]">
                        <h2 class="text-textcolor font-ru smd:max-sm:text-center font-medium text-6xl">
                            Offer
                        </h2>

                        <p
                            class="text-justify font-ru font-medium text-ptagcolor mt-7 leading-8"
                        >
                            We offer to provide support of a trained
                            professional team to our distinguished
                            partner/clients. We assume complete responsibility
                            to make our client's buying experience out of
                            Bangladesh simple and profitable. Keeping in mind
                            the difficulties faced by the importers in sourcing
                            high quality apparel and rightfully offers
                            experienced, quality concise, ethical, honest and
                            dedicated services.
                        </p>
                        <p
                            class="text-justify font-ru font-medium text-ptagcolor mt-7"
                        >
                            As part of our functional responsibilities we
                            facilitate the following:
                        </p>
                        <ul
                            class="list-disc ml-8 font-ru font-medium text-ptagcolor mt-5 leading-10"
                        >
                            <li>Sourcing complaint factory</li>
                            <li>Evaluation of factory</li>
                            <li>Selection of factory</li>
                            <li>Identification of product source</li>
                            <li>Sourcing quality materials</li>
                            <li>Logistic planning</li>
                            <li>Price Negotiation</li>
                            <li>Sample development</li>
                            <li>
                                Production management & follow up production
                            </li>
                            <li>Factory compliance audits</li>
                            <li>Quality assurance and inspections</li>
                            <li>
                                Logistic support up to the port of discharge
                            </li>
                            <li>Professionals quality control</li>
                            <li>Delivery at schedule date</li>
                            <li>Assists on buyers visit</li>
                        </ul>
                        <p
                            class="text-justify font-ru font-medium text-ptagcolor mt-7"
                        >
                            Assists on Buyers visit:
                        </p>
                        <p
                            class="text-justify font-ru font-medium text-ptagcolor mt-7 leading-8"
                        >
                            We accompany our buyers on their buying visits,
                            factory visits and inspection visits. We help them
                            with and arrange their itinerary and accommodation
                            on their visits. We also orient the buyers on norms
                            of the business practice in the country, its
                            culture, customs and tradition to make their visit
                            fruitful and enjoyable.
                        </p>
                        <p
                            class="text-justify font-ru font-medium text-ptagcolor mt-7"
                        >
                            Work as partner/agent/representative/local office of
                            buyers:
                        </p>
                        <p
                            class="text-justify font-ru font-medium text-ptagcolor mt-7 leading-8"
                        >
                            We are also ready to work as a local
                            agent/representative of interested buyer of any
                            countries. Moreover any buyer can operate their
                            local office in Bangladesh as well as in South Asia
                            by using our skilled manpower, office & other
                            facilities. We provide all kinds of technical &
                            professional services as per buyer requirements.
                            Services image Testing image Engineering image
                            Fabric
                        </p>
                    </div>
                    <div class="md:w-[45%] smd:max-md:mt-5">
                        <h2 class="text-textcolor smd:max-sm:text-center font-ru font-medium text-6xl">
                            Services
                        </h2>
                        <div class="flex mt-7 flex-wrap gap-4">
                            <div class="p-5 shadow-xl md:max-lg:w-full sm:w-[48%]">
                                <img
                                    class="w-[400px]"
                                    src="{{ asset('frontend/asset') }}/assets/showroom.jpg"
                                />
                                <div
                                    class="flex justify-between items-center mt-5"
                                >
                                    <h6
                                        class="font-ru text-xl font-medium text-textcolor"
                                    >
                                        Testing
                                    </h6>
                                    <i
                                        class="fa-solid fa-arrow-trend-up text-2xl text-textcolor"
                                    ></i>
                                </div>
                            </div>
                            <div class="p-5 shadow-xl md:max-lg:w-full sm:w-[48%]">
                                <img
                                    class="w-[400px]"
                                    src="{{ asset('frontend/asset') }}/assets/showroom.jpg"
                                />
                                <div
                                    class="flex justify-between items-center mt-5"
                                >
                                    <h6
                                        class="font-ru text-xl font-medium text-textcolor"
                                    >
                                        Engineering
                                    </h6>
                                    <i
                                        class="fa-solid fa-arrow-trend-up text-2xl text-textcolor"
                                    ></i>
                                </div>
                            </div>
                            <div class="p-5 shadow-xl md:max-lg:w-full sm:w-[48%]">
                                <img
                                    class="w-[400px]"
                                    src="{{ asset('frontend/asset') }}/assets/showroom.jpg"
                                />
                                <div
                                    class="flex justify-between items-center mt-5"
                                >
                                    <h6
                                        class="font-ru text-xl font-medium text-textcolor"
                                    >
                                        Fabric Dyeing
                                    </h6>
                                    <i
                                        class="fa-solid fa-arrow-trend-up text-2xl text-textcolor"
                                    ></i>
                                </div>
                            </div>
                            <div class="p-5 shadow-xl md:max-lg:w-full sm:w-[48%]">
                                <img
                                    class="w-[400px]"
                                    src="{{ asset('frontend/asset') }}/assets/showroom.jpg"
                                />
                                <div
                                    class="flex justify-between items-center mt-5"
                                >
                                    <h6
                                        class="font-ru text-xl font-medium text-textcolor"
                                    >
                                        Fabric Printing
                                    </h6>
                                    <i
                                        class="fa-solid fa-arrow-trend-up text-2xl text-textcolor"
                                    ></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
@endsection