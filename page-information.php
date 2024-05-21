<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <div class="background-image-pratical-information">
                <img src="<?php echo get_template_directory_uri(); ?>/img/bog-cover-cutted.jpg" alt="" class="book-cover-image">
            </div>

            <div class="practical-info-title-box">
                <h1 class="practical-info-title">PRAKTISK INFO</h1>
            </div>

            <div class="practical-info-first-section">

                <div class="first-section-image-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Venues.jpeg" alt="" class="first-section-image">
                </div>

                <div class="first-section-text-box">
                    <div class="first-section-title">
                        <h1>VENUES</h1>
                    </div>
                    <div class="first-section-text">
                        <p>
                            Velkommen til Fantasy Quest Festival, hvor vi bringer magi og eventyr til live! Udover spændende aktiviteter og begivenheder tilbyder vores festival en række unikke boder, hvor du kan nyde lækre retter, forfriskende cocktails og købe eventyrlige souvenirs. Udforsk de forskellige boder nedenfor og lad dig fortrylle.
                        </p>
                        <p>
                            <strong>1. Dragegrillen</strong><br>
                            Dragegrillen er stedet, hvor du kan smage lækre, grillstegte retter inspireret af festivalens drage-tema. Vores kokke bruger hemmelige krydderiblandinger for at skabe en uforglemmelig smagsoplevelse.
                        </p>
                        <p>
                            <strong>2. Alkemistens Eliksirer</strong><br>
                            Besøg Alkemistens Eliksirer for at smage magiske cocktails og drikkevarer. Hver drink er en unik blanding af ingredienser, der får dig til at føle dig som en ægte eventyrer.
                        </p>
                        <p>
                            <strong>3. Eventyrernes Handelsplads</strong><br>
                            Eventyrernes Handelsplads er fyldt med boder, der sælger alt, hvad en eventyrer måtte ønske sig. Fra håndlavede smykker til magiske artefakter, her finder du den perfekte souvenir til at mindes din tid på Fantasy Quest Festival. <br>
                                - Håndlavede smykker og amuletter <br>
                                - Magiske bøger og pergamenter <br>
                                - Kostumer og eventyrrekvisitter <br>
                                - Souvenirs <br>
                        </p>
                        <p>
                            <strong>4. Elverkøkkenet</strong><br>
                            Elverkøkkenet tilbyder en række lette og sunde retter, inspireret af elvernes egen kost. Her kan du nyde friske salater, smagfulde sandwiches og magiske smoothies.
                        </p>
                        <p>
                            <strong>5. Kæmpernes Kødgryder</strong><br>
                            Hos Kæmpernes Kødgryder finder du solide og mættende måltider, perfekte til at genopbygge energien efter en lang dag med eventyr. Nyd rustikke retter tilberedt med kæmpeglæde.
                        </p>
                        <p>
                            <strong>6.  Gnomens Gaver</strong><br>
                            Gnomens Gaver byder på unikke og håndlavede produkter fra dygtige kunsthåndværkere. Her kan du finde alt fra trælegetøj til kunstværker, perfekte som gaver eller souvenirs.

                        </p>
                        <p>
                            <strong>7.  Feens Søde Fristelser</strong><br>
                            Besøg Feens Søde Fristelser for at tilfredsstille din søde tand med en række lækre desserter og snacks. Fra honningkager til eventyrlige cupcakes, her er noget for enhver smag.

                        </p>
                        <p>
                            <strong>8. Troldens Taverna</strong><br>
                            Troldens Taverna tilbyder en hyggelig atmosfære, hvor du kan slappe af med et glas eventyrlig øl eller mjød. Perfekt til at hvile fødderne og dele historier med andre eventyrere. <br>
                                                    
                            Vi glæder os til at byde dig velkommen til Fantasy Quest Festival, hvor eventyret venter ved hver bod!

                        </p>
                    </div>
                </div>

            </div>

            <div class="practical-info-second-section">

                <div class="second-section-text-box">
                    <div class="second-section-title">
                        <h1>Parkering</h1>
                    </div>

                    <div class="second-section-text">
                        <p>Vi ser frem til at byde dig velkommen til Fantasy Quest Festival i Esbjerg! For at gøre din rejse så let som muligt, har vi her samlet information om parkeringsmuligheder og offentlig transport i byen.
                        </p>
                        <p>
                            <strong>Parkeringsmuligheder</strong><br>
                            Esbjerg byder på flere parkeringsmuligheder, der gør det nemt at finde en plads tæt på festivalområdet.
                        </p>

                        <div class="second-section-text-row">
                            <p>
                                <strong>Q-Park Torvet</strong><br>
                                Beliggenhed: Ved Torvet, centralt i Esbjerg. <br>
                                Parkeringspladser: 250. <br>
                                Åbningstider: Døgnåben. <br>
                                Betaling: Automat eller via app.
                            </p>
                            <p>
                                <strong>Skt. Josephs Plads</strong><br>
                                Beliggenhed: Nær Esbjerg Station og gågaden. <br>
                                Parkeringspladser: 150. <br>
                                Åbningstider: Døgnåben. <br>
                                Betaling: Automat eller via app.
                            </p>
                            <p>
                                <strong>Broen Shopping P-hus</strong> <br>
                                Beliggenhed: Tilknyttet Broen Shoppingcenter, tæt på festivalområdet. <br>
                                Parkeringspladser: 500. <br>
                                Åbningstider: Døgnåben. <br>
                                Betaling: Automat eller via app. <br>
                            </p>
                            <p>
                                <strong>Esbjerg Rådhus P-plads</strong><br>
                                Beliggenhed: Ved Esbjerg Rådhus. <br>
                                Parkeringspladser: 100. <br>
                                Åbningstider: Døgnåben. <br>
                                Betaling: Automat eller via app.
                            </p>
                        </div>

                        <p>
                            <strong>Offentlig Transport</strong><br>
                            Esbjerg er godt forbundet med offentlig transport, hvilket gør det nemt og bekvemt at nå festivalen.
                        </p>

                        <div class="second-section-text-row">
                            <p>
                                <strong>Tog</strong><br>
                                Esbjerg Station: Beliggende centralt i byen, kun få minutters gang fra festivalområdet. <br>
                                Forbindelser: Direkte tog fra København, Odense, og Aarhus.
                            </p>
                            <p>
                                <strong>Bus</strong><br>
                                Esbjerg Busterminal: Lige ved siden af Esbjerg Station. <br>
                                Lokale busruter: Flere lokale busruter kører regelmæssigt og stopper tæt på festivalområdet. <br>
                                Regionale busser: Forbindelser til nærliggende byer som Ribe, Varde og Bramming.
                            </p>
                            <p>
                                <strong>Taxi og Ridesharing</strong> <br>
                                Taxi: Taxaer er let tilgængelige i hele byen og kan nemt bestilles via telefon eller app. <br>
                                Ridesharing: Tjenester som Uber og Bolt er tilgængelige i Esbjerg og kan bruges til nem transport til og fra festivalen.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="second-section-image-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/parkering.png" alt="" class="second-section-image">
                </div>
            </div>

            <div class="practical-info-third-section">
                <div class="third-section-text-box">
                    <div class="third-section-title">
                        <h1>Priser</h1>
                    </div>
                    <div class="third-section-text">
                        <p>
                            Vi tilbyder en række gratis aktiviteter samt muligheden for at købe et aktivitetsarmbånd, der giver adgang til endnu flere spændende aktiviteter og foredrag. Læs videre for at få mere information om priser og adgang.
                        </p>

                        <div class="third-section-text-row">
                            <div class="third-section-subtitle">
                                <h2>Gratis Adgang</h2>
                            </div>
                            <p>
                                <strong>Festivalområdet:</strong><br>
                                Grundlæggende adgang til festivalområdet er gratis. Her kan du nyde den magiske atmosfære, udforske de forskellige boder og hygge dig med familie og venner.
                            </p>
                            <p>
                                <strong>Underholdning på Hovedscenen:</strong><br>
                                Flere forestillinger og optrædener på hovedscenen er åbne for alle og kræver ikke et aktivitetsarmbånd.
                            </p>
                            <p> 
                                <strong>Naturvandringer og Guidede Ture:</strong><br>
                                Nogle af vores naturvandringer og guidede ture er gratis for alle festivalgæster. Tag med og oplev eventyret i Esbjergs smukke omgivelser.
                            </p>
                        </div>

                        <div class="third-section-text-row">
                            <div class="third-section-subtitle">
                                <h2>Aktivitetsarmbånd</h2>
                            </div>
                            <p>
                                <strong>Adgang til Aktiviteter og Foredrag:</strong><br>
                                Med et aktivitetsarmbånd får du adgang til en lang række spændende aktiviteter og foredrag rundt om på festivalområdet. Dette inkluderer interaktive workshops, rollespil, magiske foredrag og meget mere.
                            </p>
                            <p>
                                <strong>Eksklusive Oplevelser:</strong><br>
                                Nogle særlige aktiviteter og foredrag kræver et aktivitetsarmbånd for at deltage. Dette giver dig mulighed for at opleve unikke og eksklusive events under festivalen.
                            </p>
                            <p> 
                                <strong>Pris og Køb:</strong><br>
                                Aktivitetsarmbåndet kan købes ved indgangen til festivalen eller online på vores hjemmeside. Prisen varierer afhængigt af festivalens varighed og det omfang af aktiviteter, du ønsker adgang til.
                            </p>
                        </div>

                        <div class="third-section-text-row">
                            <div class="third-section-subtitle">
                                <h2>Pladsreservation</h2>
                            </div>
                            <p>
                                <strong>Foretrukne Events:</strong><br>
                                For visse populære aktiviteter og foredrag kan det være nødvendigt at foretage en pladsreservation i forvejen. Dette sikrer, at du får adgang til dine foretrukne events uden at skulle vente i kø.
                            </p>
                            <p>
                                <strong>Online Booking: </strong><br>
                                Pladsreservation kan normalt foretages online via vores hjemmeside eller festivalappen. Vær opmærksom på eventuelle tidsfrister og betingelser for reservation.
                            </p>
                        </div>

                        <p>
                        Fantasy Quest Festival tilbyder en bred vifte af oplevelser for alle aldre, både gratis og mod betaling. Uanset hvordan du vælger at deltage, glæder vi os til at byde dig velkommen til en uforglemmelig rejse ind i det magiske univers!
                        </p>
                    </div>
                </div>
            </div>

            <div class="practical-info-fourth-section">

                <div class="fourth-section-column">
                    <div class="fourth-section-title">
                        <h1>Dag Quest</h1>
                    </div>
                    <p class="fourth-section-undertitle">
                        En dag trak skyerne sig sammen over havet mod vest, og der blev unaturligt mørkt. Lyn flængede himlen. Man kunne se en stor, bevinget skabning på himlen. De fire statuer rejste sig op, vogterne var blevet vækket, de gjorde sig klar og råbte. Råbene kunne høres over hele landet, på tværs af portaler til andre verdener. ”Der er brug for helte i Esbjerg!”, råbte de. Det er tid til, at heltene samles. Det er tid til, at ondskaben skal bekæmpes. Det er tid til, at portalerne lukkes. Det er tid til Fantasy Quest Esbjerg - er du klar?
                    </p>
                    <div class="fourth-section-description">
                        <p>
                            Familieudgaven af Fantasy Quest Esbjerg er et oplevelsesløb for hele familien, med tryk på oplevelse. For det er ikke et klassisk løb. Det handler om at leve sig ind i en anden verden, en magisk historie, hvor I sammen er på en ”quest” – en mission, en opgave, en jagt. Her møder I magiske væsner, der stiller jer nogle opgaver og udfordringer undervejs mod målet, som I skal løse sammen for at gennemføre Questen. Sværhedsgraden er sænket, så børnene kan være med til at løse opgaverne. Men tag ikke fejl, der er brug for alle gode kræfter og samarbejdsevner, hvis I skal være med til at redde Esbjerg. Som en ekstra bonus kan I møde YouTuberen Lakserytteren undervejs i Questen rundt i Esbjergs gader.
                        </p>
                        <p>
                            <strong>Hvor:</strong> Torvet Esbjerg <br>

                            <strong>Hvornår:</strong> 14. september 2024 <br>

                            <strong>Tidspunkt:</strong> kl. 10.00-14.30 <br>

                            <strong>Niveau:</strong> Børnevenligt <br>
                        </p>
                    </div>
                    <div class="fourth-section-image-box">  
                        <img src="<?php echo get_template_directory_uri(); ?>/img/quest-img2.jpg" alt="" class="fourth-section-image">
                    </div>
                </div>

                <!-- <div class="fourth-section-vertical-line">

                </div> -->

                <div class="fourth-section-column">
                    <div class="fourth-section-title">
                    <h1>Aften Quest</h1>
                    </div>
                    <p class="fourth-section-undertitle">
                        En dag trak skyerne sig sammen over havet mod vest, og der blev unaturligt mørkt. Lyn flængede himlen. Man kunne se en stor, bevinget skabning på himlen. De fire statuer rejste sig op, vogterne var blevet vækket, de gjorde sig klar og råbte. Råbene kunne høres over hele landet, på tværs af portaler til andre verdener. ”Der er brug for helte i Esbjerg!”, råbte de. Det er tid til, at heltene samles. Det er tid til, at ondskaben skal bekæmpes. Det er tid til, at portalerne lukkes. Det er tid til Fantasy Quest Esbjerg - er du klar?                     
                    </p>
                    <div class="fourth-section-description">
                        <p>
                            Når tusmørket begynder at sænke sig over Esbjerg, skrues sværhedsgraden i AftenQuesten op. Nu skal der virkelig tænkes kreativt og løses opgaver, der kræver både mod, samarbejde og snilde for at I kan gennemføre questen og redde Esbjerg. Er du vild med at løse gåder og knække koder, så må du ikke snyde dig selv for denne ultimative oplevelse. Vi sender dig og vennerne ud på jeres ultimative eventyr i Esbjergs gader og stræder. Her vil I blive nødt til at samarbejde og udtænke nye løsninger for at gennemføre AftenQuesten.                    </p>
                        <p>
                            <strong>Hvor:</strong> Torvet Esbjerg <br>

                            <strong>Hvornår:</strong> 14. september 2024 <br>

                            <strong>Tidspunkt:</strong> kl. 18.00-22.30 <br>

                            <strong>Niveau:</strong> 18+ år <br>
                        </p>
                    </div>
                    <div class="fourth-section-image-box">  
                        <img src="<?php echo get_template_directory_uri(); ?>/img/quest-img1.jpg" alt="" class="fourth-section-image">
                    </div>
                </div>
            </div>
            

        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>    