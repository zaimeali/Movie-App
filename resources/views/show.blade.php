@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex">
            <img class="w-96" src="/img/parasite.jpg" alt="Parasite">
            <div class="ml-16">
                <h2 class="text-4xl font-semibold">
                    Parasite (2019)
                </h2>
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                    <span class="mx-1">85%</span>
                    <span class="ml-1 mr-2">|</span>
                    <span>Feb 20, 2020</span>
                    <span class="mx-2">|</span>
                    <span>Action, Thriller, Drama</span>
                </div>

                <p class="text-gray-300 mt-8">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit at laboriosam hic esse dolor placeat molestiae! Nobis consequuntur quisquam magni minus neque? Ipsa esse quod libero nesciunt ducimus temporibus magnam.
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit at laboriosam hic esse dolor placeat molestiae! Nobis consequuntur quisquam magni minus neque? Ipsa esse quod libero nesciunt ducimus temporibus magnam.
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">
                        Featured Cast
                    </h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Han Jin-won</div>
                            <div class="text-sm text-gray-400">Screenplay</div>
                        </div>
                        <div class="ml-8">
                            <div>Boon Joon-ho</div>
                            <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <button 
                        class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4
                            hover:bg-orange-600 transition ease-in-out duration-150"
                    >
                        <svg 
                            class="w-6 fill-current" 
                            viewBox="0 0 24 24"
                        >
                            <path 
                                d="M0 0h24v24H0z" 
                                fill="none"
                            />
                            <path 
                                d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"
                            />
                        </svg>
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    
@endsection