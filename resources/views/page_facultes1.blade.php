<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 5 Meilleures Universités Privées en Tunisie</title>
        <link rel="stylesheet" href="styles.css"> <!-- Lien vers le fichier CSS -->
    <style>
        body {
            
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        
        
        header {
            background-color: #df9177;
            color: white;
            padding: 1em;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        header h1 {
            font-size: 1.5em;
            margin: 0;
        }
        .btn-connexion {
            position: absolute;
            right: 20px;
            background-color: white;
            color: #df9177;
            border: 1px solid white;
            padding: 0.5em 1em;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-weight: bold;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .universite {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 10px;
            border-bottom: 1px solid #ddd;
            flex-direction: row;
        }
        .universite:last-child {
            border-bottom: none;
        }
        .universite .info {
            flex: 1;
            padding-right: 10px;
        }
        .universite .info h3 {
            margin: 0 0 5px;
            font-size: 1.2em;
            color: #df9177;
        }
        .universite img {
            width: 100px;
            height: auto;
            border-radius: 5px;
        }
       
        footer {
            text-align: center;
            padding: 10px 0;
            background: #df9177;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }

    </style>
</head>
<body>
    <header>
        <h1>Top Meilleures Universités Privées en Tunisie</h1>
        
    </header>

    <div class="container">
        <h2>Liste des Facultés pour le domaine Santé</h2>

        <div class="universite">
            <div class="info">
                <h3>Université Centrale</h3>
                <p>L'Université Centrale est un établissement de premier plan offrant une formation de qualité dans les domaines paramédicaux et de la santé. Grâce à une approche pédagogique innovante, elle prépare les étudiants à relever les défis du secteur de la santé en constante évolution.</p>
            </div>
           
            <img src="{{ asset('img/santé1.PNG') }}" alt="Photo de l'université UAS">

        </div>

        <div class="universite">
            <div class="info">
                <h3>. Faculté Privée des Sciences de la Santé de Tunis - UPSAT</h3>
                <p> (UPSAT) se distingue par son engagement envers l'excellence académique et la recherche. Elle propose un environnement d'apprentissage stimulant où les futurs professionnels de la santé sont formés selon les normes les plus élevées.</p>
            </div>
            <img src="{{ asset('img/santé2.PNG') }}" alt="Photo de l'université iteam">
        </div>

       
       
        <!-- Ajoutez d'autres universités si nécessaire -->
    </div>
    <footer>
        <p>&copy; 2024 Facultés de l'Université</p>
    </footer>
</body>
</html>
