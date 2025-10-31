<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz Fisioterapia - Respostas</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/a2d9d6b71b.js" crossorigin="anonymous"></script>

    <style>
        body {
            height: 100vh;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('{{ asset("images/fisioterapia-background.jpg") }}') no-repeat center center fixed;
            background-size: cover;
            position: relative;
        }

        .quiz-container {
            width: 90%;
            max-width: 900px;
            padding: 30px;
            backdrop-filter: blur(12px) saturate(180%);
            background-color: rgba(255, 255, 255, 0.15);
            border-radius: 25px;
            box-shadow: 0 12px 35px rgba(0,0,0,0.25);
        }

        h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 2.5rem;
            color: #2a6f4b;
            text-align: center;
            margin-bottom: 25px;
        }

        p.lead {
            font-size: 1.2rem;
            margin-bottom: 30px;
            text-align: center;
            color: #1a1a1a;
        }

        .card {
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.25);
            border: none;
            border-radius: 20px;
            padding: 20px 25px;
            margin-bottom: 20px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-3px);
        }

        .form-check-label {
            font-size: 1rem;
            color: #333;
        }

        .btn-submit {
            background-color: #3b8d76;
            color: #fff;
            font-weight: 600;
            font-size: 1.2rem;
            padding: 12px 50px;
            border-radius: 50px;
            border: none;
            transition: all 0.3s ease;
            margin-top: 20px;
        }

        .btn-submit:hover {
            background-color: #2a6f58;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.25);
        }

        .icon-row {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 25px;
        }
        .icon-row i {
            font-size: 2rem;
            color: #6fa67d;
            transition: transform 0.3s;
        }
        .icon-row i:hover {
            transform: scale(1.3) rotate(10deg);
        }

        @media (max-width: 768px){
            h1 { font-size: 2rem; }
            .btn-submit { font-size: 1rem; padding: 10px 35px; }
        }
    </style>
</head>
<body>
    <div class="quiz-container">
        <h1>Inicio das questões</h1>
        <p class="lead">Responda as perguntas do quizz a seguir e veja seu resultado ao final!</p>

        <form method="POST" action="{{ route('quizz.responder') }}" id="quizForm">
            @csrf
            @foreach($perguntas as $pergunta)
                <div class="card">
                    <h2>{{ $pergunta->texto }}</h2>
                    <div class="p-2">
                        <div class="d-flex justify-content-start gap-2">
                            <input class="form-check-input" type="radio" name="pergunta_{{ $pergunta->id }}" id="opcaoA_{{ $pergunta->id }}" value="A">
                            <label class="form-check-label" for="opcaoA_{{ $pergunta->id }}">{{ $pergunta->opcao_a }}</label>
                        </div>
                        <div class="d-flex justify-content-start gap-2">
                            <input class="form-check-input" type="radio" name="pergunta_{{ $pergunta->id }}" id="opcaoB_{{ $pergunta->id }}" value="B">
                            <label class="form-check-label" for="opcaoB_{{ $pergunta->id }}">{{ $pergunta->opcao_b }}</label>
                        </div>
                        <div class="d-flex justify-content-start gap-2">
                            <input class="form-check-input" type="radio" name="pergunta_{{ $pergunta->id }}" id="opcaoC_{{ $pergunta->id }}" value="C">
                            <label class="form-check-label" for="opcaoC_{{ $pergunta->id }}">{{ $pergunta->opcao_c }}</label>
                        </div>
                        <div class="d-flex justify-content-start gap-2">
                            <input class="form-check-input" type="radio" name="pergunta_{{ $pergunta->id }}" id="opcaoD_{{ $pergunta->id }}" value="D">
                            <label class="form-check-label" for="opcaoD_{{ $pergunta->id }}">{{ $pergunta->opcao_d }}</label>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-submit" id="submitBtn">Enviar Respostas</button>
            </div>
        </form>

        <div class="icon-row">
            <i class="fas fa-bone"></i>
            <i class="fas fa-hand-paper"></i>
            <i class="fas fa-dumbbell"></i>
            <i class="fas fa-heart-pulse"></i>
        </div>
    </div>

    <!-- Áudio -->
    <audio id="submitSound" src="{{ asset('sounds/submit.mp3') }}"></audio>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const submitBtn = document.getElementById('submitBtn');
        const submitSound = document.getElementById('submitSound');
        const form = document.getElementById('quizForm');

        submitBtn.addEventListener('click', function(e) {
            // Tocar o som
            submitSound.play();
            // Pequeno delay para que o som toque antes do envio
            setTimeout(() => {
                form.submit();
            }, 300); // 300ms de delay
            e.preventDefault(); // Prevenir envio imediato
        });
    </script>
</body>
</html>


