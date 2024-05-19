<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            
            <div class="home-container">
                <div class="quest-buttons">
                    <a href="<?php echo get_permalink(get_page_by_path("quest")) ?>">DAG</a>
                </div>

                <div class="quest-buttons">
                    <a href="<?php echo get_permalink(get_page_by_path("quest")) ?>">AFTEN</a>
                </div>
            </div>

            <h1 class="information-title">Information</h1>
            <div class="information-section">

                <div class="information-section-item">
                    <div class="information-section-item-icon">
                        <svg class="homepage-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="126" height="106" viewBox="0 0 126 106">
                        <defs>
                            <clipPath id="clip-path">
                            <rect id="Rectangle_74" data-name="Rectangle 74" width="126" height="106" transform="translate(397 2250)" fill="#fff" stroke="#707070" stroke-width="1"/>
                            </clipPath>
                        </defs>
                        <g id="Mask_Group_13" data-name="Mask Group 13" transform="translate(-397 -2250)" clip-path="url(#clip-path)">
                            <path id="information-variant" d="M88.993,26.368a10.138,10.138,0,0,0-9.888,9.888,9.888,9.888,0,0,0,19.776,0,10.138,10.138,0,0,0-9.888-9.888M86.357,58.011c-7.911,0-29.005,17.8-29.005,17.8-1.318.659-.659.659,0,2.637,1.318,1.978.659,1.978,1.978,1.318s3.3-1.978,7.251-4.614c13.843-9.229,1.978,11.866-3.955,46.8-2.637,17.139,13.184,8.57,17.139,5.933S94.267,118,95.586,117.34s0-1.978-.659-3.3-1.318,0-1.318,0c-3.955,2.637-11.866,8.57-13.184,5.274-1.318-3.955,6.592-29.664,11.207-47.463.659-3.955,2.637-13.184-5.274-12.525V58.011Z" transform="translate(382.264 2223.632)" fill="#172737"/>
                        </g>
                        </svg>

                    </div>
                    <p class="information-section-item-title">Praktisk information</p>
                </div>

                <div class="information-section-item">
                    <div class="information-section-item-icon">
                        <svg class="homepage-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="126" height="114" viewBox="0 0 126 114">
                        <defs>
                            <clipPath id="clip-path">
                            <rect id="Rectangle_75" data-name="Rectangle 75" width="126" height="114" transform="translate(897 2250)" fill="#fff" stroke="#707070" stroke-width="1"/>
                            </clipPath>
                        </defs>
                        <g id="Mask_Group_14" data-name="Mask Group 14" transform="translate(-897 -2250)" clip-path="url(#clip-path)">
                            <path id="sun-angle-outline" d="M84.128,31.7c-4.877-1.219-9.754-1.219-14.631-1.219l19.508-16.46L97.54,38.406A55.237,55.237,0,0,0,84.128,31.7M42.674,43.283a40.272,40.272,0,0,1,12.193-8.535L29.872,29.872l4.267,24.995c2.439-4.267,4.877-8.535,8.535-11.583M31.7,84.128c-1.219-4.877-1.219-9.754-1.219-14.631L14.021,89.005,38.406,97.54A34.766,34.766,0,0,1,31.7,84.128m102.417,31.7v12.193H18.289l32.92-33.529a31.3,31.3,0,0,1,0-43.283,30.547,30.547,0,0,1,42.674,0L112.171,32.92l8.535,8.535L46.941,115.829h87.176M59.743,85.957l25.6-26.214a18.808,18.808,0,0,0-25.6,0A19.593,19.593,0,0,0,59.743,85.957Z" transform="translate(885.931 2235.979)" fill="#172737"/>
                        </g>
                        </svg>

                    </div>
                    <p class="information-section-item-title">Dag og aften Quests</p>
                </div>

                <div class="information-section-item">
                    <div class="information-section-item-icon">
                        <svg class="homepage-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="126" height="114" viewBox="0 0 126 114">
                        <defs>
                            <clipPath id="clip-path">
                            <rect id="Rectangle_76" data-name="Rectangle 76" width="126" height="114" transform="translate(1398 2250)" fill="#fff" stroke="#707070" stroke-width="1"/>
                            </clipPath>
                        </defs>
                        <g id="Mask_Group_15" data-name="Mask Group 15" transform="translate(-1398 -2250)" clip-path="url(#clip-path)">
                            <path id="book-open-blank-variant-outline" d="M68.727,123.136c-8.018-5.155-21.764-8.591-31.5-8.591a63.985,63.985,0,0,0-27.491,5.727H8.591a3.068,3.068,0,0,1-2.864-2.864V34.364c3.436-2.291,6.873-4.582,11.455-5.727a77.024,77.024,0,0,1,20.045-2.864c10.882,0,23.482,2.291,31.5,8.591,8.018-6.3,20.618-8.591,31.5-8.591s13.745,1.145,20.045,2.864c4.582,1.145,8.018,3.436,11.455,5.727v83.618a3.068,3.068,0,0,1-2.864,2.864h-1.145c-8.018-4.582-17.755-5.727-27.491-5.727s-23.482,3.436-31.5,8.591M63,42.955c-8.018-3.436-18.327-5.727-25.773-5.727a73.636,73.636,0,0,0-20.045,2.864v65.864c6.3-2.291,13.173-2.864,20.045-2.864S54.982,105.382,63,108.818V42.955m11.455,65.864c8.018-3.436,18.327-5.727,25.773-5.727s13.745.573,20.045,2.864V40.091a77.024,77.024,0,0,0-20.045-2.864c-6.873,0-17.755,2.291-25.773,5.727Z" transform="translate(1392.272 2232.259)" fill="#172737"/>
                        </g>
                        </svg>

                    </div>
                    <p class="information-section-item-title">Hvad er historien om Fantasy Quest</p>
                </div>

                <div class="information-section-item">
                    <div class="information-section-item-icon">
                        <svg class="homepage-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="126" height="114" viewBox="0 0 126 114">
                        <defs>
                            <clipPath id="clip-path">
                            <rect id="Rectangle_77" data-name="Rectangle 77" width="126" height="114" transform="translate(397 2665)" fill="#fff" stroke="#707070" stroke-width="1"/>
                            </clipPath>
                        </defs>
                        <g id="Mask_Group_16" data-name="Mask Group 16" transform="translate(-397 -2665)" clip-path="url(#clip-path)">
                            <path id="ticket-percent-outline" d="M93.24,50.4l7.56,7.56L57.96,100.8,50.4,93.24,93.24,50.4M25.2,25.2H126a12.637,12.637,0,0,1,12.6,12.6V63a12.6,12.6,0,1,0,0,25.2v25.2A12.637,12.637,0,0,1,126,126H25.2a12.637,12.637,0,0,1-12.6-12.6V88.2a12.6,12.6,0,0,0,0-25.2V37.8A12.637,12.637,0,0,1,25.2,25.2m0,12.6V53.55a25.594,25.594,0,0,1,0,44.1V113.4H126V97.65A25.41,25.41,0,0,1,113.4,75.6c0-9.45,5.04-17.01,12.6-22.05V37.8H25.2M59.85,50.4a9.45,9.45,0,1,1-9.45,9.45,9.689,9.689,0,0,1,9.45-9.45m31.5,31.5a9.45,9.45,0,1,1-9.45,9.45A9.689,9.689,0,0,1,91.35,81.9Z" transform="translate(384.4 2646.4)" fill="#172737"/>
                        </g>
                        </svg>
                    </div>
                    <p class="information-section-item-title">Køb biletter</p>
                </div>

                <div class="information-section-item">
                    <div class="information-section-item-icon">
                        <svg class="homepage-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="126" height="114" viewBox="0 0 126 114">
                        <defs>
                            <clipPath id="clip-path">
                            <rect id="Rectangle_78" data-name="Rectangle 78" width="126" height="114" transform="translate(897 2665)" fill="#fff" stroke="#707070" stroke-width="1"/>
                            </clipPath>
                        </defs>
                        <g id="Mask_Group_17" data-name="Mask Group 17" transform="translate(-897 -2665)" clip-path="url(#clip-path)">
                            <path id="card-account-mail-outline" d="M115.5,15.75H10.5A10.531,10.531,0,0,0,0,26.25v73.5a10.531,10.531,0,0,0,10.5,10.5h105A10.531,10.531,0,0,0,126,99.75V26.25a10.531,10.531,0,0,0-10.5-10.5m0,84H10.5V26.25h105v73.5M110.25,31.5H73.5V57.75h36.75V31.5M105,42,91.875,51.45,78.75,42V36.75L91.875,46.2,105,36.75V42M47.25,63A15.469,15.469,0,0,0,63,47.25,15.469,15.469,0,0,0,47.25,31.5,15.469,15.469,0,0,0,31.5,47.25,15.469,15.469,0,0,0,47.25,63m0-21a4.96,4.96,0,0,1,5.25,5.25,4.96,4.96,0,0,1-5.25,5.25A4.96,4.96,0,0,1,42,47.25,4.96,4.96,0,0,1,47.25,42m31.5,45.15c0-13.125-21-18.9-31.5-18.9s-31.5,5.775-31.5,18.9V94.5h63V87.15M28.875,84c3.675-2.625,11.55-5.25,18.375-5.25S61.95,81.375,65.625,84Z" transform="translate(897 2659)" fill="#172737"/>
                        </g>
                        </svg>
                    </div>
                    <p class="information-section-item-title">Kontakt os</p>
                </div>

                <div class="information-section-item">
                    <div class="information-section-item-icon">
                        <svg class="homepage-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="126" height="114" viewBox="0 0 126 114">
                        <defs>
                            <clipPath id="clip-path">
                            <rect id="Rectangle_79" data-name="Rectangle 79" width="126" height="114" transform="translate(1397 2665)" fill="#fff" stroke="#707070" stroke-width="1"/>
                            </clipPath>
                        </defs>
                        <g id="Mask_Group_18" data-name="Mask Group 18" transform="translate(-1397 -2665)" clip-path="url(#clip-path)">
                            <path id="calendar-text-outline" d="M108.3,17.1h-5.7V5.7H91.2V17.1H45.6V5.7H34.2V17.1H28.5A11.434,11.434,0,0,0,17.1,28.5v79.8a11.434,11.434,0,0,0,11.4,11.4h79.8a11.434,11.434,0,0,0,11.4-11.4V28.5a11.434,11.434,0,0,0-11.4-11.4m0,91.2H28.5v-57h79.8v57M28.5,39.9V28.5h79.8V39.9H28.5M39.9,62.7h57V74.1h-57V62.7m0,22.8H79.8V96.9H39.9Z" transform="translate(1391.6 2659.3)" fill="#172737"/>
                        </g>
                        </svg>
                    </div>
                    <p class="information-section-item-title">Download programoversigt</p>
                </div>

            </div>

        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>