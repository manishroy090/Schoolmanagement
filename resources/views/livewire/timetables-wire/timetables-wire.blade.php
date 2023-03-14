<div>
  <div class="grid place-items-center">
    <div class="bg-slate-200 fixed width-[5vw]  left-[23rem] right-[8rem] top-[3rem] h-[5rem] place-items-center grid text-3xl font-bold rounded-md">
      <h1>Time Table's</h1>
    </div>
  </div>
  <div class="bg-gray-700 flex fixed top-[10rem] left-[23rem]  w-[72vw] py-[1rem] px-[1rem] rounded-md" >
    <div class="flex-none">
        <label for="perpage" class="font-bold text-white  w-[6vw]">Per page</label>
        <select class="w-[5vw] px-2.5 py-2 h-[5vh] border-solid relative right-[1rem] rounded " id="perpage">
            <option>10</option>
            <option>20</option>
            <option>30</option>
        </select>
    </div>

    <div class="flex-none">
        <label for="perpage" class="font-bold text-white  w-[6vw]">Classes</label>
        <select class="w-[8vw] px-2.5 py-2 h-[5vh] border-solid  rounded relative right-[1rem]" id="perpage">
          @foreach ($classes as $class)
              
          <option>{{$class->name}}</option>
          @endforeach
            
        </select>
    </div>

    <div class="flex-none">
        <label for="perpage" class="font-bold text-white  w-[6vw]">period</label>
        <select class="w-[12vw] px-2.5 py-2 h-[5vh] border-solid  rounded relative right-[1rem] " id="perpage">
            @foreach ($periods as $period)
                
            <option>{{$period->name}}</option>
            @endforeach
           
        </select>
    </div>

    <div class=" relative   h-[5vh] rounded bg-green-500" >
        <select class="w-[10vw] px-3.5  h-[5vh] border-solid  bg-transparent rounded text-white" id="perpage">
            <option>With Chcecked</option>
            <option>20</option>
            <option>30</option>
        </select>
    </div>

    <div class="ml-[1rem] font-bold border-solid rounded-md  bg-white relative  w-[15vw] flex text-center py-1 h-[6vh]" >
        <input type="search" placeholder="Search by Name,Email" class="bg-transparent border-none focus:outline-none w-[17vw] text-center">
        <i class="bi bi-search absolute right-[8px] top-[9px] text-xl"></i>
    </div>
   
  
</div>


<div class=" relative left-[25rem] top-[20rem] shadow-black shadow-lg w-[45vw]">
  <table class="border border-slate-900 border-separate border-spacing-5">
      <thead class="text-center">
          <tr>
              <th></th>
              <th class="border border-slate-900 px-5 py-3">Class<i class="bi bi-arrow-right"></i><br>Period</th>
              <th class="border border-slate-900">One</th>
              <th class="border border-slate-900">Two</th>
              <th class="border border-slate-900">Three</th>
              <th class="border border-slate-900">Four</th>
              <th class="border border-slate-900">Five</th>
              <th class="border border-slate-900">Six</th>
              <th class="border border-slate-900">Action</th>
          </tr>
      </thead>
      <tbody class="text-center">
          
              
          <tr>
              <td><input type="checkbox"></td>
              <td class="font-bold"><h1 class=" text-blue-600">First</h1> <br><p class="relative bottom-5">9:30 to 10:30</p></td>
              <td class="font-bold"><h2 class="">Science</h2> <br><p class="relative bottom-5">Manish</p></td>
              <td class="font-bold"><h2 class="">Science</h2> <br><p class="relative bottom-5">Manish</p></td>
              <td class="font-bold"><h2 class="">Science</h2> <br><p class="relative bottom-5">Manish</p></td>
              <td class="font-bold"><h2 class="">Science</h2> <br><p class="relative bottom-5">Manish</p></td>
              <td class="font-bold"><h2 class="">Science</h2> <br><p class="relative bottom-5">Manish</p></td>
              <td class="font-bold"><h2 class="">Science</h2> <br><p class="relative bottom-5">Manish</p></td>
              
              <td class="flex relative">
                  <i class="bi bi-trash3-fill ml-3  hover:text-red-900 hover:text-xl" id="delete"></i>
                  <i class="bi bi-pen ml-3  hover:text-blue-600 hover:text-xl"></i>
              </td>
          </tr>
          
         
      </tbody>
  </table>
 

</div>
   
      <div class=" fixed left-[75rem] top-[16rem] w-[8vw] h-[6vh] py-2 rounded-md text-white bg-green-500  text-center" id="addbtn" data-toggle="modal" data-target="#exampleModal" >
        <button >Add Timetable+</button>
    </div>
    <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
          <div class="modal-content bg-blue-200 w-[35rem]">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Publish TimeTable</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form  class="" wire:submit.prevent="jon">
            <div class="modal-body ">
                <div class="flex flex-row mt-[2rem]">
                    
                    <div class="flex flex-col">
                        <label for="subtype" class="text-xl">Teacher Name</label>
                       <select id="subtype" class="h-[3rem] text-center text-[19px] mt-[1rem] border rounded-md w-[15rem]" wire:model.defer="state.teachername">
                        @foreach ($teachers as $teacher)
                            
                        <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                        @endforeach
                       </select>
                     
                    </div>
                    <div class="flex flex-col ml-[2rem]" >
                        <label for="subtype" class="text-xl">Period</label>
                       <select id="subtype" class="h-[3rem] text-center text-[19px] mt-[1rem] border rounded-md w-[15rem]" wire:model="state.period">
                        @foreach ($periods as $period)
                
                       <option value="{{$period->id}}">{{$period->name}}</option>
                        @endforeach
                       </select>
                     
                    </div>
                   
                </div>
                <div class="flex flex-row mt-[2rem]">
                    <div class="flex flex-col ">
                        <label for="name" class="text-xl">Start</label>
                        <x-text-input placeholder="Class Start" class="bg-white h-[3rem] w-[15rem] text-black text-center mt-[1rem]" id="name" wire:model.defer="state.start"></x-text-input>
                    </div>
                    <div class="flex flex-col ml-[2rem]">
                        <label for="name" class="text-xl">End</label>
                        <x-text-input placeholder="Class End" class="bg-white h-[3rem] w-[15rem] text-black text-center mt-[1rem]" id="name" wire:model.defer="state.end"></x-text-input>
                    </div>
                   
                </div>
               
            </div>
           
            <div class=" modal-footer flex flex-row">
                <button class="bg-yellow-400  mt-[1rem]  w-[10rem] h-[7vh] text-xl text-white hover:bg-blue-600 duration-700" type="submit">Submit</button>
                <button class="bg-gray-900 ml-[1rem] mt-[1rem] w-[10rem] h-[7vh] text-xl text-white hover:bg-blue-600 duration-700" type="submit">Rest</button>
               </div>
            </form>
          </div>
        </div>
      </div> 
</div>
