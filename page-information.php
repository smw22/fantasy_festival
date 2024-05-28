<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <?php
                $venues_image = get_field("venues-image");
                $venues_welcome_text = get_field("venues-welcome-text");
                $venues_first_title = get_field("venues-first-title");
                $venues_second_title = get_field("venues-second-title");
                $venues_third_title = get_field("venues-third-title");
                $venues_fourth_title = get_field("venues-fourth-title");
                $venues_fifth_title = get_field("venues-fifth-title");
                $venues_sixth_title = get_field("venues-sixth-title");
                $venues_seventh_title = get_field("venues-seventh-title");
                $venues_eight_title = get_field("venues-eight-title");
                $venues_first_description = get_field("venues-first-description");
                $venues_second_description = get_field("venues-second-description");
                $venues_third_description = get_field("venues-third-description");
                $venues_fourth_description = get_field("venues-fourth-description");
                $venues_fifth_description = get_field("venues-fifth-description");
                $venues_sixth_description = get_field("venues-sixth-description");
                $venues_seventh_description = get_field("venues-seventh-description");
                $venues_eight_description = get_field("venues-eight-description");

                $day_quest_first_description = get_field("day-quest-first-description");
                $day_quest_second_description = get_field("day-quest-second-description");
                $night_quest_first_description = get_field("night-quest-first-description");
                $night_quest_second_description = get_field("night-quest-second-description");
                $day_quest_place = get_field("day-quest-place");
                $day_quest_date = get_field("day-quest-date");
                $day_quest_time = get_field("day-quest-time");
                $day_quest_level = get_field("day-quest-level");
                $night_quest_place = get_field("night-quest-place");
                $night_quest_date = get_field("night-quest-date");
                $night_quest_time = get_field("night-quest-time");
                $night_quest_level = get_field("night-quest-level");
                $day_quest_image = get_field("day-quest-image");
                $night_quest_image = get_field("night-quest-image");
                
            ?>

            <div class="background-image-pratical-information">
                <img src="<?php echo get_template_directory_uri(); ?>/img/bog-cover-cutted.jpg" alt="" class="book-cover-image">
            </div>

            <div class="practical-info-title-box">
                <h1 class="practical-info-title">PRAKTISK INFO</h1>
            </div>

            <div class="practical-info-first-section">

                <div class="first-section-image-box">
                    <img src="<?php echo $venues_image["url"] ?>" alt="" class="first-section-image">
                </div>

                <div class="first-section-text-box">
                    <div class="first-section-title">
                        <h1>VENUES</h1>
                    </div>
                    <div class="first-section-text">
                        <p>
                            <?php echo $venues_welcome_text; ?>
                        </p>
                        <p>
                            <strong><?php echo $venues_first_title; ?></strong><br>
                                <?php echo $venues_first_description; ?>
                            </p>
                        <p>
                            <strong><?php echo $venues_second_title; ?></strong><br>
                                <?php echo $venues_second_description; ?>
                            </p>
                        <p>
                            <strong><?php echo $venues_third_title; ?></strong><br>
                            <?php echo $venues_third_description; ?> <br>
                                - Håndlavede smykker og amuletter <br>
                                - Magiske bøger og pergamenter <br>
                                - Kostumer og eventyrrekvisitter <br>
                                - Souvenirs <br>
                        </p>
                        <p>
                            <strong><?php echo $venues_fourth_title; ?></strong><br>
                            <?php echo $venues_fourth_description; ?>
                        </p>
                        <p>
                            <strong><?php echo $venues_fifth_title; ?></strong><br>
                            <?php echo $venues_fifth_description; ?>
                        </p>
                        <p>
                            <strong><?php echo $venues_sixth_title; ?></strong><br>
                            <?php echo $venues_sixth_description; ?>

                        </p>
                        <p>
                            <strong><?php echo $venues_seventh_title; ?></strong><br>
                            <?php echo $venues_seventh_description; ?>

                        </p>
                        <p>
                            <strong><?php echo $venues_eight_title; ?></strong><br>
                            <?php echo $venues_eight_description; ?>

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
                        <p>
                            Vi ser frem til at byde dig velkommen til Fantasy Quest Festival i Esbjerg! For at gøre din rejse så let som muligt, har vi her samlet information om parkeringsmuligheder og offentlig transport i byen.
                        </p>
                        <p>
                            <strong>Parkeringsmuligheder</strong><br>
                            Esbjerg byder på flere parkeringsmuligheder, der gør det nemt at finde en plads tæt på festivalområdet.
                        </p>

                        <div class="second-section-text-row">
                            <p class="second-section-text-description">
                                <strong>Q-Park Torvet</strong><br>
                                Beliggenhed: Ved Torvet, centralt i Esbjerg. <br>
                                Parkeringspladser: 250. <br>
                                Åbningstider: Døgnåben. <br>
                                Betaling: Automat eller via app.
                            </p>
                            <p class="second-section-text-description">
                                <strong>Skt. Josephs Plads</strong><br>
                                Beliggenhed: Nær Esbjerg Station og gågaden. <br>
                                Parkeringspladser: 150. <br>
                                Åbningstider: Døgnåben. <br>
                                Betaling: Automat eller via app.
                            </p>
                            <p class="second-section-text-description">
                                <strong>Broen Shopping P-hus</strong> <br>
                                Beliggenhed: Tilknyttet Broen Shoppingcenter, tæt på festivalområdet. <br>
                                Parkeringspladser: 500. <br>
                                Åbningstider: Døgnåben. <br>
                                Betaling: Automat eller via app. <br>
                            </p>
                            <p class="second-section-text-description">
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
                            <p class="second-section-text-description">
                                <strong>Tog</strong><br>
                                Esbjerg Station: Beliggende centralt i byen, kun få minutters gang fra festivalområdet. <br>
                                Forbindelser: Direkte tog fra København, Odense, og Aarhus.
                            </p>
                            <p class="second-section-text-description">
                                <strong>Bus</strong><br>
                                Esbjerg Busterminal: Lige ved siden af Esbjerg Station. <br>
                                Lokale busruter: Flere lokale busruter kører regelmæssigt og stopper tæt på festivalområdet. <br>
                                Regionale busser: Forbindelser til nærliggende byer som Ribe, Varde og Bramming.
                            </p>
                            <p class="second-section-text-description">
                                <strong>Taxi og Ridesharing</strong> <br>
                                Taxi: Taxaer er let tilgængelige i hele byen og kan nemt bestilles via telefon eller app. <br>
                                Ridesharing: Tjenester som Uber og Bolt er tilgængelige i Esbjerg og kan bruges til nem transport til og fra festivalen.
                            </p>
                            <p class="second-section-text-description">
                                <strong>Priser</strong> <br>
                                Når du parkerer skal du registrere dig og din bil i en automat eller en app. De første to (eller fire) timer vil stadig være gratis. Herefter koster hver time 12 kroner – og det er helt uden at du behøver at gå tilbage til din bil eller automaten. <br>

                                Betalingstiderne strækker sig fra mandag-fredag 8-18 samt lørdag 8-14. På helligdage og uden for disse tidsrum, er det gratis at parkere helt uden at registrere. 
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

                        <div class="third-section-text-row">
                            <div class="third-section-subtitle">
                                <h2>Betalingsmuligheder</h2>
                            </div>
                            <p>
                                <strong>Der kan betales med hhv.</strong><br>
                                Mobilepay, kort og kontanter.
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
                        <?php echo $day_quest_first_description; ?>
                    </p>
                    <div class="fourth-section-description">
                        <p>
                            <?php echo $day_quest_second_description; ?>
                        </p>
                        <div class="fourth-section-description-list">
                            <p><strong>Hvor:</strong> <?php echo $day_quest_place; ?> <br></p>

                            <p><strong>Hvornår:</strong> <?php echo $day_quest_date; ?>  <br></p>

                            <p><strong>Tidspunkt:</strong> <?php echo $day_quest_time; ?>  <br></p>

                            <p><strong>Niveau:</strong> <?php echo $day_quest_level; ?>  <br></p>
                        </div>
                    </div>
                    <div class="fourth-section-image-box">  
                        <img src="<?php echo $day_quest_image["url"] ?>" alt="" class="fourth-section-image">
                    </div>
                </div>

                <div class="fourth-section-column">
                    <div class="fourth-section-title">
                    <h1>Aften Quest</h1>
                    </div>
                    <p class="fourth-section-undertitle">
                        <?php echo $night_quest_first_description; ?>
                    </p>
                    <div class="fourth-section-description">
                        <p>
                        <?php echo $night_quest_second_description; ?>
                        </p>
                        <div class="fourth-section-description-list">
                            <p><strong>Hvor:</strong> <?php echo $night_quest_place; ?>  <br></p>

                            <p><strong>Hvornår:</strong> <?php echo $night_quest_date; ?>  <br></p>

                            <p><strong>Tidspunkt:</strong> <?php echo $night_quest_time; ?> <br></p>

                            <p><strong>Niveau:</strong> <?php echo $night_quest_level; ?> <br></p>
                        </div>
                    </div>
                    <div class="fourth-section-image-box">  
                        <img src="<?php echo $night_quest_image["url"] ?>" alt="" class="fourth-section-image">
                    </div>
                </div>
            </div>
            

        <?php endwhile; ?>
    <?php endif; ?>
<?php 
if(is_page(14)) {
   get_footer('frontpage');
} else {
   get_footer();
}
?>    