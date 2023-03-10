<div>
    <div class="bg-blue-200 fixed top-[2rem] left-[15rem] px-4 py-4 border rounded-md">
        <form wire:submit.prevent="{{$edtmethod ? 'update' : 'addsub'}}">
            <h1 class="text-2xl mb-[1rem]">Create A New Subject</h1>
            <hr>
            <div class="flex flex-row mt-[2rem]">
                <div class="flex flex-col ">
                    <label for="name" class="text-xl">Subject Name</label>
                    <x-text-input placeholder="Subject Name" class="bg-white h-[3rem] w-[13rem] text-black text-center mt-[1rem]" id="name" wire:model.defer="state.name"></x-text-input>
                    @error('name')
                    <p class="text-red-500 text-xs italic ml-[4rem] mt-[1rem]">{{$message}}</p>
                    @enderror
                </div>
                <div class="flex flex-col ml-[2rem] ">
                    <label for="subtype" class="text-xl">Subject Type</label>
                   <select id="subtype" class="h-[3rem] text-center text-[19px] mt-[1rem]  w-[13rem] border rounded-md" wire:model.defer="state.subtype">
                    @foreach ($subtypes as $subtypes)
                        
                    <option value="{{$subtypes->id}}">{{$subtypes->name}}</option>
                    @endforeach
                   </select>
                   @error('subtype')
                   <p class="text-red-500 text-xs italic ml-[4rem] mt-[1rem]">{{$message}}</p>  
                   @enderror
                </div>

            </div>

            <div class="flex flex-row">
                <div class="flex flex-col">
                    <label for="selectclass" class="text-xl">Select Class</label>
                    <select id="selectclass" class="h-[3rem] text-center text-[19px] mt-[1rem] w-[13rem] border rounded-md" wire:model.defer="state.class">
                      @foreach ($classes as $class)
                          
                      <option value="{{$subtypes->id}}">{{$class->name}}</option>
                      @endforeach
                       
                       </select>
                       @error('class')
                       <p class="text-red-500 text-xs italic ml-[4rem] mt-[1rem]">{{$message}}</p> 
                       @enderror
                </div>
              
                <div class="flex flex-col ml-[2rem]">
                    <label for="subcode" class="text-xl">Subject Code</label>
                    <x-text-input placeholder="Subject Code" class="bg-white h-[3rem] w-[13rem] text-black text-center mt-[1rem]" id="subcode" wire:model.defer="state.subcode"></x-text-input>
                    @error('subcode')
                    <p class="text-red-500 text-xs italic ml-[4rem] mt-[1rem]">{{$message}}</p>
                    @enderror
                </div>
               
            </div>


            <div class="flex flex-row ">
                <button class="bg-yellow-400 px-3 py-3 mt-[3rem] w-[13rem] text-xl text-white border rounded-md">Submit</button>
          <button class="bg-slate-800 px-3 py-3 mt-[3rem] w-[13rem] text-xl text-white ml-[1rem] border rounded-md">Reset</button>
            </div>
        </form>
    </div>
    <div class="fixed top-[2rem] left-[50rem] border border-black">
        <h1 class="mt-[1rem] mb-[1rem] ml-[2rem]">All Exam Schedule</h1>
        <table class="border border-slate-900 border-separate border-spacing-4">
            <thead class="text-center border">
                <tr>
                    <th></th>
                    <th class="border border-slate-900">Subject Name</th>
                    <th class="border border-slate-900">Subject Type</th>
                    <th class="border border-slate-900">Class</th>
                    <th class="border border-slate-900">Subject Code</th>
                    <th class="border border-slate-900">Action</th>
                  
                </tr>
            </thead>
            <tbody class="text-center">  
                @foreach ($sublists as $sublist)
                <tr>
                        
                    <td><input type="checkbox"></td>
                    <td>{{$sublist->name}}</td>
                    <td>{{$sublist->subtype}}</td>
                    <td>{{$sublist->class}}</td>
                    <td>{{$sublist->subcode}}</td>
                    <td class="flex">
                        <i class="bi bi-trash3-fill ml-3  hover:text-red-900 hover:text-xl" id="delete" wire:click="trash({{$sublist->id}})"></i>
                        <i class="bi bi-pen ml-3  hover:text-blue-600 hover:text-xl" wire:click="edit({{$sublist}})" ></i>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    
</div>
<script>
     window.addEventListener('show-alert', event => {
    Swal.fire(
  'Successfully'+" "+event.detail.msg,
  'You clicked the button!',
  'success'
)
})
</script>
