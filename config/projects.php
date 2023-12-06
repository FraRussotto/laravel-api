<?php

return [
    [
        "name" => "html-css-boolando",
        "date" => "2023-10-10",
        "description" => "Ci ispiriamo al sito di Zalando per riprodurre il layout nello screenshot.<br>Per ogni prodotto sono fornite 2 immagini: la prima sarà visualizzata all’apertura della pagina, la seconda sarà visualizzata al posto della prima, quando il cursore del mouse va in hover sulla card. Sono presenti anche un header in posizione fixed e un footer. <br>Regole da usare Tutte le regole che abbiamo visto fino ad oggi. Servirà qualche posizionamento particolare? Ai posteri l’ardua sentenza! <br><br>Consigli: Analizzate prima il layout solo con i commenti, poi passate ai blocchi colorati. Solo se i blocchi colorati funzionano passiamo al particolare... <br>Bonus 1 - All’hover sul cuoricino, questo diventa rosso 2 - ridimensionando la finestra le card si rimpiccioliscono fino a quando non wrappano <br>Buon lavoro!",
        "link" => "https://github.com/FraRussotto/html-css-boolando.git",
        "isComplete" => true,
    ],
    [
        "name" => "js-campominato-grid",
        "date" => "2023-09-27",
        "description" => "L’utente clicca su un bottone che genererà una griglia di gioco quadrata. Ogni cella ha un numero progressivo, da 1 a 100. Ci saranno quindi 10 caselle per ognuna delle 10 righe. Quando l’utente clicca su ogni cella, la cella cliccata si colora di azzurro ed emetto un messaggio in console con il numero della cella cliccata.<br>
        Bonus:<br>
        Aggiungere una select accanto al bottone di generazione, che fornisca una scelta tra tre diversi livelli di difficoltà:<br>
            con difficoltà 1 => 100 caselle, con un numero compreso tra 1 e 100, divise in 10 caselle per 10 righe;<br>
            con difficoltà 2 => 81 caselle, con un numero compreso tra 1 e 81, divise in 9 caselle per 9 righe;<br>
            con difficoltà 3 => 49 caselle, con un numero compreso tra 1 e 49, divise in 7 caselle per 7 righe; Consigli del giorno: Scriviamo prima cosa vogliamo fare passo passo in italiano, dividiamo il lavoro in micro problemi.<br>
        Ad esempio: Di cosa ho bisogno per generare i numeri? Proviamo sempre prima con dei console.log() per capire se stiamo ricevendo i dati giusti. Le validazioni e i controlli possiamo farli anche in un secondo momento.<br>

        Buon divertimento!",
        "link" => "https://github.com/FraRussotto/js-campominato-dom.git",
        "isComplete" => true,
    ],
    [
        "name" => "vue-boolzapp",
        "date" => "2023-10-06",
        "description" => "Milestone 1<br>
        Replica della grafica con la possibilità di avere messaggi scritti dall’utente (verdi) e dall’interlocutore (bianco) assegnando due classi CSS diverse Visualizzazione dinamica della lista contatti: tramite la direttiva v-for, visualizzare nome e immagine di ogni contatto<br>
        Milestone 2<br>
        Visualizzazione dinamica dei messaggi: tramite la direttiva v-for, visualizzare tutti i messaggi relativi al contatto attivo all’interno del pannello della conversazione Click sul contatto mostra la conversazione del contatto cliccato<br>
        Milestone 3<br>
        Aggiunta di un messaggio: l’utente scrive un testo nella parte bassa e digitando “enter” il testo viene aggiunto al thread sopra, come messaggio verde Risposta dall’interlocutore: ad ogni inserimento di un messaggio, l’utente riceverà un “ok” come risposta, che apparirà dopo 1 secondo.<br>
        Milestone 4<br>
        Ricerca utenti: scrivendo qualcosa nell’input a sinistra, vengono visualizzati solo i contatti il cui nome contiene le lettere inserite (es, Marco, Matteo Martina -> Scrivo “mar” rimangono solo Marco e Martina)",
        "link" => "https://github.com/FraRussotto/vue-boolzapp.git",
        "isComplete" => true,
    ],
    [
        "name" => "laravel-boolando",
        "date" => "2023-11-17",
        "description" => "Create un nuovo progetto Laravel. Concentratevi sul layout: create un file di layout in cui inserire la struttura comune di tutte le pagine del sito web (tag head, tag body, ...) eventualmente includendo header e footer tramite due partials.<br>
        Create poi una rotta per visualizzare la lista di tutti i prodotti recuperati da un file inserito nella cartella config e abbellite il tutto sfruttando SASS.<br>
        Bonus:<br>
        Create più pagine istituzionali che condividono lo stesso layout (ad es. about, oppure la pagina di dettaglio di un prodotto)<br>
        Buon lavoro!",
        "link" => "https://github.com/FraRussotto/laravel-boolando.git",
        "isComplete" => true,
    ],
    [
        "name" => "laravel-dc-comics",
        "date" => "2023-11-23",
        "description" => "Oggi create un nuovo progetto Laravel 9 per gestire un archivio di fumetti.<br>
        **********************Milestone 1**********************<br>
        Creare Migration e Seeder prendendo i dati dal file allegato<br>
        Creare una pagina Home “generica”<br>
        Tramite gli appositi comandi artisan create un model con relativa migration e un resource controller.<br>
        **********************Milestone 2**********************<br>
        Iniziate a definire le prime operazioni CRUD con le relative view:<br>
        - index()<br>
        - show()<br>
        - create()<br>
        Bonus: Inviare il form del create a store() salvando i dati nel db e reindirizzando alla show<br>
        NB: Tenete in considerazione che se oggi non riuscite a completare lo store andrà implementato in ogni caso domani<br>
        Buona CRUD!",
        "link" => "https://github.com/FraRussotto/laravel-dc-comics.git",
        "isComplete" => true,
    ],
];
