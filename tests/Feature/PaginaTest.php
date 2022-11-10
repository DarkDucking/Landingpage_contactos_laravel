<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PaginaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_pagina_contacto()
    {
        $response = $this->get('/contacto');

        $response->assertSeeText(['Nombre','Correo','Comentario']);

        $response->assertStatus(200);
    }

    /** @test */
    public function prellenado_form()
    {
        $response = $this->get('/contacto/1234');

        $response->assertStatus(200);
        $this->assertEquals('Oscar Leonardo Cárdenas Ulloa', $response['nombre']);
        $this->assertEquals('leo@test.com', $response['correo']);
    }

    /** @test */
    public function validacion_formulario()
    {
        $response = $this->post('/contacto', [
            'nombre' => 'fafafafaf',
            'correo' => 'CorreoNo@Valido.com',
            'comentario' => 'Comsaaaaa',
        ]);

        $response->assertSessionHasNoErrors(['nombre', 'correo', 'comentario',]);
    }
}
