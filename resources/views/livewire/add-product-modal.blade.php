<div>
    <x-modal wire:model="show">
        <x-slot name="title">Add a new product</x-slot>
        <form action="#" method="post">
            <div class="flex items-center">
                <button type="submit" class="bg-black text-white uppercase text-xs tracking-widest border-none px-7 py-3 focus:outline-none ml-auto">Save</button>
            </div>
        </form>
    </x-modal>
</div>
