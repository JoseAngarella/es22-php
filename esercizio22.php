<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Creare 3 array associativi con la funzione array() dove ogni array ha i seguenti campi:
- titolo: una stringa che contiene il titolo del video
- idVideo: una stringa che contiene l'id finale del video di youtube. Si tratta del codice che si trova 
dopo ?v= ad esempio https://www.youtube.com/watch?v=ABC123 > ABC123
Utilizzare dei dati reali.
A questo punto, creare un array $listaVideo che avrà come elementi i 3 array associativi creati in precedenza.

Creare una funzione inserisciVideoYoutube() che prende come parametri un elemento dell'array $listaVideo 
(che sarà un array associativo), una larghezza in percentuale $larPerc ed un'altezza in pixel $altPx.
Questa funzione inserisce nel documento il titolo del video all'interno di un <h2> e poi il video di youtube tramite
     <iframe>
Attraverso la proprietà css inline style, l'iframe deve avere una larghezza in percentuale pari a $larPerc e 
un'altezza in pixel pari a $altPx

Testare il corretto funzionamento della funzione usando questa riga di codice:
inserisciVideoYoutube($listaVideo[0], 50, 250);        // Inserisce il primo elemento con larghezza 50% e altezza 250px

A questo punto, tramite un for, utilizzare la funzione creata in precedenza per inserire nel documento i 3 video di
 youtube, con le seguenti regole:
- il primo video deve avere una larghezza del 50% e un'altezza di 250px
- il secondo video deve avere una larghezza di +25 rispetto al precedente (quindi sarà 75%) e un'altezza di +125 
rispetto al precedente (quindi sarà 375px)
- il terzo video deve avere una larghezza di +25 rispetto al precedente (quindi sarà 100%) e un'altezza di +125 
rispetto al precedente (quindi sarà 500px)

Vedere come si inserisce un video di Youtube tramite iframe su:
https://www.w3schools.com/html/html_youtube.asp

NOTA: Eliminare gli attributi width e height dell'<iframe> poichè saranno gestiti tramite css inline con le apposite 
    proprietà height e width -->

    <?php

        $video1=
        $video2=
        $video3=
        $listaVideo=array();
    ?>
    
</body>
</html>