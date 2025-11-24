<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porto</title>
    <link rel="icon" type="image/x-icon" href="https://img.icons8.com/ios_filled/1200/discord-logo.jpg">
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
                            <h1 class="text-4xl font-bold mb-2 text-white">Aigal Kurniawan (Discrack)</h1>
                            <p class="text-xl text-discord-blurple font-semibold mb-4">IT Student | ITSecOps
                            </p>
                            <div class="bg-discord-darkest rounded-lg p-4 mb-4">
                                <!-- <div class="flex items-center gap-2 mb-2"> -->
                                <!-- <div class="w-3 h-3 bg-discord-blurple rounded-full animate-pulse-slow"></div> -->
                                <span class="text-sm text-discord-muted font-medium">Current Status</span>
                                <!-- </div> -->
                                <p class="text-discord-text">Monitoring Grafana... 📊</p>
                            </div>
                            <p class="text-discord-text leading-relaxed mb-6">
                                Merging Backend Engineering with Enterprise Security (Grafana/Splunk) and Audio
                                Creativity.
                                Building secure, scalable systems while exploring the sonic landscape.
                            </p>
                            <div class="flex flex-wrap gap-3">
                                <span class="bg-discord-darkest px-4 py-2 rounded-lg text-sm font-medium">Security
                                    Engineer</span>
                                <span class="bg-discord-darkest px-4 py-2 rounded-lg text-sm font-medium">Laravel
                                    Dev</span>
                                <span class="bg-discord-darkest px-4 py-2 rounded-lg text-sm font-medium">Music
                                    Producer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tech Stack Marquee -->

        <!-- <section class="py-12 overflow-hidden bg-discord-darkest border-y border-discord-darker">
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
        </section> -->

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
                    <div
                        class="bg-discord-darker rounded-xl overflow-hidden shadow-xl border border-discord-darkest font-mono text-sm">
                        <div class="bg-discord-darkest px-4 py-3 flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <div class="flex gap-2">
                                    <div class="w-3 h-3 bg-red-500 rounded-full hover:bg-red-600 transition"></div>
                                    <div class="w-3 h-3 bg-yellow-500 rounded-full hover:bg-yellow-600 transition">
                                    </div>
                                    <div class="w-3 h-3 bg-green-500 rounded-full hover:bg-green-600 transition"></div>
                                </div>
                                <span class="text-discord-muted text-xs ml-3">root@kali: ~</span>
                            </div>
                            <span class="text-discord-muted text-xs">zsh .bash</span>
                        </div>

                        <div class="p-6 overflow-x-auto">
                            <div class="flex gap-2 mb-4">
                                <span class="text-discord-green font-bold">┌──(root💀kali)-[~]</span>
                            </div>
                            <div class="flex gap-2 mb-4">
                                <span class="text-discord-green font-bold">└─#</span>
                                <span class="text-white typing-effect">neofetch</span>
                            </div>

                            <div class="flex flex-col md:flex-row gap-6 items-start">
                                <pre
                                    class="text-discord-blurple font-bold leading-tight text-xs select-none hidden sm:block">
      ..............
    ..,;:ccc,.
  ......''';lxO.
.....''''..........,:ld;
       .';;;:::;,,.x,
      ..'''.            0Xxoc:,.  ...
  ....                ,ONkc;,;cokOdc',.
 .                   OMo           ':ddo.
                    dMc               :OO;
                    0M.                 .:o.
                    ;Wd
                     ;XO,
                       ,d0Odlc;,..
                           'cxxc;''..
                              .....
                                </pre>

                                <div class="text-discord-text space-y-1 flex-1">
                                    <div class="flex gap-2">
                                        <span class="text-discord-blurple font-bold">root</span>@<span
                                            class="text-discord-blurple font-bold">kali</span>
                                    </div>
                                    <div class="text-discord-muted">-----------------</div>
                                    <div><span class="text-discord-blurple font-bold">OS</span>: Kali Linux Rolling
                                        x86_64</div>
                                    <div><span class="text-discord-blurple font-bold">Host</span>: DESKTOP-731DC_VM
                                    </div>
                                    <div><span class="text-discord-blurple font-bold">Kernel</span>: 6.6.9-amd64</div>
                                    <div><span class="text-discord-blurple font-bold">Uptime</span>: 12 hours, 37 mins
                                    </div>
                                    <div><span class="text-discord-blurple font-bold">Shell</span>: zsh 5.9</div>
                                    <div><span class="text-discord-blurple font-bold">DE</span>: GNOME 45.2</div>
                                    <div><span class="text-discord-blurple font-bold">Terminal</span>: gnome-terminal
                                    </div>

                                    <div><span class="text-discord-blurple font-bold">CPU</span>: Intel i7-14700HX (28)
                                        @ 5.5GHz</div>
                                    <div><span class="text-discord-blurple font-bold">GPU</span>: NVIDIA GeForce RTX
                                        5060Ti 16G</div>
                                    <div><span class="text-discord-blurple font-bold">Memory</span>: 14200MiB / 28672MiB
                                    </div>

                                    <div class="flex gap-1 mt-3 pt-2">
                                        <div class="w-4 h-4 bg-black"></div>
                                        <div class="w-4 h-4 bg-red-500"></div>
                                        <div class="w-4 h-4 bg-green-500"></div>
                                        <div class="w-4 h-4 bg-yellow-500"></div>
                                        <div class="w-4 h-4 bg-blue-500"></div>
                                        <div class="w-4 h-4 bg-purple-500"></div>
                                        <div class="w-4 h-4 bg-cyan-500"></div>
                                        <div class="w-4 h-4 bg-white"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-2 mt-4 animate-pulse">
                                <span class="text-discord-green font-bold">┌──(root💀kali)-[~]</span>
                            </div>
                            <div class="flex gap-2">
                                <span class="text-discord-green font-bold">└─#</span>
                                <span class="w-2 h-5 bg-discord-text inline-block"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Audio Player -->
                    <div class="bg-discord-darker rounded-xl p-6 shadow-xl border border-discord-darkest" x-data="{
        playing: false,
        progress: 0,
        currentTime: '0:00',
        duration: '0:00',
        audio: null,
        volume: 0.5,
        isDragging: false,

        init() {
            this.audio = this.$refs.audioPlayer;
            this.audio.volume = this.volume;

            // Set Durasi saat metadata loaded
            this.audio.addEventListener('loadedmetadata', () => {
                this.duration = this.formatTime(this.audio.duration);
            });

            // Update slider otomatis (HANYA jika user TIDAK sedang drag slider)
            this.audio.addEventListener('timeupdate', () => {
                if (!this.isDragging && this.audio.duration > 0) {
                    this.currentTime = this.formatTime(this.audio.currentTime);
                    this.progress = (this.audio.currentTime / this.audio.duration) * 100;
                }
            });

            // Reset saat lagu selesai
            this.audio.addEventListener('ended', () => {
                this.playing = false;
                this.progress = 0;
                this.currentTime = '0:00';
                this.audio.currentTime = 0;
            });
        },

        togglePlay() {
            if (this.playing) {
                this.audio.pause();
            } else {
                this.audio.play();
            }
            this.playing = !this.playing;
        },

        // Fungsi Skip/Back 5 Detik
        skip(seconds) {
            if (!this.audio.duration) return;
            let newTime = this.audio.currentTime + seconds;
            newTime = Math.max(0, Math.min(newTime, this.audio.duration));
            
            this.audio.currentTime = newTime;
            // Paksa update UI langsung agar tidak lag
            this.progress = (newTime / this.audio.duration) * 100;
            this.currentTime = this.formatTime(newTime);
        },

        // Saat Slider Digeser (Scrubbing)
        onSeekInput() {
            this.isDragging = true;
            if (this.audio.duration) {
                const seekTime = (this.progress / 100) * this.audio.duration;
                this.currentTime = this.formatTime(seekTime);
            }
        },

        // Saat Slider Dilepas (Final Commit)
        onSeekChange() {
            if (this.audio.duration) {
                const seekTime = (this.progress / 100) * this.audio.duration;
                this.audio.currentTime = seekTime;
                
                // PENTING: Beri jeda sedikit sebelum mengizinkan 'timeupdate' jalan lagi
                // Ini mencegah slider 'mental' balik ke posisi lama
                setTimeout(() => {
                    this.isDragging = false;
                }, 100);
            }
        },

        updateVolume() {
            this.audio.volume = this.volume;
        },

        formatTime(seconds) {
            if (!seconds || isNaN(seconds) || !isFinite(seconds)) return '0:00';
            let minutes = Math.floor(seconds / 60);
            let secs = Math.floor(seconds % 60);
            return `${minutes}:${secs < 10 ? '0' : ''}${secs}`;
        }
    }">

                        <audio x-ref="audioPlayer" src="{{ asset('audio/demo.mp3') }}" preload="metadata"></audio>

                        <div class="flex items-center gap-4 mb-6">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-purple-600 to-pink-600 rounded-lg flex items-center justify-center text-3xl shadow-lg">
                                🎵
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white">Symphony Beneth The Star</h3>
                                <p class="text-discord-muted text-sm">KAGE & DSCRACK</p>
                            </div>
                        </div>

                        <div class="mb-2 group relative">
                            <input type="range" min="0" max="100" step="0.1" x-model.number="progress"
                                @input="onSeekInput()" @change="onSeekChange()" @mousedown="isDragging = true"
                                @touchstart="isDragging = true"
                                class="absolute z-20 w-full h-2 opacity-0 cursor-pointer inset-0">

                            <div
                                class="w-full h-2 bg-discord-darkest rounded-full overflow-hidden relative z-10 pointer-events-none">
                                <div class="bg-discord-blurple h-full transition-all duration-75 ease-linear"
                                    :style="`width: ${progress}%`">
                                </div>
                            </div>

                            <div class="flex justify-between mt-2 text-xs text-discord-muted font-mono">
                                <span x-text="currentTime">0:00</span>
                                <span x-text="duration">0:00</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between mt-4">

                            <div class="flex items-center gap-2 w-1/4 group">
                                <button @click="volume = (volume > 0 ? 0 : 0.5); updateVolume()"
                                    class="text-discord-muted hover:text-white transition">
                                    <svg x-show="volume > 0" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                                    </svg>
                                    <svg x-show="volume == 0" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2" />
                                    </svg>
                                </button>
                                <input type="range" min="0" max="1" step="0.01" x-model="volume" @input="updateVolume()"
                                    class="w-20 h-1 bg-discord-darkest rounded-lg appearance-none cursor-pointer accent-discord-blurple">
                            </div>

                            <div class="flex items-center justify-center gap-6 flex-1">
                                <button
                                    class="text-discord-text hover:text-white transition hover:scale-110 active:scale-95 p-2"
                                    @click="skip(-5)" title="Rewind 5s">
                                    <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M11 18V6l-8.5 6 8.5 6zm.5-6l8.5 6V6l-8.5 6z" />
                                    </svg>
                                </button>

                                <button @click="togglePlay()"
                                    class="w-14 h-14 bg-white text-discord-darkest hover:bg-discord-blurple hover:text-white rounded-full flex items-center justify-center transition shadow-lg transform hover:scale-105 active:scale-95">
                                    <svg x-show="!playing" class="w-6 h-6 pl-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                    <svg x-show="playing" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z" />
                                    </svg>
                                </button>

                                <button
                                    class="text-discord-text hover:text-white transition hover:scale-110 active:scale-95 p-2"
                                    @click="skip(5)" title="Forward 5s">
                                    <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M4 18l8.5-6L4 6v12zm9-12v12l8.5-6L13 6z" />
                                    </svg>
                                </button>
                            </div>

                            <div class="w-1/4"></div>
                        </div>

                        <div class="mt-6 pt-4 border-t border-discord-darkest">
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-discord-muted">Genre</span>
                                <span class="text-discord-text font-medium">EDM - FutureBass</span>
                            </div>
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-discord-muted">Tempo</span>
                                <span class="text-discord-text font-medium">145 BPM</span>
                            </div>
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-discord-muted">Song Writer: <b>reidz, dscrx & darman</b></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tech Stack Categories -->
        <section class="py-20 px-4 bg-discord-darkest">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold text-white mb-12 text-center">Tech Stack</h2>

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
                    <a href="https://tracker.gg/valorant/profile/riot/nimhpk%231111/overview?platform=pc&playlist=competitive&season=4c4b8cff-43eb-13d3-8f14-96b783c90cd2"
                        target="_blank" class="text-discord-muted hover:text-discord-blurple transition">
                        <img src="https://cdn.simpleicons.org/valorant/dcddde" alt="Valorant" class="w-6 h-6">
                    </a>
                    <a href="https://instagram.com/aigaal" target="_blank"
                        class="text-discord-muted hover:text-discord-blurple transition">
                        <img src="https://cdn.simpleicons.org/instagram/dcddde" alt="Instagram" class="w-6 h-6">
                    </a>
                    <a href="https://facebook.com/Aigaal/" target="_blank"
                        class="text-discord-muted hover:text-discord-blurple transition">
                        <img src="https://cdn.simpleicons.org/facebook/dcddde" alt="Facebook" class="w-6 h-6">
                    </a>
                    <a href="https://x.com/x_dscrack/" target="_blank"
                        class="text-discord-muted hover:text-discord-blurple transition">
                        <img src="https://cdn.simpleicons.org/x/dcddde" alt="X" class="w-6 h-6">
                    </a>
                    <a href="https://www.youtube.com/@discrack" target="_blank"
                        class="text-discord-muted hover:text-discord-blurple transition">
                        <img src="https://cdn.simpleicons.org/youtube/dcddde" alt="YouTube" class="w-6 h-6">
                    </a>
                    <a href="https://discord.gg/wmKmcyWu" target="_blank"
                        class="text-discord-muted hover:text-discord-blurple transition">
                        <img src="https://cdn.simpleicons.org/discord/dcddde" alt="Discord" class="w-6 h-6">
                    </a>
                    <a href="https://soundcloud.com/dscrack/" target="_blank"
                        class="text-discord-muted hover:text-discord-blurple transition">
                        <img src="https://cdn.simpleicons.org/soundcloud/dcddde" alt="Soundcloud" class="w-6 h-6">
                    </a>
                    <a href="https://github.com/Discrack" target="_blank"
                        class="text-discord-muted hover:text-discord-blurple transition">
                        <img src="https://cdn.simpleicons.org/github/dcddde" alt="GitHub" class="w-6 h-6">
                    </a>
                    <a href="https://www.linkedin.com/in/aigaal/" target="_blank"
                        class="text-discord-muted hover:text-discord-blurple transition">
                        <img src="https://cdn.simpleicons.org/logmein/dcddde" alt="LinkedIn" class="w-6 h-6">
                    </a>
                    <a href="https://wa.me/6282124424268" target="_blank"
                        class="text-discord-muted hover:text-discord-blurple transition">
                        <img src="https://cdn.simpleicons.org/whatsapp/dcddde" alt="WhatsApp" class="w-6 h-6">
                    </a>
                    <a href="mailto:aigalkurniawan@gmail.com"
                        class="text-discord-muted hover:text-discord-blurple transition">
                        <img src="https://cdn.simpleicons.org/gmail/dcddde" alt="Email" class="w-6 h-6">
                    </a>
                </div>
                <p class="text-discord-muted text-sm">© 2025 Aigal K. @discrack</p>
                <p class="text-discord-muted text-xs mt-2">Inspired by Discord</p>
            </div>
        </footer>
    </div>
</body>

</html>