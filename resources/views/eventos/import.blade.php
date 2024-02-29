
<div>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <h1 class="text-2xl text-white bg-slate-600">Importa Eventos</h1>
            <div class="overflow-hidden bg-white bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (session('status'))
                        <div class="py-3">
                            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                                <div class="px-10 py-3 font-semibold border-2 shadow-lg bg-lime-200 border-lime-500 text-lime-800 rounded-xl">
                                    {{ session('status') }}
                                </div>
                            </div>
                        </div>
                    @endif
                    <form action="{{route('importeventos')}}" method="post" enctype="multipart/form-data" class="px-5 py-3 mt-5 shadow-xl bg-slate-200 rounded-xl">
                        @csrf
                        <input type="file" name="file">
                        @error('file')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="px-5 py-1 shadow-xl bg-lime-600 text-lime-100 hover:bg-lime-700 hover:text-lime-200 rounded-xl">Importar</button>
                        <p class="px-10 text-sm italic text-slate-700">Espera-se ficheiro formato xls ou xlsx com colunas com o cabeçalho "nome, data, localidade, tipo, e ativo"</p>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>



