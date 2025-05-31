<div>
    <input type="search" wire:model.debounce.500ms="search" placeholder="Search here..." class="p-3 border rounded" />

    @if(strlen($search) > 0)
        <ul class="border mt-1 max-h-60 overflow-auto rounded bg-white shadow">
            @forelse($results as $result)
                <li class="p-2 hover:bg-gray-100 cursor-pointer">{{ $result['name'] }}</li>
            @empty
                <li class="p-2 text-red-500">Not found</li>
            @endforelse
        </ul>
    @endif
</div>

