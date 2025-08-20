{{-- <section class="bg-white py-16 sm:py-24">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Title -->
        <div class="text-center mb-12">
            <h3 class="text-3xl sm:text-4xl font-semibold text-gray-800">ROADMAP</h3>
            <div class="w-24 h-1 bg-yellow-400 mx-auto mt-2"></div>
        </div>

        <!-- Roadmap Timeline Container -->
        <div class="relative">
            <!-- Center Line -->
            <div class="absolute left-1/2 top-2 h-full w-1 bg-blue-800 transform -translate-x-1/2 hidden md:block"></div>

            <!-- Timeline Items -->
            <div class="relative flex flex-col space-y-12">

                @foreach($roadmapItems as $year => $items)
                    @php
                        // Determine the side based on the first item for that year
                        $side = $items->first()->side ?? 'left'; 
                    @endphp

                    <div class="flex flex-col md:flex-row items-start">
                        
                        <!-- Left Side Content -->
                        <div class="w-full md:w-1/2 @if($side === 'left') md:pr-12 @else hidden md:block @endif">
                            @if($side === 'left')
                                <div class="bg-gray-100 p-6 rounded-lg">
                                    <h4 class="text-2xl font-bold text-blue-800 mb-4">{{ $year }}</h4>
                                    @foreach($items->groupBy('category') as $category => $categoryItems)
                                        <div class="mb-6">
                                            @if($category)
                                                <h5 class="font-bold text-gray-700 uppercase">{{ $category }}</h5>
                                            @endif
                                            <div class="mt-2 @if($category) pl-4 @endif text-gray-600 space-y-2">
                                                @foreach($categoryItems as $item)
                                                    <div>
                                                        <p class="font-semibold">{{ $item->title }}</p>
                                                        @if($item->description)
                                                            <p class="text-sm">{{ $item->description }}</p>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                        <!-- Timeline Marker -->
                        <div class="absolute left-1/2 top-0 transform -translate-x-1/2">
                            <div class="w-5 h-5 bg-yellow-400 rounded-full border-4 border-blue-800"></div>
                        </div>

                        <!-- Right Side Content -->
                        <div class="w-full md:w-1/2 @if($side === 'right') md:pl-12 @else hidden md:block @endif">
                             @if($side === 'right')
                                <div class="bg-white p-6 rounded-lg">
                                    <div class="space-y-4 mb-6">
                                        @foreach($items->whereIn('type', ['Excellence Research', 'Supporting Research']) as $item)
                                            <div class="{{ $item->type === 'Excellence Research' ? 'bg-green-600' : 'bg-blue-600' }} text-white p-3 rounded-md text-center font-semibold">
                                                {{ $item->title }}
                                            </div>
                                        @endforeach
                                    </div>

                                    <h4 class="text-2xl font-bold text-blue-800 mb-4">{{ $year }}</h4>
                                    
                                    @foreach($items->where('type', 'Topic')->groupBy('category') as $category => $categoryItems)
                                    <div class="mb-6">
                                        @if($category)
                                            <h5 class="font-bold text-gray-700 uppercase">{{ $category }}</h5>
                                        @endif
                                        <div class="mt-2 text-gray-600 space-y-2 text-sm">
                                            @foreach($categoryItems as $item)
                                                <p>{{ $item->title }}</p>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section> --}}

<section class="bg-white py-16 sm:py-24">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Title -->
        <div class="text-center mb-12">
            <h3 class="text-3xl sm:text-4xl font-semibold text-gray-800">ROADMAP</h3>
            <div class="w-24 h-1 bg-yellow-400 mx-auto mt-2"></div>
        </div>

        <!-- Roadmap Timeline Container -->
        <div class="relative">
            <!-- Center Line -->
            <div class="absolute left-1/2 top-2 h-full w-1 bg-blue-800 transform -translate-x-1/2 hidden md:block"></div>

            <!-- Timeline Items -->
            <div class="relative flex flex-col space-y-12">

                @foreach($roadmapItems as $year => $items)
                    @php
                        $side = $items->first()->side ?? 'left'; 
                    @endphp

                    <div class="flex flex-col md:flex-row items-start relative">
                        
                        <!-- Left Side Content -->
                        <div class="w-full md:w-1/2 @if($side === 'left') md:pr-6 @else hidden md:block @endif">
                            @if($side === 'left')
                                <!-- Tambahkan 'relative' di sini -->
                                <div class="bg-gray-100 p-6 rounded-lg relative">
                                    <!-- SEGITIGA PENUNJUK KIRI -->
                                    <div class="absolute top-8 -right-2 w-0 h-0 
                                        border-t-[15px] border-t-transparent
                                        border-l-[15px] border-l-gray-100
                                        border-b-[15px] border-b-transparent">
                                    </div>

                                    <h4 class="text-2xl font-bold text-blue-800 mb-4">{{ $year }}</h4>
                                    @foreach($items->groupBy('category') as $category => $categoryItems)
                                        <div class="mb-6">
                                            @if($category)
                                                <h5 class="font-bold text-gray-700 uppercase">{{ $category }}</h5>
                                            @endif
                                            <div class="mt-2 @if($category) pl-4 @endif text-gray-600 space-y-2">
                                                @foreach($categoryItems as $item)
                                                    <div>
                                                        <p class="font-semibold">{{ $item->title }}</p>
                                                        @if($item->description)
                                                            <p class="text-sm">{{ $item->description }}</p>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                        <!-- Timeline Marker -->
                        <div class="absolute left-1/2 top-8 transform -translate-x-1/2 z-10">
                            <div class="w-5 h-5 bg-yellow-400 rounded-full border-4 border-blue-800"></div>
                        </div>

                        <!-- Right Side Content -->
                        <div class="w-full md:w-1/2 @if($side === 'right') md:pl-6 @else hidden md:block @endif">
                             @if($side === 'right')
                                <!-- Tambahkan 'relative' di sini -->
                                <div class="bg-gray-100 p-6 rounded-lg relative">
                                     <!-- SEGITIGA PENUNJUK KANAN -->
                                    <div class="absolute top-8 -left-2 w-0 h-0 
                                        border-t-[15px] border-t-transparent
                                        border-r-[15px] border-r-gray-100
                                        border-b-[15px] border-b-transparent">
                                    </div>

                                    <div class="space-y-4 mb-6">
                                        @foreach($items->whereIn('type', ['Excellence Research', 'Supporting Research']) as $item)
                                            <div class="{{ $item->type === 'Excellence Research' ? 'bg-green-600' : 'bg-blue-600' }} text-white p-3 rounded-md text-center font-semibold">
                                                {{ $item->title }}
                                            </div>
                                        @endforeach
                                    </div>
                                    <h4 class="text-2xl font-bold text-blue-800 mb-4">{{ $year }}</h4>
                                    @foreach($items->where('type', 'Topic')->groupBy('category') as $category => $categoryItems)
                                    <div class="mb-6">
                                        @if($category)
                                            <h5 class="font-bold text-gray-700 uppercase">{{ $category }}</h5>
                                        @endif
                                        <div class="mt-2 text-gray-600 space-y-2 text-sm">
                                            @foreach($categoryItems as $item)
                                                <p>{{ $item->title }}</p>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>