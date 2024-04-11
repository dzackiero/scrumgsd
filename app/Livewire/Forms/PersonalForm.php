<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class PersonalForm extends Form
{
    #[Validate(['required', 'string'], ["name" => "Nama Lengkap"])]
    public string $name = '';

    #[Validate(['required', 'string'], ["position" => "Posisi"])]
    public string $position = '';

}
