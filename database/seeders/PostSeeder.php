<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // seeder
        $data = [
            [
                "title" => "KernelMe: costruire il mio Developer Hub personale",
                "subtitle" => "Perché avevo bisogno di un posto davvero mio",
                "tags" => "Laravel, Personal Projects, Portfolio",
                "excerpt" => "KernelMe è la mia risposta al caos di profili sparsi, side project a metà e piattaforme social che non raccontano davvero chi sono come sviluppatore.",
                "content" => <<<HTML
<p>
    KernelMe è nato da una frustrazione semplice: il mio lavoro, i miei esperimenti e le mie idee
    erano sparsi ovunque. Una repo su GitHub qui, uno screenshot là, un CV su qualche job board
    e un profilo LinkedIn che non riusciva mai a raccontare davvero quello che faccio.
</p>

<p>
    Volevo un posto unico che funzionasse come il mio developer hub: codice, articoli, musica,
    foto, piccoli strumenti che costruisco per me stesso e tutto ciò che rappresenta davvero
    il mio percorso, invece dell'ennesima pagina “Chi sono”.
</p>

<p>
    Tecnicamente, KernelMe è costruito con <strong>Laravel</strong>, perché volevo un framework
    che mi desse struttura senza uccidere la voglia di sperimentare. Sotto il cofano ci sono:
</p>

<ul>
    <li>Un motore di blog semplice ma flessibile per post come questo</li>
    <li>Sezioni personalizzate per progetti, esperimenti e idee in lavorazione</li>
    <li>Punti di integrazione con servizi esterni come Last.fm e altre API</li>
    <li>Spazio per crescere in dashboard, mini-app e tool interni</li>
</ul>

<p>
    Più della stack tecnica, quello che conta per me è il <em>mindset</em> dietro KernelMe:
</p>

<ul>
    <li>Smettere di aspettare il portfolio “perfetto” e mettere online qualcosa che può evolvere</li>
    <li>Usare progetti reali per imparare, non solo tutorial e corsi</li>
    <li>Raccontare la storia dietro al codice, non solo mostrare lo screenshot finale</li>
</ul>

<p>
    Questo sito non vuole essere un biglietto da visita statico. È più simile a un logbook:
    un posto dove tengo traccia di quello che costruisco, di quello che imparo e di come cambio
    come sviluppatore nel tempo.
</p>

<p>
    Con il tempo KernelMe raccoglierà più articoli, più progetti e probabilmente anche qualche
    esperimento che si rompe e poi viene refactorato. È proprio questo il punto: invece di
    nascondere il processo, lo metto in chiaro e lo lascio parlare da solo.
</p>
HTML,
                "featured_image" => "posts/kernelme-developer-hub.png",
            ],
            [
                "title" => "Dai side project ai prodotti veri",
                "subtitle" => "Cosa ho imparato mettendo online i miei strumenti",
                "tags" => "Side Projects, Product Mindset, Full Stack Development",
                "excerpt" => "I side project mi hanno insegnato più di qualsiasi tutorial, ma solo quando ho iniziato a trattarli come piccoli prodotti sono diventati davvero utili per crescere come sviluppatore.",
                "content" => <<<HTML
<p>
    Come tanti sviluppatori, ho iniziato decine di side project che non sono mai andati oltre
    il “primo weekend di entusiasmo”. Nuova repo, nuova idea, qualche commit, poi la vita
    quotidiana arriva e il progetto muore in silenzio in una cartella dimenticata.
</p>

<p>
    Il punto di svolta per me è stato decidere di trattare i side project meno come giocattoli
    e più come <strong>piccoli prodotti</strong>. Non nel senso di “devo monetizzarli per forza”,
    ma nel senso di:
</p>

<ul>
    <li>Chiedermi chi li userebbe davvero (anche se l'utente sono solo io)</li>
    <li>Progettare un set minimo ma coerente di funzionalità</li>
    <li>Rifinire gli spigoli quel tanto che basta per renderli usabili</li>
    <li>Metterli da qualche parte in pubblico, non solo nel mio locale</li>
</ul>

<p>
    KernelMe è un esempio di questo cambio di prospettiva. È nato come “l'ennesima idea di portfolio”,
    ma è diventato un posto concreto dove:
</p>

<ul>
    <li>Pubblico articoli come questo</li>
    <li>Mostro i progetti senza impazzire sul design</li>
    <li>Sperimento con Laravel, JavaScript e CSS in un ambiente reale</li>
</ul>

<p>
    La differenza tra un side project e un “prodotto” non è la dimensione o la complessità
    della stack, è l'impegno a <em>finire qualcosa</em> e lasciarlo esistere nel mondo.
    Questo significa prendere decisioni scomode:
</p>

<ul>
    <li>Tagliare funzionalità che rallentano tutto</li>
    <li>Accettare una prima versione imperfetta</li>
    <li>Spedire comunque, anche se lo vedranno in dieci</li>
</ul>

<p>
    Spingendomi a pubblicare, ho scoperto che il valore non è solo nel risultato finale,
    ma nel processo:
</p>

<ul>
    <li>Imparo a stimare meglio quanto tempo richiedono davvero le cose</li>
    <li>Miglioro la mia capacità di fare debug sotto pressione</li>
    <li>Capisco con più chiarezza cosa mi piace davvero costruire</li>
</ul>

<p>
    Se sei bloccato nello stesso loop di side project incompiuti, una regola semplice
    che mi ha aiutato è: definisci una “versione 1” piccola, noiosa e concreta
    e pubblica esattamente quella. Tutto il resto può essere un'iterazione futura,
    non una condizione per il lancio.
</p>

<p>
    KernelMe è il posto dove raccolgo tutte queste versioni spedite,
    così posso vedere i progressi invece di fissarmi solo su quello che manca.
</p>
HTML,
                "featured_image" => "posts/side-projects-to-products.png",
            ],
            [
                "title" => "Come imparo nuove tecnologie senza bruciarmi",
                "subtitle" => "Un approccio realistico a Laravel, JavaScript e CSS",
                "tags" => "Learning, Laravel, Javascript, CSS, Tailwind CSS",
                "excerpt" => "Invece di inseguire ogni nuovo framework, sto puntando su una stack più piccola e usando progetti reali come KernelMe per trasformare la teoria in qualcosa che gira davvero in browser.",
                "content" => <<<HTML
<p>
    Il mondo tech si muove in fretta, e sentirsi indietro è facilissimo.
    Nuovi framework, nuovi tool, nuove librerie “da imparare per forza” compaiono ogni settimana
    e, se non stai attento, finisci per sapere un po' di tutto e non padroneggiare niente.
</p>

<p>
    A un certo punto ho deciso di restringere il campo. La mia stack principale oggi è questa:
</p>

<ul>
    <li><strong>Laravel</strong> per il backend e la struttura dell'applicazione</li>
    <li><strong>JavaScript</strong> con pattern moderni e framework quando servono davvero</li>
    <li><strong>CSS, SCSS e Tailwind CSS</strong> per lo stile, a seconda del tipo di progetto</li>
</ul>

<p>
    La regola che cerco di seguire è semplice: ogni cosa nuova che imparo deve essere collegata
    a un progetto <em>reale</em>. KernelMe è uno di questi progetti. Quando voglio provare
    un nuovo pattern, un componente o un layout, lo implemento qui invece di creare
    l'ennesima demo usa e getta.
</p>

<p>
    Il mio processo di apprendimento di solito assomiglia a questo:
</p>

<ol>
    <li>Scegliere un concetto alla volta (per esempio: relazioni Eloquent, un pattern JS, o un layout con Tailwind)</li>
    <li>Leggere o guardare il minimo indispensabile per capirne le basi</li>
    <li>Applicarlo subito a una funzionalità o sezione di un progetto reale</li>
    <li>Fare refactor una o due volte dopo averlo visto in azione</li>
</ol>

<p>
    Questo approccio mi aiuta a evitare la “tutorial hell” e il continuo salto di contesto.
    Invece di consumare contenuti all'infinito, lascio che siano i problemi dei miei progetti
    a decidere cosa devo imparare dopo.
</p>

<p>
    Un altro pezzo importante è accettare che non posso sapere tutto, ed è normale così.
    Non ho bisogno di essere esperto di ogni framework; mi serve una stack su cui
    posso contare per:
</p>

<ul>
    <li>Costruire cose end-to-end da solo</li>
    <li>Collaborare con altri sviluppatori senza sentirmi perso</li>
    <li>Continuare a migliorare senza bruciarmi dietro alle mode del momento</li>
</ul>

<p>
    KernelMe è il posto in cui tutto questo diventa visibile. Se scorri i post e i progetti
    nel tempo, probabilmente vedrai l'evoluzione: codice più pulito, struttura migliore,
    uso più intenzionale degli strumenti.
</p>

<p>
    Imparare non finisce mai, ma il modo in cui impariamo può prosciugarci
    oppure spingerci in avanti. Io sto cercando di scegliere la seconda opzione.
</p>
HTML,
                "featured_image" => "posts/learning-tech-stack.png",
            ],
            [
                "title" => "Fare il lavoro di un intero team non è una medaglia",
                "subtitle" => "Cosa ho imparato costruendo e mantenendo da solo un gestionale per clinical trials",
                "tags" => "Career, Team Dynamics, Backend, Clinical Trials",
                "excerpt" => "Per un periodo ho fatto il lavoro di un intero team su un gestionale per clinical trials. Sembrava una medaglia al valore, in realtà è stata una lezione brutalmente onesta su responsabilità, limiti e crescita come sviluppatore.",
                "content" => <<<HTML
<p>
    Per un periodo della mia vita lavorativa mi sono ritrovato a fare il lavoro di un intero team.
    Un gestionale per clinical trials sulle spalle, da solo: analisi, sviluppo, bugfix, supporto,
    spiegazioni agli utenti, workaround, release, patch dell'ultimo minuto.
</p>

<p>
    All'inizio sembra quasi una medaglia al valore: <em>“Se lo fanno fare a me da solo, vuol dire che si fidano”</em>.
    In realtà, col tempo, ho capito che è un equilibrio pericoloso: ti allena tantissimo,
    ma se nessuno protegge i tuoi confini, ti brucia.
</p>

<h2>Cosa significa essere “il sistema”</h2>

<p>
    Quando sei l'unica persona su un progetto critico, non sei uno sviluppatore:
    sei praticamente <strong>il sistema</strong>.
</p>

<ul>
    <li>Se qualcosa si rompe, ti cercano.</li>
    <li>Se c'è una nuova esigenza, la scrivono pensando direttamente a te.</li>
    <li>Se un flusso non è chiaro, ti invitano alla call per “spiegare come funziona”.</li>
</ul>

<p>
    Tecnicamente impari un sacco:
</p>

<ul>
    <li>Capire l'architettura end-to-end</li>
    <li>Gestire dati delicati e processi regolati</li>
    <li>Scrivere codice pensando a utenti reali, non solo a casi da tutorial</li>
</ul>

<p>
    Ma impari anche una cosa meno romantica: se sei l'unico punto di contatto, sei anche
    il collo di bottiglia e il parafulmine ufficiale.
</p>

<h2>I compromessi tecnici (e mentali)</h2>

<p>
    Quando devi tenere insieme <em>tutto</em>, non sempre puoi fare la scelta “tecnicamente perfetta”.
    A volte devi scegliere la soluzione che:
</p>

<ul>
    <li>Funziona entro domani</li>
    <li>È abbastanza sicura da non esplodere in produzione</li>
    <li>Non richiede riscrivere mezzo sistema da zero</li>
</ul>

<p>
    Questo crea una tensione continua fra quello che <em>vorresti</em> scrivere e quello che
    <em>puoi</em> permetterti di scrivere nel contesto reale dell'azienda.
</p>

<p>
    Non è un fallimento: è la differenza tra un progetto accademico e un prodotto che la gente usa
    ogni giorno. Però, se questa tensione rimane tutta sulle spalle di una persona sola, prima o poi
    inizia a pesare.
</p>

<h2>Visibilità, riconoscimento e realtà</h2>

<p>
    Uno degli aspetti più strani è il gap fra il tuo contributo reale e la percezione che
    l'azienda ha di te.
</p>

<ul>
    <li>Tu sai quante cose hai tenuto insieme con soluzioni creative e notti lunghe.</li>
    <li>Chi usa il gestionale si rende conto che “funziona”, e si aspetta che continui così.</li>
    <li>Chi decide dall'alto spesso vede solo una voce “software” nel bilancio.</li>
</ul>

<p>
    Fare il lavoro di un team non significa automaticamente avere il peso, lo stipendio o
    il rispetto di un team. E questa è una delle lezioni più dure da digerire.
</p>

<h2>Quello che mi porto dietro davvero</h2>

<p>
    Nonostante tutto, rifarei quell'esperienza? Sì, ma non alle stesse condizioni
    e non con gli stessi confini inesistenti.
</p>

<p>
    Da quella fase mi porto dietro alcune cose concrete:
</p>

<ul>
    <li>La capacità di vedere un sistema come un <strong>insieme</strong>, non come una somma di ticket</li>
    <li>La consapevolezza dei miei limiti: cosa posso reggere e cosa no</li>
    <li>La voglia di lavorare in team dove il carico non è scaricato su una persona sola “perché tanto ce la fa”</li>
</ul>

<p>
    Mi porto dietro anche un filtro in più: quando sento discorsi del tipo
    “tanto lo fa lui”, mi si accende subito un campanello. L'eroe solitario nel lungo periodo
    è un rischio, non un modello.
</p>

<h2>Non è una medaglia, è un segnale</h2>

<p>
    Fare il lavoro di un intero team per un po' può farti crescere tantissimo,
    tecnicamente e caratterialmente.
    Ma se diventa la normalità, non è una medaglia al valore: è un segnale che qualcosa
    nell'organizzazione non funziona.
</p>

<p>
    KernelMe, per me, è anche questo: uno spazio dove rimettere in ordine le cose che ho imparato,
    raccontare il dietro le quinte e ricordarmi che il prossimo passo della mia carriera
    deve avere una parola chiave chiara: <strong>equilibrio</strong>.
</p>
HTML,
                "featured_image" => "posts/one-man-team-clinical-trials.png",
            ],

        ];



        for ($i = 0; $i <= 3; $i++) {
            $randomNumber = rand(5, 15);
            // create
            Post::create([
                "title" => $data[$i]["title"],
                "subtitle" => $data[$i]["subtitle"],
                "slug" => Str::slug($data[$i]["title"]),
                "content" => $data[$i]["content"],
                "excerpt" => $data[$i]["excerpt"],
                // "content" => fake()->paragraph(10, true),
                // "excerpt" => fake()->paragraph(3, true),
                "date" => Carbon::now(),
                "tags" => $data[$i]["tags"],
                "read_time" => "{$randomNumber} min",
                "featured_image" => $data[$i]["featured_image"],
            ]);
        }
    }
}
