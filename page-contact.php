<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

        <div class="temporal-blue-header-background">
                
        </div>
            
            
        <div class="contact-container">
            <div class="contact-form">
                <form action="action_page.php">

                    <label for="fname">Navn</label>
                    <input type="text" id="fname" name="firstname" placeholder="Dit navn...">

                    <label for="lname">Telefonnummer</label>
                    <input type="text" id="lname" name="lastname" placeholder="Dit telefonnummer...">

                    <label for="subject">Skriv din besked!</label>
                    <textarea id="subject" name="subject" placeholder="Skriv noget..." style="height:200px"></textarea>

                    <input type="submit" value="Indsend">

                </form>
            </div>

            <div class="contact-text-box">
                <h1 class="contact-text-title">Vi hører gerne fra jer</h1>
                <p>
                    Har du spørgsmål, kommentarer eller ønsker om magiske eventyr? Udfyld formularen nedenfor, og lad os høre fra dig! Vores eventyrere står klar til at hjælpe dig. Må din besked finde vej gennem tid og rum, og vi svarer hurtigst muligt.
                </p>
                <p>
                    Lad magien begynde!
                </p>
            </div>
        </div>

        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>    