<?php

namespace JfBiswajit\TranslaFlex\Livewire\Translations;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Spatie\TranslationLoader\LanguageLine;

class CreateTranslationComponent extends Component
{
    use LivewireAlert;

    public $group;

    public $key;

    public $en;

    public $bn;

    public function render()
    {
        return view('translaflex::livewire.create-translation-component');
    }

    public function handleSubmission()
    {
        LanguageLine::updateOrCreate([
            'group' => $this->group,
            'key' => $this->key,
        ], [
            'group' => $this->group,
            'key' => $this->key,
            'text' => ['en' => $this->en, 'bn' => $this->bn],
        ]);

        $this->alert('success', 'Success!', [
            'position' => 'center'
        ]);

        $this->reset();
    }
}
