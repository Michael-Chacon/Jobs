<?php

namespace App\Http\Livewire;

use App\Models\Vacante;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostularVacante extends Component
{
    public $cv;
    public $vacante;

    use WithFileUploads;

    protected $rules = [
        'cv' => 'required|mimes:pdf',
    ];

    public function mount(Vacante $vacante)
    {
        $this->vatante = $vacante;
    }

    public function postularme()
    {
        $datos = $this->validate();

        // Almacenar el CV
        $cv = $this->cv->store('public/cv');
        $nombre_cv = str_replace('public/cv/', '', $cv);
        
        $this->vacante->candidatos()->create([
            'user_id' => auth()->user()->id,    
            'cv' => $nombre_cv,
        ]);
        session()->flash('mensaje', 'Hoja de vida registrada correctamente');
        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
