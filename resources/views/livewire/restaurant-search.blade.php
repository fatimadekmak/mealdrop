<!-- <div>
    <div>
        <input wire:model="searchQuery" type="text" placeholder="Search restaurants...">
        <button wire:click="search">Search</button>
    </div>
    <div>
        <select wire:model="filterCuisine">
            <option value="">All cuisines</option>
            @foreach ($cuisines as $cuisine)
                <option value="{{ $cuisine->id }}">{{ $cuisine->name }}</option>
            @endforeach
        </select>
        <button wire:click="filter">Filter</button>
    </div>
    <div>
        <ul>
            @foreach ($restaurants as $restaurant)
                <li>{{ $restaurant->name }}</li>
            @endforeach
        </ul>
    </div>
    <div>
        {{ $restaurants->links() }}
    </div>
</div> -->
