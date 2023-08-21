<?php
namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class LangState extends Component
{
    protected $listeners = ['setLangId' => 'updateLangId'];

    public $langId = 1; // default value

    public function updateLangId($langId)
    {
        dd(1);
        $this->langId = $langId;
    }
}