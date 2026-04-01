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
        $data = [
            [
                "title" => "Guida pratica a sopravvivere quando sei l'unico adulto in sala",
                "subtitle" => "Tre anni, un gestionale per clinical trials, zero release. Una storia vera raccontata senza filtri, ma con molto sarcasmo.",
                "tags" => "Career, Dev Life, Burnout, Sarcasm",
                "excerpt" => "Tre anni su un progetto che non è mai andato in produzione. Non per colpa del codice, ma per colpa di chi decideva senza capire cosa stava decidendo. Questo è quello che ho imparato, con il sorriso.",
                "content" => <<<HTML
<p>
    Esiste un tipo molto specifico di azienda tech italiana.
</p>

<p>
    Ha un CTO con il titolo di CTO ma senza le competenze di un developer junior alla sua prima settimana.
    Ha manager che gestiscono con la tecnica avanzata del <em>"vediamo come va"</em>,
    tecnica che, lo anticipo, non va mai particolarmente bene.
    Ha processi scritti da qualcuno in un momento di ottimismo che non vengono seguiti da nessuno.
    E ha, nascosto da qualche parte in organico, un developer solitario che tiene tutto in piedi
    mentre gli altri organizzano riunioni su come tenere tutto in piedi.
</p>

<p>
    Per tre anni quel developer sono stato io. Questa è la storia.
</p>

<h2>Il progetto</h2>

<p>
    Gestionale per clinical trials. Dati medici. Processi regolati dalla normativa europea.
    Roba seria, insomma.
</p>

<p>
    Una persona sola, io, a progettarlo, svilupparlo, mantenerlo, supportarlo,
    spiegarlo e tenerlo in vita.
</p>

<p>
    Tre anni di lavoro. <strong>Mai andato in produzione.</strong>
</p>

<p>
    Lascio un momento di silenzio per far assorbire questa informazione.
</p>

<h2>La visione strategica</h2>

<p>
    Il motivo per cui il sistema non ha mai visto un utente reale non è tecnico.
    Il codice funzionava. L'architettura reggeva.
</p>

<p>
    Il motivo è che le decisioni venivano prese da persone che non capivano cosa stavano decidendo.
    Requisiti cambiati settimana dopo settimana. Priorità ribaltate senza preavviso.
    E a un certo punto la proposta definitiva: cambiare l'architettura intera in corsa,
    per inseguire un trial clinico importante che avrebbe dovuto essere <em>la svolta</em>.
</p>

<p>
    La decisione è stata presa senza una stima dei tempi reali. Senza capire cosa significava
    tecnicamente. Con la certezza tipica di chi non ha mai scritto una riga di codice
    che <em>"non dovrebbe essere complicato"</em>.
</p>

<p>
    Il trial non è arrivato. Meno male, perché non eravamo pronti.
    Non lo era il software, non lo era l'azienda.
</p>

<p>
    Alla riunione successiva, chi aveva proposto e approvato quella strategia ha guardato il soffitto
    con l'espressione di chi stava pensando ai fatti suoi.
    Nessuna parola. Nessuna responsabilità. <strong>Classe cristallina.</strong>
</p>

<h2>Il paradosso del developer invisibile</h2>

<p>
    Tre anni su un progetto che non è mai andato in produzione insegnano una cosa precisa:
    puoi fare tutto bene e finire comunque nel niente,
    se intorno a te nessuno sa dove sta andando.
</p>

<p>
    Non è un fallimento tecnico. È un fallimento organizzativo che ricade su chi ha lavorato davvero.
</p>

<p>
    La cosa più bizzarra? Durante quei tre anni il progetto veniva presentato all'esterno
    come una priorità assoluta. Nelle slide era sempre <em>"quasi pronto"</em>.
    Nelle riunioni interne era sempre <em>"ci manca poco"</em>.
    Nel mio computer era una cosa seria che meritava tempo, risorse e decisioni coerenti:
    tre cose che non sono mai arrivate insieme nello stesso momento.
</p>

<h2>Il finale</h2>

<p>
    Avevo già un contratto firmato quando ho rassegnato le dimissioni.
    Sono stato incoraggiato ad anticipare le ferie, presumibilmente per gestire meglio
    la narrativa interna durante la mia assenza.
</p>

<p>
    Ho accettato con piacere. Ferie pagate mentre altri gestiscono narrazioni
    sono sempre un buon compromesso.
</p>

<h2>Quello che mi porto dietro</h2>

<p>
    Tre anni non si buttano via. Ho capito come si leggono i sistemi interi, non solo i ticket.
    Ho capito che saper leggere un'organizzazione vale quanto saper scrivere codice,
    e che certi segnali vanno riconosciuti presto. Le aziende che cercano eroi solitari
    da consumare hanno sempre le stesse caratteristiche: le ho imparate sulla mia pelle,
    e adesso le riconosco al colloquio.
</p>

<blockquote>
    <p>
        Un progetto che non va mai in produzione non è un progetto.
        È una scusa per non decidere mai niente, pagata da chi lavora davvero.
    </p>
    <p>
        <strong>Sapere quando andarsene è una competenza tecnica.</strong>
    </p>
</blockquote>
HTML,
                "featured_image" => "posts/solo-dev-vs-team-di-10.webp",
            ],
        ];

        for ($i = 0; $i < 1; $i++) {
            Post::create([
                "title" => $data[$i]["title"],
                "subtitle" => $data[$i]["subtitle"],
                "slug" => Str::slug($data[$i]["title"]),
                "content" => $data[$i]["content"],
                "excerpt" => $data[$i]["excerpt"],
                "date" => Carbon::create(2025, 1, 27),
                "tags" => $data[$i]["tags"],
                "read_time" => "4 min",
                "featured_image" => $data[$i]["featured_image"],
            ]);
        }
    }
}
