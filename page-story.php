<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

            <div class="background-image-story">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/bog.jpg" alt="" class="story-image">
            </div>
            <div class="story-title-box">
                <!-- <div class="background-image-story">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/bog.jpg" alt="" class="story-image">
                </div> -->
                <h1 class="story-title">HISTORIEN</h1>
            </div>

            <div class="story-text-box">

                <div class="story-text-box-row">
                    <h1 class="story-subtitle">I gamle dage sagde man…..</h1>
                    <p>
                        … at det onde ville komme fra havet. Gennem generationer blev den fortælling givet videre. Man hørte den, da Esbjerg blev grundlagt i 1868. Man holdt altid øje med havet. Mod vest. 
                    </p>
                    <p>
                    Så i Esbjerg byggede man et værn mod ondskaben. Noget der skulle holde øje med havet, noget der skulle træde i karakter, hvis det gik galt. I 1995 blev det værn forstærket, da skulpturerne ”Mennesket ved havet” blev skabt. Mens kunstneren byggede om dagen, arbejdede troldmanden Gygaz den Vise om natten. 
                    </p>
                    <p>
                    Gygaz åbnede en portal til kæmpernes verden. Her fandt han frem til fire gode kæmper, der meldte sig frivilligt. De sagde farvel til deres familier og travede gennem portalen mod Esbjerg. Her mødtes de med Gygaz. Luften sitrede af magi, og da de sidste ord i en magtfuld formular forlod Gygaz’ læber, var de fire kæmper blevet ét med statuerne af de fire hvide mænd. På den måde kunne de til evig tid holde øje med havet…
                    </p>
                </div>

                <div class="story-text-box-row">
                    <h1 class="story-subtitle">Årene gik, og der var fred og ro…</h1>
                    <p>
                        …Men så begyndte der at ske mystiske ting. Naturen blev syg. De gamle talte om ondskaben. Om vogterne. En dag trak skyerne sig sammen, over havet mod vest, og der blev unaturligt mørkt. Lyn flængede himlen. Man kunne se en stor, bevinget skabning på himlen. 
                    </p>
                    <p>
                        De fire statuer rejste sig op, vogterne var blevet vækket, de gjorde sig klar og råbte. Råbene kunne høres over hele landet, på tværs af portaler til andre verdener. ”Der er brug for helte i Esbjerg!”, råbte de. 
                    </p>
                    <p>
                        Det er tid til, at heltene samles. Det er tid til, at ondskaben skal bekæmpes. Det er tid til, at portalerne lukkes.
                    </p>
                    <p>
                        Det er tid til Fantasy Quest Esbjerg. Er du klar?
                    </p>
                </div>
            </div>

            <div class="characters-section">
                <div class="characters-title">
                    <h1>KARAKTERNE</h1>
                </div>
                <div class="characters">
                    <div class="characters-row">
                        <div class="character">
                            <div class="characters-image-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/png/Arkivaren.png" alt="" class="characters-image">
                            </div>
                            <div class="characters-text-box">
                                <h1 class="characters-text-title">Arkivaren</h1>
                                <p>
                                    Arkivaren er den skumle, kloge type, der kender alle historierne - selv dem, du helst vil glemme. Han svælger i de blodige detaljer og holder styr på alting, fra de dødes riger til de levendes hemmeligheder. Med en evigvisdom og et skævt smil vogter han over fortidens dystre hemmeligheder og sørger for, at intet går tabt i glemslen.
                                </p>
                            </div>
                        </div>

                        <div class="character">
                            <div class="characters-image-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/png/Gnist.png" alt="" class="characters-image">
                            </div>
                            <div class="characters-text-box">
                                <h1 class="characters-text-title">Gnist</h1>
                                <p>
                                Som en af de gode, men styggelige, spiller Gnist en central rolle i Fantasy Quest. Han besidder en skattekiste af visdom og erfaringer, som han deler med eventyrerne på deres rejse. Hans viden om magi, historie og verdenen omkring dem er uvurderlig, og hans tilstedeværelse skaber en følelse af beskyttelse og tryghed.                                
                                </p>
                            </div>
                        </div>

                        <div class="character">
                            <div class="characters-image-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/png/Malice.png" alt="" class="characters-image">
                            </div>
                            <div class="characters-text-box">
                                <h1 class="characters-text-title">Malice</h1>
                                <p>
                                    Malice er ondskabens skaber, årsagen til portalerne, der lukkede de onde væsener ind i menneskenes verden. Hun lever for kaos og ødelæggelse, smilende ved synet af fortvivlelse og frygt. Malice er et mareridt, der er blevet til virkelighed, en inkarnation af alt, der er fordærvet og destruktivt.
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="characters-row">
                        <div class="character">
                            <div class="characters-image-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/png/Havefruedronningen.png" alt="" class="characters-image">
                            </div>
                            <div class="characters-text-box">
                                <h1 class="characters-text-title">Havfruedronningen</h1>
                                <p>
                                    Havfruedronningen, skøn men grusom, vogter nøglen til en fortabt skat. For at få den skal man give hende et offer - ikke af guld, men af ens egen sjæl. Hun kræver en blodig pris, før hun åbner vejen til skattens gemmested. Hendes smil skjuler den grusomhed, der kun findes i havets dyb.
                                </p>
                            </div>
                        </div>

                        <div class="character">
                            <div class="characters-image-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/png/Gygaz.png" alt="" class="characters-image">
                            </div>
                            <div class="characters-text-box">
                                <h1 class="characters-text-title">Gygaz</h1>
                                <p>
                                    Gygaz, en ambitiøs troldmandslærling, er en uundværlig allieret for helten. Hans dybe viden om magi og eventyrlyst fører dem gennem farlige udfordringer. Med sin forståelse af mystiske artefakter og evne til at læse gamle runer hjælper Gygaz med at løse gåder og overvinde forhindringer på vejen mod målet.                                
                                </p>
                            </div>
                        </div>
                        

                        <div class="character">
                            <div class="characters-image-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/png/Vogtere.png" alt="" class="characters-image">
                            </div>
                            <div class="characters-text-box">
                                <h1 class="characters-text-title">Havets Vogtere</h1>
                                <p>
                                    I Esbjerg fortæller legenden om “Mennesket ved Havet” om fire hvide mænd, der vogter havet. Disse skulpturer repræsenterer Ild, Vand, Jord og Luft, og deres magiske beskyttelse holder mørkets kræfter på afstand. De vogter over havets skatte og deres mod og styrke lever videre i bølgernes hvisken, altid på vagt for at beskytte havets ro.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="characters-row character-portal">
                        <div class="big-character">
                            <div class="characters-image-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/png/Portal-drago.png" alt="" class="characters-image">
                            </div>
                            <div class="characters-text-box">
                                <h1 class="characters-text-title">Portalerne</h1>
                                <p>
                                    I årets Fantasy Quest Festival er portalerne ikke blot dekorationer, men centrale elementer i hele eventyret. Disse magiske portaler udgør åbningen mellem fantasiens verden og menneskenes verden, og de spiller en afgørende rolle i festivalens tema og historie.
                                <p>
                                    Portalernes oprindelse er indhyllet i mystik og legender. Ifølge gamle fortællinger blev portalernes kræfter vækket af de ældgamle magikere og elverfolket for at forbinde vores verden med de fantastiske riger af fantasi. Men med portalerne åbne kommer også fare, for monstre og onde væsener lurer i skyggerne, ivrige efter at trænge ind i vores verden og sprede kaos og ødelæggelse.                                </p>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>
<?php 
if(is_page(16)) {
   get_footer('quest');
} else {
   get_footer();
}
?>  