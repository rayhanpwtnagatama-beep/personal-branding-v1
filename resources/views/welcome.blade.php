<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rayhan Pawitra Nagatama | Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=JetBrains+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-mono { font-family: 'JetBrains Mono', monospace; }
        .section-line { height: 1px; background-color: #233554; flex-grow: 1; margin-left: 20px; }
    </style>
</head>
<body class="bg-[#0a192f] text-[#ccd6f6] selection:bg-[#64ffda] selection:text-[#0a192f]">

    <!-- Navbar -->
    <nav class="fixed top-0 w-full z-50 bg-[#0a192f]/90 backdrop-blur-md border-b border-[#233554] py-5">
        <div class="container mx-auto px-6 md:px-12 flex justify-between items-center">
            <div class="text-2xl font-bold text-[#64ffda] tracking-wider">RPN</div>
            <div class="hidden md:flex space-x-8 text-xs font-mono uppercase tracking-widest">
                <a href="#home" class="hover:text-[#64ffda] transition-all">Home</a>
                <a href="#about" class="hover:text-[#64ffda] transition-all">About</a>
                <a href="#journey" class="hover:text-[#64ffda] transition-all">Journey</a>
                <a href="#experience" class="hover:text-[#64ffda] transition-all">Experience</a>
                <a href="#skills" class="hover:text-[#64ffda] transition-all">Skills</a>
                <a href="#projects" class="hover:text-[#64ffda] transition-all">Projects</a>
                <a href="#contact" class="hover:text-[#64ffda] transition-all">Contact</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-6 md:px-12 lg:px-24">
        
        <!-- Hero Section -->
        <section id="home" class="min-h-screen flex flex-col md:flex-row items-center justify-between py-20 gap-16">
            <div class="md:w-3/5 space-y-6">
                <p class="text-[#64ffda] font-mono">Hi, my name is</p>
                <h1 class="text-4xl md:text-7xl font-bold text-white leading-tight">Rayhan Pawitra Nagatama.</h1>
                <h2 class="text-2xl md:text-4xl font-bold text-[#8892b0]">Bridging the gap between mathematical precision and code logic.</h2>
                <p class="max-w-xl text-[#8892b0] leading-relaxed text-lg">
                    Saya adalah siswa Kelas 12C di <span class="text-[#64ffda]">SMAK Frateran Surabaya</span>. Berdedikasi tinggi pada pengembangan web, logika matematika, dan disiplin fisik melalui olahraga voli.
                </p>
                <div class="pt-4">
                    <a href="#projects" class="inline-block px-8 py-4 border border-[#64ffda] text-[#64ffda] rounded hover:bg-[#64ffda]/10 transition-all font-mono">Check out my work!</a>
                </div>
            </div>
            <div class="md:w-2/5 flex justify-center md:justify-end">
                <div class="relative w-64 h-64 md:w-80 md:h-80 group">
                    <div class="absolute inset-0 border-2 border-[#64ffda] rounded-xl translate-x-4 translate-y-4 group-hover:translate-x-2 group-hover:translate-y-2 transition-all"></div>
                    <div class="relative w-full h-full bg-[#112240] rounded-xl overflow-hidden border border-[#233554]">
                        <img src="{{ asset('images/HAIL.jpeg') }}" class="w-full h-full object-cover opacity-90 group-hover:opacity-100 transition-all">
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section (Balanced & Rata Kiri) -->
        <section id="about" class="py-24">
            <div class="flex items-center mb-12">
                <h2 class="text-3xl font-bold text-white whitespace-nowrap">About Me</h2>
                <div class="section-line"></div>
            </div>
            <div class="grid md:grid-cols-2 gap-16 items-start">
                <div class="space-y-6 text-[#8892b0] text-lg">
                    <p>Halo! Nama saya Rayhan, siswa kelas 12 di <span class="text-[#64ffda]">SMAK Frateran Surabaya</span> dan alumni <span class="text-white">SMPK Angelus Custos 1</span>.</p>
                    <p>Selama 4 semester berturut-turut, saya berhasil mempertahankan <span class="text-white font-semibold">nilai 100 di mata pelajaran Matematika</span>. Bagi saya, matematika adalah dasar dari segala logika pemrograman yang saya bangun.</p>
                    <p>Selain fokus pada akademik, saya sangat mendalami dunia <span class="text-[#64ffda]">Web Development</span> dan aktif dalam <span class="text-white">Extra Voli Sekolah</span> untuk melatih disiplin dan kerjasama tim.</p>
                </div>
                <div class="flex justify-center md:justify-end">
                    <div class="relative w-64 h-64 group">
                        <div class="absolute inset-0 border-2 border-[#64ffda] rounded translate-x-5 translate-y-5 group-hover:translate-x-3 group-hover:translate-y-3 transition-all"></div>
                        <div class="relative w-full h-full bg-[#64ffda]/20 rounded overflow-hidden grayscale hover:grayscale-0 transition-all">
                            <img src="{{ asset('images/ABOUT.jpeg') }}" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Journey Section (HORIZONTAL) -->
        <section id="journey" class="py-24">
            <div class="flex items-center mb-16">
                <h2 class="text-3xl font-bold text-white whitespace-nowrap">Academic Journey</h2>
                <div class="section-line"></div>
            </div>
            
            <div class="relative px-4">
                <!-- Horizontal Line (Desktop) -->
                <div class="hidden md:block absolute top-[22px] left-[10%] right-[10%] h-[2px] bg-[#233554] z-0"></div>
                
                <div class="grid md:grid-cols-3 gap-8 relative z-10">
                    <!-- SMP -->
                    <div class="flex flex-col items-center md:items-start text-center md:text-left">
                        <div class="w-12 h-12 rounded-full bg-[#0a192f] border-4 border-[#64ffda] shadow-[0_0_15px_#64ffda] flex items-center justify-center mb-6 z-20">
                            <i class="fa-solid fa-school text-[#64ffda] text-sm"></i>
                        </div>
                        <div class="bg-[#112240] p-6 rounded-lg border border-[#233554] w-full hover:border-[#64ffda]/30 transition-all">
                            <span class="text-[#64ffda] font-mono text-xs uppercase tracking-widest">2020 - 2023</span>
                            <h3 class="text-lg font-bold text-white mt-2">SMPK Angelus Custos 1</h3>
                            <p class="text-[#8892b0] mt-3 text-sm leading-relaxed">Membangun fondasi akademik yang kuat dan mulai mengasah logika melalui kompetisi matematika.</p>
                        </div>
                    </div>
                    
                    <!-- SMA -->
                    <div class="flex flex-col items-center md:items-start text-center md:text-left">
                        <div class="w-12 h-12 rounded-full bg-[#0a192f] border-4 border-[#64ffda] shadow-[0_0_15px_#64ffda] flex items-center justify-center mb-6 z-20">
                            <i class="fa-solid fa-graduation-cap text-[#64ffda] text-sm"></i>
                        </div>
                        <div class="bg-[#112240] p-6 rounded-lg border border-[#233554] w-full hover:border-[#64ffda]/30 transition-all">
                            <span class="text-[#64ffda] font-mono text-xs uppercase tracking-widest">2023 - Sekarang</span>
                            <h3 class="text-lg font-bold text-white mt-2">SMAK Frateran Surabaya</h3>
                            <p class="text-[#8892b0] mt-3 text-sm leading-relaxed">Fokus pada akademik (Matematika), aktif di tim voli sekolah dan explore diri dengan mengikuti extra pencinta alam.</p>
                        </div>
                    </div>
                    
                    <!-- UNIV -->
                    <div class="flex flex-col items-center md:items-start text-center md:text-left">
                        <div class="w-12 h-12 rounded-full bg-[#0a192f] border-4 border-[#233554] flex items-center justify-center mb-6 z-20">
                            <i class="fa-solid fa-university text-[#64ffda] text-sm"></i>
                        </div>
                        <div class="bg-[#112240] p-6 rounded-lg border border-[#233554] w-full hover:border-[#64ffda]/30 transition-all">
                            <span class="text-[#64ffda] font-mono text-xs uppercase tracking-widest italic">Masa Depan</span>
                            <h3 class="text-lg font-bold text-white mt-2">Target: Universitas Impian</h3>
                            <p class="text-[#8892b0] mt-3 text-sm leading-relaxed">Intensif mempersiapkan diri untuk masuk ke jurusan Teknik Informatika / Computer Science di Universitas terbaik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Experience Section (3 Grid Foto) -->
        <section id="experience" class="py-24">
            <div class="flex items-center mb-12">
                <h2 class="text-3xl font-bold text-white whitespace-nowrap">Experience</h2>
                <div class="section-line"></div>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach($experiences as $exp)
                <div class="bg-[#112240] rounded-lg overflow-hidden border border-[#233554] hover:-translate-y-2 transition-all group">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ $exp->image_url }}" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-110 transition-all">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white">{{ $exp->title }}</h3>
                        <p class="text-[#64ffda] font-mono text-xs mb-4">{{ $exp->organization }} | {{ $exp->period }}</p>
                        <p class="text-[#8892b0] text-sm leading-relaxed">{{ $exp->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <!-- Skills Section (Balanced) -->
        <section id="skills" class="py-24">
            <div class="flex items-center mb-12">
                <h2 class="text-3xl font-bold text-white whitespace-nowrap">Skills</h2>
                <div class="section-line"></div>
            </div>
            <div class="grid md:grid-cols-2 gap-16 items-start">
                <div class="space-y-8">
                    <div class="space-y-2">
                        <div class="flex justify-between text-sm font-mono"><span class="text-white">Mathematics (Logic)</span><span class="text-[#64ffda]">95%</span></div>
                        <div class="h-2 bg-[#233554] rounded-full"><div class="h-full bg-[#64ffda]" style="width: 95%"></div></div>
                    </div>
                    <div class="space-y-2">
                        <div class="flex justify-between text-sm font-mono"><span class="text-white">Web Development</span><span class="text-[#64ffda]">80%</span></div>
                        <div class="h-2 bg-[#233554] rounded-full"><div class="h-full bg-[#64ffda]" style="width: 80%"></div></div>
                    </div>
                    <div class="space-y-2">
                        <div class="flex justify-between text-sm font-mono"><span class="text-white">Physical Endurance</span><span class="text-[#64ffda]">85%</span></div>
                        <div class="h-2 bg-[#233554] rounded-full"><div class="h-full bg-[#64ffda]" style="width: 85%"></div></div>
                    </div>
                </div>
                <div class="flex flex-wrap gap-3">
                    @php $tags = ['Laravel', 'C++', 'Tailwind', 'SQLite', 'Git', 'JS']; @endphp
                    @foreach($tags as $tag)
                    <span class="px-4 py-2 bg-[#112240] border border-[#64ffda]/30 text-[#64ffda] rounded font-mono text-sm hover:bg-[#64ffda]/10 transition-all">
                        {{ $tag }}
                    </span>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="py-24">
            <div class="flex items-center mb-12">
                <h2 class="text-3xl font-bold text-white whitespace-nowrap">Featured Projects</h2>
                <div class="section-line"></div>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach($projects as $project)
                <div class="bg-[#112240] p-8 rounded-lg border border-[#233554] hover:border-[#64ffda]/50 transition-all group flex flex-col h-full">
                    <div class="flex justify-between items-center mb-6">
                        <div class="text-[#64ffda] text-4xl"><i class="fa-solid fa-folder-open"></i></div>
                        <div class="flex space-x-4 text-xl text-[#8892b0]">
                        <a href="{{ $project->link }}" target="_blank" class="hover:text-[#64ffda]"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4 group-hover:text-[#64ffda] transition-all">{{ $project->title }}</h3>
                    <p class="text-[#8892b0] text-sm mb-8 leading-relaxed flex-grow">{{ $project->description }}</p>
                    <div class="text-xs font-mono text-[#64ffda] flex flex-wrap gap-3 mt-auto">
                        @foreach(explode(',', $project->tech_stack) as $tech)
                        <span>{{ trim($tech) }}</span>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <section id="contact" class="py-32 text-center max-w-2xl mx-auto">
            <p class="text-[#64ffda] font-mono mb-4">What's Next?</p>
            <h2 class="text-5xl font-bold text-white mb-6">Get In Touch</h2>
            <p class="text-[#8892b0] mb-12 text-lg">Inbox saya selalu terbuka. Jika Anda memiliki pertanyaan mengenai matematika, voli, atau ingin berkolaborasi dalam project coding, silakan hubungi saya!</p>
            <div class="flex justify-center space-x-10 teaxt-3xl mb-12">
                <a href="https://wa.me/628887083145" target="_blank" class="hover:text-[#64ffda] transition-all"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="https://github.com/rayhanpwtnagatama-beep" target="_blank" class="hover:text-[#64ffda] transition-all"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/rayhan-pawitra-n-3b01a9400/" target="_blank" class="hover:text-[#64ffda] transition-all"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://www.instagram.com/rayhanpawitra" target="_blank" class="hover:text-[#64ffda] transition-all"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=rayhanpwtnagatama@gmail.com"  target="_blank" class="hover:text-[#64ffda] transition-all"><i class="fa-solid fa-envelope"></i></a>
            </div>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=rayhanpwtnagatama@gmail.com"  target="_blank" class="inline-block px-10 py-4 border border-[#64ffda] text-[#64ffda] rounded hover:bg-[#64ffda]/10 transition-all font-mono text-lg">Say Hello</a>
        </section>

    </main>

    <footer class="py-10 border-t border-[#233554] text-center">
        <p class="text-xs font-mono text-[#8892b0] hover:text-[#64ffda] transition-all cursor-default">
            Designed & Built by Rayhan Pawitra Nagatama © 2026
        </p>
    </footer>

</body>
</html>
 