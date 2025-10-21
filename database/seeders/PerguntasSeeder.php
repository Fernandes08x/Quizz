<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pergunta;

class PerguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Criar perguntas de exemplo
        Pergunta::create([
            'texto' => 'Qual tecnologia é frequentemente usada na fisioterapia para ajudar no controle da dor e estimulação muscular?',
            'opcao_a' => 'Impressão 3D',
            'opcao_b' => 'Realidade aumentada',
            'opcao_c' => 'Eletroestimulação funcional (FES)',
            'opcao_d' => 'Exoesqueletos',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual recurso tecnológico permite ao fisioterapeuta atender pacientes à distância, por meio de videochamadas e plataformas digitais?',
            'opcao_a' => 'Robótica assistiva',
            'opcao_b' => 'Telereabilitação',
            'opcao_c' => 'Realidade virtual',
            'opcao_d' => 'Ultrassom terapêutico',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual das seguintes tecnologias usa sensores para monitorar movimentos e fornecer feedback em tempo real durante os exercícios?',
            'opcao_a' => 'Dispositivos vestíveis (wearables)',
            'opcao_b' => 'Impressoras 3D',
            'opcao_c' => 'Laser de alta intensidade',
            'opcao_d' => 'Crioterapia',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual tecnologia imersiva está sendo usada para reabilitação motora e neurológica, especialmente em pacientes com AVC?',
            'opcao_a' => 'Ultrassom',
            'opcao_b' => 'Realidade virtual (VR)',
            'opcao_c' => 'Fototerapia',
            'opcao_d' => 'Bioimpedância',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual é a principal vantagem do uso de softwares com inteligência artificial na fisioterapia?',
            'opcao_a' => 'Substituir completamente o fisioterapeuta',
            'opcao_b' => 'Personalizar tratamentos e prever evolução do paciente',
            'opcao_c' => 'Eliminar a necessidade de exercícios físicos',
            'opcao_d' => 'Reduzir o tempo de sessão para menos de 5 minutos',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);
    }
}
