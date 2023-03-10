<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="bg-blue-200 fixed top-[2rem] left-[20rem] px-4 py-4 border rounded-md">
        <form>
            <h1 class="text-2xl mb-[1rem]">Add New Exam</h1>
            <hr>
            <div class="flex flex-col mt-[2rem]">
                <label for="name" class="text-xl">Exam Name</label>
                <x-text-input placeholder="Exam Name" class="bg-white h-[3rem] w-[20rem] text-black text-center mt-[1rem]" id="name"></x-text-input>
            </div>
            <div class="flex flex-col mt-3">
                <label for="subtype" class="text-xl">Subject Type</label>
               <select id="subtype" class="h-[3rem] text-center text-[19px] mt-[1rem] border rounded-md">
                <option>Theory</option>
                <option>Practicle</option>
               </select>
            </div>
            <div class="flex flex-col mt-3">
                <label for="selectclass" class="text-xl">Select Class</label>
                <select id="selectclass" class="h-[3rem] text-center text-[19px] mt-[1rem] border rounded-md">
                    <option>One</option>
                    <option>Two</option>
                   </select>
            </div>
          
            <div class="flex flex-col mt-3">
                <label for="section" class="text-xl">Select Section</label>
                <select id="section" class="h-[3rem] text-center text-[19px] mt-[1rem] border rounded-md">
                    <option>Section A</option>
                    <option>Section B</option>
                   </select>
                
            </div>
            <div class="flex flex-row">
                <div class="flex flex-col mt-[2rem]">
                    <label for="time" class="text-xl">Select Time</label>
                    <x-text-input class="bg-white h-[3rem] w-[8rem] text-black text-center mt-[5px]" id="time"></x-text-input>
                </div>
                <div class="flex flex-col mt-[2rem] ml-[4rem]">
                    <label for="date" class="text-xl">Select Date</label>
                    <x-text-input  class="bg-white h-[3rem] w-[8rem] text-black text-center mt-[5px]" id="date"></x-text-input>
                </div>
            </div>
          
          <button class="bg-yellow-400 px-3 py-3 mt-[3rem] w-[20rem] text-xl text-white">Submit</button>
          
          
        </form>
    </div>
    <div class="fixed top-[2rem] left-[50rem] border border-black">
        <h1 class="mt-[1rem] mb-[1rem] ml-[2rem]">All Exam Schedule</h1>
        <table class="border border-slate-900 border-separate border-spacing-4">
            <thead class="text-center border">
                <tr>
                    <th></th>
                    <th class="border border-slate-900">Exam Name</th>
                    <th class="border border-slate-900">Subject</th>
                    <th class="border border-slate-900">Class</th>
                    <th class="border border-slate-900">Section</th>
                    <th class="border border-slate-900">Time</th>
                    <th class="border border-slate-900">Date</th>
                    <th class="border border-slate-900">Action</th>
                  
                </tr>
            </thead>
         
            <tbody class="text-center">
             
                    
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Class Test</td>
                    <td>English</td>
                    <td>3</td>
                    <td>A</td>
                    <td>10:30 am to 12:00 pm</td>
                    <td>2023/4/5</td>
                    <td class="flex">
                        <i class="bi bi-trash3-fill ml-3  hover:text-red-900 hover:text-xl" id="delete"></i>
                        <i class="bi bi-pen ml-3  hover:text-blue-600 hover:text-xl" ></i>
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>

   
</div>
