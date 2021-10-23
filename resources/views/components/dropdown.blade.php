@props(['trigger'])
<div x-data="{ show: false }" class="py-2" @click.away="show = false">
    {{-- Trigger --}}
    <div @click="show = ! show">
        {{ $trigger }}
    </div>
        
    <div x-show="show" class="absolute bg-gray-100 w-full rounded-xl mt-3">
        
        {{ $slot }}

    </div>
    
</div>
