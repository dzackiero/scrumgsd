<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class PersonalForm extends Form
{
    #[Validate(['required', 'string'])]
    public string $name = '';

    #[Validate(['required', 'string'])]
    public string $position = '';

}
