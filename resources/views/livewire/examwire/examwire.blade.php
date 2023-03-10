<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
   
        <form wire:submit.prevent="{{$editmodal ? 'update' :'addExam'}}" class="bg-blue-200 relative top-[2rem] left-[13rem] px-4 py-4 border rounded-md w-[35rem]">
            <h1 class="text-2xl mb-[1rem]">Add New Exam</h1>
            <hr>
            <div class="flex flex-row">
                <div class="flex flex-col ">
                    <label for="name" class="text-xl">Exam Name</label>
                    <x-text-input placeholder="Exam Name" class="bg-white h-[3rem] w-[15rem] text-black text-center mt-[1rem]" id="name" wire:model.defer='state.name'></x-text-input>
                    @error('name')
                    <p class="text-red-500 text-xs italic ml-[4rem] mt-[1rem]">{{$message}}</p>
                        
                    @enderror
                </div>
                <div class="flex flex-col ml-[2rem]">
                    <label for="subtype" class="text-xl">Subject Type</label>
                   <select id="subtype" class="h-[3rem] text-center text-[19px] mt-[1rem] border rounded-md w-[15rem]" wire:model.defer="state.subtype">
                @foreach ($subtypes as $subtype)
                    
                <option value="{{$subtype->id}}">{{$subtype->name}}</option>
                @endforeach
                   </select>
                   @error('subtype')
                   <p class="text-red-500 text-xs italic ml-[4rem] mt-[1rem]">{{$message}}</p>
                       
                   @enderror
                </div>
            </div>
            <div class="flex flex-row">
                <div class="flex flex-col ">
                    <label for="selectclass" class="text-xl">Select Class</label>
                    <select id="selectclass" class="h-[3rem] text-center text-[19px] mt-[1rem] border rounded-md w-[15rem]" wire:model.defer="state.class">
                        @foreach ($classes as $class)
                            
                        <option value="{{$class->id}}">{{$class->name}}</option>
                        @endforeach
                       
                       </select>
                       @error('class')
                       <p class="text-red-500 text-xs italic ml-[4rem] mt-[1rem]">{{$message}}</p>
                           
                       @enderror
                </div>
                <div class="flex flex-col ml-[2rem] ">
                    <label for="section" class="text-xl">Select Section</label>
                    <select id="section" class="h-[3rem] text-center text-[19px] mt-[1rem] border rounded-md w-[15rem]" wire:model.defer="state.section">
                        @foreach ($sections as $section)
                            
                        <option value="{{$section->id}}">{{$section->name}}</option>
                        @endforeach
                     
                       </select>
                       @error('section')
                       <p class="text-red-500 text-xs italic ml-[4rem] mt-[1rem]">{{$message}}</p>
                           
                       @enderror
                    
                </div>
            </div>
           
          
          
          
            <div class="flex flex-row">
                <div class="flex flex-col mt-[2rem]">
                    <label for="time" class="text-xl">Select Time</label>
                    <x-text-input class="bg-white h-[3rem] w-[15rem] text-black text-center mt-[5px] " id="time" wire:model.defer="state.time" onchange="Livewire.emit('setime',this.value)"></x-text-input>
                    @error('time')
                   <p class="text-red-500 text-xs italic ml-[4rem] mt-[1rem]">{{$message}}</p>
                       
                   @enderror
                </div>
                
                <div class="flex flex-col mt-[2rem] ml-[2rem]">
                    <label for="date" class="text-xl">Select Date</label>
                    <x-text-input  class="bg-white h-[3rem] w-[15rem] text-black text-center mt-[5px]" id="date" wire:model.lazy="state.date"  onchange="Livewire.emit('setDate', this.value)"></x-text-input>
                    @error('date')
                   <p class="text-red-500 text-xs italic ml-[4rem] mt-[1rem]">{{$message}}</p>
                       
                   @enderror
                </div>
            </div>
          
          <button class="bg-yellow-400 px-3 py-3 mt-[3rem] ml-[5rem] w-[20rem] text-xl text-white hover:bg-blue-600 duration-700" type="submit">Submit</button>
          
          
        </form>
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
                @foreach ($exams as $exam)   
                <tr>
                    <td><input type="checkbox"></td>
                    <td>{{$exam->name}}</td>
                    <td>{{$exam->subtype}}</td>
                    <td>{{$exam->class}}</td>
                    <td>{{$exam->section}}</td>
                    <td>{{$exam->time}}</td>
                    <td>{{$exam->date}}</td>
                    <td class="flex">
                        <i class="bi bi-trash3-fill ml-3  hover:text-red-900 hover:text-xl" id="delete" wire:click="trash({{$exam->id}})"></i>
                        <i class="bi bi-pen ml-3  hover:text-blue-600 hover:text-xl" wire:click="edit({{$exam}})"></i>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).ready(function(){
      $('#time').datetimepicker({
        datepicker:false,
        
        format:'h:i A'
      });

      $('#date').datetimepicker({
        timepicker:false,
        format:'Y/m/d'
      });
    //    $('#date').on("change.datepicker",function(e){
    //     Livewire.emit('setDate', e.target.value);
    //     // console.log(e.target.value);
    //    })
    })
    window.addEventListener('show-alert', event => {
    Swal.fire(
  'Successfully'+" "+event.detail.msg,
  'You clicked the button!',
  'success'
)
})
</script>

