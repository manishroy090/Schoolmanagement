<div>
    {{-- Stop trying to control. --}}
<form class="bg-red-600 relative top-[5rem] left-72 w-[30rem] px-4 border-none py-[4rem]" >
 <label for="date">Date:</label>
    <select class=" w-56 px-5 rounded-md h-9" id="date" wire:model="date">
      <option selected value="Select">Select</option>
        <option value="Today">Today</option>
        <option value="Yesterday">Yesterday</option>
        <option value="Current Week">Current Week</option>
        <option value="Last Week">Last Week</option>
        <option value="Current Month">Current Month</option>
        <option value="Last Month">Last Month</option>
        <option value="Custom date">Custom date</option>
    </select>
   
    <div class="flex mt-10">
        <div>
            <label for="started date">Started Date</label>
            <input type="text" placeholder="Started date" id="started" wire:model="started">
        </div>
      <div class="ml-4">
        <label for="ending date">Ending Date</label>
        <input type="text" placeholder="End date" id="ending" wire:model="ending">
      </div>
        
    </div>
   

</form>
   
</div>
<script>
  $date=$('#date').val()
  $('#date').click(function(){
    if($('#date').val()=='Custom date'){
      $('#started').nepaliDatePicker();
      $('#ending').nepaliDatePicker();
      $('#started').empty();
      $('#started').val()='';
   }
   else{
    
   }
  
  })
 
 
</script>
