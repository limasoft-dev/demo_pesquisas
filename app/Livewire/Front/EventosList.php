<?php

namespace App\Livewire\Front;

use App\Models\Evento;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class EventosList extends Component
{
    use WithPagination;

    public int $perPage = 10;
    public string $search = '';
    public string $tipo = 'Todos';


    public function render()
    {
        //Com o método WHEN
        $eventos = Evento::query()
            ->Where(function ($query) {
                $query->where('nome', 'like', "%".$this->search."%")
                    ->orWhere('localidade', 'like', "%".$this->search."%");
            })
            ->when($this->tipo != 'Todos', function ($query) {
                $query->where('tipo', $this->tipo);
            })
            ->paginate($this->perPage);

        // Também é possível fazer a query sem o método WHEN
        // $query = Evento::query()->Where(function ($query) {
        //     $query->where('nome', 'like', "%".$this->search."%")
        //         ->orWhere('localidade', 'like', "%".$this->search."%");
        //     });
        // if ($this->tipo != 'Todos') {
        //     $query->where('tipo', $this->tipo);
        // }
        // $eventos = $query
        //     ->paginate($this->perPage);

        return view('livewire.front.eventos-list',[
            'eventos' => $eventos,
        ]);
    }
}


