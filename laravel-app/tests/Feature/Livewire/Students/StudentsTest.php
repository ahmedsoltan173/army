<?php

namespace Tests\Feature\Livewire\Students;

use App\Livewire\Students\Students;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class StudentsTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Students::class)
            ->assertStatus(200);
    }
}
