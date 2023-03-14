<div>
    
    <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
          <div class="modal-content bg-blue-200 w-[35rem]">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add New Transport</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form  class="" wire:submit.prevent="{{$editmodal ? 'update' : 'addvechile'}}">
            <div class="modal-body ">
                <div class="flex flex-row mt-[2rem]">
                    
                    <div class="flex flex-col">
                        <label for="subtype" class="text-xl">Rute Name</label>
                       <select id="subtype" class="h-[3rem] text-center text-[19px] mt-[1rem] border rounded-md w-[15rem]" name="" wire:model.defer="state.rutename">
                        <option value="baneshwor">baneshwor</option>
                        <option value="baneshwor">lokanthali</option>
                       </select>
                       @error('rutename')
                        
                       <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                       @enderror
                     
                    </div>
                    <div class="flex flex-col ml-[2rem]">
                        <label for="name" class="text-xl">Vechile Number</label>
                        <x-text-input placeholder="Student Name" class="bg-white h-[3rem] w-[15rem] text-black text-center mt-[1rem]" id="vechilenumber" wire:model.defer="state.vechilenumber"></x-text-input>
                        @error('vechilenumber')
                        
                        <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                        @enderror
                    </div>
                   
                </div>
                <div class="flex flex-row mt-[2rem]">
                    <div class="flex flex-col ">
                        <label for="name" class="text-xl"> Driver Name</label>
                        <x-text-input placeholder="Student Name" class="bg-white h-[3rem] w-[15rem] text-black text-center mt-[1rem]" id="drivername" wire:model.defer="state.drivername" ></x-text-input>
                        @error('drivername')
                        
                        <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col ml-[2rem] ">
                        <label for="name" class="text-xl">License Number</label>
                        <x-text-input placeholder="Student Name" class="bg-white h-[3rem] w-[15rem] text-black text-center mt-[1rem]" id="licensenumber" wire:model.defer="state.licensenumer"></x-text-input>
                        @error('licensenumer')
                        
                        <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-row mt-[2rem]">
                    <div class="flex flex-col ">
                        <label for="name" class="text-xl">Phone Number</label>
                        <x-text-input placeholder="Student Name" class="bg-white h-[3rem] w-[15rem] text-black text-center mt-[1rem]" id="name" wire:model.defer="state.phonenumber"></x-text-input>
                        @error('phonenumber')
                        
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
        <div class="flex flex-row mt-[2rem] mb-[1rem]"><h1 class="font-bold ml-5">Transport Details</h1> <button class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded relative left-[20rem]" data-toggle="modal" data-target="#exampleModal">
          Button
        </button></div>
        <table class="border border-slate-900 border-separate border-spacing-4">
            <thead class="text-center">
                <tr>
                    <th></th>
                    <th class="border border-slate-900">Rute Name</th>
                    <th class="border border-slate-900">Vechile Number</th>
                    <th class="border border-slate-900">Driver Name</th>
                    <th class="border border-slate-900">License Number</th>
                    <th class="border border-slate-900">Phone Number</th>
                    <th class="border border-slate-900">Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
             
              @foreach ($transports as $transport)
                  
              <tr>
                <td><input type="checkbox"></td>
                <td>{{$transport->rutename}}</td>
                <td>{{$transport->vechilenumber}}</td>
                <td>{{$transport->drivername}}</td>
                <td>{{$transport->licensenumer}}</td>
                <td>{{$transport->phonenumber}}</td>
              
                <td class="flex">
                  
                  <i class="bi bi-trash3-fill ml-3  hover:text-red-900 hover:text-xl" id="delete" wire:click="trash('{{$transport->id}}')" ></i>
                  
                  
                  <i class="bi bi-pen ml-3  hover:text-blue-600 hover:text-xl" wire:click="edit({{$transport}})"></i>
                  
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
