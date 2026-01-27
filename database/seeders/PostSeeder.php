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
                "featured_image" => "posts/team-of-10-cover.webp",
            ],
        ];

        for ($i = 0; $i < 1; $i++) {
            // create
            Post::create([
                "title" => $data[$i]["title"],
                "subtitle" => $data[$i]["subtitle"],
                "slug" => Str::slug($data[$i]["title"]),
                "content" => $data[$i]["content"],
                "excerpt" => $data[$i]["excerpt"],
                "date" => Carbon::now(),
                "tags" => $data[$i]["tags"],
                "read_time" => "4 min",
                "featured_image" => $data[$i]["featured_image"],
            ]);
        }
    }
}
