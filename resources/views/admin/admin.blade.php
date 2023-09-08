<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-row w-full h-[10%] px-[5%] py-3 justify-between border-b">
        <img src="https://vascomm.co.id/wp-content/uploads/2022/07/absk.png" class="w-32 h-10" alt="">
        <div class="flex flex-row gap-4">
            <div class="flex flex-col">
                <p class="text-sm">Hallo {{Auth()->user()->name}},</p>
              
            </div>
            <img src="https://vascomm.co.id/wp-content/uploads/2022/07/absk.png" class="h-5 w-20" alt="">
        </div>
    </div>
    <div class="flex flex-row w-full" style="min-height:100vh">
        <div class="border flex flex-col gap-4 h-screen" style="width: 15%; padding-top: 1rem">
            <a href="/dashboard">
            <div class="flex flex-row gap-3 bg-blue-400 text-white px-4 py-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                Dashboard
            </div>
            </a>
            <a href="/dashboard/manajemen-user">
            <div class="flex flex-row gap-3 text-black px-4 py-2">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                    <path d="M16 0H4a2 2 0 0 0-2 2v1H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4.5a3 3 0 1 1 0 6 3 3 0 0 1 0-6ZM13.929 17H7.071a.5.5 0 0 1-.5-.5 3.935 3.935 0 1 1 7.858 0 .5.5 0 0 1-.5.5Z"/>
                </svg>
                Manajemen User
            </div>
            </a>
            <a href="/dashboard/manajemen-product">
            <div class="flex flex-row gap-3 text-black px-4 py-2">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                    <path d="M19 0H1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1ZM2 6v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6H2Zm11 3a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8a1 1 0 0 1 2 0h2a1 1 0 0 1 2 0v1Z"/>
                </svg>
                Produk
            </div>
            </a>
            <a href="/dashboard/logout">
                <div class="flex flex-row gap-3 text-black px-4 py-2">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                    </svg>
                    Logout
                </div>
             </a>
        </div>
        <div class="bg-gray-200 w-full px-4 py-12">
            <div class="flex space-x-4">
                <!-- Kartu 1 -->
                <a href="#" class="flex-1 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Jumlah User</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">{{$user}}</p>
                </a>
        
                <!-- Kartu 2 -->
                <a href="#" class="flex-1 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Jumlah User Aktif</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">{{$user_active}}</p>
                </a>
        
                <!-- Kartu 3 -->
                <a href="#" class="flex-1 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Jumlah Product</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">{{$product}}</p>
                </a>
                <!-- Kartu 4 -->
                <a href="#" class="flex-1 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Jumlah Product Aktif</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">{{$product_active}}</p>
                </a>
            </div>
      <br>      
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Image 
                </th>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal Dibuat
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga
                </th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($item_product as $item)
            
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   <img src="/images/{{$item->gambar_product}}" width="100" height="100">
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$item->name_product}}
                </th>
                <td class="px-6 py-4">
                    {{$item->created_at}}
                </td>
                <td class="px-6 py-4">
                    @currency($item->price)
                </td>
                
            </tr>
               
            @endforeach
        </tbody>
    </table>
</div>

        </div>
        
    </div>
</body>

</html>