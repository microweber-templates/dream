<?php

/*

type: layout

name: Default

description: Testimonials Default

*/

?>

<section class="testimonial testimonial-4 section--even bg--white">
    <div class="container">
        <div class="row">
            <div class="slider slider--controlsoutside" data-animation="fade" data-arrows="false" data-paging="true" data-timing="5000">
                <ul class="slides">
                    <?php foreach ($data as $item) { ?>
                        <li>
                            <div class="col-sm-10 col-sm-offset-1 text-center">
                                <?php if (isset($item['client_picture'])): ?>
                                    <figure>
                                        <img class="rounded" src="<?php print $item['client_picture']; ?>" alt=""/>
                                    </figure>
                                <?php endif; ?>

                                <blockquote>
                                    &ldquo;<?php print $item['content']; ?>.&rdquo;
                                </blockquote>
                                <h5>&mdash; <?php if (isset($item['client_website'])) { ?>
                                        <a href="<?php print $item['client_website']; ?>" target="_blank"><?php print $item['name']; ?></a>
                                    <?php } else { ?>
                                        <?php print $item['name']; ?>
                                    <?php } ?>
                                    <?php if (isset($item["client_company"])) { ?>
                                        <span><?php print $item['client_company']; ?></span>
                                    <?php } ?></h5>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>