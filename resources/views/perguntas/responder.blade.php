<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Quizz</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>

        <div class="container mt-5">
            <div class="row">
                <div class="col text-center">
                    <h1>Inicio das questões</h1>

                    <p>
                        Responda as perguntas do quizz a seguir e verifique o
                        resultado ao final!
                    </p>

                    @foreach($perguntas as $pergunta)
                        <div class="card mb-4">
                            <h2>{{ $pergunta->texto }}</h2>

                            <div class="p-2">
                                <div class="d-flex justify-content-start gap-2">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="pergunta_{{ $pergunta->id }}"
                                        id="opcao1_{{ $pergunta->id }}"
                                        value="A"
                                    >

                                    <label
                                        class="form-check-label"
                                        for="opcao1_{{ $pergunta->id }}"
                                    >
                                        {{ $pergunta->opcao_a }}
                                    </label>
                                </div>

                                <div class="d-flex justify-content-start gap-2">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="pergunta_{{ $pergunta->id }}"
                                        id="opcao1_{{ $pergunta->id }}"
                                        value="B"
                                    >

                                    <label
                                        class="form-check-label"
                                        for="opcao1_{{ $pergunta->id }}"
                                    >
                                        {{ $pergunta->opcao_b }}
                                    </label>
                                </div>

                                <div class="d-flex justify-content-start gap-2">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="pergunta_{{ $pergunta->id }}"
                                        id="opcao1_{{ $pergunta->id }}"
                                        value="C"
                                    >

                                    <label
                                        class="form-check-label"
                                        for="opcao1_{{ $pergunta->id }}"
                                    >
                                        {{ $pergunta->opcao_c }}
                                    </label>
                                </div>

                                <div class="d-flex justify-content-start gap-2">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="pergunta_{{ $pergunta->id }}"
                                        id="opcao1_{{ $pergunta->id }}"
                                        value="D"
                                    >

                                    <label
                                        class="form-check-label"
                                        for="opcao1_{{ $pergunta->id }}"
                                    >
                                        {{ $pergunta->opcao_d }}
                                    </label>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary btn-lg">
                            Enviar Respostas
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>

