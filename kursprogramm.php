<?php
/*
Template Name: Kursprogramm
*/
?>

<?php get_header(); ?>

    <main>
        <div id="my-stage" class="infografik my-stage my-outline-01">
            <div class="my-layer layer-01">

                <div class="shape my-generic-shape my-circle my-outline-01 my-colour-01" style="width:12vw;height:12vw;margin-top: 15vw;margin-left:6vw;z-index: 10">
                    <nav>
                    <?php wp_nav_menu( array( 'theme_location' => 'uebung-menu' ) ); ?>
                        </nav>
                    <!--
                    <ul class="my-label" style="width: 6em;margin: 2vw 0 0 3vw;">
                        <li>Übung</li>
                        <li>Raster</li>
                        <li>Form</li>
                        <li>Logo</li>
                    </ul>
                    -->
                </div>

                <div class="shape my-generic-shape my-circle my-outline-01 my-colour-01" style="width:12vw;height:12vw;margin-top: 15vw;margin-left:27vw;z-index: 11">
                    <ul class="my-label" style="width: 6em;margin: 2vw 0 0 3vw;">
                        <li>Basics</li>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>WordPress</li>
                    </ul>
                </div>

                <div class="shape my-generic-shape my-circle my-outline-01 my-colour-01" style="margin-top:10.5vw;margin-left:18vw;z-index: 2">
                    <ul class="my-label" style="width: 6em;margin: 6.5vw 0 0 1.5vw;">
                        <li>Phase 1</li>
                        <li>Analyse</li>
                        <li>Recherche</li>
                        <li>Moodboard</li>
                        <li>Basics</li>
                    </ul>
                </div>

                <div class="shape my-generic-shape my-circle my-outline-01 my-colour-01" style="margin-top:10.5vw;margin-left:39vw;z-index: 2">
                    <ul class="my-label" style="width: 6em;margin: 6.5vw 0 0 6vw;">
                        <li>Phase 2</li>
                        <li>Planung</li>
                        <li>Experiment</li>
                        <li>Design</li>
                        <li>Prototyp</li>
                    </ul>
                </div>

                <div class="shape my-generic-shape my-circle my-outline-01 my-colour-01" style="width:29vw;height:29vw;margin-top:6.5vw;margin-left:60vw;z-index: 2">
                    <ul class="my-label" style="width: 6em;margin: 10.5vw 0 0 6vw;">
                        <li>Phase 3</li>
                        <li>Implementierung</li>
                        <li>Details</li>
                        <li>Fine Tuning</li>
                        <li>Produktion</li>
                    </ul>
                </div>
            </div>

            <div class="my-layer layer-00" style="z-index: 1">
                <div class="shape my-week" style="margin-left: 6vw">
                    <div class="shape my-day my-colour-01 my-outline-02">Mo</div>
                    <div class="shape my-day my-colour-01 my-outline-02" style="margin-left: 20%">Di</div>
                    <div class="shape my-day my-colour-01 my-outline-02" style="margin-left: 40%">Mi</div>
                    <div class="shape my-day my-colour-01 my-outline-02" style="margin-left: 60%">Do</div>
                    <div class="shape my-day my-colour-01 my-outline-02" style="margin-left: 80%">Fr</div>
                </div>
                <div class="shape my-week" style="margin-left: 27vw">
                    <div class="shape my-day my-colour-01 my-outline-02">Mo</div>
                    <div class="shape my-day my-colour-01 my-outline-02" style="margin-left: 20%">Di</div>
                    <div class="shape my-day my-colour-01 my-outline-02" style="margin-left: 40%">Mi</div>
                    <div class="shape my-day my-colour-01 my-outline-02" style="margin-left: 60%">Do</div>
                    <div class="shape my-day my-colour-01 my-outline-02" style="margin-left: 80%">Fr</div>
                </div>
                <div class="shape my-week" style="margin-left: 48vw">
                    <div class="shape my-day my-colour-01 my-outline-02">Mo</div>
                    <div class="shape my-day my-colour-01 my-outline-02" style="margin-left: 20%">Di</div>
                    <div class="shape my-day my-colour-01 my-outline-02" style="margin-left: 40%">Mi</div>
                    <div class="shape my-day my-colour-01 my-outline-02" style="margin-left: 60%">Do</div>
                    <div class="shape my-day my-colour-01 my-outline-02" style="margin-left: 80%">Fr</div>
                </div>
                <div class="shape my-week" style="margin-left: 69vw">
                    <div class="shape my-day my-colour-01 my-outline-02">Mo</div>
                    <div class="shape my-day my-colour-01 my-outline-02" style="margin-left: 20%">Di</div>
                    <div class="shape my-day my-colour-01 my-outline-02" style="margin-left: 40%">Mi</div>
                    <div class="shape my-day my-colour-01 my-outline-02" style="margin-left: 60%">Do</div>
                    <div class="shape my-day my-colour-01 my-outline-02" style="margin-left: 80%">Fr</div>
                </div>
            </div>
        </div>
        <!--.my-stage-->

    </main>


<?php get_footer(); ?>
