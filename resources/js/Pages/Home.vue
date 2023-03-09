<template>    
<div class="fixed top-0 w-full z-50">
    <nav class="bg-white border-b-mentifyTheme-200 border-b-2">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5 h-24">
            <a href="#" class="flex items-center">
                <img src="/mentify_logo.png" class="h-14 mr-3" alt="Mentify Logo" />
            </a>
            <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
          <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 items-center">
            <li>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-mentifyOrange rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                    Kelas
                    <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                      <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                      </li>
                    </ul>
                    <div class="py-1">
                      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign out</a>
                    </div>
                </div>
            </li>
            <li>
              <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Karya Alumni</a>
            </li>
            <li>
              <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Kelas Saya</a>
            </li>
            <li>
                <div class="w-10 h-10 rounded-full cursor-pointer">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"></path>
                    </svg>
                </div>
                <!-- Dropdown menu -->
                <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                    <div>Bonnie Green</div>
                    <div class="font-medium truncate">name@flowbite.com</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    </ul>
                    <div class="py-1">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                    </div>
                </div>
            </li>
            <li>
                <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src="/profile-picture-5.jpg" alt="User dropdown">
                <!-- Dropdown menu -->
                <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                    <div>Bonnie Green</div>
                    <div class="font-medium truncate">name@flowbite.com</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    </ul>
                    <div class="py-1">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                    </div>
                </div>
            </li>
          </ul>
        </div>
        </div>
    </nav>
    <nav class="bg-white border-b-gray border-b-2 drop-shadow-md">
        <div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6 h-24">
            <div class="flex justify-around items-center h-full">
                <button type="button" class="text-gray-400 bg-gray-50 focus:outline-none hover:bg-mentifyTheme hover:border-mentifyTheme-200 hover:text-white focus:ring-4 focus:ring-gray-200 font-large rounded-lg text-sm px-16 py-3.5">Mentify Bootcamp</button>
    
                <button type="button" class="text-gray-400 bg-gray-50 focus:outline-none hover:bg-mentifyTheme hover:border-mentifyTheme-200 hover:text-white focus:ring-4 focus:ring-gray-200 font-large rounded-lg text-sm px-16 py-3.5">Mentify Life</button>
    
                <button type="button" class="text-gray-400 bg-gray-50 focus:outline-none hover:bg-mentifyTheme hover:border-mentifyTheme-200 hover:text-white focus:ring-4 focus:ring-gray-200 font-large rounded-lg text-sm px-16 py-3.5">Online Workshop</button>
    
                <button type="button" class="text-gray-400 bg-gray-50 focus:outline-none hover:bg-mentifyTheme hover:border-mentifyTheme-200 hover:text-white focus:ring-4 focus:ring-gray-200 font-large rounded-lg text-sm px-16 py-3.5">Webinar</button>
    
            </div>
        </div>
    </nav>
</div>   
<div class="container mx-auto overflow-y-auto mt-56 px-36 space-y-28">
    <section class="flex flex-row justify-between items-center w-full">
        <div class="w-2/5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Online Workshop</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Pelajari UX Writing dan kembangkan skillmu agar bisa membuat desain dengan copy yang mudah dimengerti.  Pada kelas UX Writing ini kamu akan belajar mengenai UX Writing lebih dalam dimulai dari fundamental hingga praktik di dunia kerja</p>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-mentifyOrange rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                PIlihan Workshop
            </a>
        </div>
        <div class="w-3/5">
            <img class="h-auto max-w-full" src="/image-2@1x.jpg" alt="image description">
        </div>
    </section>
    <section class="space-y-8">
        <div class="flex justify-around items-center">
            <div class="w-1/2">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Online Workshop</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Pelajari UX Writing dan kembangkan skillmu agar bisa membuat desain dengan copy yang mudah dimengerti.  Pada kelas UX Writing ini kamu akan belajar mengenai UX Writing lebih dalam dimulai dari fundamental hingga praktik di dunia kerja</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-mentifyOrange rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    PIlihan Workshop
                </a>
            </div>
            <div class="w-1/2">
                <form class="flex flex-row-reverse">   
                    <label for="voice-search" class="sr-only">Search</label>
                    <div class="relative w-96">
                        <input type="text" v-model="searchCategory" id="voice-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required>
                        <button type="button" class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="p-2 text-sm text-red-800 rounded-full bg-mentifyNotify max-w-max" role="alert">
            Hai Evan, saat ini kamu memiliki kuota untuk  <span class="font-medium">mengikuti 1 workshop secara gratis </span>dari daftar workshop berikut 
        </div>
        <div>
            <div class="flex items-center h-full space-x-2">
                <button @click="getCategory(item.webinars_category)" v-for="item in $page['props']['webinarCategory']" type="button" class="text-gray-400 bg-gray-50 focus:outline-none hover:bg-mentifyTheme hover:border-mentifyTheme-200 hover:text-white focus:ring-4 focus:ring-gray-200 font-large rounded-lg text-sm px-4 py-3.5">
                    {{ item.webinars_category }}
                </button>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <div v-for="(item, index) in webinarData" class="relative max-w-md bg-white border border-gray-200 rounded-lg drop-shadow-xl dark:bg-gray-800 dark:border-gray-70">
                <div class="bg-mentifyTheme rounded-tl-lg rounded-tr-lg" :style="index % 2 == 0 ? '' : 'background-image: url(/profile-picture-5.jpg)'">
                    <div class="px-4 pt-4 pb-10 space-y-4">
                        <img src="/mentify_logo.png" class="h-8" alt="Mentify Logo" />
                        <h5 class="text-xl font-semibold tracking-tight text-white">{{ item.webinars_name }}</h5>
                    </div> 
                </div>
                <div class="absolute top-28 flex items-center justify-between w-full px-4 ">
                    <div class="flex -space-x-2">
                            <img class="w-10 h-10 rounded-full dark:border-gray-800" src="/profile-picture-5.jpg" alt="">
                            <img class="w-10 h-10 rounded-full dark:border-gray-800" src="/profile-picture-5.jpg" alt="">
                            <img class="w-10 h-10 rounded-full dark:border-gray-800" src="/profile-picture-5.jpg" alt="">
                    </div>
                    <div class="bg-blue-700 max-w-max text-white text-center h-8 px-6 flex items-center rounded-full font-medium">{{ item.webinars_level }}</div>
                </div>
                <div class="p-5 space-y-4">
                    <div class="text-gray-600">
                        <span class="font-medium">Mentor </span><br>
                        Evan Gilang, Annisa Nur, Evira Tiffany
                    </div>
                    <!-- element jika sudah tutup -->
                    <div class="relative pb-8" v-if="item.webinars_quota == item.webinars_booked">
                        <div class="mb-1 text-md font-bold text-mentifyTheme">Workshop Penuh</div>
                        <div class="w-full h-4 mb-4 bg-gray-200 rounded-full dark:bg-gray-700">
                            <div class="h-4 bg-mentifyTheme rounded-full" style="width: 100%"></div>
                        </div>
                        <div class="absolute top-12 text-gray-600 text-sm">
                            Sayang banget, workshop ini udah penuh kuotanya. 
                        </div>
                    </div>
                    <div v-else class="relative pb-8">
                        <div v-if="(item.webinars_booked / item.webinars_quota) * 100 > 80" class="mb-1 text-md font-bold text-mentifyOrange">Kuota Terbatas Akan Segera Habis</div>
                        <div v-else class="mb-1 text-md font-bold text-mentifyOrange">Kuota Masih Tersedia</div>
                        <div class="w-full h-4 mb-4 bg-gray-200 rounded-full dark:bg-gray-700">
                            <div class="h-4 bg-gradient-to-r from-amber-300 to-mentifyOrange rounded-full" :style="'width:'+(item.webinars_booked / item.webinars_quota) * 100 +'%'"></div>
                        </div>
                        <div class="absolute top-12 text-gray-600 text-sm">
                            Pendaftaran akan tutup dalam <span class="font-bold"> {{ item.webinars_end_registration }}</span> 
                        </div>
                    </div>
                    <button v-if="item.webinars_quota == item.webinars_booked" type="button" class="w-full text-mentifyTheme bg-gray-50 focus:outline-none hover:bg-mentifyTheme hover:border-mentifyTheme-200 hover:text-white focus:ring-4 focus:ring-gray-200 font-large rounded-lg text-sm px-4 py-3.5">
                        Lihat silabus yang diberikan diworkshop ini
                    </button>
                     <button v-else type="button" class="w-full text-black font-bold bg-mentifyOrange font-large rounded-lg text-sm px-4 py-3.5">
                        Pelajari Workhsop Lebih Lanjut
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="flex flex-col">
        <div class="w-1/2 text-center mx-auto">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">4 Keuntungan dari Workshop Mentify</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Workshop di mentify menawarkan berbagai keuntungan dibanding platform belajar lain, berikut beberapa keuntungan yang akan kamu dapatkan</p>
        </div>    
        <div class="grid grid-cols-4 gap-4">
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg drop-shadow-xl dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center">
                    <svg class="w-10 h-10 text-mentifyTheme" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z"></path>
                    </svg>
                    <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Recording Class</h5>
                </div>
                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Kamu akan mendapatkan recording class agar kamu dapat mengingat kembali materi dan diskusi yang terjadi di workshop kamu. </p>
            </div>
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg drop-shadow-xl dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center">
                    <svg class="w-10 h-10 text-mentifyTheme" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 002.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 012.916.52 6.003 6.003 0 01-5.395 4.972m0 0a6.726 6.726 0 01-2.749 1.35m0 0a6.772 6.772 0 01-3.044 0"></path>
                    </svg>
                    <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">e-certificate</h5>
                </div>
                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Workshop yang kamu ikuti akan memberikan e-certifikat yang dapat kamu publikiasikan ke portofolio maupun sosial media kamu.   </p>
            </div>
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg drop-shadow-xl dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center">
                    <svg class="w-10 h-10 text-mentifyTheme" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"></path>
                    </svg>
                    <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Materi Workshop</h5>
                </div>
                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Materi Workshop dalam bentuk PPT / PDF akan kami berikan agar kamu dfapat kembali mempelajari materi lebih lanjut.    </p>
            </div>
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg drop-shadow-xl dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center">
                    <svg class="w-10 h-10 text-mentifyTheme" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"></path>
                    </svg>
                    <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Interactive Live Session with Expert</h5>
                </div>
                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Kamu berkesempatan langsung untuk berinteraksi dengan Expert dalam meningkatkan skill dan knowledge kamu.    </p>
            </div>
        </div>
    </section>
    <section>
        <div id="default-carousel" class="relative" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-transform transform -translate-x-full z-10 hidden" data-carousel-item="">
                    <img src="/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-transform transform -translate-x-full z-10" data-carousel-item="">
                    <img src="/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-transform transform translate-x-0 z-20" data-carousel-item="">
                    <img src="/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev="">
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-mentifyOrange dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-black sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next="">
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-mentifyOrange dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-black sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </section>
    
    <section class="p-4 bg-gray-100 sm:p-6 dark:bg-gray-900">
        <div class="bg-mentifyTheme rounded-lg w-full">
            <div class="flex flex-row justify-between items-center w-full">
                <div class="w-1/2">
                    <img class="h-auto max-w-full" src="/image-2@1x.jpg" alt="image description">
                </div>
                <div class="w-1/2 p-8">
                    <h5 class="mb-2 text-3xl font-light tracking-tight text-white dark:text-white">
                        Cari Kelasmu Di Mentify & <br>
                        Jadi Mentee berikutnya
                    </h5>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-mentifyOrange rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Cari Kelas
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="md:flex md:justify-between my-8">
            <div>
                <a href="#" class="flex items-center">
                    <img src="/mentify_logo.png" class="h-8 mx-auto" alt="Mentify Logo" />
                </a>
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 All Rights Reserved.
                </span>
            </div>
            <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Sitemap</h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Bootcamp</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Mentify Lite</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Karya Alumni</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Kelas Saya</a>
                        </li>
                    </ul>
            </div>
            <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">About</h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="#" class="hover:underline ">About Us</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline ">Our Team</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline ">Contact Us</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline ">FAQ</a>
                        </li>
                    </ul>
            </div>
            <div class="mr-0">
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Get In Touch</h2>
                    <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                            <span class="sr-only">Facebook page</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                            <span class="sr-only">Instagram page</span>
                        </a>
                    </div>
            </div>
        </div>
    </section>

</div>



</template>

<script>
import axios from 'axios'

export default {
    data() {
        return {
            webinarData : [],
            commentData: [],
            searchCategory: '',
            searchTimeout: false
        }
    },  
    watch: {
        'searchCategory'(value) {
            if(this.searchTimeout) {
                clearTimeout(this.searchTimeout)
            }
            var vm = this;
            vm.searchTimeout = setTimeout(function(){vm.searchByString(value)},1000)
        }
    },
    mounted() {
        this.getComment();
        this.getWebinar();
    },
    methods:{
        getComment() {
            axios.get('/get-comment')
                .then((res) => {
                    console.log(res)
                })
        }, 
        getWebinar() {
            axios.get('/get-webinar')
                .then((res) => {
                    this.webinarData = res.data
                    console.log(res)
                })
        },
        getCategory(value) {
            axios.get('/search-category-webinar',{params:{category:value}})
                .then((res) => {
                    this.webinarData = res.data
                    console.log(res)
                })
        },
        searchByString(value) {
            axios.get('/search-webinar',{params:{string:value}})
                .then((res) => {
                    this.webinarData = res.data
                    console.log(res)
                })
        }
    }
}
</script>
