@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <x-navbar></x-navbar>

    <!-- Hero Section -->
    <section class="relative w-full min-h-screen overflow-hidden">
        <!-- SVG Background -->
        <div class="absolute inset-0 w-full h-full">
            @if(file_exists(public_path('assets/svg/animated-landscape.svg')))
                <!-- Untuk file SVG animasi, lebih baik inline atau object -->
                <object data="{{ asset('assets/svg/animated-landscape.svg') }}" 
                        type="image/svg+xml" 
                        class="w-full h-full object-cover">
                    <!-- Fallback jika SVG tidak load -->
                    <div class="w-full h-full bg-gradient-to-br from-green-300 via-teal-300 to-green-400"></div>
                </object>
            @else
                <!-- Fallback: SVG inline langsung -->
                <svg class="w-full h-full object-cover" 
                    viewBox="0 0 900 600" 
                    xmlns="http://www.w3.org/2000/svg" 
                    preserveAspectRatio="xMidYMid slice">
                    <rect x="0" y="0" width="900" height="600" fill="#92BFB1"></rect>
                    <path fill="#1a6f54" stroke-linecap="square" stroke-linejoin="miter">
                        <animate attributeName="d" 
                                dur="4s" 
                                repeatCount="indefinite"
                                values="M0 502L90 502L90 399L180 399L180 435L270 435L270 490L360 490L360 455L450 455L450 417L540 417L540 494L630 494L630 443L720 443L720 498L810 498L810 416L900 416L900 418L900 601L900 601L810 601L810 601L720 601L720 601L630 601L630 601L540 601L540 601L450 601L450 601L360 601L360 601L270 601L270 601L180 601L180 601L90 601L90 601L0 601Z;
                                        M0 508L90 495L90 410L180 385L180 448L270 425L270 485L360 475L360 440L450 435L450 405L540 430L540 485L630 460L630 425L720 510L720 485L810 505L810 395L900 425L900 428L900 601L900 601L810 601L810 601L720 601L720 601L630 601L630 601L540 601L540 601L450 601L450 601L360 601L360 601L270 601L270 601L180 601L180 601L90 601L90 601L0 601Z;
                                        M0 495L90 515L90 385L180 415L180 420L270 445L270 505L360 465L360 475L450 425L450 435L540 405L540 515L630 435L630 465L720 485L720 515L810 485L810 435L900 405L900 408L900 601L900 601L810 601L810 601L720 601L720 601L630 601L630 601L540 601L540 601L450 601L450 601L360 601L360 601L270 601L270 601L180 601L180 601L90 601L90 601L0 601Z;
                                        M0 502L90 502L90 399L180 399L180 435L270 435L270 490L360 490L360 455L450 455L450 417L540 417L540 494L630 494L630 443L720 443L720 498L810 498L810 416L900 416L900 418L900 601L900 601L810 601L810 601L720 601L720 601L630 601L630 601L540 601L540 601L450 601L450 601L360 601L360 601L270 601L270 601L180 601L180 601L90 601L90 601L0 601Z"/>
                    </path>
                </svg>
            @endif
            
            <!-- Overlay untuk readability -->
            <div class="absolute inset-0 bg-black/10"></div>
        </div>

        <!-- Background Pattern/Decoration -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-10 w-16 h-16 sm:w-32 sm:h-32 bg-white rounded-full blur-xl animate-float"></div>
            <div class="absolute top-40 right-20 w-12 h-12 sm:w-24 sm:h-24 bg-yellow-200 rounded-full blur-lg animate-pulse"></div>
            <div class="absolute bottom-40 left-20 w-10 h-10 sm:w-20 sm:h-20 bg-purple-200 rounded-full blur-md animate-bounce"></div>
        </div>

        <div class="max-w-7xl mx-auto h-full px-4 sm:px-6 py-10 sm:py-20 flex flex-col lg:flex-row items-center justify-between relative z-10 min-h-screen">
            <!-- Text Content -->
            <div class="text-white max-w-2xl space-y-6 sm:space-y-8 lg:w-1/2 text-center lg:text-left">
                <!-- Badge -->
                <div class="inline-flex items-center bg-white/20 backdrop-blur-sm text-white px-3 py-2 sm:px-4 sm:py-2 rounded-full text-xs sm:text-sm font-medium border border-white/30">
                    <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                    New E-Learning Platform
                </div>

                <!-- Main Heading -->
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold leading-tight tracking-tight">
                    Find out more about
                    <br>
                    <span class="text-gray-900 bg-gradient-to-r from-gray-900 to-gray-700 bg-clip-text">
                        our E-Learning Experience
                    </span>
                </h1>

                <!-- Description -->
                <p class="text-base sm:text-lg md:text-xl text-gray-800 leading-relaxed max-w-xl mx-auto lg:mx-0">
                    Discover innovative learning solutions designed to enhance your educational journey. 
                    Our platform combines cutting-edge technology with engaging content to create an 
                    exceptional learning experience.
                </p>

                <!-- Call-to-Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 pt-4 w-full sm:w-auto">
                    <a href="#" class="group inline-flex items-center justify-center bg-gray-900 text-white px-6 py-3 sm:px-8 sm:py-4 rounded-full font-semibold shadow-xl hover:bg-gray-800 hover:shadow-2xl transition-all duration-300 transform hover:scale-105 text-sm sm:text-base">
                        <span>Learn More</span>
                        <svg class="ml-2 w-4 h-4 sm:w-5 sm:h-5 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    
                    <a href="#" class="group inline-flex items-center justify-center bg-white/20 backdrop-blur-sm text-gray-900 px-6 py-3 sm:px-8 sm:py-4 rounded-full font-semibold border-2 border-white/30 hover:bg-white/30 hover:border-white/50 transition-all duration-300 text-sm sm:text-base">
                        <svg class="mr-2 w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h8M7 7h10a2 2 0 012 2v8a2 2 0 01-2 2H7a2 2 0 01-2-2V9a2 2 0 012-2z" />
                        </svg>
                        <span>Watch Demo</span>
                    </a>
                </div>

                <!-- Website Info -->
                <div class="pt-6 sm:pt-8 border-t border-white/20">
                    <p class="text-xs sm:text-sm text-gray-700 flex items-center justify-center lg:justify-start">
                        <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9" />
                        </svg>
                        www.websitename.com
                    </p>
                </div>
            </div>

            <!-- Visual Content -->
            <div class="lg:w-1/2 flex justify-center items-center mt-8 sm:mt-12 lg:mt-0 px-4 sm:px-0">
                <div class="relative">
                    <!-- Main illustration placeholder -->
                    <div class="w-64 h-64 sm:w-80 sm:h-80 md:w-96 md:h-96 bg-white/20 backdrop-blur-sm rounded-2xl sm:rounded-3xl shadow-2xl border border-white/30 flex items-center justify-center transform rotate-3 hover:rotate-0 transition-transform duration-500 overflow-hidden">
                        <img src="{{ asset('assets/img/foto.png' )}}" alt="" class="w-full h-full object-cover">
                    </div>

                    <!-- Floating elements -->
                    <div class="absolute -top-3 -right-3 sm:-top-6 sm:-right-6 w-8 h-8 sm:w-12 sm:h-12 bg-yellow-400 rounded-full shadow-lg animate-bounce"></div>
                    <div class="absolute -bottom-2 -left-2 sm:-bottom-4 sm:-left-4 w-6 h-6 sm:w-8 sm:h-8 bg-purple-400 rounded-full shadow-lg animate-pulse"></div>
                    <div class="absolute top-1/2 -left-4 sm:-left-8 w-4 h-4 sm:w-6 sm:h-6 bg-pink-400 rounded-full shadow-lg"></div>
                </div>
            </div>
        </div>

        <!-- Additional SVG overlay jika diperlukan -->
        <div class="absolute bottom-0 left-0 w-full z-0 pointer-events-none opacity-50">
            <!-- Opsional: SVG overlay tambahan untuk efek layering -->
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-4 sm:bottom-8 left-1/2 transform -translate-x-1/2 z-20">
            <div class="flex flex-col items-center space-y-1 sm:space-y-2 text-white/80">
                <span class="text-xs font-medium hidden sm:block">Scroll down</span>
                <div class="w-5 h-8 sm:w-6 sm:h-10 border-2 border-white/50 rounded-full flex justify-center">
                    <div class="w-1 h-2 sm:h-3 bg-white/70 rounded-full mt-1 sm:mt-2 animate-bounce"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional: Add some additional sections -->
    <section class="py-12 sm:py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="text-center space-y-3 sm:space-y-4">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900">
                    Why Choose Our Platform?
                </h2>
                <p class="text-sm sm:text-base text-gray-600 max-w-2xl mx-auto">
                    Experience the future of education with our innovative learning solutions
                </p>
            </div>
            
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8 mt-8 sm:mt-12">
                <div class="text-center space-y-3 sm:space-y-4 p-4 sm:p-6 rounded-2xl hover:shadow-lg transition-shadow duration-300">
                    <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-br from-orange-400 to-pink-400 rounded-2xl mx-auto flex items-center justify-center">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-semibold text-gray-900">Fast Learning</h3>
                    <p class="text-sm sm:text-base text-gray-600">Accelerated learning paths designed for quick skill acquisition</p>
                </div>
                
                <div class="text-center space-y-3 sm:space-y-4 p-4 sm:p-6 rounded-2xl hover:shadow-lg transition-shadow duration-300">
                    <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-br from-purple-400 to-pink-400 rounded-2xl mx-auto flex items-center justify-center">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-semibold text-gray-900">Expert Instructors</h3>
                    <p class="text-sm sm:text-base text-gray-600">Learn from industry professionals and certified experts</p>
                </div>
                
                <div class="text-center space-y-3 sm:space-y-4 p-4 sm:p-6 rounded-2xl hover:shadow-lg transition-shadow duration-300 sm:col-span-2 md:col-span-1">
                    <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-br from-blue-400 to-purple-400 rounded-2xl mx-auto flex items-center justify-center">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-semibold text-gray-900">Certification</h3>
                    <p class="text-sm sm:text-base text-gray-600">Earn recognized certificates upon course completion</p>
                </div>
            </div>
        </div>
    </section>
@endsection