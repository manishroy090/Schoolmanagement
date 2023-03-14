<div>
   
    
    <div class=" relative left-[18rem] top-[5rem]">
        <button type="button" class="bg-gray-800 hover:bg-blue-600 hover:text-white duration-700 rounded-md py-2 px-2 text-white" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover" wire:click="tab('section')">
            Section
          </button>
          <button type="button" class="bg-gray-800 text-white hover:bg-blue-600 hover:text-white duration-700 rounded-md py-2 px-2" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover" wire:click="tab('class')">
            Class
          </button>
          <button type="button" class="bg-gray-800 text-white hover:bg-blue-600 hover:text-white duration-700 rounded-md py-2 px-2" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover" wire:click="tab('subtype')">
            Subject Type
          </button>
          <button type="button" class="bg-gray-800 text-white hover:bg-blue-600 hover:text-white duration-700 rounded-md py-2 px-2" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Left popover" wire:click="tab('period')">
            Period
          </button>

          
    </div>
    <div class=" fixed left-[39rem] top-[10rem] shadow-black shadow-lg">
        <div class="flex flex-row mt-[2rem] mb-[1rem]"><h1 class="font-bold ml-5">Hostel Details</h1> </div>
        <table class="border border-slate-900 border-separate border-spacing-4">
          <tr>
            <th></th>
            <thead class="text-center">
              <th class=""></th>
                    <th class="border border-slate-900">{{$tablename}}</th>
                    <th class="border border-slate-900">{{$starttime ?'Start' :'Date'}}</th>
                    @if ($starttime)
                    <th class="border border-slate-900">End</th>
                    @endif
                   
                </tr>
            </thead>
            <tbody class="text-center">  
              @foreach ($datas as $data)
                  
              <tr>  
                <td><input type="checkbox"></td>
                <td>{{$data->name}}</td>
                <td>{{$data->date_time}}</td>
                <td>{{$data->ending}}</td>
                
                
                <td class="flex">
                  
                  <i class="bi bi-trash3-fill ml-3  hover:text-red-900 hover:text-xl" id="delete" wire:click="trash({{$data->id}})"></i>
                  
                  
                  <i class="bi bi-pen ml-3  hover:text-blue-600 hover:text-xl" wire:click="edit({{$data}})"></i>
                  
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
      
    </div>
    <div class="fixed  bottom-[13rem]  left-[18rem]" id="form"> 
        <form class="bg-gray-800 px-4 py-4 w-[19rem] rounded-md" wire:submit.prevent="{{$editbtn ? 'update' : 'add'}}">
            <h1 class="text-2xl ml-[4rem] text-white">{{$tablename}}</h1>
            <div class="flex flex-col">
                <x-input-label for="sec" class="text-xl text-white">{{$tablename}}</x-input-label>
                <x-text-input class="bg-white text-black border w-[15vw] h-[3rem] text-center border-black" placeholder="{{$tablename}}" id="sec" wire:model.defer="state.name"></x-text-input>
                @error('name') 
                <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                @enderror
            </div>

            <div class="flex flex-col mt-[2rem]">
                <x-input-label for="date" class="text-xl text-white">{{$starttime ? 'Starting time' : $datelabel}}</x-input-label>
                <x-text-input class="bg-white text-black border w-[15vw] h-[3rem] text-center border-black" placeholder="{{$starttime ? 'Starting time' : 'state.date'}}" id="date" wire:model.lazy="state.date_time" onchange="livewire.emit('setDate',this.value)"></x-text-input>  
                
                @if($tablename != "period")
                    @error('date') 
                    <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                    @enderror
                    @else
                    @error('time') 
                    <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                    @enderror

                @endif
                
               
            </div>
            
            @if ($starttime)
            <div class="flex flex-col mt-[2rem]">
                <x-input-label for="enddate" class="text-xl text-white">Ending Date</x-input-label>
                <x-text-input class="bg-white text-black border w-[15vw] h-[3rem] text-center border-black" placeholder="Ending date" id="end" wire:model.lazy="state.ending" onchange="livewire.emit('setTime',this.value)"></x-text-input>
                @error('ending') 
                <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                @enderror
            </div>     
            @endif
           
           
           
            @if ($editbtn)
                
            <button class="bg-yellow-500 px-2 py-2 mt-4 text-center rounded-md w-[16rem] text-white hover:bg-blue-600 duration-700" type="submit">Save changes</button>
            @else
            <button class="bg-yellow-600 px-2 py-2 mt-4 text-center rounded-md w-[16rem] text-white hover:bg-blue-600 duration-700" type="submit">Save</button>
            @endif
          
        </form>
    </div>

    
</div>
<script>
    $('#form').hide();
    window.addEventListener('show-form', event => {
    $('#form').show();
})
    window.addEventListener('show-alert', event => {
    Swal.fire(
  'Successfully'+" "+event.detail.msg,
  'You clicked the button!',
  'success'
)
})
window.addEventListener('end-datepicker', event => {
    $('#end').datetimepicker({
        datepicker:false,
        format:'H:i:s A',
        theme:'dark'
      }); 

})


window.addEventListener('show-timepicker', event => {
    console.log();
    if(event.detail.time){
       console.log("IF WORKING")
       $('#date').nepaliDatePicker("remove");
       $('#date').datetimepicker({
        datepicker:false,
        format:'H:i:s A',
        theme:'dark'
      }); 
    }
    else{
       
        $('#date').datetimepicker('destroy')
        $('#date').nepaliDatePicker({
          onChange: function() {
            var date= $('#date').val();
            livewire.emit('setDate',date)
       }
        });
       
      
       
    }
    
})
/*window.addEventListener('show-datepicker',event=>{
     
    

})*/


      

</script>
