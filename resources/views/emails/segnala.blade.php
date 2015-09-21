<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="utf-8">
</head>
<body>
  <h2>Nuova segnalazione</h2>
  
  <ul>
    <li><strong>Titolo</strong>: {{ $titolo }}</li>
    <li><strong>Descrizione</strong>:<br /><em>{{ $descrizione }}</em></li>
    <li><strong>Citt&agrave;</strong>: {{ $citta }}</li>
    <li><strong>Foto</strong>: <img src="{{ $filename }}" alt="{{ $titolo }}" /></li>
  </ul>
</body>
</html>