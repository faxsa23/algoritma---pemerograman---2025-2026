<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Portfolio | Muhammad Aufa</title>

<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
body{
    font-family:'Orbitron',sans-serif;
    background:black;
    overflow-x:hidden;
}
.glass{
    background:rgba(255,255,255,.08);
    backdrop-filter:blur(14px);
    border:1px solid rgba(255,255,255,.15);
}
.neon{
    box-shadow:0 0 30px rgba(56,189,248,.8);
}
.video-overlay{
    background:radial-gradient(circle at center,rgba(0,0,0,.4),#000);
}

/* STAR */
.star{
    position:absolute;
    background:white;
    border-radius:50%;
    opacity:.8;
    animation:fly linear infinite;
}
@keyframes fly{
    from{transform:translateY(0)}
    to{transform:translateY(-2200px)}
}

/* PARALLAX */
.parallax{
    transition:transform .1s linear;
    will-change:transform;
}
</style>
</head>

<body class="text-white relative">

<div id="stars"></div>

<!-- VIDEO INTRO -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">

<video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover parallax" data-depth="2">
    <source src="{{ asset('videos/intro.mp4') }}" type="video/mp4">
</video>

<div class="absolute inset-0 video-overlay parallax" data-depth="1"></div>

<div class="relative z-10 text-center px-6 parallax" data-depth="6">
    <h1 class="text-5xl md:text-7xl font-extrabold text-cyan-400 neon animate-pulse">
        Selamat Datang 👋
    </h1>
    <p class="mt-6 text-xl text-gray-300 max-w-2xl mx-auto">
        Profil Pribadi • Web Developer • Futuristic Space 🚀
    </p>
    <button onclick="scrollToSection('profile')"
    class="mt-12 px-12 py-4 bg-cyan-400 text-black rounded-full font-bold neon hover:scale-110 transition">
        Masuk Profil
    </button>
</div>

</section>

<!-- PROFILE -->
<section id="profile" class="py-28 px-6 bg-black">
<div class="max-w-6xl mx-auto glass p-14 rounded-2xl neon parallax" data-depth="4">

<div class="flex flex-col md:flex-row items-center md:items-start gap-14">
    
    <!-- LOGO LARAVEL -->
    <div class="w-56 h-56 rounded-full flex items-center justify-center
    border-4 border-cyan-300 neon glass flex-shrink-0">
        <i class="fa-brands fa-laravel text-[110px] text-cyan-400
        drop-shadow-[0_0_25px_rgba(56,189,248,0.9)]"></i>
    </div>

    <!-- TEXT PROFILE -->
    <div class="text-center md:text-left">
        <h2 class="text-4xl font-extrabold text-cyan-400">Muhammad Aufa</h2>
        <p class="mt-2 text-gray-300">Web Developer • Laravel</p>

        <div class="mt-6 space-y-2 text-gray-300">
            <p>📍 Bogor</p>
            <p>📅 <span id="birthDateText"></span></p>
            <p>🎂 <span id="age"></span> Tahun</p>
            <p>🎓 Mahasiswa</p>
        </div>
    </div>

</div>
</div>
</section>

<!-- SKILLS -->
<section class="py-28 px-6 bg-black">
<div class="max-w-6xl mx-auto parallax" data-depth="3">
<h2 class="text-4xl font-bold text-cyan-400 mb-10">⚡ Skills</h2>

@php
$skills=[
['Laravel',80],
['PHP',85],
['JavaScript',85],
['Tailwind CSS',90],
['UI/UX',80]
];
@endphp

@foreach($skills as $s)
<div class="mb-6">
<div class="flex justify-between mb-1">
<span>{{ $s[0] }}</span><span>{{ $s[1] }}%</span>
</div>
<div class="w-full bg-gray-700 h-3 rounded-full">
<div class="bg-cyan-400 h-3 rounded-full neon" style="width:{{ $s[1] }}%"></div>
</div>
</div>
@endforeach
</div>
</section>

<!-- HOBBIES -->
<section class="py-28 px-6 bg-black">
<div class="max-w-6xl mx-auto parallax" data-depth="5">
<h2 class="text-4xl font-bold text-cyan-400 mb-10">🎮 Hobbies</h2>

<div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">
@php
$hobbies=[
['fa-code','Coding'],
['fa-gamepad','Gaming'],
['fa-camera','Photography'],
['fa-music','Music'],
['fa-pen-nib','Design'],
['fa-microchip','Tech Explorer']
];
@endphp

@foreach($hobbies as $h)
<div class="glass p-8 rounded-xl neon text-center hover:scale-110 transition">
<i class="fa-solid {{ $h[0] }} text-4xl text-cyan-300 mb-4"></i>
<h3 class="text-xl">{{ $h[1] }}</h3>
</div>
@endforeach
</div>
</div>
</section>

<!-- SOCIAL MEDIA -->
<section class="py-28 px-6 bg-black">
<div class="max-w-6xl mx-auto text-center parallax" data-depth="6">
<h2 class="text-4xl font-bold text-cyan-400 mb-10">🌐 Social Media</h2>

<div class="flex flex-wrap justify-center gap-8">
<a href="https://www.instagram.com/a.aufa_23" target="_blank"
class="glass w-36 h-36 rounded-xl neon flex flex-col items-center justify-center hover:scale-110 transition">
<i class="fa-brands fa-instagram text-4xl text-cyan-300"></i>
<span class="mt-3">Instagram</span>
</a>

<a href="https://github.com/faxsa23" target="_blank"
class="glass w-36 h-36 rounded-xl neon flex flex-col items-center justify-center hover:scale-110 transition">
<i class="fa-brands fa-github text-4xl text-cyan-300"></i>
<span class="mt-3">GitHub</span>
</a>

<a href="https://wa.me/6287878634742" target="_blank"
class="glass w-36 h-36 rounded-xl neon flex flex-col items-center justify-center hover:scale-110 transition">
<i class="fa-brands fa-whatsapp text-4xl text-cyan-300"></i>
<span class="mt-3">WhatsApp</span>
</a>
</div>
</div>
</section>

<footer class="py-10 text-center text-gray-400">
© {{ date('Y') }} Muhammad Aufa • Space Portfolio 🌌
</footer>

<script>
// STAR
for(let i=0;i<150;i++){
    let s=document.createElement('div');
    s.className='star';
    let size=Math.random()*2+1;
    s.style.width=size+'px';
    s.style.height=size+'px';
    s.style.left=Math.random()*100+'%';
    s.style.top=Math.random()*2000+'px';
    s.style.animationDuration=(Math.random()*20+10)+'s';
    document.body.appendChild(s);
}

// PARALLAX MOUSE (DESKTOP ONLY)
if(window.innerWidth > 768){
document.addEventListener('mousemove',e=>{
    document.querySelectorAll('.parallax').forEach(el=>{
        const depth=el.getAttribute('data-depth');
        const x=(window.innerWidth/2 - e.clientX)/25*depth;
        const y=(window.innerHeight/2 - e.clientY)/25*depth;
        el.style.transform=`translate(${x}px,${y}px)`;
    });
});
}

// SCROLL
function scrollToSection(id){
document.getElementById(id).scrollIntoView({behavior:'smooth'});
}

// UMUR
const birthDate=new Date("2006-12-23");
document.getElementById('birthDateText').innerText=
birthDate.toLocaleDateString('id-ID',{day:'numeric',month:'long',year:'numeric'});
function age(d){
let t=new Date(),a=t.getFullYear()-d.getFullYear();
if(t.getMonth()<d.getMonth()||(t.getMonth()==d.getMonth()&&t.getDate()<d.getDate()))a--;
return a;
}
document.getElementById('age').innerText=age(birthDate);
</script>

</body>
</html>
