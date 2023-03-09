
    <div>
        <div class=" fixed left-72 top-10 right-0 px-4 py-4 flex ">
            <div class="bg-blue-400 w-20 p-2.5 text-white duration-700 hover:bg-green-500 rounded-md text-center" wire:click="area">Area</div>
            
            <div class="bg-blue-400  w-20 text-center duration-700 hover:bg-green-500  text-white p-2.5 rounded-md ml-4" wire:click="ward" >
                Ward
            </div>
            <div
                class="bg-blue-400  w-20 text-center duration-700 hover:bg-green-500  text-white p-2.5 rounded-md ml-4">
                <a href="">Category</a>
            </div>
            <div
                class="bg-blue-400  w-20 text-center duration-700 hover:bg-green-500  text-white p-2.5 rounded-md ml-4">
                <a href="">Menu</a>
            </div>
    
        </div>
        <div class="Table  fixed left-[20rem] top-[10rem] ">
            <table class="table">
             <thead>
                 <tr class="text-center bg-slate-600">
                     <th >Id</th>
                     <th class="">{{$tablename}}</th>
                     <th class="">Action</th>
                    
                 </tr>
             </thead>
             <tbody>
       @foreach ($datas as $data)
             <tr>     
                 <th>{{$data->id}}</th>
                 <th class="">{{$data->name}}</th>
                 <th class="flex">
                     <button class="bg-blue-600 py-2 px-3 text-white rounded-md" wire:click="edit({{$data->id}})">Edit</button>
                     <button class="ml-4 bg-red-600 py-2 px-3 text-white rounded-md" wire:click="delete({{$data->id}})">Delete</button>
                 </th>
             </tr>
             @endforeach    
   
             </tbody>
            </table>
        </div>


        
   
        <form class="flex bg-violet-300 py-8 mr-4 px-4 w-[30vw] rounded-md relative top-[15rem] right-0 left-[60rem]" wire:submit.prevent="{{$action}}">
            <input type="text" placeholder="{{$inputfield}}" class="rounded-md text-black" wire:model.defer="name">
              <button type="submit" class="bg-blue-600 py-3 text-white px-4 ml-6 rounded-md duration-700 hover:bg-green-600">{{$buttonlablel}}</button>
        </form>
         
    </div>
