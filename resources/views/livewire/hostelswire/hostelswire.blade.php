<div>
    
    <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
          <div class="modal-content bg-blue-200 w-[35rem]">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add New Room</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form  class="" wire:submit.prevent="{{$updatemethod ?' update' : 'addhostel'}}">
            <div class="modal-body ">
                <div class="flex flex-row mt-[2rem]">
                    
                    <div class="flex flex-col">
                        <label for="subtype" class="text-xl">Hostel Name</label>
                       <select id="subtype" class="h-[3rem] text-center text-[19px] mt-[1rem] border rounded-md w-[15rem]" wire:model.defer="state.hostelname">
                        <option value="Boys1">Boys1</option>
                        <option value="Boys2">Boys2</option>
                       </select>
                       @error('hostelname')
                        
                       <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                       @enderror
                     
                    </div>
                    <div class="flex flex-col ml-[2rem]">
                        <label for="name" class="text-xl">Room Number</label>
                        <x-text-input placeholder="Student Name" class="bg-white h-[3rem] w-[15rem] text-black text-center mt-[1rem]" id="name" wire:model.defer="state.roomnumber"></x-text-input>
                        @error('roomnumber')
                        
                        <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                        @enderror
                      
                     
                    </div>
                   
                </div>
                <div class="flex flex-row mt-[2rem]">
                    <div class="flex flex-col">
                        <label for="subtype" class="text-xl">Room Type</label>
                       <select id="subtype" class="h-[3rem] text-center text-[19px] mt-[1rem] border rounded-md w-[15rem]" wire:model.defer="state.roomtype">
                        <option value="ff">ff</option>
                        <option value="ff">ss</option>
                       </select>
                       @error('roomtype')
                        
                       <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                       @enderror
                     
                     
                    </div>
                    <div class="flex flex-col ml-[2rem]">
                        <label for="subtype" class="text-xl">Number of Bed</label>
                       <select id="subtype" class="h-[3rem] text-center text-[19px] mt-[1rem] border rounded-md w-[15rem]" wire:model.defer="state.numberofbed">
                        <option value="3">3</option>
                        <option value="2">2</option>
                       </select>
                       @error('numberofbed')
                        
                       <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                       @enderror
                     
                    </div>
                </div>

                <div class="flex flex-row mt-[2rem]">
                    <div class="flex flex-col ">
                        <label for="name" class="text-xl">Cost per Bed</label>
                        <x-text-input placeholder="Student Name" class="bg-white h-[3rem] w-[15rem] text-black text-center mt-[1rem]" id="name" wire:model.defer="state.costperbed" ></x-text-input>
                        @error('costperbed')
                        
                        <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                        @enderror
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
      <div class=" fixed left-[25rem] top-[10rem] shadow-black shadow-lg">
        <div class="flex flex-row mt-[2rem] mb-[1rem]"><h1 class="font-bold ml-5">Hostel Details</h1> <button class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded relative left-[20rem]" data-toggle="modal" data-target="#exampleModal">
          Button
        </button></div>
        <table class="border border-slate-900 border-separate border-spacing-4">
          <tr>
            <th></th>
            <thead class="text-center">
              <th class=""></th>
                    <th class="border border-slate-900">Hostel Name</th>
                    <th class="border border-slate-900">Room Number</th>
                    <th class="border border-slate-900">Room type</th>
                    <th class="border border-slate-900">Number of bed</th>
                    <th class="border border-slate-900">Cost per Bed</th>
                    <th class="border border-slate-900">Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
             
              
              @foreach ($hostels as $hostel)
                  
              <tr>  
                <td><input type="checkbox"></td>
                <td>{{$hostel->hostelname}}</td>
                <td>{{$hostel->roomnumber}}</td>
                <td>{{$hostel->costperbed}}</td>
                <td>{{$hostel->numberofbed}}</td>
                <td>{{$hostel->roomtype}}</td>
                
                <td class="flex">
                  
                  <i class="bi bi-trash3-fill ml-3  hover:text-red-900 hover:text-xl" id="delete" wire:click="trash({{$hostel->id}})"></i>
                  
                  
                  <i class="bi bi-pen ml-3  hover:text-blue-600 hover:text-xl" wire:click="edit({{$hostel}})"></i>
                  
                </td>
              </tr>
              @endforeach
             
             
                
            </tbody>
        </table>
      
    </div>
</div>
<script>
   window.addEventListener('show-modal',event =>{
  $('#exampleModal').modal('show')
})
window.addEventListener('sweet-alert',event =>{
  $('#exampleModal').modal('hide');
  Swal.fire(
  event.detail.msg,
  'You clicked the button!',
  'success'
)
})
  </script>
