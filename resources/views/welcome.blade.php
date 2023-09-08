<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js"></script>
  <style>
    .slick-prev::before {
      display: none
    }

    .slick-next::before {
      display: none
    }

    .slick-track {
      display: flex;
      flex-direction: row;
      gap: 8px;
    }

    .slick-track img {
      width: 100%;
      object-fit: cover;
    }
  </style>
</head>

<body class="bg-white">
  <div class="flex flex-row w-full h-[10%] px-[5%] py-3 justify-between border-b">
    <img src="https://vascomm.co.id/wp-content/uploads/2022/07/absk.png" class="w-32 h-15" alt="">
    <div class="w-1/2 font-sans text-black bg-gray-100 flex items-center justify-center rounded-lg px-4">
      <div class="overflow-hidden flex gap-2 justify-between w-full">
        <input type="text" class="px-4 py-2 bg-transparent outline-none" placeholder="Search...">
        <button class="flex items-center justify-center">
          <svg class="h-4 w-4 text-grey-dark" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
          </svg>
        </button>
      </div>
    </div>
    <div class="flex flex-row gap-4">
     @if(Auth::check())
     <a href="#"> <button class="border border-blue-400 text-blue-400 px-3 py-1">{{Auth()->user()->name}}</button></a>
      <a href="/logout">  <button class="bg-blue-400 px-3 py-1 text-white">Logout</button></a>
     @else
     <a href="/login"> <button class="border border-blue-400 text-blue-400 px-3 py-1">MASUK</button></a>
      <a href="/register">  <button class="bg-blue-400 px-3 py-1 text-white">DAFTAR</button></a>
     @endif
    </div>
  </div>
  <div class="flex flex-col gap-12 container my-12">

    <!-- <div class=""> -->
    
   
      
    </div>
    <!-- </div> -->

   
    <div class="w-full flex flex-col items-center gap-8">
      <p class="font-bold text-xl">Produk Terbaru</p>
      <div class="w-full grid grid-cols-5 gap-6">
        @foreach($new_product as $new_item) 
        <div class="flex flex-col gap-6 cursor-pointer transition hover:scale-125 hover:z-10 hover:bg-white hover:border hover:shadow-xl">
          <img src="/images/{{$new_item->gambar_product}}" class="w-full aspect-square object-cover" alt="">
          <div class="flex flex-col gap-2 p-2">
            <p class="font-bold">{{$new_item->name_product}}</p>
            <p class="text-blue-400 font-semibold">@currency($new_item->price)</p>
          </div>
      </div>
        @endforeach
    </div>
    <div class="w-full flex flex-col items-center gap-8">
      <p class="font-bold text-xl">Produk Tersedia</p>
      <div class="w-full grid grid-cols-5 gap-6">
        @foreach($product as $item)
         <div class="flex flex-col gap-6 cursor-pointer transition hover:scale-125 hover:z-10 hover:bg-white hover:border hover:shadow-xl">
          <img src="/images/{{$item->gambar_product}}" class="w-full aspect-square object-cover" alt="">
          <div class="flex flex-col gap-2 p-2">
            <p class="font-bold">{{$item->name_product}}</p>
            <p class="text-blue-400 font-semibold">@currency($item->price)</p>
          </div>
      </div>
        @endforeach
    </div>
    <button class="w-max px-4 py-2 font-bold text-blue-400 border border-blue-400">Lihat lebih banyak</button>
  </div>
  </div><br>

  <div class="relative">
    <div class="absolute h-[1px] w-full bg-gray-200"></div>
  </div>

  <footer class="container py-32">
    <div class="grid grid-cols-5 gap-8">
      <div class="flex flex-col items-center text-center justify-between">
        <img src="https://vascomm.co.id/wp-content/uploads/2022/07/absk.png" class="w-32 h-12" alt="">
        <p class="text-gray-500">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
        <div class="flex flex-row gap-4">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-400">
            <path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-400">
            <path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-400">
            <path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
          </svg>
        </div>
      </div>
      <div class="flex flex-col gap-6">
        <p>Layanan</p>
        <div class="flex flex-col gap-3">
          <a href="#" class="tracking-widest">BANTUAN</a>
          <a href="#" class="tracking-widest">TANYA JAWAB</a>
          <a href="#" class="tracking-widest">HUBUNGI KAMI</a>
          <a href="#" class="tracking-widest">CARA BERJUALAN</a>
        </div>
      </div>
      <div class="flex flex-col gap-6">
        <p>Tentang Kami</p>
        <div class="flex flex-col gap-3">
          <a href="#" class="tracking-widest">ABOUT US</a>
          <a href="#" class="tracking-widest">KARIR</a>
          <a href="#" class="tracking-widest">BLOG</a>
          <a href="#" class="tracking-widest">KEBIJAKAN PRIVASI</a>
          <a href="#" class="tracking-widest">SYARAT DAN KETENTUAN</a>
        </div>
      </div>
      <div class="flex flex-col gap-6">
        <p>Mitra</p>
        <div class="flex flex-col gap-3">
          <a href="#" class="tracking-widest">SUPPLIER</a>
        </div>
      </div>
      <div class="col-span-1"></div>
    </div>
  </footer>
</body>


</html>