<div>
  <h1>Student wire</h1>
  <div class="grid place-items-center">
    <div class="bg-slate-200 fixed width-[5vw]  left-[23rem] right-[8rem] top-[3rem] h-[5rem] place-items-center grid text-3xl font-bold rounded-md">
      <h1 class="first:letter-red-600">Student's</h1>
    </div>
  </div>
  <div class="bg-gray-700 flex fixed top-[10rem] left-[23rem]  w-[72vw] py-[1rem] px-[1rem] rounded-md" >
      <div class="flex-none">
          <label for="perpage" class="font-bold text-white w-[6vw]">Per page</label>
          <select class="w-[5vw] px-2.5 py-2 h-[5vh] border-solid relative right-[1rem] rounded " id="perpage">
              <option>10</option>
              <option>20</option>
              <option>30</option>
          </select>
      </div>

      <div class="flex-none">
          <label for="perpage" class="font-bold text-white w-[6vw]">Classes</label>
          <select class="w-[8vw] px-2.5 py-2 h-[5vh] border-solid  rounded relative right-[1rem]" id="perpage">
              <option>All Classes</option>
              <option>20</option>
              <option>30</option>
          </select>
      </div>

      <div class="flex-none">
          <label for="perpage" class="font-bold text-white w-[6vw]">Section</label>
          <select class="w-[12vw] px-2.5 py-2 h-[5vh] border-solid  rounded relative right-[1rem] " id="perpage">
              <option>Select a Section</option>
              <option>20</option>
              <option>30</option>
          </select>
      </div>

      <div class=" relative   h-[5vh] rounded bg-green-500" >
          <select class="w-[10vw] px-3.5  h-[5vh] border-solid text-white bg-transparent rounded" id="perpage">
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
  <div class=" fixed left-[75rem] top-[16rem] w-[8vw] h-[6vh] py-2 rounded-md text-white bg-green-500  text-center" >
      <button wire:click="showmodal">Add Student +</button>
  </div>

  <div class=" fixed left-[25rem] top-[20rem] shadow-black shadow-lg">
      <table class="border border-slate-900 border-separate border-spacing-4">
          <thead class="text-center">
              <tr>
                  <th></th>
                  <th class="border border-slate-900">Student's Name</th>
                  <th class="border border-slate-900">Class</th>
                  <th class="border border-slate-900">Section</th>
                  <th class="border border-slate-900">Email</th>
                  <th class="border border-slate-900">Address</th>
                  <th class="border border-slate-900">Phone Number</th>
                  <th class="border border-slate-900">Action</th>
              </tr>
          </thead>
          <tbody class="text-center">
              <tr>
               
                @foreach ($students as $student )
                    
               
                  <td><input type="checkbox"></td>
                  <td>{{$student->name}}</td>
                  <td>{{$student->class}}</td>
                  <td>{{$student->section}}</td>
                  <td>{{$student->email}}</td>
                  <td>{{$student->address}}</td>
                  <td>{{$student->number}}</td>
                  <td class="flex">
                   
                          <i class="bi bi-trash3-fill ml-3  hover:text-red-900 hover:text-xl" id="delete" ></i>
                   
                     
                          <i class="bi bi-pen ml-3  hover:text-blue-600 hover:text-xl" wire:click="edit({{$student}})"></i>
                    
                  </td>
              </tr>
              @endforeach
              
          </tbody>
      </table>
    
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Student Details</h5>
            <i class="bi bi-people ml-4 text-2xl"></i>                     
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form id="studentform" wire:submit.prevent="{{$editmodal ? 'update' :'addstudent' }}">
              <div class="flex">
                  <div class="flex flex-col">
                      <label for="studentname">Student Name :</label>
                    <x-text-input class="bg-white text-black border-2 border-slate-900 text-center h-[5vh] focus:outline-blue-700 invalid:outline-red-600" placeholder="Student Name" id="studentname"  wire:model.defer='state.name' ></x-text-input>
                    @error('name')
                        
                    <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                    @enderror
                  </div>
              
                
                  <div class="flex flex-col ml-[5rem]">
                      <label for="Email">Email:</label>
                    <x-text-input class="bg-white text-black border-2 focus:outline-blue-700 border-slate-700 text-center h-[5vh]" placeholder="Email" id="Email"  wire:model.defer="state.email"></x-text-input>
                    @error('email')
                        
                    <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                    @enderror
                  </div>
              </div>
              <div class="flex flex-row">
                  <div class="flex flex-col">
                      <label for="Address">Address:</label>
                    <x-text-input class="bg-white text-black border-2 focus:outline-blue-700 border-slate-700 text-center h-[5vh]" placeholder="Address" id="Address"  wire:model.defer='state.address'></x-text-input>
                    @error('address')
                        
                    <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="flex flex-col ml-[5rem]">
                      <label for="class">Class:</label>
                      <select class="w-[11vw] h-[5vh] px-4 rounded-md border-2" id="class" name="class" wire:model.defer="state.class">
                       
                        @foreach ($classes as $class)
                            
                        <option value="{{$class->id}}">{{$class->name}}</option>
                        @endforeach
                      </select>
                      @error('class')
                        
                      <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                      @enderror
                      
                  </div>
                
              </div>
              <div class="flex flex-row">
                  <div class="flex flex-col">
                      <label for="phonenumber">Phone Number:</label>
                    <x-text-input class="bg-white text-black border-2 focus:outline-blue-700 border-slate-700 text-center h-[5vh]" placeholder="Phone Number" id="phonenumber"  wire:model.defer="state.number"></x-text-input>
                    @error('number')
                        
                    <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="flex flex-col ml-[5rem]">
                      <label for="Section">Section:</label>
                      <select class="w-[11vw] h-[5vh] px-4 rounded-md border-2" id="Section"  wire:model.defer="state.section">
                        @foreach ($sections as $section)
                            
                        <option value="{{$section->id}}">{{$section->name}}</option>
                        @endforeach
                         
                      </select>
                      @error('section')
                        
                      <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                      @enderror

                  </div>
              </div>


              <div class="flex flex-row">
                <div class="flex flex-col">
                    <label for="gender">Gender:</label>
                  <x-text-input class="bg-white text-black border-2 focus:outline-blue-700 border-slate-700 text-center h-[5vh]" placeholder="Gender" id="gender"  wire:model.defer="state.gender"></x-text-input>
                  @error('gender')
                        
                      <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                      @enderror
                </div>
                <div class="flex flex-col ml-[5rem]">
                    <label for="dob">Date of Birth:</label>
                    <x-text-input class="bg-white text-black border-2 focus:outline-blue-700 border-slate-700 text-center h-[5vh]" placeholder="date of Birth" id="dob"  wire:model.defer="state.dob"></x-text-input>
                    @error('dob')
                        
                    <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                    @enderror
                </div>
              </div>
            <div class="flex flex-row">
                <div class="flex flex-col">
                    <label for="fathername">Father Name:</label>
                  <x-text-input class="bg-white text-black border-2 focus:outline-blue-700 border-slate-700 text-center h-[5vh]" placeholder="Father Name" id="fathername"  wire:model.defer="state.fathername"></x-text-input>
                  @error('fathername')
                        
                  <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                  @enderror
                </div>
                <div class="flex flex-col ml-[5rem]">
                    <label for="mothername">Mother Name:</label>
                    <x-text-input class="bg-white text-black border-2 focus:outline-blue-700 border-slate-700 text-center h-[5vh]" placeholder="Mother Name" id="mothername"  wire:model.defer="state.mothername"></x-text-input>
                    @error('mothername')
                        
                    <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="flex flex-row">
                <div class="flex flex-col">
                    <label for="addmission">Addmission Date:</label>
                  <x-text-input class="bg-white text-black border-2 focus:outline-blue-700 border-slate-700 text-center h-[5vh]" placeholder="Addmission Date" id="addmission"  wire:model.defer="state.addmissiondate"></x-text-input>
                  @error('addmissiondate')
                        
                  <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                  @enderror
                </div>
                <div class="flex flex-col ml-[5rem]">
                    <label for="religion">Religion</label>
                    <x-text-input class="bg-white text-black border-2 focus:outline-blue-700 border-slate-700 text-center h-[5vh]" placeholder="Religion" id="mothername"  wire:model.defer="state.religion"></x-text-input>
                    @error('religion')
                        
                  <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                  @enderror
                </div>
            </div>
            <div class="modal-footer">
                <x-primary-button class="bg-black">Close</x-primary-button>
                <x-primary-button class="bg-black" id="addbtn" type="submit">Add</x-primary-button>
               
              </div>
           
          </div>
         
          
      </form>
        </div>
      </div>
    </div>
</div>
<script>
window.addEventListener('show-model',event =>{
  $('#exampleModal').modal('show')
})
window.addEventListener('hide-model',event =>{
  $('#exampleModal').modal('hide');
  Swal.fire(
  event.detail.msg,
  'You clicked the button!',
  'success'
)
})
</script>
