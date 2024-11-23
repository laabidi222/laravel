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
        <h1>Top 5 Meilleures Universités Privées en Tunisie</h1>
        
    </header>

    <div class="container">
        <h2>Liste des Facultés pour le domaine informatique</h2>

        <div class="universite">
            <div class="info">
                <h3>Université UAS</h3>
                <p>L'université UAS est une faculté de référence dans le domaine des sciences et de la technologie.</p>
            </div>
           
            <img src="{{ asset('img/image1.PNG') }}" alt="Photo de l'université UAS">

        </div>

        <div class="universite">
            <div class="info">
                <h3>Université Team</h3>
                <p>L'université Team est connue pour ses programmes d'ingénierie et d'informatique de haute qualité.</p>
            </div>
            <img src="{{ asset('img/image2.PNG') }}" alt="Photo de l'université iteam">
        </div>

        <div class="universite">
            <div class="info">
                <h3>Université ESGITECH</h3>
                <p>L'université ESGITECH se spécialise dans la recherche appliquée en technologie et en science informatique.</p>
            </div>
             <img src="{{ asset('img/image3.PNG') }}" alt="Photo de l'université iteam">
        </div>
        <div class="universite">
            <div class="info">
                <h3>Université esprit</h3>
                <p>L'université privée de Tunis Esprit est parmi les meilleures universités privées en Tunisie. Licences et Masters en Gestion, informatique.</p>
            </div>
            <img src="{{ asset('img/image4.PNG') }}" alt="Photo de l'université iteam">
        </div>
        <div class="universite">
            <div class="info">
                <h3>Université UMT</h3>
                <p>L'université privée UMT de Tunis est parmi les meilleures universités privées. Diplômes d'Ingénieurs, Licences et Masters en Informatique.</p>
            </div>
            <img src="{{ asset('img/image5.PNG') }}" alt="Photo de l'université iteam">
        </div>
        <!-- Ajoutez d'autres universités si nécessaire -->
    </div>
    <footer>
        <p>&copy; 2024 Facultés de l'Université</p>
    </footer>
</body>
</html>
