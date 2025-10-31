<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz Fisioterapia + Tecnologia</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <style>
        body {
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Roboto', sans-serif;
            /* Fundo com gradiente suave */
            background: linear-gradient(135deg, #a8edea, #fed6e3);
            position: relative;
        }

        .quiz-card {
            backdrop-filter: blur(12px) saturate(180%);
            background-color: rgba(255, 255, 255, 0.2); /* Transparência leve */
            border-radius: 25px;
            padding: 50px 40px;
            max-width: 600px;
            width: 90%;
            text-align: center;
            box-shadow: 0 12px 30px rgba(0,0,0,0.25);
            animation: fadeIn 1.5s ease forwards;
        }

        h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 2.8rem;
            color: #225e50; /* Verde escuro harmonioso */
            margin-bottom: 20px;
        }

        p.lead {
            font-size: 1.2rem;
            margin-bottom: 35px;
            color: #1a1a1a; /* Cinza escuro */
        }

        .btn-quiz {
            background-color: #3b8d76; /* Verde agradável */
            color: #fff;
            font-weight: 600;
            font-size: 1.2rem;
            padding: 12px 45px;
            border-radius: 50px;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-quiz:hover {
            background-color: #2a6f58; /* Hover mais escuro */
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.25);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media(max-width: 768px){
            h1 { font-size: 2rem; }
            .btn-quiz { font-size: 1rem; padding: 10px 35px; }
        }
    </style>
</head>
<body>
    <div class="quiz-card">
        <h1>Bem-vindo ao Quiz!</h1>
        <p class="lead">Teste seus conhecimentos com <strong>15 perguntas</strong> desafiadoras.</p>
        <a href="{{ route('responder') }}" class="btn btn-quiz">Iniciar Quiz</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>









