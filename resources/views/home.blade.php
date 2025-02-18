@extends('layout.app')

@extends('layout.navigation')
 
@section('content')
    <div class="flex flex-col">
        <div class="relative w-full py-[70px]"> 
            <div class="container z-1">
                <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4 justify-center">                        
                    <div class="col-span-12 sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12 ">
                        <div class=" w-full relative mb-10">                                
                            <div class="flex-auto p-4">            
                                <div class="text-center mt-10">
                                    <h4 class="my-1 font-semibold text-[30px] md:text-[40px] dark:text-slate-200 mb-5 leading-12">Basic Filament</h4>
                                    <h6 class="text-gray-500 dark:text-gray-400 text-lg font-medium">Learning Basic Filament Laravel 11.</h6>
                                </div>
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </div><!--end col-->            
                </div><!--end inner-grid-->  
                <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                    <div class="col-span-12 sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12 ">
                        <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4 mb-4">
                            <div class="flex justify-between">                                    
                                <p class="dark:text-slate-200">
                                    <span class="font-medium border-b border-dashed border-pink-400">Post Terakhir </span>
                                </p>
                                <p class="dark:text-slate-200">
                                    <span class="font-medium">Hari Ini </span>: {{ date('d M Y') }}
                                </p>
                            </div>
                        </div>

                        @foreach ($posts as $post)
                        <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4 mb-4">
                            <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                <div class="col-span-12 sm:col-span-6  md:col-span-4 lg:col-span-4 xl:col-span-4 ">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="" class="max-w-full h-auto rounded-xl">
                                </div><!--end col-->
                                <div class="col-span-12 sm:col-span-6  md:col-span-8 lg:col-span-8 xl:col-span-8 ">
                                    <div class=" h-full flex flex-col p-3">
                                        <div class="w-full block">
                                            <span class="text-[12px] bg-pink-500/10 text-pink-500 dark:text-pink-600 rounded font-medium py-1 px-2 inline-block mb-3">{{ $post->name }}</span>                                                   
                                            <span class="text-slate-700 dark:text-slate-300 font-medium text-xs ms-2">{{ $post->created_at }}</span>
                                        </div>
                                        <a href="#" class="text-[20px] md:text-3xl lg:text-3xl xl:text-[32px] leading-[30px] mb-5 md:mb-0 font-spectral font-semibold  text-gray-800 dark:text-slate-200 block">
                                            {{ $post->title }}
                                        </a>
                                        <div class="flex flex-wrap justify-between mt-auto">
                                            <div class="flex items-center">
                                                <div class="w-8 h-8 rounded">
                                                    <img class="w-full h-full overflow-hidden object-cover rounded object-center" src="assets/images/users/avatar-1.jpg" alt="logo" />
                                                </div>
                                                <div class="ml-2">
                                                    <a tabindex="0" class="cursor-pointer hover:text-gray-500 focus:text-gray-500 text-gray-800 dark:text-gray-100 focus:outline-none focus:underline"><h5 class=" font-medium text-sm">Fitbit Incorporation</h5></a>
                                                    <p tabindex="0" class="focus:outline-none text-gray-500 dark:text-gray-400 text-xs font-medium">San Diego, California</p>
                                                </div>
                                            </div>
                                            <a href="" class="block text-slate-500 dark:text-slate-400 hover:text-slate-600 underline decoration-1 decoration-dashed underline-offset-4  decoration-primary-500 font-medium  focus:outline-none self-center">Read More <i data-lucide="arrow-right" class="self-center inline-block ms-1 h-4 w-4"></i></a>                            
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end col-->
                            </div><!--end grid-->                              
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection