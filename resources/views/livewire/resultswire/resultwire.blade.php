<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded relative left-[20rem]" data-toggle="modal" data-target="#exampleModal">
        Button
      </button>

  <!-- Modal -->
  <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content bg-blue-200 w-[35rem]">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Publish Result</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form  class="">
        <div class="modal-body ">
            <div class="flex flex-row mt-[2rem]">
                <div class="flex flex-col ">
                    <label for="name" class="text-xl">Student Name</label>
                    <x-text-input placeholder="Student Name" class="bg-white h-[3rem] w-[15rem] text-black text-center mt-[1rem]" id="name" ></x-text-input>
                </div>
                <div class="flex flex-col ml-[2rem]">
                    <label for="subtype" class="text-xl">Enrollment No.</label>
                   <select id="subtype" class="h-[3rem] text-center text-[19px] mt-[1rem] border rounded-md w-[15rem]">
                    <option value=""></option>
                   </select>
                 
                </div>
               
            </div>
            <div class="flex flex-row mt-[2rem]">
                <div class="flex flex-col">
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
            <div class="flex flex-row mt-[2rem]">
                <div class="flex flex-col  ">
                    <label for="date" class="text-xl">Exam Name</label>
                    <x-text-input  class="bg-white h-[3rem] w-[15rem] text-black text-center mt-[5px]" id="date" wire:model.lazy="state.date"></x-text-input>
                  
                </div>
                <div class="flex flex-col ml-[2rem] ">
                    <label for="time" class="text-xl">Total Marks</label>
                    <x-text-input class="bg-white h-[3rem] w-[15rem] text-black text-center mt-[5px] " id="time" wire:model.defer="state.time"></x-text-input>
                   
                </div>
            </div>
            <div class="flex flex-row mt-[2rem]">
                <div class="flex flex-col">
                    <label for="time" class="text-xl">Obtain Marks</label>
                    <x-text-input class="bg-white h-[3rem] w-[15rem] text-black text-center mt-[5px] " id="time" wire:model.defer="state.time"></x-text-input>
                   
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
