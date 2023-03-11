<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    
    <form  class="bg-blue-200 relative top-[2rem] left-[13rem] px-4 py-4 border rounded-md w-[69rem]">
        <h1 class="text-2xl mb-[1rem]">Publish Result's</h1>
        <hr>
        <div class="flex flex-row mt-[2rem]">
            <div class="flex flex-col ">
                <label for="name" class="text-xl">Student Name</label>
                <x-text-input placeholder="Exam Name" class="bg-white h-[3rem] w-[15rem] text-black text-center mt-[1rem]" id="name" ></x-text-input>
            </div>
            <div class="flex flex-col ml-[2rem]">
                <label for="subtype" class="text-xl">Enrollment No.</label>
               <select id="subtype" class="h-[3rem] text-center text-[19px] mt-[1rem] border rounded-md w-[15rem]">
                <option value=""></option>
               </select>
             
            </div>
            <div class="flex flex-col ml-[2rem] ">
                <label for="selectclass" class="text-xl">Subject</label>
                <select id="selectclass" class="h-[3rem] text-center text-[19px] mt-[1rem] border rounded-md w-[15rem]" wire:model.defer="state.class">
                
                        
                    <option value=""></option>
                
                   
                   </select>
                  
            </div>
            <div class="flex flex-col ml-[2rem] ">
                <label for="selectclass" class="text-xl">Subject Type</label>
                <select id="selectclass" class="h-[3rem] text-center text-[19px] mt-[1rem] border rounded-md w-[15rem]" wire:model.defer="state.class">
                
                        
                    <option value=""></option>
                
                   
                   </select>
                  
            </div>
        </div>
        <div class="flex flex-row mt-[13px]">
            <div class="flex flex-col  ">
                <label for="date" class="text-xl">Exam Name</label>
                <x-text-input  class="bg-white h-[3rem] w-[15rem] text-black text-center mt-[5px]" id="date" wire:model.lazy="state.date"></x-text-input>
              
            </div>
            <div class="flex flex-col ml-[2rem] ">
                <label for="time" class="text-xl">Total Marks</label>
                <x-text-input class="bg-white h-[3rem] w-[15rem] text-black text-center mt-[5px] " id="time" wire:model.defer="state.time"></x-text-input>
               
            </div>
            
           
            <div class="flex flex-col ml-[2rem] ">
                <label for="time" class="text-xl">Obtain Marks</label>
                <x-text-input class="bg-white h-[3rem] w-[15rem] text-black text-center mt-[5px] " id="time" wire:model.defer="state.time"></x-text-input>
               
            </div>
            
           
        </div>
       
      
      
      
       <div class="flex flex-row">
        <button class="bg-yellow-400  mt-[1rem]  w-[10rem] h-[7vh] text-xl text-white hover:bg-blue-600 duration-700" type="submit">Submit</button>
        <button class="bg-gray-900 ml-[1rem] mt-[1rem] w-[10rem] h-[7vh] text-xl text-white hover:bg-blue-600 duration-700" type="submit">Rest</button>
       </div>
      

      
      
    </form>
</div>
