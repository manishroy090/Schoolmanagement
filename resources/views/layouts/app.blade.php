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
    <script src="https://kit.fontawesome.com/27c4fe563d.js" crossorigin="anonymous"></script>
    <!-- Tailwindb css -->
    <script src="https://cdn.tailwindcss.com"></script>
   
    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>     
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
     <!--bootstrap-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css" integrity="sha512-bYPO5jmStZ9WI2602V2zaivdAnbAhtfzmxnEGh9RwtlI00I9s8ulGe4oBa5XxiC6tCITJH/QG70jswBhbLkxPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js" integrity="sha512-AIOTidJAcHBH2G/oZv9viEGXRqDNmfdPVPYOYKGy3fti0xIplnlgMHUGfuNRzC6FkzIo0iIxgFnr9RikFxK+sw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @livewireStyles
    <!--nepali datepicker -->
        <link
        href="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/css/nepali.datepicker.v4.0.1.min.css"
        rel="stylesheet" type="text/css"/>
        <script
        src="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/js/nepali.datepicker.v4.0.1.min.js"
        type="text/javascript"></script>
        
        
        <!--Sweet Alert -->
        <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>
<body class="font-sans antialiased">
    
   
        <div class=" bg-gray-900 fixed top-0 bottom-0 left-0 h-full">
            <div class="duration-700 rounded-bl-lg bg-yellow-500 h-[4rem]">
               
               <img src="{{asset('img/logo.png')}}" class="w-[10vw] relative bottom-[37px] left-[13px]">
            </div>
        
            <div class=" text-white px-[2rem] ">
                @if (Auth::user()->logcheck=="admin")
               
       
          
            <div class="flex items-center p-2.5 mt-5 duration-700 hover:rounded-md hover:bg-blue-600" id="admin">
                <i class="bi bi-app-indicator text-yellow-500"></i>
             
                    <h1 class="ml-[20px] text-lg">Admin</h1>
                
            </div>
            <div class="hidden" id="admindropdown">
                <div class="flex items-center p-2.5  duration-700 hover:rounded-md hover:bg-blue-600">
                <i class="bi bi-card-heading text-yellow-500"></i>
                <a href="{{route('results.index')}}">
                    <h1 class="ml-[20px] text-lg">Admin</h1>
                </a>
                </div>
                <div class="flex items-center p-2.5  duration-700 hover:rounded-md hover:bg-blue-600">
                    
                    <i class="bi bi-node-plus-fill text-yellow-500"></i>
                    <h1 class="ml-[20px] text-lg">Create</h1>
                    
                </div>
                
            </div>
                
          
                
    
                
                <div class="flex items-center p-2.5 mt-3 duration-700 hover:rounded-md hover:bg-blue-600">
                    <i class="bi bi-node-plus-fill text-yellow-500"></i>
                    <a href="{{route('teachers.index')}}" class="text-doc">
                        <h1 class="ml-[20px] text-lg">Teacher</h1>
                    </a>
                    
                </div>
                
                <div class="flex items-center p-2.5 mt-3 duration-700 hover:rounded-md hover:bg-blue-600" id="student">
                    <i class="bi bi-person-rolodex text-yellow-500"></i>
                    
                        <h1 class="ml-[20px] text-lg">Student</h1>
                    
                </div>
                <div class="hidden" id="studentdropdown">
                    <div class="flex items-center p-2.5  duration-700 hover:rounded-md hover:bg-blue-600">
                    <i class="bi bi-card-heading text-yellow-500"></i>
                    <a href="{{route('students.index')}}">
                        <h1 class="ml-[20px] text-lg">Add Students</h1>
                    </a>
                    </div>
                   
                    
                </div>
                
                <div class="flex items-center p-2.5 mt-3 duration-700 hover:rounded-md hover:bg-blue-600">
                    <i class="bi bi-people-fill text-yellow-500"></i>
                    <a href="{{route('subjects.index')}}">
                        <h1 class="ml-[20px] text-lg">Subject</h1>
                    </a>
                </div>
    
                <div class="flex items-center p-2.5 mt-3 duration-700 hover:rounded-md hover:bg-blue-600">
                    <i class="bi bi-bag text-yellow-500"></i>
                    <a href="{{route('exams.index')}}">
                        <h1 class="ml-[20px] text-lg">Exam</h1>
                    </a>
                </div>
             
                
                <div class="flex items-center p-2.5 mt-3 duration-700 hover:rounded-md hover:bg-blue-600">
                    <i class="bi bi-calendar text-yellow-500"></i>
                    <a href="{{route('timetable.index')}}">
                    <h1 class="ml-[20px] text-lg">Time Table</h1>
                </a>
                </div>
                <div class="flex items-center p-2.5 mt-3 duration-700 hover:rounded-md hover:bg-blue-600">
                    <i class="bi bi-bus-front-fill text-yellow-500"></i>
                    <a href="{{route('transport.index')}}">
                    <h1 class="ml-[20px] text-lg">Transport</h1>
                </a>
                </div>
                <div class="flex items-center p-2.5 mt-3 duration-700 hover:rounded-md hover:bg-blue-600">
                    <i class="bi bi-buildings text-yellow-500"></i>
                   <a href="{{route('hostel.index')}}">
                    <h1 class="ml-[20px] text-lg">Hostel</h1>
                   </a>
                  
               
                </div>
                <div class="flex items-center p-2.5 mt-3 duration-700 hover:rounded-md hover:bg-blue-600">
                    <i class="bi bi-box-arrow-left text-yellow-500"></i>
                    <h1 class="ml-[20px] text-lg">Logout</h1>
                </div>
                
                @endif
                @if (Auth::user()->logcheck=="student")
                <div class="flex items-center p-2.5 mt-5 duration-700 hover:rounded-md hover:bg-blue-600" id="student">
                    <i class="bi bi-person-rolodex text-yellow-500"></i>
                    
                        <h1 class="ml-[20px] text-lg">Student</h1>
                    
                </div>
                <div class="flex items-center p-2.5 mt-3 duration-700 hover:rounded-md hover:bg-blue-600">
                    <i class="bi bi-bag text-yellow-500"></i>
                    <a href="{{route('exams.index')}}">
                        <h1 class="ml-[20px] text-lg">Exam</h1>
                    </a>
                </div>
                <div class="flex items-center p-2.5 mt-3 duration-700 hover:rounded-md hover:bg-blue-600">
                    <i class="bi bi-calendar text-yellow-500"></i>
                    <h1 class="ml-[20px] text-lg">Time Table</h1>
                </div>
                <div class="flex items-center p-2.5 mt-3 duration-700 hover:rounded-md hover:bg-blue-600">
                    <i class="bi bi-people-fill text-yellow-500"></i>
                    <a href="{{route('subjects.index')}}">
                        <h1 class="ml-[20px] text-lg">Books</h1>
                    </a>
                </div>
                <div class="flex items-center p-2.5 mt-3 duration-700 hover:rounded-md hover:bg-blue-600" id="result">
                    <i class="bi bi-card-list text-yellow-500"></i>
                  
                    <h1 class="ml-[20px] text-lg">Result</h1>
                    
                </div>
                @endif
                @if (Auth::user()->logcheck=="parent")
                <div class="flex items-center p-2.5 mt-5 duration-700 hover:rounded-md hover:bg-blue-600" id="student">
                    <i class="bi bi-person-rolodex text-yellow-500"></i>
                    
                        <h1 class="ml-[20px] text-lg">Parent</h1>
                    
                </div>
                <div class="flex items-center p-2.5 mt-3 duration-700 hover:rounded-md hover:bg-blue-600">
                    <i class="bi bi-people-fill text-yellow-500"></i>
                    <a href="{{route('subjects.index')}}">
                        <h1 class="ml-[20px] text-lg">Create Meeting</h1>
                    </a>
                </div>
                <div class="flex items-center p-2.5 mt-3 duration-700 hover:rounded-md hover:bg-blue-600">
                    <i class="bi bi-people-fill text-yellow-500"></i>
                    <a href="{{route('subjects.index')}}">
                        <h1 class="ml-[20px] text-lg">FeedBack</h1>
                    </a>
                </div>
                @endif
                @if (Auth::user()->logcheck=="teacher")
                 <div class="flex items-center p-2.5 mt-5 duration-700 hover:rounded-md hover:bg-blue-600">
                    <i class="bi bi-node-plus-fill text-yellow-500"></i>
                    <a href="{{route('teachers.index')}}" class="text-doc">
                        <h1 class="ml-[20px] text-lg">Teacher</h1>
                    </a>
                    
                </div>
                <div class="flex items-center p-2.5 mt-3 duration-700 hover:rounded-md hover:bg-blue-600" id="result">
                    <i class="bi bi-card-list text-yellow-500"></i>
                  
                    <h1 class="ml-[20px] text-lg">Result</h1>
                    <i class="bi bi-chevron-right ml-6 text-[10px] mt-[6px]"></i>
                </div>
                <div class="hidden" id="dropdown">
                    <div class="flex items-center p-2.5  duration-700 hover:rounded-md hover:bg-blue-600">
                    <i class="bi bi-card-heading text-yellow-500"></i>
                    <a href="{{route('results.index')}}">
                        <h1 class="ml-[20px] text-lg">Add Result</h1>
                    </a>
                    </div>
                    <div class="flex items-center p-2.5  duration-700 hover:rounded-md hover:bg-blue-600">
                        
                        <i class="bi bi-card-checklist text-yellow-500"></i>
                        <h1 class="ml-[20px] text-lg">Results</h1>
                        
                    </div>
                    
                </div>
                
                @endif
            </div>
            
        </div>
       
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
 
    @livewireScripts
    <script>
        $(document).ready(function(){
          $('#result').click(function(){
            $('#dropdown').fadeToggle();
        
          })
          $('#student').click(function(){
            $('#studentdropdown').fadeToggle();
        
          })
          $('#admin').click(function(){
            $('#admindropdown').fadeToggle();
        
          })
        })
        
    </script>
    
    
</body>

</html>