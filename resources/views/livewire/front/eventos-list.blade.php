<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class=" text-2xl bg-slate-600 ">Lista de Eventos</h1>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div>
                        <input wire:model.live='search' type="text" placeholder="Pesquisar">
                        <select wire:model.live='perPage' id="perPage">
                            <option value="10">10 Linhas</option>
                            <option value="25">25 Linhas</option>
                            <option value="50">50 Linhas</option>
                        </select>
                        <select wire:model.live='tipo' id="tipo">
                            <option value="Todos">Todos</option>
                            <option value="Lazer">Lazer</option>
                            <option value="Compete">Compete</option>
                        </select>
                        

                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Data</th>
                                <th>Localidade</th>
                                <th>Tipo</th>
                                <th>Ativo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($eventos as $evento)
                                <tr>
                                    <td>{{$evento->nome}}</td>
                                    <td>{{$evento->data}}</td>
                                    <td>{{$evento->localidade}}</td>
                                    <td>{{$evento->tipo}}</td>
                                    <td>{{$evento->ativo}}</td>
                                </tr>
                            @endforeach
                    </table>
                    {{ $eventos->links() }}

                </div>
            </div>
        </div>
    </div>
</div>

