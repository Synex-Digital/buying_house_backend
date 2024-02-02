@extends('frontend.index')
@section('content')
    <main>
        <section style="background-image: url({{ asset('frontend/asset') }}/assets/office.webp)">
            <div class="pt-20 text-white font-ru bg-[#515a60d6]">
                <h2 class="flex justify-center mt-20 mb-5 text-5xl font-semibold">
                    Contact Us
                </h2>
                <div class="flex justify-center items-center gap-x-4 pb-20">
                    <a href="{{ route('home') }}">Home </a>
                    <div class="w-3 h-3 bg-primary rounded-full"></div>
                    <p>Contact Us</p>
                </div>
            </div>
        </section>
        <section class="bg-white py-16">
            <div class="font-ru container mx-auto px-2">
                <h2 class="flex justify-center lg:mt-20 mt-10 mb-5 text-5xl font-semibold text-textcolor">
                    Contact Form
                </h2>
                <p class="font-medium text-ptagcolor contents sm:flex justify-center">
                    Feel free to contact us through
                    <a class="text-primary mx-2">Twitter</a> or
                    <a class="text-primary mx-2">Facebook</a> if you prefer.
                </p>
                <form action="{{ route('contact.message.store') }}" method="POST">
                    @csrf
                    <div class="lg:px-16 px-5 py-16 mt-10 shadow-xl bg-slate-100 rounded-lg">
                        @if ($errors->any())
                            <div class="bg-danger bg-primary text-white">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="sm:flex justify-between">
                            <input class="sm:w-[32%] w-full border p-4 @error('name') border border-red-500 @enderror" placeholder="Your Name*" type="text" name="name" required/>
                            @error('name')
                            <div class="text-sm font-thin text-red-500">{{ $message }}</div>
                            @enderror
                            <input class="sm:w-[32%] w-full smd:max-sm:my-5 border p-4" name="email" placeholder="Your Email"
                                type="email" name="email*" required/>
                            <input class="sm:w-[32%] w-full border p-4" placeholder="Phone Number*" name="number" required/>
                        </div>
                        <div class="sm:flex justify-between my-7">
                            <input class="sm:w-[48%] w-full border p-4" placeholder="Conpany Name*" name="company_name" required/>
                            <input class="sm:w-[48%] smd:max-sm:mt-5 w-full border p-4" placeholder="Subject" name="subject"/>
                        </div>
                        <div class="flex justify-between my-7">
                            <textarea class="w-full h-48 border p-4" placeholder="Message*" name="message" required></textarea>
                        </div>
                        <div class="flex justify-center">
                            <button type="submit" class="uppercase font-ru font-medium text-primary px-10 py-3 button z-10 !bg-white"><span
                                    class="hoverspan"></span>Submit</button>
                        </div>
                    </div>
                </form>
                <div class="xl:flex gap-x-5 mt-28">
                    <div class="xl:w-1/2">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.02637707981!2d90.37117441058695!3d23.74643878382104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40311a29c1f9eaa9%3A0x7eda334fe00e121c!2sSynex%20Digital!5e0!3m2!1sen!2sbd!4v1705259682326!5m2!1sen!2sbd"
                            width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="xl:w-1/2 smd:max-xl:mt-5">
                        <h6 class="mb-5 text-5xl text-textcolor">
                            Get In
                            <span class="mb-5 text-5xl font-semibold text-textcolor">Touch!</span>
                        </h6>
                        <h6 class="mt-10 mb-5 text-3xl font-medium text-textcolor">
                            Head Office
                        </h6>
                        <div class="sm:flex gap-x-5">
                            <div class="flex items-center gap-x-5">
                                <i class="fa-solid fa-location-dot text-3xl text-primary"></i>
                                <div>
                                    <p class="mb-3 text-xl font-medium text-textcolor">
                                        Address
                                    </p>
                                    <p class="text-ptagcolor">
                                        House-36, Road-9, Sector-4 Uttara,
                                        Dhaka-1230.
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-center gap-x-5">
                                <i class="fa-solid fa-envelope text-3xl text-primary"></i>
                                <div>
                                    <p class="mb-3 text-xl smd:max-sm:mt-5 font-medium text-textcolor">
                                        Call Us / Email
                                    </p>
                                    <p class="text-ptagcolor">
                                        +8801703017360<br />
                                        +8801726225633<br />
                                        zaherul.islam1978@gmail.com<br />
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
