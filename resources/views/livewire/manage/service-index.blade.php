<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Servicios
        </h2>
    </x-slot>

    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{ route('dashboard') }}"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                        </path>
                    </svg>
                    Panel
                </a>
            </li>

            <li aria-current="page">
                <div class="flex items-center">
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span
                        class="ml-http://sanjose-dark.test/dashboard#1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Gestionar</span>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span
                        class="ml-http://sanjose-dark.test/dashboard#1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Servicios</span>
                </div>
            </li>
        </ol>
    </nav>

    <div class="py-5">
        <div class="mx-auto">
            <div class="p-4 border-2 overflow-hidden border-gray-200 border-dashed rounded-lg dark:border-gray-700{{--  mt-14 --}}">
               
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 py-4">
                <div class="w-full md:w-1/5">
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" id="simple-search" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                        </div>
                    </form>
                </div>
                <div class=" flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                    
                    <div class="flex items-center space-x-3 w-full md:w-auto">
                        <div>
                            <div class="flex items-center justify-center  lg:mb-0 lg:justify-start">
                                <span  class=" text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">Mostrar</span>
                                <select wire:model="cant" class="mx-3 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-50 dark:focus:border-indigo-50 ">
                                  <option selected>10</option>
                                  <option value="25">25</option>
                                  <option value="50">50</option>
                                  <option value="100">100</option>
                             
                                </select>
                                <span class="text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">entradas</span>
                                
                            </div>
                        </div>
                    </div>
                    <button type="button"  wire:click="$set('modal' ,true)" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-2 py-2 bg-indigo-500 hover:bg-indigo-700 focus:outline-none focus:ring-indigo-800">
                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        Agregar Servicio
                    </button>
                </div>
            </div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    @if (count($services))
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
              
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Descripcion
                </th>
                <th scope="col" class="px-6 py-3">
                    Precio
                </th>
                <th scope="col" class="px-6 py-3 text-end">
                    <span class="sr-only">Actions</span>
                </th>
             
            </tr>
        </thead>
        <tbody>
            @foreach ( $services as $item)
            <tr class="odd:bg-white even:bg-gray-50  dark:odd:bg-gray-900 dark:even:bg-gray-800  border-b  dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
               
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $item->name  }}
                </th>
                <td class="px-6 py-4">
                    {{ $item->description  }}
                </td>
                <td class="px-6 py-4">
                    {{ $item->price  }}
                </td>
             
                <td class="px-6 py-4 space-x-2 flex justify-end">
                    <a wire:click="edit({{$item}})" class="font-medium text-green-600 dark:text-green-500 hover:underline hover:cursor-pointer">Editar</a>
                    <a wire:click="$emit('deleteService',{{$item->id}})" class="font-medium text-red-600 dark:text-red-500 hover:underline hover:cursor-pointer">Eliminar</a>
                </td>
            </tr>
            @endforeach
        
          
        </tbody>
    </table>
    @else
    <h6 class="text-center my-5 text-gray-900 dark:text-white">Ningun registro encontrado"</h6>
    @endif
</div>
@if ($services->hasPages())
<div class="p-6">
    {{$services->links()}}

  </div>
  @endif
            </div>

        </div>
    </div>
    <x-modal-form :head='$componentName="Clientes"' :id='$selected_id'>
        @include('livewire.manage.service-form')
    </x-modal-form> 
    @push('js')


    <script>
        Livewire.on('deleteService',servicetId=>{
        Swal.fire({
                title: '¿Estas seguro(a)?',
                text: "¡No podras revertir esta accion!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Eliminar',
                padding: '2em'
                }).then(function(result) {
                if (result.value) {
                    Livewire.emitTo('manage.service-index','delete',servicetId);
                    Swal.fire(
                    'Eliminado!',
                    'El registro fue eliminado correctamente',
                    'success'
                    )
                }
                })
        });
            
            
    </script>
    @endpush

</div>
