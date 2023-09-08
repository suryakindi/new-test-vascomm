<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
    @vite('resources/css/app.css')
    <style>
        .active {
            background-color: green;
            color: white;
            padding: 3px 6px;
            border-radius: 3px;
        }

        .inactive {
            background-color: red;
            color: white;
            padding: 3px 6px;
            border-radius: 3px;
        }
    </style>
</head>

<body>
   @if(session()->has('sukses-edit'))
   <script>
    alert('Sukses Edit User');
</script>
   @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
            <h3>Edit User</h3><br>
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" value="{{$user->name}}" name="name">
                </div><br>

                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user->email}}" name="email">
                  
                </div><br>
                <div class="form-group">
                    <label for="notelp">No Telp</label>
                    <input type="text" class="form-control" id="notelp"  value="{{$user->notelp}}" name="notelp">
                    
                  </div><br>
               
                <br>
                <button type="submit" class="bg-blue-400 px-3 py-1 text-white">Edit</button>
                <a href="/dashboard/manajemen-user"><button type="button" class="bg-blue-400 px-3 py-1 text-white">Kembali</button></a>
              </form>
      <br>     <br>
<div class="relative overflow-x-auto">
    
</div>

        </div>
        
    </div>
</body>

</html>