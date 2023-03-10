<div>

    <div class="grid place-items-center">
        <div class="bg-slate-200 fixed width-[5vw]  left-[23rem] right-[8rem] top-[3rem] h-[5rem] place-items-center grid text-3xl font-bold rounded-md">
          <h1>Teacher 's</h1>
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
                <option>All Classes</option>
                <option>20</option>
                <option>30</option>
            </select>
        </div>

        <div class="flex-none">
            <label for="perpage" class="font-bold text-white  w-[6vw]">period</label>
            <select class="w-[12vw] px-2.5 py-2 h-[5vh] border-solid  rounded relative right-[1rem] " id="perpage">
                <option>Period</option>
                <option>20</option>
                <option>30</option>
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

    <!-- Button trigger modal -->
    <div class=" fixed left-[75rem] top-[16rem] w-[8vw] h-[6vh] py-2 rounded-md text-white bg-green-500  text-center" id="addbtn" wire:click="add" >
        <button >Add Teacher +</button>
    </div>

  
  <!-- Modal -->
  <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header  text-center">
          @if( $showeditmodal)
          <h5 class="modal-title" id="exampleModalLabel">Edit Teacher's</h5>
          @else
          <h5 class="modal-title" id="exampleModalLabel">Add Teacher's</h5>
          @endif
         
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent="{{$showeditmodal ? 'updateTeacher' : 'createTeacher'}}">
                <div class="flex">
                    <div class="flex flex-col">
                        <label for="studentname">Teacher Name :</label>
                      <x-text-input class="bg-white text-black border-2 border-slate-900 text-center h-[5vh] focus:outline-blue-700 invalid:outline-red-600" placeholder="Teacher Name" id="studentname" wire:model.defer="state.name"></x-text-input>
                      @error('name')
                          
                       <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                      @enderror
                    </div>
                    <div class="flex flex-col ml-[5rem]">
                        <label for="Email">Email:</label>
                      <x-text-input class="bg-white text-black border-2 focus:outline-blue-700 border-slate-700 text-center h-[5vh]" placeholder="Email" id="Email" wire:model.defer="state.email"></x-text-input>
                      @error('email')
                          
                      <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                     @enderror
                    </div>
                </div>
                <div class="flex mt-[1rem]">
                    <div class="flex flex-col">
                        <label for="studentname">Address:</label>
                      <x-text-input class="bg-white text-black border-2 border-slate-900 text-center h-[5vh] focus:outline-blue-700 invalid:outline-red-600" placeholder="Address" id="studentname" wire:model.defer="state.address"></x-text-input>
            
                      @error('address')
                          
                       <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                      @enderror
                    
                    </div>
                
                  
                    <div class="flex flex-col ml-[5rem]">
                        <label for="Email">No period:</label>
                      <x-text-input class="bg-white text-black border-2 focus:outline-blue-700 border-slate-700 text-center h-[5vh]" placeholder="No period" id="Email" wire:model.defer="state.period"></x-text-input>
                      @error('period')
                          
                      <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                     @enderror
                    </div>
                </div>

                <div class="flex mt-[1rem]">
                    <div class="flex flex-col">
                        <label for="studentname">Phone number:</label>
                      <x-text-input class="bg-white text-black border-2 border-slate-900 text-center h-[5vh] focus:outline-blue-700 invalid:outline-red-600" placeholder="Address" id="studentname" wire:model.defer="state.number"></x-text-input>
                  
                      @error('number')
                          
                      <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                     @enderror
                     
                    </div>
                
                  
                    <div class="flex flex-col ml-[5rem]">
                        <label for="Email">Salary:</label>
                      <x-text-input class="bg-white text-black border-2 focus:outline-blue-700 border-slate-700 text-center h-[5vh]" placeholder="No period" id="Email" wire:model.defer="state.salary"></x-text-input>
                      @error('salary')
                          
                      <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                     @enderror
                    </div>
                </div>

                <div class="modal-footer">
                  <button  class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-600 rounded">
                  Close
                  </button>
                  @if($showeditmodal)
                  <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                    Save changes
                  </button>
                  @else
                  <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                    Save
                  </button>
                  @endif
                  </div>
            </form>
        
        </div>
        
      </div>
    </div>
  </div>

  <div class=" fixed left-[25rem] top-[20rem] shadow-black shadow-lg">
    <table class="border border-slate-900 border-separate border-spacing-4">
        <thead class="text-center">
            <tr>
                <th></th>
                <th class="border border-slate-900">Teacher's Name</th>
                <th class="border border-slate-900">Email</th>
                <th class="border border-slate-900">Address</th>
                <th class="border border-slate-900">No of period</th>
                <th class="border border-slate-900">Ph.Number</th>
                <th class="border border-slate-900">Salary</th>
                <th class="border border-slate-900">Action</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($details as $detail)
                
            <tr>
                <td><input type="checkbox"></td>
                <td>{{$detail->name}}</td>
                <td>{{$detail->email}}</td>
                <td>{{$detail->address}}</td>
                <td>{{$detail->period}}</td>
                <td>{{$detail->number}}</td>
                <td>{{$detail->salary}}</td>
                <td class="flex">
                    <i class="bi bi-trash3-fill ml-3  hover:text-red-900 hover:text-xl" id="delete" wire:click.prevent="trash({{$detail->id}})"></i>
                    <i class="bi bi-pen ml-3  hover:text-blue-600 hover:text-xl" wire:click.prevent="edit({{$detail}})"></i>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
   
  
</div>

<script>
   window.addEventListener('show-modal', event => {
    $('#form').modal('show');
})
window.addEventListener('hide-modal',event=>{
  $('#form').modal('hide');
})

 window.addEventListener('show-alert', event => {
  Swal.fire(
  'Successfully'+" "+event.detail.msg,
  'You clicked the button!',
  'success'
)
})
</script>
