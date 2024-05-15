<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            
            <div class="container">
                <div class="title-box">
                    <h1>AFTEN QUEST</h1>
                </div>
                <div class="information">
                    <div class="information-text-box">
                        Er du klar til at leve dig ind i en anden verden, en magisk historie, hvor du er helten, der er på en "quest" for at overvinde de onde magter og redde hele verden? Så gør dig klar til Fantasy Quest Esbjerg.
                    </div>
                    <div class="information-text-box even">
                        Forestil dig ”Fangerne på Fortet” tilsat en masse magi, noget teater og rollespil, nogle helte og skurke og selvfølgelig kampen mellem det gode og det onde, så er du godt på vej til Fantasy Quest Esbjerg. <br>
                        Fantasy Quest Esbjerg får i 2024 både en svær aftenudgave og en familievenlig udgave i dagstimerne under Fantasyfestivalen, der er skrevet i samarbejde med YouTuberen Lakserytteren, hvor alle kan være med.
                    </div>
                    <div class="information-text-box">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis numquam veniam dolores ab dolorum hic illo tempore sit cum beatae nihil facere a obcaecati praesentium earum amet, laboriosam debitis autem.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam cumque dolorem odit aliquid animi! Alias odit numquam voluptatum voluptatibus, minima quaerat tempora, nemo iure ipsum vero fugit blanditiis. Esse, ut?
                    </div>
                    <div class="information-text-box even">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, adipisci quia eum asperiores alias, dolore perferendis reiciendis excepturi, omnis laudantium voluptate quaerat praesentium. Voluptatem blanditiis, nisi tenetur sint sapiente quam?
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio doloribus quas ad, tempora nulla commodi provident quo nesciunt eos expedita, temporibus laboriosam dolorum ex quisquam voluptatem iure sequi quaerat. Ipsa!
                    </div>
                    <div class="information-text-box">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo nisi ab eius, quidem corporis ipsum quia, eligendi nulla corrupti numquam, itaque veniam facere nemo fugiat cupiditate dolor aliquid in iure.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo dolores amet autem deserunt illo, perferendis ut harum fugit exercitationem cum? Temporibus saepe, eum omnis nesciunt quia libero delectus doloremque vitae?
                    </div>
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>