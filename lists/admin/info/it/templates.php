<p>Qu&igrave; potete definire i modelli che possono essere usati per inviare i messaggi alle liste. Un template &egrave; una pagina HTML che contiene da qualche parte il <i>Segnalibro</i> <b>[CONTENT]</b>. Questo &egrave; il posto in cui inserirete il testo dell'email.</p>
<p>Oltre al [CONTENT], potete aggiungere [FOOTER] e [SIGNATURE] per inserire informazioni a pi&egrave; di pagina e la firma del messaggio, tuttavia sono dei parametri opzionali.</p>
<p>Le immagini del vostro modello saranno inserite nelle email. Se aggiungete un'immagine al contenuto dei messaggi (al momento dell'invio), dovrete inserire l'URL completo, e l'immagine non sar&agrave; inclusa nelle e-mail.</p>
<p><b>Tracciamento Utenti</b></p>
<p>Per facilitare il tracciamento degli utenti, aggiungete [USERID] al vostro modello e verr&agrave; sostituito dall'identificatore dell'utente. Questo funziona solamente quando invii i messaggi in HTML. Dovrete inoltre impostare alcuni URL che ricevano l'ID. Alternativamente potete usare il sistema di tracciamento utenti incorporato di "<?php echo NAME?>". Per fare questo aggiungete [USERTRACK] al modello ed un link invisibile sar&agrave; aggiunto alla vostra email per tenere traccia della visione delle email.</p>
<p><b>Immagini</b></p>
<p>Qualsiasi riferimento ad un immagine che non inizia con "http://", dovrete caricare l'immagine su PHPlist per poterla includere nel messaggio. &egrave; consigliato utilizzare questa procedura solo con poche immagini e di ridotte dimensioni. Se avete caricato il modello allora potrete aggiungere le immagini. I riferimenti alle immagini da includere devono essere nella stessa cartella del template, es. &lt;img&nbsp;src=&quot;immagine.jpg&quot;&nbsp;......&nbsp;&gt; e non &lt;img&nbsp;src=&quot;/da/qualche/parte/immagine.jpg&quot;&nbsp;..........&nbsp;&gt;</p>
