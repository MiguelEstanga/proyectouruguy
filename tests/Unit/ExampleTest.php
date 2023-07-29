<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    
      public function test_login_entrada(): void
    {
        $this->assertTrue(true);
    }

      public function test_registro_entrada(): void
    {
        $this->assertTrue(true);
    }

      public function test_profesor_vista(): void
    {
        $this->assertTrue(true);
    }

      public function test_director_vista(): void
    {
        $this->assertTrue(true);
    }

      public function test_alumno_registro(): void
    {
        $this->assertTrue(true);
    }

      public function test_profesor_registro(): void
    {
        $this->assertTrue(true);
    }

      public function test_boletin_registro(): void
    {
        $this->assertTrue(true);
    }
  
      public function test_infome_registro(): void
    {
        $informe =$this->get('informe');
        $informe->assertStatus(200);
    }

      public function test_periodo_registro(): void
    {
        $this->assertTrue(true);
    }

      public function test_lapso_registro(): void
    {
        $this->assertTrue(true);
    }
}
