 
 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-m text-gray-800 leading-tight">
            {{ __('DAFTAR PRODUK') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <h3>Edit Daftar Produk</h3>
        <form action="{{ url('/produk') }}" method="POST">
        @csrf
        <div class="grid grid-cols-2 gap-6">
        <div class="grid grid-rows-2 gap-6">
        <div>
        <x-label>NAMA PRODUK</x-label>
        <x-input type="text" class="block mt-1 w-full" name="produk_nama"></x-input>
        </div>
        <div>
        <x-label>HARGA PRODUK</x-label>
        <x-input type="text" class="block mt-1 w-full" name="produk_harga"></x-input>
        </div>
        <div>
        <x-label>STOK PRODUK</x-label>
        <x-input type="text" class="block mt-1 w-full" name="produk_stok"></x-input>
        </div>
 <div>
    <x-button class="ml-3">
    {{ __('Edit') }}
    </x-button>
    </div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>

                
</x-app-layout>
