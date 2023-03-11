<div>
    <div class="flex flex-row relative left-[18rem] mt-[4rem] ">
        <div class="bg-yellow-500 px-8 py-4 w-[16rem] flex flex-row rounded-md">
            <div class="flex flex-col">
                <i class="bi bi-person-rolodex text-4xl ml-[18px] text-blue-600"></i>
                <h1 class="text-2xl"> Student </h1>
            </div>
            <div class="border-l-[1px] border-gray-900 ml-[1rem]">
                <h1 class="text-3xl ml-[1rem] mt-[1rem]">50,000</h1>
            </div>
        </div>
        <div class="bg-yellow-500 px-8 py-4 w-[16rem] flex flex-row rounded-md ml-[4rem]">
            <div class="flex flex-col">
                <i class="bi bi-people-fill text-4xl ml-[18px] text-green-500"></i>
                <h1 class="text-2xl"> Teachers </h1>
            </div>
            <div class="border-l-[1px] border-gray-900 ml-[1rem]">
                <h1 class="text-3xl ml-[1rem] mt-[1rem]">50,000</h1>
            </div>
        </div>
        <div class="bg-yellow-500 px-8 py-4 w-[16rem] flex flex-row rounded-md ml-[4rem]">
            <div class="flex flex-col">
                <i class="bi bi-person-add text-4xl ml-[18px]"></i>
                <h1 class="text-2xl"> Parents </h1>
            </div>
            <div class="border-l-[1px] border-gray-900 ml-[1rem]">
                <h1 class="text-3xl ml-[1rem] mt-[1rem]">50,000</h1>
            </div>
        </div>
        <div class="bg-yellow-500 px-8 py-4 w-[21rem] flex flex-row rounded-md ml-[4rem]">
            <div class="flex flex-col">
                <i class="bi bi-cash-coin text-5xl ml-[40px] text-sky-500"></i>
                <h1 class="text-2xl"> Total Earnings </h1>
            </div>
            <div class="border-l-[1px] border-gray-900 ml-[1rem]">
                <h1 class="text-3xl ml-[1rem] mt-[1rem]">50,000</h1>
            </div>
        </div>
       
    </div>
    
    <div class=" relative left-[18rem] top-[5rem]">
        <button type="button" class="bg-gray-800 hover:bg-blue-600 hover:text-white duration-700 rounded-md py-2 px-2 text-white" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover" wire:click="section">
            Section
          </button>
          <button type="button" class="bg-gray-800 text-white hover:bg-blue-600 hover:text-white duration-700 rounded-md py-2 px-2" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover" wire:click="class">
            Class
          </button>
          <button type="button" class="bg-gray-800 text-white hover:bg-blue-600 hover:text-white duration-700 rounded-md py-2 px-2" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover" wire:click="subtype">
            Subject Type
          </button>
          <button type="button" class="bg-gray-800 text-white hover:bg-blue-600 hover:text-white duration-700 rounded-md py-2 px-2" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Left popover">
            Events
          </button>
    </div>
    <div class=" relative top-[6rem] left-[40rem] border w-[275px]">
        <h1 class="text-xl ml-6">{{$tablename." "."Table"}}<h1>
        <table class="border border-slate-900 border-separate border-spacing-3  ">
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
    <div class="relative  bottom-[4rem] left-[18rem]"> 
        <form class="bg-gray-800 px-4 py-4 w-[19rem] rounded-md" wire:submit.prevent="{{$editbtn ? 'update' : 'add'}}">
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
                <x-text-input class="bg-white text-black border w-[15vw] h-[3rem] text-center border-black" placeholder="Date" id="date" wire:model.lazy="state.date" onchange="livewire.emit('setDate',this.value)"></x-text-input>  
               
                @error('date')
                    
                <p class="text-red-500 text-xs italic ml-[1rem] mt-[1rem]">{{$message}}</p>
                @enderror
            </div>
            @if ($editbtn)
                
            <button class="bg-yellow-500 px-2 py-2 mt-4 text-center rounded-md w-[16rem] text-white hover:bg-blue-600 duration-700" type="submit">Save changes</button>
            @else
            <button class="bg-yellow-600 px-2 py-2 mt-4 text-center rounded-md w-[16rem] text-white hover:bg-blue-600 duration-700" type="submit">Save</button>
            @endif
          
        </form>
    </div>

    <div class="relative left-[60rem] bottom-[30rem] bg-gray-900 flex flex-col px-3 py-4 w-[42vw] overflow-auto touch-pan-y h-[30rem] rounded-md ">
        <i class="bi bi-card-checklist text-white text-3xl relative top-[2rem]"></i>
        <h1 class="ml-[3rem] text-2xl text-white sticky" >Notice Board</h1>
        <hr>
        <div class="flex flex-col   px-3 mt-[2rem]">
            <h2 class="text-xl mt-[2rem] text-white">2023-04-2</h2>
            <div class="flex flex-row mt-[1rem]">
                <h3 class="text-[17px] font-boldm text-blue-600">Manish<h3>
                    <i class="bi bi-circle-fill text-green-600 ml-[7px] mt-[1rem] text-[10px]"></i>
                    <h4 class="ml-[5px] mt-[1px] font-semibold text-white">5min ago</h4>
            </div>
            <div class="overflow-hidden  w-[34rem] mt-[1rem] text-xl text-white">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste corrupti enim, odit voluptates at praesentium dolorum sit impedit, mollitia quam soluta dolore quia, rem dolor nam voluptatem reiciendis ipsam veritatis.</p>
            </div>
        </div>
        <div class="flex flex-col   px-3 mt-[2rem]">
            <h2 class="text-xl mt-[2rem] text-white">2023-04-2</h2>
            <div class="flex flex-row mt-[1rem]">
                <h3 class="text-[17px] font-boldm text-blue-600">Manish<h3>
                    <i class="bi bi-circle-fill text-green-600 ml-[7px] mt-[1rem] text-[10px]"></i>
                    <h4 class="ml-[5px] mt-[1px] font-semibold text-white">5min ago</h4>
            </div>
            <div class="overflow-hidden  w-[34rem] mt-[1rem] text-xl text-white">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste corrupti enim, odit voluptates at praesentium dolorum sit impedit, mollitia quam soluta dolore quia, rem dolor nam voluptatem reiciendis ipsam veritatis.</p>
            </div>
        </div>
        <div class="flex flex-col   px-3 mt-[2rem]">
            <h2 class="text-xl mt-[2rem] text-white">2023-04-2</h2>
            <div class="flex flex-row mt-[1rem]">
                <h3 class="text-[17px] font-boldm text-blue-600">Manish<h3>
                    <i class="bi bi-circle-fill text-green-600 ml-[7px] mt-[1rem] text-[10px]"></i>
                    <h4 class="ml-[5px] mt-[1px] font-semibold text-white">5min ago</h4>
            </div>
            <div class="overflow-hidden  w-[34rem] mt-[1rem] text-xl text-white">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste corrupti enim, odit voluptates at praesentium dolorum sit impedit, mollitia quam soluta dolore quia, rem dolor nam voluptatem reiciendis ipsam veritatis.</p>
            </div>
        </div>
       
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
 
$('#date').datetimepicker({
        timepicker:false,
        format:'Y/m/d'
      });
</script>
