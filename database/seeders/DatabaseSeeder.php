<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Produto::create([  
            'nome' => 'Smartphone Galaxy S24',
            'descricao' => 'High-end smartphone with advanced features',
            'valor' => 9999.99,
            'disponivel' => true,
        ]);

        Produto::create([
            'nome' => 'Notebook Dell XPS 15',
            'descricao' => 'Powerful laptop for professionals',
            'valor' => 12999.99,
            'disponivel' => true,
        ]);

        Produto::create([
            'nome' => 'Câmera DSLR Canon EOS R6',
            'descricao' => 'Professional DSLR camera with full-frame sensor',
            'valor' => 15999.99,
            'disponivel' => true,
        ]);

        Produto::create([
            'nome' => 'Smartwatch Apple Watch Series 9',
            'descricao' => 'Stylish smartwatch with advanced health features',
            'valor' => 4999.99,
            'disponivel' => true,
        ]);

        Produto::create([
            'nome' => 'Fone de Ouvido Sony WH-1000XM5',
            'descricao' => 'Noise-canceling headphones with premium sound quality',
            'valor' => 3999.99,
            'disponivel' => true,
        ]);
    }
}
