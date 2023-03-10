<div>
    <div class=" relative left-[18rem] top-[4rem]">
        <button type="button" class="bg-slate-400 hover:bg-blue-600 hover:text-white duration-700 rounded-md py-2 px-2" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover" wire:click="section">
            Section
          </button>
          <button type="button" class="bg-slate-400 hover:bg-blue-600 hover:text-white duration-700 rounded-md py-2 px-2" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover" wire:click="class">
            Class
          </button>
          <button type="button" class="bg-slate-400 hover:bg-blue-600 hover:text-white duration-700 rounded-md py-2 px-2" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
            Staff Member
          </button>
          <button type="button" class="bg-slate-400 hover:bg-blue-600 hover:text-white duration-700 rounded-md py-2 px-2" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Left popover">
            Events
          </button>
    </div>
    <div class=" relative top-20 left-[18rem]">
        
        <table class="border border-slate-900 border-separate border-spacing-3 rounded-md  ">
            <thead class="text-center">
                <tr>
                    <th></th>
                    <th class="">{{$tablename}}</th>
                    <th class="">Date</th>
                    <th class="">Action</th>
                   
                </tr>
            </thead>
            <tbody class="text-center ">
       
               @foreach ($datas as $data)
               <tr>
                   <td><input type="checkbox"></td>
                   <td>{{$data->name}}</td>
                   <td>{{$data->date}}</td>
                   <td class="flex">
                       <i class="bi bi-trash3-fill ml-3  hover:text-red-900 hover:text-xl" wire:click="trash({{$data->id}})"></i>
                       <i class="bi bi-pen ml-3  hover:text-blue-600 hover:text-xl" wire:click="edit({{$data}})" ></i>
                    </td>
                </tr>
                @endforeach
              
            </tbody>
        </table>
    </div>
    <div class="fixed top-20 left-[70rem]"> 
        <form class="bg-purple-300 px-4 py-4 w-[19rem] rounded-md" wire:submit.prevent="{{$editbtn ? 'update' : 'add'}}">
            <h1 class="text-2xl ml-[4rem]">{{$tablename}}</h1>
            <div class="flex flex-col">
                <x-input-label for="sec" class="text-xl text-white">{{$tablename}}</x-input-label>
                <x-text-input class="bg-white text-black border w-[15vw] h-[3rem] text-center border-black" placeholder="{{$tablename}}" id="sec" wire:model.defer="state.name"></x-text-input>
                @error('name')
                    
                <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <x-input-label for="date" class="text-xl text-white">Date</x-input-label>
                <x-text-input class="bg-white text-black border w-[15vw] h-[3rem] text-center border-black" placeholder="Date" id="date" wire:model.lazy="state.date"></x-text-input>  
               
                @error('date')
                    
                <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                @enderror
            </div>
            @if ($editbtn)
                
            <button class="bg-slate-600 px-2 py-2 mt-4 text-center rounded-md w-[16rem] text-white hover:bg-blue-600 duration-700" type="submit">Save changes</button>
            @else
            <button class="bg-slate-600 px-2 py-2 mt-4 text-center rounded-md w-[16rem] text-white hover:bg-blue-600 duration-700" type="submit">Save</button>
            @endif
          
        </form>
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
 
$('#date').nepaliDatePicker();
    </script>
