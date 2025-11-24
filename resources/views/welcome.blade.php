<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porto</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-discord-dark text-discord-text font-sans antialiased">
    <div class="min-h-screen">
        <!-- Hero Section - Discord Profile Style -->
        <section class="py-20 px-4">
            <div class="max-w-6xl mx-auto">
                <div class="bg-discord-darker rounded-xl p-8 shadow-2xl border border-discord-darkest">
                    <div class="flex flex-col md:flex-row items-start gap-8">
                        <!-- Avatar -->
                        <div class="relative">
                            <div
                                class="w-32 h-32 bg-gradient-to-br from-discord-blurple to-purple-600 rounded-full flex items-center justify-center text-5xl font-bold shadow-lg">
                                AK
                            </div>
                            <div
                                class="absolute bottom-2 right-2 w-6 h-6 bg-discord-green rounded-full border-4 border-discord-darker">
                            </div>
                        </div>

                        <!-- Profile Info -->
                        <div class="flex-1">
                            <h1 class="text-4xl font-bold mb-2 text-white">Aigal Kurniawan</h1>
                            <p class="text-xl text-discord-blurple font-semibold mb-4">IT Student & L1 DPP Engineer</p>
                            <div class="bg-discord-darkest rounded-lg p-4 mb-4">
                                <div class="flex items-center gap-2 mb-2">
                                    <div class="w-3 h-3 bg-discord-blurple rounded-full animate-pulse-slow"></div>
                                    <span class="text-sm text-discord-muted font-medium">Current Status</span>
                                </div>
                                <p class="text-discord-text">Configuring ELK Stack... 🔧</p>
                            </div>
                            <p class="text-discord-text leading-relaxed mb-6">
                                Merging Backend Engineering with Enterprise Security (ELK/Splunk) and Audio Creativity.
                                Building secure, scalable systems while exploring the sonic landscape.
                            </p>
                            <div class="flex flex-wrap gap-3">
                                <span class="bg-discord-darkest px-4 py-2 rounded-lg text-sm font-medium">Security
                                    Project</span>
                                <span class="bg-discord-darkest px-4 py-2 rounded-lg text-sm font-medium">Laravel
                                    Dev</span>
                                <span class="bg-discord-darkest px-4 py-2 rounded-lg text-sm font-medium">EDM
                                    Producer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tech Stack Marquee -->
        @foreach($allTechIcons as $tech)
            <div class="flex items-center gap-3 mx-6 flex-shrink-0">
                @if(isset($tech['local_icon']))
                    <img src="{{ asset($tech['local_icon']) }}" alt="{{ $tech['name'] }}" class="w-8 h-8">
                @else
                    <img src="https://cdn.simpleicons.org/{{ $tech['slug'] }}/dcddde" alt="{{ $tech['name'] }}" class="w-8 h-8">
                @endif
                <span class="text-discord-text font-medium whitespace-nowrap">{{ $tech['name'] }}</span>
            </div>
        @endforeach
        <section class="py-12 overflow-hidden bg-discord-darkest border-y border-discord-darker">
            <div class="mb-4 text-center">
                <h2 class="text-2xl font-bold text-white">Tech Arsenal</h2>
                <p class="text-discord-muted text-sm">Tools & Technologies I Work With</p>
            </div>
            <div class="relative flex overflow-hidden">
                <div class="flex animate-scroll">
                    @foreach($allTechIcons as $tech)
                        <div class="flex items-center gap-3 mx-6 flex-shrink-0">
                            <img src="https://cdn.simpleicons.org/{{ $tech['slug'] }}/dcddde" alt="{{ $tech['name'] }}"
                                class="w-8 h-8">
                            <span class="text-discord-text font-medium whitespace-nowrap">{{ $tech['name'] }}</span>
                        </div>
                    @endforeach
                    @foreach($allTechIcons as $tech)
                        <div class="flex items-center gap-3 mx-6 flex-shrink-0">
                            <img src="https://cdn.simpleicons.org/{{ $tech['slug'] }}/dcddde" alt="{{ $tech['name'] }}"
                                class="w-8 h-8">
                            <span class="text-discord-text font-medium whitespace-nowrap">{{ $tech['name'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Bento Grid - Projects & Highlights -->
        <section class="py-20 px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold text-white mb-12 text-center">Featured Projects</h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($projects as $project)
                        <div
                            class="bg-discord-darker rounded-xl p-6 shadow-xl border border-discord-darkest hover:border-discord-blurple transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start justify-between mb-4">
                                <span class="text-4xl">{{ $project['icon'] }}</span>
                                <span
                                    class="px-3 py-1 rounded-full text-xs font-semibold
                                                                    {{ $project['type'] === 'code' ? 'bg-blue-500/20 text-blue-400' : '' }}
                                                                    {{ $project['type'] === 'security' ? 'bg-red-500/20 text-red-400' : '' }}
                                                                    {{ $project['type'] === 'creative' ? 'bg-purple-500/20 text-purple-400' : '' }}">
                                    {{ ucfirst($project['type']) }}
                                </span>
                            </div>

                            <h3 class="text-xl font-bold text-white mb-3">{{ $project['title'] }}</h3>
                            <p class="text-discord-muted text-sm mb-4 leading-relaxed">{{ $project['description'] }}</p>

                            <div class="mb-4">
                                <div class="flex flex-wrap gap-2">
                                    @foreach($project['tech'] as $tech)
                                        <span
                                            class="bg-discord-darkest px-3 py-1 rounded-md text-xs text-discord-text">{{ $tech }}</span>
                                    @endforeach
                                </div>
                            </div>

                            <div class="border-t border-discord-darkest pt-4">
                                <p class="text-xs text-discord-muted mb-2 font-semibold">Key Features:</p>
                                <ul class="space-y-1">
                                    @foreach($project['highlights'] as $highlight)
                                        <li class="text-xs text-discord-text flex items-start gap-2">
                                            <span class="text-discord-blurple mt-0.5">▸</span>
                                            <span>{{ $highlight }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Security Terminal Card -->
        <section class="py-12 px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Terminal -->
                    <div class="bg-discord-darker rounded-xl overflow-hidden shadow-xl border border-discord-darkest">
                        <div class="bg-discord-darkest px-4 py-3 flex items-center gap-2">
                            <div class="flex gap-2">
                                <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-discord-muted text-sm ml-4">elk-monitor.sh</span>
                        </div>
                        <div class="p-6 font-mono text-sm">
                            <div class="space-y-2">
                                <p class="text-discord-green">$ systemctl status elasticsearch</p>
                                <p class="text-discord-text">● elasticsearch.service - Active</p>
                                <p class="text-discord-muted"> Loaded: loaded
                                    (/usr/lib/systemd/system/elasticsearch.service)</p>
                                <p class="text-discord-green"> Active: active (running)</p>
                                <p class="text-discord-text mt-4">$ curl -X GET "localhost:9200/_cat/indices"</p>
                                <p class="text-discord-blurple">green open security-logs-2024 5 1 1547892</p>
                                <p class="text-discord-text mt-4">$ tail -f /var/log/kibana/kibana.log</p>
                                <p class="text-discord-muted">[INFO] Dashboard loaded successfully</p>
                                <p class="text-discord-muted">[INFO] Real-time monitoring active</p>
                                <p class="text-discord-green animate-pulse">█</p>
                            </div>
                        </div>
                    </div>

                    <!-- Audio Player -->
                    <div class="bg-discord-darker rounded-xl p-6 shadow-xl border border-discord-darkest"
                        x-data="{ playing: false, progress: 0, currentTime: '0:00', duration: '3:45' }">
                        <div class="flex items-center gap-4 mb-6">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-purple-600 to-pink-600 rounded-lg flex items-center justify-center text-3xl">
                                🎵
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white">Midnight Frequency</h3>
                                <p class="text-discord-muted text-sm">Latest Production</p>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="bg-discord-darkest h-2 rounded-full overflow-hidden cursor-pointer"
                                @click="progress = ($event.offsetX / $event.currentTarget.offsetWidth) * 100">
                                <div class="bg-discord-blurple h-full transition-all duration-300"
                                    :style="`width: ${progress}%`"></div>
                            </div>
                            <div class="flex justify-between mt-2 text-xs text-discord-muted">
                                <span x-text="currentTime"></span>
                                <span x-text="duration"></span>
                            </div>
                        </div>

                        <div class="flex items-center justify-center gap-6">
                            <button class="text-discord-text hover:text-white transition">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M8.445 14.832A1 1 0 0010 14v-2.798l5.445 3.63A1 1 0 0017 14V6a1 1 0 00-1.555-.832L10 8.798V6a1 1 0 00-1.555-.832l-6 4a1 1 0 000 1.664l6 4z" />
                                </svg>
                            </button>
                            <button
                                @click="playing = !playing; if(playing) { let interval = setInterval(() => { progress += 0.5; if(progress >= 100) { progress = 0; playing = false; clearInterval(interval); } }, 100) }"
                                class="w-16 h-16 bg-discord-blurple hover:bg-blue-600 rounded-full flex items-center justify-center transition shadow-lg">
                                <svg x-show="!playing" class="w-8 h-8 text-white" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                                </svg>
                                <svg x-show="playing" class="w-8 h-8 text-white" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M5 4a2 2 0 012-2h2a2 2 0 012 2v12a2 2 0 01-2 2H7a2 2 0 01-2-2V4zm8 0a2 2 0 012-2h2a2 2 0 012 2v12a2 2 0 01-2 2h-2a2 2 0 01-2-2V4z" />
                                </svg>
                            </button>
                            <button class="text-discord-text hover:text-white transition">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M4.555 5.168A1 1 0 003 6v8a1 1 0 001.555.832L10 11.202V14a1 1 0 001.555.832l6-4a1 1 0 000-1.664l-6-4A1 1 0 0010 6v2.798l-5.445-3.63z" />
                                </svg>
                            </button>
                        </div>

                        <div class="mt-6 pt-6 border-t border-discord-darkest">
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-discord-muted">Genre</span>
                                <span class="text-discord-text">Ambient / Electronic</span>
                            </div>
                            <div class="flex items-center justify-between text-sm mt-2">
                                <span class="text-discord-muted">BPM</span>
                                <span class="text-discord-text">120</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tech Stack Categories -->
        <section class="py-20 px-4 bg-discord-darkest">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold text-white mb-12 text-center">Technical Expertise</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($techStack as $category => $techs)
                        <div class="bg-discord-darker rounded-xl p-6 border border-discord-dark">
                            <h3 class="text-lg font-bold text-white mb-4 flex items-center gap-2">
                                <span class="w-2 h-2 bg-discord-blurple rounded-full"></span>
                                {{ $category }}
                            </h3>
                            <div class="space-y-3">
                                @foreach($techs as $tech)
                                    <div class="flex items-center gap-3 group cursor-pointer">
                                        <img src="https://cdn.simpleicons.org/{{ $tech['slug'] }}/dcddde"
                                            alt="{{ $tech['name'] }}" class="w-6 h-6 group-hover:scale-110 transition">
                                        <span
                                            class="text-discord-text text-sm group-hover:text-white transition">{{ $tech['name'] }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="py-12 px-4 border-t border-discord-darker">
            <div class="max-w-6xl mx-auto text-center">
                <div class="flex justify-center gap-6 mb-6">
                    <a href="https://github.com/Discrack" target="_blank"
                        class="text-discord-muted hover:text-discord-blurple transition">
                        <img src="https://cdn.simpleicons.org/github/dcddde" alt="GitHub" class="w-6 h-6">
                    </a>

                    <a href="https://www.linkedin.com/in/aigaal/" target="_blank"
                        class="text-discord-muted hover:text-discord-blurple transition">
                        <img src="{{ asset('icons/linkedin.svg') }}" alt="LinkedIn" class="w-6 h-6 filter invert">
                    </a>

                    <a href="mailto:aigalkurniawan@gmail.com"
                        class="text-discord-muted hover:text-discord-blurple transition">
                        <img src="https://cdn.simpleicons.org/gmail/dcddde" alt="Email" class="w-6 h-6">
                    </a>
                </div>
                <p class="text-discord-muted text-sm">© 2024 Aigal Kurniawan. Built with Laravel & Tailwind CSS</p>
                <p class="text-discord-muted text-xs mt-2">Designed with Discord Aesthetic 💜</p>
            </div>
        </footer>
    </div>
</body>

</html>