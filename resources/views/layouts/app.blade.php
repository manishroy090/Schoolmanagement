<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/27c4fe563d.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
 <!--bootstrap-->
 

   
    @livewireStyles
<!--datepicker -->
<link
href="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/css/nepali.datepicker.v4.0.1.min.css"
rel="stylesheet" type="text/css"/>
<script
src="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/js/nepali.datepicker.v4.0.1.min.js"
type="text/javascript"></script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<!--Sweet Alert -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<body class="font-sans antialiased">

    <div>

        <div class="h-full bg-gray-900 fixed top-0 bottom-0 left-0 text-white p-2.5 rounded-md">
            <div class="bg-gray-600 text-white mt-10 p-2.5 rounded-sm">
                <i class="bi bi-search"></i>
                <input type="text" placeholder="Search" class="bg-transparent focus:outline-none border-none">

         
           </div>
           <div class="flex items-center p-2.5 mt-5 duration-700 hover:rounded-md hover:bg-blue-600">
                <i class="bi bi-calendar"></i>
                <a href="{{route('manage.index')}}">
                <h1 class="ml-[20px] text-lg">Manage</h1>
                </a>
            </div>


            <div class="flex items-center p-2.5 mt-5 duration-700 hover:rounded-md hover:bg-blue-600">
            <i class="bi bi-node-plus-fill"></i>
            <a href="{{route('teacher.index')}}" class="text-doc">
            <h1 class="ml-[20px] text-lg">Teacher</h1>
            </a>
             
            </div>
          
            <div class="flex items-center p-2.5 mt-5 duration-700 hover:rounded-md hover:bg-blue-600">
            <i class="bi bi-people-fill"></i>
            <a href="{{route('student.index')}}">
                <h1 class="ml-[20px] text-lg">Student</h1>
            </a>
            </div>

            <div class="flex items-center p-2.5 mt-5 duration-700 hover:rounded-md hover:bg-blue-600">
            <i class="bi bi-bag"></i>
                <h1 class="ml-[20px] text-lg">Fees</h1>
            </div>
            <div class="flex items-center p-2.5 mt-5 duration-700 hover:rounded-md hover:bg-blue-600">
            <i class="bi bi-credit-card-fill"></i>
                <h1 class="ml-[20px] text-lg">Result</h1>
            </div>
            <div class="flex items-center p-2.5 mt-5 duration-700 hover:rounded-md hover:bg-blue-600">
            <i class="bi bi-box-arrow-left"></i>
                <h1 class="ml-[20px] text-lg">Logout</h1>
            </div>
       
        </div>
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
 
    @livewireScripts
  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
 
    <link rel="stylesheet" href="sweetalert2.min.css">
</body>

</html>