<?php get_header(); ?>

<div class="header--home">
    <div class="row hide-for-large logo-small-container">
        <div class="small-12 column text-center">
            <a class="clearfix" href="/"><img class="logo-small" src="<?= get_template_directory_uri() . '/images/logo-white.svg' ?>"/></a>
        </div>
    </div>

    <div class="row contents-container">
        <div class="large-8 xlarge-9 medium-offset-4 column contents">
            <h1>Transforming Education through Open</h1>
            <h2>24-26 April 2018</h2>
            <h2>Delft, Netherlands</h2>

            <a href="<?= home_url() . '/register/' ?>" class="button white hollow header--home--cta">Register</a>
        </div>
        <div class="small-12 columns header--home--notice">
             <span>
                <img src="<?= get_template_directory_uri() . '/images/down.svg' ?>"/>
                Scroll down for more info
            </span>
        </div>
        <div class="small-12 columns header--home--license hide-for-small-only">
            <span>
                <img src="<?= get_template_directory_uri() . '/images/cc-white.svg' ?>"/>

                <?php get_template_part('images/cc-white.svg'); ?> WILLEM VAN VALKENBURG
            </span>
        </div>
    </div>
</div>

<div style="background-color: #3cb3db;">
    <div class="row align-middle home--boxes">
        <div class="small-3 column u-background-orange">
            <a href="<?= home_url() . '/venue/' ?>">
                <img src="<?= get_template_directory_uri() . '/images/icon-location.svg' ?>"/>
                Venue
            </a>
        </div>
        <div class="small-3 column u-background-blue">
            <a href="#">
                <img src="<?= get_template_directory_uri() . '/images/icon-calendar.svg' ?>"/>
                Schedule
            </a>
        </div>
        <div class="small-3 column u-background-red">
            <a href="#">
                <img src="<?= get_template_directory_uri() . '/images/icon-speaker.svg' ?>"/>
                Speakers
            </a>
        </div>
        <div class="small-3 column u-background-purple">
            <a href="#">
                <img src="<?= get_template_directory_uri() . '/images/icon-award.svg' ?>"/>
                Awards
            </a>
        </div>
    </div>
</div>

<div class="row home--intro">
    <div class="small-10 small-offset-1 medium-5 large-5 medium-offset-1 column">
        <a href="<?= home_url() ?>"><img src="<?= get_template_directory_uri() . '/images/logo.svg' ?>"/></a>
    </div>
    <div class="small-10 small-offset-1 medium-5 medium-offset-0 large-5 column">
        <p class="home--intro--text">The Open Education Global Conference is where the world meets to discuss how opening education helps us achieve universal access, equity, innovation and opportunity in education. The OE Global conference is the most internationally diverse conference devoted exclusively to open education, attracting researchers, practitioners, policy makers, educators and students from more than 35 countries to discuss and explore how Open Education advances educational practices around the world.</p>
 
        <p>OE Global 2018 will take place from 24-26 April 2018 in Delft, the Netherlands, hosted by the Open Education Consortium and Delft University of Technology.  The theme of OE Global 2018 is Transforming Education through Open.</p>

        <p class="home--intro--buttons">
            <a href="<?= home_url() . '/welcome/' ?>" class="button orange hollow text-uppercase">About the Event</a>
            <a href="http://conference.oeconsortium.org/2017/" target="_blank"
               class="button orange hollow text-uppercase">View 2017 Conference</a>
        </p>
    </div>
</div>

<div class="home--awards">
    <div class="row align-center">
        <div class="small-12 text-center columns">
            <a href="<?= home_url() ?>"><img src="<?= get_template_directory_uri() . '/images/awards-header.svg' ?>"/></a>
        </div>

        <div class="small-10 medium-8 columns">
            <p>The Open Education Awards for Excellence provide annual recognition to outstanding contributions in the Open Education community. These awards recognize distinctive Open Educational Resources, Open Projects & Initiatives, as well as exemplary leaders in Open Education worldwide.</p>
        </div>
        <div class="small-12 columns"></div>
        <div class="small-10 medium-3 columns">
            <a href="http://www.oeconsortium.org/projects/open-education-awards-for-excellence/" class="button hollow white expanded" target="_blank">Learn more</a>
        </div>
        <?php /*
        <div class="small-10 medium-3 columns">
            <a href="#" class="button hollow white expanded">Submit Nomination</a>
        </div>
        */ ?>
        <div class="small-10 medium-3 columns">
            <a href="http://www.oeconsortium.org/projects/open-education-awards-for-excellence/2017-winners-of-oe-awards/" class="button hollow white expanded" target="_blank">View Past Awardees</a>
        </div>
    </div>
</div>

<?php if ( have_rows('sponsors', 'options') ) : ?>
    <div class="row home--sponsors align-center">
        <div class="small-12 columns text-center">
            <h2><?php the_field('sponsors_title', 'options'); ?></h2>
        </div>

        <?php while ( have_rows('sponsors', 'options') ) : the_row(); ?>
          <?php if( get_row_layout() === 'heading' ) : ?>
            <div class="small-12 columns text-center sponsors--heading">
              <h3><?php the_sub_field('text'); ?></h3>
            </div>
          <?php endif; ?>

          <?php if( get_row_layout() === 'sponsor' ) : ?>
            <div class="small-6 medium-3 columns">
              <?php $image = get_sub_field('logo'); ?>
              <?php if ( get_sub_field('link') ) : ?>
                <a href="<?php the_sub_field('link'); ?>">
                  <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['title']; ?>" />
                </a>
              <?php else : ?>
                <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['title']; ?>" />
              <?php endif; ?>
            </div>
          <?php endif; ?>
        <?php endwhile; ?>
        
    </div>
<?php endif; ?>

<div class="home--social">
    <div class="small-12 columns text-center">
        <h2>People talking about</h2>
        <h3><img src="<?= get_template_directory_uri() . '/images/twitter.svg' ?>"/>&nbsp;&nbsp;#OEGLOBAL2018</h3>
    </div>

    <div class="small-12 columns">
        <iframe id="storyfeed" src="http://oeglobal.storyfeed.me/?embed&maxposts=24" style="border: 0px; height: 300px; width: 100%;" scrolling="no" allowfullscreen></iframe>
    </div>
</div>


<?php get_footer(); ?>