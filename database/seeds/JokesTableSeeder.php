<?php

use Illuminate\Database\Seeder;

use App\Joke;

class JokesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jokes = ['Chipuoc diedux', '- Mano kompas nepabunda iš sleepo. -Mano močiutei tas pats buvo', '- Nesusitikom ant Parodos kalno, nes tau buvo gėda išsitraukt telefoną?', '- Aš geriau už tave knygą parašyčiau. - Su šituo savo telefonu?', '- SU TAVIM KALBĖDAMA JAUČIUOSI LABAI PROTINGA', '- Mano mašina bent jau nuplauta. - Kas geriau, išblizgintas šūdas ar šiek tiek išteptas auksas?', '- Tau nereikia išverst mūsų pokalbio į anglų kalbą? - Jei sugebėsi', '- Jei būtum paprastas, paklaustum koks gmailas. O ne rusų spameriam ruoštumeis rašyt.', 'NaudotosAudiDalys.lt. Po savaitės mersebiesas.lt. Karma', '- Žinai, kaip yra dvi smegenų pusės, kurios atsako už skirtingus dalykus? - Tai pas tave abi neveikia', '- Aš Dievas. Po dienos foto, kad tik dievai vairuoja BMW...'];

        foreach ($jokes as $joke) {
            Joke::create(['joke' => $joke]);
        }
    }
}
