<?php

/**
 * The template for displaying the author information.
 */
?>

<?php get_header(); ?>

<main>
    <?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    ?>
    <div class="page-banner-area mt-60">
        <div class="cat-heading text-center grey-bg">
            <h1>Author - archive page</h1>
        </div>
        <div class="container">
            <div class="col-12">
                <div class="text-center pt-60 pb-60"">
                        <h1>About : <?php echo $curauth->nickname; ?> </h1>
                </div>
            </div>
        </div>
    </div>

    <div class=" contact-area pt-10 pb-90">
                    <div class="container">
                        <ul class="list-group">
                            <li class="list-group-item active">Posts By Author : <?php echo $curauth->nickname; ?> (<a href=<?php echo $curauth->user_url; ?>><?php echo $curauth->user_url; ?></a>)</li>
                        </ul>
                        <?php
                        $post_idx = 0;
                        if (have_posts()) {
                            ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Post Title</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Category</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while (have_posts()) {
                                            the_post();
                                            $post_idx++;
                                            ?>
                                        <tr>
                                            <th scope="row"><?php echo $post_idx ?></th>
                                            <td><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></td>
                                            <td><?php the_time('d M Y'); ?></td>
                                            <td><?php the_category(' , '); ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        <?php } else { ?>
                            <center><label type="text" readonly class="form-control-plaintext">No Posts Available.</label></center>
                        <?php } ?>
                    </div>
                </div>
</main>
<?php get_footer(); ?>