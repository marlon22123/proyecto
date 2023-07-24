      
<div class="grid grid-cols-6 gap-6">
    

               <div class="col-span-6 sm:col-span-3">
                <x-label for="name" >
                  Nombre
                </x-label>
                <x-input wire:model.defer="name" type="text" id="name"  class="w-full"/>
                    @error('name')
                    <h1 class="text-red-500">{{$message}}</h1>
                    @enderror
                </div>
                <div class="col-span-6 sm:col-span-3 ">
                 <x-label for="price" >
                  Precio
                </x-label>
                <x-input wire:model.defer="price" type="text" id="price"  class="w-full"/>
                  @error('price')
                  <h1 class="text-red-500">{{$message}}</h1>
                  @enderror
                </div>
                <div class="col-span-6">
                  <x-label for="description" >
                  Descripcion
                </x-label>
                <x-input wire:model.defer="description" type="text" id="description"  class="w-full"/>
                
                  @error('description')
                  <h1 class="text-red-500">{{$message}}</h1>
                  @enderror
                </div> 
            

             
                
  

  
                
</div>
      
          


  

  