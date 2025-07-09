@props(['title', 'authors', 'image', 'category', 'link'])

<div class="max-w-full w-full">
    <a href="{{ $link }}" class="block">
        <div class="group hover:shadow-xl transition-all duration-300 border-0 shadow-md bg-white overflow-hidden rounded-lg">
            <div class="relative">
                <div class="aspect-[3/4] relative overflow-hidden bg-gradient-to-br from-slate-50 to-slate-100">
                    <img src="{{ $image }}"
                        alt="{{ $title }} book cover"
                        class="w-full object-cover group-hover:scale-105 transition-transform duration-300 h-full" />
                </div>
                <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm text-slate-700 border-0 rounded-md px-2 py-1 flex items-center">
                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                        </path>
                    </svg>
                    <span class="text-xs font-medium">{{ $category }}</span>
                </div>
            </div>

            <div class="p-6 space-y-4">
                <div class="space-y-2">
                    <h3 class="font-semibold text-lg leading-tight text-slate-900 group-hover:text-slate-700 transition-colors line-clamp-2 h-[45px]">
                        {{ $title }}
                    </h3>
                    <div class="flex items-center gap-2 text-sm text-slate-600">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                            </path>
                        </svg>
                        <span class="line-clamp-1">{{ $authors }}</span>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>