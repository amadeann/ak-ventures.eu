@extends('_layouts.master')

@section('body')
<div class="hero bg-cover bg-center relative flex justify-end text-white" style="background-image: url('/assets/images/tallinn_panorama_1200_675.jpg');">
    <div class="w-full md:w-3/5 lg:w-1/2 pt-20 pb-20 md:py-20 lg:py-32 px-4 flex justify-center lg:justify-start">
        <div class="max-w-xl text-center md:text-left">
            <h1 class="mb-8 text-4xl lg:text-5xl font-bold leading-normal">A&K Ventures OÜ</h1>
            <h2 class="text-2xl font-light leading-normal">
                Profitable ventures powered by Estonian e-residency.
            </h2>
        </div>
    </div>
</div>
<div class="flex justify-center bg-gold-100 text-gray-600">
    <div class="container max-w-3xl flex flex-col items-center mx-auto py-20 px-4 text-center">
        <h2 class="text-3xl mb-12">About Us</h2>
        <p class="text-xl mb-8">A&K Ventures OÜ is a company established in July 2016 by Amadeusz Annissimo and Karol Kaczmarek. We don't have a grandiose story of creating the business out of passion or to change the world. We start ventures in markets where we see an opportunity to make a profit by serving existing customers' needs. From <a href="https://spicandspan.net/en/">home & office cleaning services</a> through real estate consulting, and web development to data preparation work for large enterprises nothing is below us or above our reach. Our philosophy is a plain and simple exchange of value: giving individuals and businesses what they need and getting paid for our work.</p>
        <p class="text-xl">If you are our customer or business partner that was wondering why out of all places are we registered in Estonia, here's the answer: we chose Estonia as a place to start our business for its friendly business environment, low administrative burden, and solid transparency principles. Even a few years after that decision we're still positively surprised from time to time how easy it is to get things done there, without unnecessary bureaucracy. Estonia is not a tax haven, the company's profits are taxed at 20% at the moment of dividend payout, and each €100 of net salary we get as founders requires us to pay €72.36 to Estonian Tax and Customs Board in taxes and obligatory insurance contributions. It's not a place we picked to save money on taxes, it's a place we chose to save us headaches on administrative issues that would distract us too much from running a business.</p>
    </div>
</div>
<div class="flex justify-center bg-blue-200 text-gray-600">
    <div class="container max-w-3xl flex flex-col items-center mx-auto py-20 px-4 text-center">
        <h2 class="text-3xl mb-12">Co-Founders</h2>
        <p class="text-xl mb-8">We met in 2009 during a freshman year at SGH Warsaw School Of Economics, a business school in the capital city of Poland. We were a part of a small group of students who chose to take as many courses taught in English as possible. We had similar goals and knew that one day we would start a business. A couple of years after graduating, and getting work experience at big corporations and venture-funded startups, we did just that.</p>
        <p class="text-xl mb-20">Even though we share very similar backgrounds, we have completely different personalities, skills, talents, and areas of expertise complementing each other to run strong businesses and lead globally distributed teams.</p>
        <div class="flex flex-wrap w-full">
            <div class="w-full sm:w-1/2 flex flex-col items-center mb-12 sm:mb-0">
                <div style="background-image: url('/assets/images/amadeus_desaturated_512_512.jpg');" class="relative rounded-full h-48 w-48 mb-4 bg-contain">
                    <div class="absolute inset-0 bg-blue-600 opacity-20 h-full w-full rounded-full"></div>
                </div>
                <span class="block text-xl mb-2">Amadeusz Annissimo</span>
                <ul class="flex items-between">
                    <li>
                        <a href="https://www.linkedin.com/in/annissimo/">
                            <linkedin-icon class="h-4 text-blue-800 mx-1"></linkedin-icon>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/Amadeann">
                            <twitter-icon class="h-4 text-blue-800 mx-1"></twitter-icon>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="w-full sm:w-1/2 flex flex-col items-center">
                <div style="background-image: url('/assets/images/karl_desaturated_450_450.jpg');" class="relative rounded-full h-48 w-48 mb-4 bg-contain">
                    <div class="absolute inset-0 bg-blue-600 opacity-20 h-full w-full rounded-full"></div>
                </div>
                <span class="block text-xl mb-2">Karol Kaczmarek</span>
                <ul class="flex items-between">
                    <li>
                        <a href="https://www.linkedin.com/in/karol-kaczmarek-39a29651/">
                            <linkedin-icon class="h-4 text-blue-800 mx-1"></linkedin-icon>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/KarolKaczmarek_">
                            <twitter-icon class="h-4 text-blue-800 mx-1"></twitter-icon>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="flex justify-center bg-cyan-400 text-gray-600">
    <div class="container max-w-3xl flex flex-col items-center mx-auto py-20 px-4 text-center">
        <h2 class="text-3xl mb-12">Contact Us</h2>
        <p class="text-xl mb-12">If you want to get in touch with us, use the contact form below. We're always interested in new business opportunities. We read every email, and try to reply to all of them, even if the reply is "we're not interested". If you want our mailing address, email or a phone number, you can find them in the footer section of this website.</p>
        <contact-form v-slot="slotProps">
            <div>
                <form action="/" name="contact" method="POST" data-netlify="true" class="flex flex-wrap" ref="form" v-on:submit.prevent="slotProps.submit" v-if="slotProps.showForm">
                    <div class="w-full px-4 mb-6 md:mb-0">
                        <input 
                            class="appearance-none block w-full text-gray-700 bg-cyan-200 border-b-2 border-cyan-700 py-3 px-4 mb-3 leading-tight focus:outline-none text-xl rounded-none" 
                            type="text" 
                            placeholder="Full name"
                            name="full_name"
                            required
                        >
                    </div>
                    <div class="w-full px-4 mb-6 md:mb-0">
                        <input 
                            class="appearance-none block w-full text-gray-700 bg-cyan-200 border-b-2 border-cyan-700 py-3 px-4 mb-3 leading-tight focus:outline-none text-xl rounded-none" 
                            type="email" 
                            placeholder="Email"
                            name="email"
                            required
                        >
                    </div>
                    <div class="w-full px-4 mb-6 md:mb-0">
                        <input 
                            class="appearance-none block w-full text-gray-700 bg-cyan-200 border-b-2 border-cyan-700 py-3 px-4 mb-3 leading-tight focus:outline-none text-xl rounded-none" 
                            type="text" 
                            placeholder="Phone"
                            name="phone"
                            required
                        >
                    </div>
                    <div class="w-full px-4 mb-6 md:mb-8">
                        <textarea 
                            rows="1" 
                            class="autosizeable appearance-none block w-full bg-cyan-200 text-gray-700 border-b-2 border-cyan-700 py-3 px-4 mb-3 leading-tight focus:outline-none text-xl rounded-none" 
                            placeholder="What can we do for you?"
                            name="message"
                            required
                        ></textarea>
                    </div>
                    <div class="flex justify-center w-full py-3">
                        <button type="submit" class="bg-navy-500 text-white px-8 py-4 rounded-full text-black font-bold text-xl no-underline">Send</button>
                    </div>
                </form>
                <div v-else>
                    <p class="text-2xl mb-4">
                        Thank you for sumbitting the form!
                    </p>
                    <p>If you want to send another form, <span class="underline cursor-pointer" v-on:click="slotProps.reset">click here</span>.</p>
                </div>
            </div>
        </contact-form>
    </div>
</div>
<footer class="text-gray-100">
    <div class="bg-gray-700 px-4 py-8 font-thin text-sm">
        <div class="container mx-auto text-center">
            <p class="mb-1">
                © 2016-{{ date('Y') }} A&amp;K Ventures OÜ. All rights reserved.
            </p>
            <p class="mb-1 text-gray-200">
                A&K Ventures OÜ | Sepapaja 6 | Tallinn 15551 | Estonia | +372 71 22 225 | info@ak-ventures.eu
            </p>
            <p class="mb-1 text-gray-200">
                Board Members: Karol Kaczmarek, Amadeusz Annissimo | Registered at Tartu County Court Registration Department
            </p>
            <p class="mb-1 text-gray-200">
                Registry Code: 14080385 | EU VAT: EE102039335
            </p>
        </div>
    </div>
</footer>
@endsection

