<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pernikahan Iin & Ibnu</title>

    <meta name="robots" content="index, follow">
    <meta name="title" content="Undangan Pernikahan Iin & Ibnu">
    <meta name="description" content="Persahabatan, cinta, dan kasih sayang menjadi satu. Tak ku sangka, kau kini jadi teman hidupku.">
    <meta property="og:url" content="{{ route('homepage', [ 'invitation' => $guest->code ]) }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Undangan Pernikahan Iin & Ibnu" />
    <meta property="og:description" content="Persahabatan, cinta, dan kasih sayang menjadi satu. Tak ku sangka, kau kini jadi teman hidupku." />
    <meta property="og:image" content="{{ asset('img/sliders/slider-01.jpeg') }}" />
    <meta name="twitter:creator" content="@IbnuHMustofa" />
    <meta name="twitter:title" content="Undangan Pernikahan Iin & Ibnu" />
    <meta name="twitter:description" content="Persahabatan, cinta, dan kasih sayang menjadi satu. Tak ku sangka, kau kini jadi teman hidupku." />
    <meta name="twitter:image" content="{{ asset('img/sliders/slider-01.jpeg') }}" />

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@400;700&family=Dancing+Script:wght@400;700&family=Dawning+of+a+New+Day&family=Great+Vibes&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.13/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.min.css">

    <link rel="stylesheet" href="{{ asset('css/app.css?_=' . rand()) }}">

    {{-- <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-D6RVWCBVPE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-D6RVWCBVPE');
    </script> --}}

</head>
<body class="text-sm lg:text-base pb-32 modal-open">

    <nav class="fixed top-auto right-4 bottom-4 left-auto z-40 sm:right-24 md:right-16">
        <div class="flex flex-row items-center justify-end gap-x-4">
            <button type="button" class="w-10 h-10 rounded-lg outline-none inline-flex items-center justify-center text-center bg-camel bg-opacity-50" onClick="backToTop()">
                <i class="bi bi-arrow-up-short text-xl text-deep-koamaru relative top-[.15rem]"></i>
            </button>
            <button type="button" class="relative w-10 h-10 border-2 border-solid border-camel rounded-lg outline-none inline-flex items-center justify-center text-center bg-deep-koamaru" onClick="toggleBackSong()">
                <i class="bi bi-music-note-beamed text-sm text-camel relative top-[.15rem]"></i>
                <i class="bi bi-slash-lg absolute-center text-xl text-camel mt-[.15rem] hidden" id="__iconMusicPaused"></i>
            </button>
        </div>
    </nav>

    <section class="relative w-full h-[95vh] md:h-screen" id="section-kisah">
        <div class="slide-wrapper">
            <div class="w-full h-[95vh] bg-no-repeat bg-top bg-cover md:h-screen xl:bg-center" style="background-image: url('{{ asset('img/sliders/slider-01.jpeg') }}');"></div>
            <div class="w-full h-[95vh] bg-no-repeat bg-top bg-cover md:h-screen xl:bg-center" style="background-image: url('{{ asset('img/sliders/slider-02.jpeg') }}');"></div>
            <div class="w-full h-[95vh] bg-no-repeat bg-top bg-cover md:h-screen xl:bg-center" style="background-image: url('{{ asset('img/sliders/slider-03.jpeg') }}');"></div>
            <div class="w-full h-[95vh] bg-no-repeat bg-top bg-cover md:h-screen xl:bg-center" style="background-image: url('{{ asset('img/sliders/slider-04.jpeg') }}');"></div>
        </div>
        <!--  -->
        <div class="absolute inset-0 w-full h-full bg-camel opacity-30"></div>
        <div class="absolute top-auto bottom-24 w-full text-center sm:bottom-14">
            <h1 class="text-title text-5xl text-white" data-aos="fade-up">
                Inilah Kisah<br>
                Perjalanan Kami
            </h1>
            <div class="mt-4 flex flex-row justify-center">
                <i class="bi bi-chevron-double-down text-2xl text-white animate-bounce"></i>
            </div>
        </div>
    </section>

    <section class="relative w-full pt-20 pb-10 bg-white">
        <div class="absolute inset-0 top-[30%] w-full h-48 opacity-30 bg-no-repeat bg-cover bg-top md:h-80 xl:top-0 xl:h-screen xl:opacity-20" style="background-image: url('{{ asset('img/line-art-1.svg') }}');"></div>
        <div class="w-11/12 mx-auto">
            <div class="flex flex-col items-center justify-center text-center">
                <h2 class="text-title text-4xl text-deep-koamaru" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    Dirimulah Insan Itu
                </h2>
                <div class="w-72 mx-auto md:w-1/2 md:max-w-xl">
                    <div class="mt-5 text-art text-xl font-bold text-deep-koamaru">
                        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                            Matahari terbit kaki melangkah<br>
                            Menghirup sejuknya embun, menatap cahaya
                        </p><br>
                        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                            Pagi itu,<br>
                            ku tersadar bahwa hadirmu bukan sekadar hadir<br>
                            Dikau yang telah ku temui sejak 2001 silam,<br>
                            yang telah menemani masa kecilku hingga kini<br>
                            Dikau yang bisa meredam egoku, meredakan tangisku,<br>
                            hingga terbit senyum merekah bersama
                        </p><br>
                        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1100">
                            Tanpa sadar, tanpa duga,<br>
                            sosok yang selama ini ku panjatkan dalam doa,<br>
                            ternyata ia di depan mata<br>
                            Tak ku sangka, dari sekian banyak insan dunia,<br>
                            dirimulah orangnya
                        </p><br>
                        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1400">
                            Sahabatku kini, akan menjadi imamku,<br>
                            yang tak hanya menemani, tapi juga membersamai.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-16 xl:mt-24">
            <div class="w-full relative bg-rich-black">
                <div class="absolute inset-0 -top-1 w-full h-8 bg-white"></div>
                <div class="absolute inset-0 top-auto -bottom-1 w-full h-8 bg-white"></div>
                <div class="relative w-11/12 mx-auto sm:max-w-sm md:max-w-lg">
                    <img src="{{ asset('img/featured/img-1.jpeg') }}" class="available-to-zoom w-full h-auto" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000">
                </div>
            </div>
        </div>

    </section>


    <section class="relative w-full py-20 bg-white xl:pb-48">
        <div class="absolute top-1/2 left-1/2 w-80 h-80 opacity-40 bg-no-repeat bg-cover bg-center absolute-center xl:w-96 xl:h-96 xl:opacity-30" style="background-image: url('{{ asset('img/cloud.png') }}');"></div>
        <div class="w-11/12 mx-auto relative">
            <div class="flex flex-col items-center justify-center text-center">
                <h2 class="text-title text-4xl text-deep-koamaru" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    Kami Akan Menikah
                </h2>
                <div class="w-72 mx-auto md:w-2/3 md:max-w-xl">
                    <p  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                        Persahabatan, cinta, dan kasih sayang menjadi satu. Tak ku sangka, kau kini jadi teman hidupku
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-16 relative">
            <div class="w-11/12 mx-auto text-center">
                <div class="xl:max-w-5xl xl:mx-auto xl:flex xl:flex-row xl:items-center xl:justify-between">
                    <div>
                        <h3 class="text-art text-4xl text-deep-koamaru" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                            Suin
                        </h3>
                        <div class="w-72 mx-auto md:w-2/3 md:max-w-xl">
                            <p class="text-art text-lg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                                Putri Bapak Sunari dan Ibu Sukirah
                            </p>
                            <p class="text-art text-lg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                                Desa Pandangan Kulon, RT 03 RW 02, Kec. Kragan, Kab. Rembang, Jateng
                            </p>
                        </div>
                    </div>
                    <div class="my-5 xl:w-28">
                        <p class="text-art text-4xl text-deep-koamaru" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                            &
                        </p>
                    </div>
                    <div>
                        <h3 class="text-art text-4xl text-deep-koamaru" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                            Ibnu Halim Mustofa
                        </h3>
                        <div class="w-72 mx-auto md:w-2/3 md:max-w-xl">
                            <p class="text-art text-lg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                                Putra Bapak Jumali dan Ibu Masruroh
                            </p>
                            <p class="text-art text-lg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                                Desa Sumurtawang, RT 04 RW 02, Kec. Kragan, Kab. Rembang, Jateng
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="relative w-full py-20 bg-water">
        <div class="absolute w-40 -top-[9.80rem] right-0 left-auto bottom-auto opacity-50 lg:w-52 lg:-top-[12.75rem]">
            <img src="{{ asset('img/twin-flower.png') }}" alt="Twin Flower" class="rotate-180">
        </div>
        <div class="w-11/12 mx-auto relative">
            <div class="flex flex-col items-center justify-center text-center">
                <h2 class="text-title text-4xl text-deep-koamaru" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    Waktu Acara
                </h2>
                <div class="w-72 mx-auto md:w-2/3 md:max-w-xl">
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                        Doa restu Anda merupakan karunia berarti bagi kami
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-10 relative">
            <div class="w-11/12 mx-auto text-center sm:max-w-sm md:max-w-lg xl:max-w-none">
                <div class="xl:max-w-5xl xl:mx-auto xl:grid xl:grid-cols-2 xl:gap-x-10">
                    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                        <div class="px-7 py-5 rounded-lg bg-white bg-opacity-80">
                            <h3 class="text-lg font-bold text-deep-koamaru">
                                Akad Nikah
                            </h3>
                            <div>
                                <p>
                                    Senin, 16 Mei 2022 - 06.30 WIB
                                </p>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                        <div class="mt-5 px-7 py-5 rounded-lg bg-white bg-opacity-80 xl:mt-0">
                            <h3 class="text-lg font-bold text-deep-koamaru">
                                Resepsi
                            </h3>
                            <div>
                                <p class="my-1 text-xl text-aero font-bold">
                                    Senin, 16 Mei 2022<br>
                                    10.00 WIB
                                </p>
                                <p>
                                    Bertempat di:
                                </p>
                                <p>
                                    Rumah Mempelai Wanita<br>
                                    Desa Pandangan Kulon, RT 03 RW 02, Kec. Kragan, Kab. Rembang, Jateng
                                </p>
                            </div>
                            <div class="mt-4">
                                <a href="https://calendar.google.com/event?action=TEMPLATE&tmeid=M3BlazBnMG43Z3BlYWNzOGNhdDNsbGhpdm8gMGd0bmQwa2E4YTc1czVjcDY1ZGkzNXFtNXNAZw&tmsrc=0gtnd0ka8a75s5cp65di35qm5s%40group.calendar.google.com" target="_blank" class="w-64 px-2 py-2 h-10 text-center inline-flex items-center justify-center bg-aero rounded-lg shadow-lg">
                                    Buat Pengingat di Kalender
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="xl:-mt-40">
                        <div class="mt-5 p-5 rounded-lg bg-transparent xl:mt-0">
                            <h3 class="text-lg font-bold text-deep-koamaru" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                                Pengingat Acara
                            </h3>
                            <div class="w-72 mx-auto mt-4">
                                <div class="countdown grid grid-cols-4" data-date="16-5-2022" data-time="10:00">
                                    <div class="day text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                                        <span class="num block text-4xl font-bold">
                                            00
                                        </span>
                                        <span class="word">
                                            Hari
                                        </span>
                                    </div>
                                    <div class="hour text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1300">
                                        <span class="num block text-4xl font-bold">
                                            00
                                        </span>
                                        <span class="word">
                                            Jam
                                        </span>
                                    </div>
                                    <div class="min text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1600">
                                        <span class="num block text-4xl font-bold">
                                            00
                                        </span>
                                        <span class="word">
                                            Menit
                                        </span>
                                    </div>
                                    <div class="sec text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1900">
                                        <span class="num block text-4xl font-bold">
                                            00
                                        </span>
                                        <span class="word">
                                            Detik
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="relative w-full py-20 bg-white">
        <div class="absolute w-40 -top-[9.80rem] right-auto left-0 bottom-auto opacity-50 lg:w-60">
            <img src="{{ asset('img/center-flower.png') }}" alt="Center Flower" class="-rotate-12">
        </div>
        <div class="w-11/12 mx-auto relative">
            <div class="flex flex-col items-center justify-center text-center">
                <h2 class="text-title text-4xl text-deep-koamaru" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    Lokasi dan Denah
                </h2>
                <div class="w-72 mx-auto md:w-2/3 md:max-w-xl">
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                        Jadilah bagian di momen bahagia kami
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-10 relative">
            <div class="w-11/12 mx-auto text-center xl:w-auto">
                <div class="w-72 mx-auto md:w-2/3 md:max-w-xl xl:w-auto xl:max-w-5xl xl:mx-auto xl:grid xl:grid-cols-2 xl:gap-x-10">
                    <div class="mt-5 py-5 rounded-lg bg-white bg-opacity-80">
                        <h3 class="text-lg font-bold text-deep-koamaru" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                            Peta
                        </h3>
                        <div class="w-full xl:mt-5">
                            <div class="w-full h-80 bg-gray-100 xl:h-96" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.83533855559!2d111.58775631477147!3d-6.667316995179262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0!2zNsKwNDAnMDIuMyJTIDExMcKwMzUnMjMuOCJF!5e0!3m2!1sen!2sid!4v1652173794844!5m2!1sen!2sid"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                class="w-full h-full"></iframe>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="https://s.id/iinibnumaps" target="_blank" class="w-64 py-2 h-10 text-center inline-flex items-center justify-center bg-aero rounded-lg shadow-lg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                                Lihat Peta
                            </a>
                        </div>
                    </div>
                    <div class="mt-5 py-5 rounded-lg bg-white bg-opacity-80">
                        <h3 class="text-lg font-bold text-deep-koamaru" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                            Denah
                        </h3>
                        <div class="w-full xl:mt-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                            <img src="{{ asset('img/denah.jpeg') }}" alt="Denah" class="available-to-zoom w-full h-auto"
                                data-lightense-padding="40"
                                data-lightense-cubic-bezier="cubic-bezier(.2, 0, .1, 1)"
                                data-lightense-background="rgba(255, 255, 255, .50)"
                                data-lightense-z-index="2147483647">
                            <div class="mt-2 text-xs text-center">
                                Tap or click to zoom
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 p-5 rounded-lg bg-transparent">
                    <h3 class="text-lg font-bold text-deep-koamaru" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        Protokol Kesehatan
                    </h3>
                    <div class="text-center sm:w-72 sm:mx-auto md:w-2/3 md:max-w-xl">
                        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                            Tanpa mengurangi rasa hormat, kami memohon para tamu undangan yang hadir untuk menerapkan protokol kesehatan
                        </p>
                    </div>
                    <div class="w-72 mx-auto mt-4 lg:w-96">
                        <div class="grid grid-cols-3">
                            <div class="flex flex-col items-center justify-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                                <span class="flex flex-col items-center justify-center w-16 h-16 rounded-full bg-aero">
                                    <img src="{{ asset('img/prokes/pakai-masker.svg') }}" alt="Pakai Masker" class="w-auto h-8">
                                </span>
                                <span class="mt-2 block whitespace-nowrap">
                                    Pakai Masker
                                </span>
                            </div>
                            <div class="flex flex-col items-center justify-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1300">
                                <span class="flex flex-col items-center justify-center w-16 h-16 rounded-full bg-aero">
                                    <img src="{{ asset('img/prokes/cuci-tangan.svg') }}" alt="Cuci Tangan" class="w-auto h-8">
                                </span>
                                <span class="mt-2 block whitespace-nowrap">
                                    Cuci Tangan
                                </span>
                            </div>
                            <div class="flex flex-col items-center justify-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1600">
                                <span class="flex flex-col items-center justify-center w-16 h-16 rounded-full bg-aero">
                                    <img src="{{ asset('img/prokes/jaga-jarak.svg') }}" alt="Jaga Jarak" class="w-auto h-8">
                                </span>
                                <span class="mt-2 block whitespace-nowrap">
                                    Jaga Jarak
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="relative w-full py-20 bg-water">
        <div class="absolute w-40 -top-[9.80rem] right-0 left-auto bottom-auto opacity-50 lg:w-52 lg:-top-[12.75rem]">
            <img src="{{ asset('img/twin-flower.png') }}" alt="Twin Flower" class="rotate-180">
        </div>
        <div class="w-11/12 mx-auto relative">
            <div class="flex flex-col items-center justify-center text-center">
                <h2 class="text-title text-4xl text-deep-koamaru" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    Untaian Doa
                </h2>
                <div>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                        Usaha kurang bermakna tanpa doa
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-10 relative">
            <div class="w-11/12 mx-auto sm:max-w-sm md:max-w-lg xl:max-w-none">
                <div class="xl:max-w-5xl xl:mx-auto xl:grid xl:grid-cols-2 xl:gap-x-10">
                    <div class="mt-5">
                        <form action="#" method="POST" id="__formWish">
                            @csrf
                            <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                                <label for="" class="block text-left">
                                    Dari:
                                </label>
                                <input type="text" name="from" class="mt-1 block w-full p-2 h-10 bg-white rounded-lg outline-none transition duration-300 focus:ring-2 focus:ring-deep-koamaru focus:outline focus:ring-opacity-30">
                            </div>
                            <div class="mt-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1300">
                                <label for="" class="block text-left">
                                    Doa terbaik Anda untuk kami:
                                </label>
                                <textarea name="wish" class="mt-1 block w-full p-2 bg-white rounded-lg outline-none resize-none transition duration-300 focus:ring-2 focus:ring-deep-koamaru focus:outline focus:ring-opacity-30" rows="7"></textarea>
                            </div>
                            <div class="mt-4 text-center">
                                <button type="submit" id="__btnSubmitWish" class="w-64 px-2 py-2 h-10 text-center inline-flex items-center justify-center bg-aero rounded-lg shadow-lg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1600">
                                    Kirim
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="mt-16 xl:mt-5">
                        <div class="w-full h-full xl:px-5 xl:py-7 xl:h-96 xl:overflow-y-auto" data-scrollbar>
                            <div class="flex flex-col gap-4" id="__latestWishesWrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="relative w-full py-20 bg-white">
        <div class="absolute w-40 -top-[9.80rem] right-auto left-0 bottom-auto opacity-50 lg:w-60">
            <img src="{{ asset('img/center-flower.png') }}" alt="Center Flower" class="-rotate-12">
        </div>
        <div class="w-11/12 mx-auto relative">
            <div class="flex flex-col items-center justify-center text-center">
                <h2 class="text-title text-4xl text-deep-koamaru" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    Hadiah
                </h2>
                <div class="w-72 mx-auto md:w-2/3 md:max-w-xl">
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                        Jika memberi merupakan ungkapan tanda kasih, Anda dapat mengirimkan hadiah melalui:
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-10 relative">
            <div class="w-11/12 mx-auto text-center">
                <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-center">
                    <div>
                        <button type="button" id="__btnModalDompetDigital" class="w-64 py-2 h-10 text-center inline-flex items-center justify-center bg-aero rounded-lg shadow-lg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                            Dompet Digital
                        </button>
                    </div>
                    <div>
                        <button type="button" id="__btnModalPengirimanKado" class="w-64 py-2 h-10 text-center inline-flex items-center justify-center bg-aero rounded-lg shadow-lg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1300">
                            Pengiriman Kado
                        </button>
                    </div>
                </div>
                <div class="w-72 mx-auto md:w-2/3 md:max-w-xl mt-10">
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="2000">
                        Sebelumnya, kami ucapkan terima kasih atas perhatian dan bentuk cinta Bapak / Ibu / Saudara(i) untuk kami.
                    </p>
                </div>
            </div>
        </div>

    </section>


    <section class="relative w-full py-20 bg-water">
        <div class="absolute w-40 -top-[9.80rem] right-0 left-auto bottom-auto opacity-50 lg:w-52 lg:-top-[12.75rem]">
            <img src="{{ asset('img/twin-flower.png') }}" alt="Twin Flower" class="rotate-180">
        </div>
        <div class="w-72 mx-auto md:w-2/3 md:max-w-xl">
            <div class="text-center">
                <p class="text-art text-lg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    Dari mana datangnya cinta<br>
                    Dari mata turun ke hati
                </p>
                <p class="text-art text-lg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                    Terima kasih atas doa restunya<br>
                    Doa baik Anda sangat berarti
                </p>
            </div>
        </div>
    </section>


    <section class="w-full py-20 bg-white">
        <div class="w-11/12 mx-auto">
            <div class="text-center">
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    Kami yang berbahagia,
                </p>
                <p class="text-sign text-5xl" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                    Iin & Ibnu<br>
                    Sekeluarga
                </p>
            </div>
        </div>
    </section>

    <!-- Music -->
    <iframe id="player" width="560" height="315" src="https://www.youtube.com/embed/mM60wmv26yc?loop=1&enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="display: none;"></iframe>

    <div class="w-full h-screen fixed overflow-y-auto bg-white inset-0 z-50 transition duration-300" id="__coverInvitation">
        <div class="py-20 xl:py-10">
            <div class="w-80 mx-auto text-center">
                <h1 class="animate__animated animate__fadeInUp text-title text-4xl">
                    You're invited to<br>
                    the wedding of
                </h1>
            </div>
            <div class="animate__animated animate__zoomIn animate__duration-2s my-5 w-80 h-80 mx-auto bg-no-repeat bg-cover" style="background-image: url('{{ asset('img/ring-flower.png') }}');">
                <div class="w-full h-full flex flex-col items-center justify-center">
                    <h2 class="text-art font-bold text-center">
                        <span class="block text-5xl">
                            Iin
                        </span>
                        <span class="block my-3 text-3xl">
                            &
                        </span>
                        <span class="block text-5xl">
                            Ibnu
                        </span>
                    </h2>
                </div>
            </div>
            <div class="w-80 mx-auto text-center">
                <h3 class="animate__animated animate__zoomIn animate__delay1s">
                    <span class="block text-base">
                        Dear
                    </span>
                    <span class="block mt-1 text-xl font-bold">
                        {{ $guest->nick_name }}
                    </span>
                </h3>
            </div>
            <div class="animate__animated animate__fadeInUp mt-20 w-80 mx-auto text-center xl:mt-10">
                <button type="button" id="__btnBukaUndangan" class="w-64 px-2 py-2 h-10 text-center inline-flex items-center justify-center bg-aero rounded-lg shadow-lg disabled:bg-opacity-50 disabled:cursor-not-allowed" onClick="openInvitation(this)" disabled>
                    Buka Undangan
                    <span class="ml-2">
                        <i class="bi bi-chevron-double-right text-xs"></i>
                    </span>
                </button>
            </div>
        </div>
    </div>


    <div class="w-full fixed bg-black bg-opacity-70 inset-0 z-50 transition duration-300 modal-hide" id="__modalDompetDigital">
        <div class="modal-overflow w-full h-screen overflow-y-auto">
            <div class="bg-white w-11/12 sm:w-1/2 md:w-11/12 lg:w-3/4 lg:max-w-3xl mx-auto rounded-lg text-left my-10">
                <div class="flex justify-between items-center px-6 py-5">
                    <span class="text-xl font-bold">
                        Dompet Digital
                    </span>
                    <button type="button" class="bg-transparent border-0 outline-none focus:outline-none" id="__btnCloseModalDompetDigital">
                        <svg class="fill-current text-red-600" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                        </svg>
                    </button>
                </div>
                <div class="px-6 pb-8">
                    <div class="grid grid-cols-1 gap-10 sm:grid-cols-3">
                        <div>
                            <div class="w-full flex flex-row items-center justify-center">
                                <img src="{{ asset('img/payments/bca.png') }}" alt="Bank BCA" class="w-32 h-auto">
                            </div>
                            <div class="mt-3 text-center">
                                <p>
                                    a.n. Ibnu Halim Mustofa
                                </p>
                                <p>
                                    816 512 9861
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-row items-center justify-center">
                                <img src="{{ asset('img/payments/bni.png') }}" alt="Bank BCA" class="w-32 h-auto">
                            </div>
                            <div class="mt-3 text-center">
                                <p>
                                    a.n. Sdri Suin
                                </p>
                                <p>
                                    039 619 2019
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-row items-center justify-center">
                                <img src="{{ asset('img/payments/gopay.png') }}" alt="Gopay" class="w-32 h-auto">
                            </div>
                            <div class="mt-3 text-center sm:mt-5">
                                <p>
                                    a.n. Ibnu Halim Mustofa
                                </p>
                                <p>
                                    +6285219908504
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="w-full fixed bg-black bg-opacity-70 inset-0 z-50 transition duration-300 modal-hide" id="__modalPengirimanKado">
        <div class="modal-overflow w-full h-screen overflow-y-auto">
            <div class="bg-white w-11/12 mx-auto rounded-lg text-left my-10 sm:max-w-sm">
                <div class="flex justify-between items-center px-6 py-5">
                    <span class="text-xl font-bold">
                        Pengiriman Kado
                    </span>
                    <button type="button" class="bg-transparent border-0 outline-none focus:outline-none" id="__btnCloseModalPengirimanKado">
                        <svg class="fill-current text-red-600" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                        </svg>
                    </button>
                </div>
                <div class="px-6 pb-8">
                    <div class="flex flex-col justify-between gap-10">
                        <div>
                            <div class="text-center">
                                <p>
                                    <b>
                                        Penerima
                                    </b>
                                </p>
                                <p>
                                    Iin Suin<br>
                                    089 625 1111 42
                                </p>
                                <br>
                                <p>
                                    <b>
                                        Alamat
                                    </b>
                                </p>
                                <p>
                                    Desa Pandangan Kulon, RT 03 RW 02, Kec. Kragan, Kab. Rembang, Jateng
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="w-11/12 mx-auto">
            <div class="text-center">
                <p class="text-gray-500" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    Made with <span class="text-red-400">&hearts;</span> by <a href="https://ibnuis.dev" target="_blank" rel="noreferrer" class="font-bold">Ibnu Halim Mustofa</a>
                </p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/smooth-scrollbar@8.7.4/dist/smooth-scrollbar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightense-images@1.0.17/dist/lightense.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.13/dist/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.min.js"></script>
    <script src="{{ asset('js/vendor/countdown/countdown.js') }}"></script>
    <script src="{{ asset('js/vendor/countdown/init.js') }}"></script>
    <script src="{{ asset('js/modalize.js') }}"></script>

    <script>
        const BASE_URL = '{{ url('/') }}';
    </script>
    <script src="{{ asset('js/scrollbar.js') }}"></script>
    <script src="{{ asset('js/slider.js') }}"></script>
    <script src="{{ asset('js/backsong.js') }}"></script>
    <script src="{{ asset('js/script.js?_=' . rand()) }}"></script>
    <script src="{{ asset('js/wishes.js?_=' . rand()) }}"></script>
</body>
</html>