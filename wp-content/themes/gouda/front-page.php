<?php
get_header();
?>


<section class="hero__body-wrap">
    <div class="hero__image-wrap hero__image-wrap--white" data-aos="fade-up">
        <img class="hero__image" src="/mySite/wp-content/themes/gouda/theme-template/img/hero-1.png" alt="Clouds on blue sky">
        <div class="hero__image-gradient"></div>
    </div>
    <div class="sg__margins">
        <div class="sg__section hero__copy-wrap">
            <div class="sg__title-image-wrap" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <img class="sg__dark-content sg__title-image" src="/mySite/wp-content/themes/gouda/theme-template/img/written/about-title.png" alt="What We're About">
            </div>
            <!-- Hero About Copy -->
            <div class="sg__copy hero__copy" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <!-- wysiwyg -->
                <?php
                dynamic_sidebar('about-copy');
                ?>
            </div>
        </div>
    </div>
</section>

<section class="sg__margins">
    <div class="sg__section services__body-wrap">
        <a class="" href="#services" id="services"></a>
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="sg__title-image-wrap">
                <img class="sg__dark-content sg__title-image" src="/mySite/wp-content/themes/gouda/theme-template/img/written/services-title.png" alt="Our Services">
            </div>
            <div class="sg__subtitle-image-wrap">
                <img class="sg__dark-content sg__subtitle-image" src="/mySite/wp-content/themes/gouda/theme-template/img/written/services-subtitle.png" alt="We do other stuff too, this is just kinda like the mainstuff">
            </div>
        </div>
        <!-- Services List limit number to 14 -->

        <?php
        dynamic_sidebar('services-list');
        ?>

        <!-- <ul class="sg__copy services__list-wrap" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <li class="services__list-item">Branding & Identity</li>
                        <li class="services__list-item">Typography & Logos</li>
                        <li class="services__list-item">Content & Strategy</li>
                        <li class="services__list-item">Web Development</li>
                        <li class="services__list-item">Product Design</li>
                        <li class="services__list-item">Stage Design</li>
                        <li class="services__list-item">Large-scale Events</li>
                        <li class="services__list-item">Virtual Events</li>
                        <li class="services__list-item">Photography Direction</li>
                        <li class="services__list-item">Social Branding</li>
                        <li class="services__list-item">Email Design</li>
                        <li class="services__list-item">Digital Advertising</li>
                    </ul> -->
        <!-- Services Link -->
    </div>

    <div class="sg__section work__body-wrap">
        <a class="" href="#work" id="work"></a>
        <div class="sg__title-image-wrap work__title-image-wrap" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <img class="sg__dark-content sg__title-image" src="/mySite/wp-content/themes/gouda/theme-template/img/written/work-title.png" alt="Our Services">
        </div>
        <div class="sg__subtitle-image-wrap" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <img class="sg__dark-content sg__subtitle-image" src="/mySite/wp-content/themes/gouda/theme-template/img/written/work-subtitle.png" alt="We do other stuff too, this is just kinda like the main stuff">
        </div>
        <!-- List of Work -->
        <?php
        dynamic_sidebar('work-list');
        ?>
        <!-- <div class="work__list-wrap">
                        <a class="work__list-item glightbox" href="img/work-hi-res/hi-res-1.png" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                            <img class="work__list-item-image" src="img/work/work-1.png" alt="Biden-Harris logo on blue background">
                        </a>
                        <a class="work__list-item glightbox" href="img/work-hi-res/hi-res-2.png" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                            <img class="work__list-item-image" src="img/work/work-2.png" alt="Joe Biden in front of text that says “Scranton vs. Park Ave” on a blue background">
                        </a>
                        <a class="work__list-item glightbox" href="img/work-hi-res/hi-res-3.png" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                            <img class="work__list-item-image" src="img/work/work-3.png" alt="Kamala Harris sitting on a stool in front of the Biden-Harris campaign bus">
                        </a>
                        <a class="work__list-item glightbox" href="img/work-hi-res/hi-res-4.png" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                            <img class="work__list-item-image" src="img/work/work-4.png" alt="“Build Back Better” wordmark on blue background. A stamp that says “Made in America” is in the lower right corner. ">
                        </a>
                        <a class="work__list-item glightbox" href="img/work-hi-res/hi-res-5.png" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                            <img class="work__list-item-image" src="img/work/work-5.png" alt="Handwritten “Keep the faith” on a gradient background">
                        </a>
                        <a class="work__list-item glightbox" href="img/work-hi-res/hi-res-6.png" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                            <img class="work__list-item-image" src="img/work/work-6.png" alt="Joe Biden on stage at a COVID-19 briefing during the general election.Text that says “We have a chance to live up to the words that founded this nation” on a gradient background">
                        </a>
                        <a class="work__list-item glightbox" href="img/work-hi-res/hi-res-7.png" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                            <img class="work__list-item-image" src="img/work/work-7.png" alt="Text that says “We have a chance to live up to the words that founded this nation” on a gradient background">
                        </a>
                        <a class="work__list-item glightbox" href="img/work-hi-res/hi-res-8.png" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                            <img class="work__list-item-image" src="img/work/work-8.png" alt="A quote graphic from Dr. Biden saying “Cancer steals our joy but we must never give up hope” with a pink ribbon on top.">
                        </a>
                        <a class="work__list-item glightbox" href="img/work-hi-res/hi-res-9.png" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                            <img class="work__list-item-image" src="img/work/work-9.png" alt="Joe Biden in front of text that says “Scranton vs. Park Ave” with the American flag behind him.">
                        </a>
                        <a class="work__list-item glightbox" href="img/work-hi-res/hi-res-10.png" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                            <img class="work__list-item-image" src="img/work/work-10.png" alt="Text that says “The divisions of our time can give way to the dreams of a brighter, better future.” on a gradient background.">
                        </a>
                    </div> -->
        <div class="work__copy-wrap" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <!-- wysiwyg -->
            <div class="work__copy">
                <p>BIDEN-HARRIS 2020 PRESIDENTIAL CAMPAIGN</p>

                <p>SENIOR CREATIVE ADVISOR: ROBYN KANNER<br>DEPUTY DESIGN DIRECTOR: CARAHNA MAGWOOD<br>DECIMAL & MERCURY TYPEFACES: JONATHAN HOEFLER</p>

                <p>BIDEN-HARRIS DESIGNERS: Abbey Pitzer, Aja Nuzzi, Allison Press, Anisa Chugthai, Ashley Siebels, Chelsea Alexander, Christian Richard, Colleen Murphy, Damaris Bravo, Eric Ziminsky, Jazmine Johnson, Jess Lucia, Jessica Monroy, Julian Williams, Karena Meyer, Kyle Eaton, Maggie Bignell, Ojwanna Wilson, Rebecca Nathanson, Ryan Eaton, Tashi Scott, Teagan Aguirre.</p>

                <p>*WORLD STAGE T-SHIRT: JOE PEREZ STUDIOS / SENIOR CREATIVE ADVISOR TO JOE BIDEN: ROBYN KANNER / DEPUTY DESIGN DIRECTOR TO JOE BIDEN: CARAHNA MAGWOOD / CREATIVE DIRECTION + DESIGN: JOE PEREZ / DESIGN: ADI NACHUM</p>
            </div>
        </div>
    </div>

    <div class="sg__section bios__body-wrap">
        <a class="" href="#bios" id="bios"></a>
        <div class="sg__title-image-wrap" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <img class="sg__dark-content sg__title-image" src="/mySite/wp-content/themes/gouda/theme-template/img/written/us-title.png" alt="Who We Are">
        </div>
        <div class="sg__subtitle-image-wrap" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <img class="sg__dark-content sg__subtitle-image" src="/mySite/wp-content/themes/gouda/theme-template/img/written/us-subtitle.png" alt="Hover over the images to learn more about us">
        </div>
        <!-- <ul class="bios__list-wrap"> -->
        <!-- Bio List -->
        <?php
        dynamic_sidebar('bio-list');
        ?>


        <!-- </ul> -->
    </div>

    <div class="sg__section connect__body-wrap" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <a class="" href="#connect" id="connect"></a>
        <div class="sg__title-image-wrap connect__title-image-wrap">
            <img class="sg__dark-content sg__title-image" src="/mySite/wp-content/themes/gouda/theme-template/img/written/contact-title.png" alt="Our Services">
        </div>
        <form class="connect__form-wrap" id="fs-frm" name="survey-form" accept-charset="utf-8" action="https://formspree.io/f/mpzonvpp" method="post">
            <fieldset class="sg__copy connect__form-fieldset" id="fs-frm-inputs">
                <div class="connect__input-wrap">
                    <label class="connect__form-label" for="full-name">Name</label>
                    <input class="connect__form-input" type="text" name="name" id="full-name" placeholder="" required>
                </div>
                <div class="connect__input-wrap">
                    <label class="connect__form-label" for="email-address">Email</label>
                    <input class="connect__form-input" type="email" name="_replyto" id="email-address" placeholder="" required>
                </div>
                <div class="connect__input-wrap">
                    <label class="connect__form-label" for="message">Notes</label>
                    <textarea class="connect__form-input connect__form-textarea" rows="5" name="message" id="message" placeholder=""></textarea>
                    <input type="hidden" name="_subject" id="email-subject" value="Survey Responses">
                </div>
                <fieldset class="connect__input-wrap" id="fs-frm-selects">
                    <label class="connect__form-label" for="why">Why</label>
                    <select class="connect__input-select" name="why" id="why" required>
                        <option value="Choose" selected="" disabled="">Choose</option>
                        <option value="hi">Wanna say hi</option>
                        <option value="work">Let's work together</option>
                        <option value="question">Have some q's</option>
                    </select>
                </fieldset>

                <div class="connect__input-wrap connect__input-wrap--cta">
                    <input class="sg__button connect__input-cta" type="submit" value="→ Submit">
                </div>
            </fieldset>
        </form>
    </div>
</section>

<?php
get_footer();
?>