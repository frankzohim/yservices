<?php
namespace App\Http\Livewire;
use Livewire\Component;
use Illuminate\Support\Arr;
use App\Models\Planification;

class Calendar extends Component
{
    public $events = [];
    public function render()
    {
        $this->events = json_encode(Planification::all());
        return view('livewire.calendar');
    }

    public function eventChange($event)
    {
        $e = Planification::find($event['id']);
        $e->start = $event['start'];
        if(Arr::exists($event, 'end')) {
            $e->end = $event['end'];
        }
        $e->save();
    }

    public function eventAdd($event)
{
    Planification::create($event);
}

public function eventRemove($id)
{
    Planification::destroy($id);
}
}
