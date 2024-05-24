<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

            <div class="temporal-blue-header-background">
                
            </div>
            
            <!-- <div class="night-background">
                <img src="<?php echo get_template_directory_uri(); ?>/img/nat-baggrund.png" alt="" class="night-background-image">
            </div> -->
            
            <div class="container">
                <div class="title-box">
                    <p>En dag trak skyerne sig sammen over havet mod vest, og det blev unaturligt mørkt. Lyn flængede himlen, og en stor, bevinget skabning blev synlig. De fire statuer rejste sig op; havets vogtere var blevet vækket. De gjorde sig klar og råbte. Råbene kunne høres over hele landet, på tværs af portaler til andre verdener:</p>
                </div>
                <div class="information">
                    <div class="information-text-box uneven">
                        “Der er brug for helte i Esbjerg!” råbte de. “Det er tid til, at heltene samles. Det er tid til, at ondskaben skal bekæmpes. Det er tid til, at portalerne lukkes. Det er tid til Fantasy Quest Esbjerg - er du klar?”                    
                    </div>
                    <div class="information-text-box even">
                        Når mørket falder på, vil du stå over for udfordringer, der tester dit mod, din snilde og din evne til at arbejde sammen. Vores quest tager dig gennem Esbjergs gader, hvor du vil møde skabninger fra andre verdener, løse gåder og kæmpe mod de kræfter, der truer med at opsluge vores verden.
                    </div>
                    <div class="information-text-box uneven">
                        Er du klar til at leve dig ind i en anden verden, en magisk historie, hvor du er helten, der er på en “quest” for at overvinde de onde magter og redde hele verden? <br>
                        Så gør dig klar til Fantasy Quest Esbjerg. 
                    </div>
                    <div class="information-text-box even">
                        Forestil dig ”Fangerne på Fortet” tilsat en masse magi, noget teater og rollespil, nogle helte og skurke og selvfølgelig kampen mellem det gode og det onde, så er du godt på vej til Fantasy Quest Esbjerg.
                    </div>
                    <div class="information-text-box uneven">
                        Fantasy Quest Esbjerg er et oplevelsesløb, som du kan deltage i under Fantasyfestivalen i Esbjerg den 14. september 2024. Løbet indeholder en quest med opgaver, der skal løses undervejs på ruten. Questen tager udgangspunkt i en unik fantasyfortælling skrevet i samarbejde med Lakserytteren.
                    </div>
                    <div class="information-text-box even">
                        Løbet af opdelt i to - Family Quest & Fantasy Quest. Når tusmørket begynder at sænke sig over Esbjerg, skrues sværhedsgraden i questen op. Nu skal der virkelig tænkes kreativt og løses opgaver, der kræver både mod, samarbejde og snilde for at I kan gennemføre questen og redde Esbjerg. 
                        Du kan deltage i AftenQuesten både alene og sammen med vennerne.
                    </div>
                    <div class="information-text-box uneven">
                        Så tag dine venner med og vær forberedt på en nat fyldt med gys, eventyr og heltemod. Fantasy Quest Esbjerg venter på dig!
                    </div>
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>