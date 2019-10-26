<?php

/**
 * The template for displaying search form.
 */
?>
<form role="search" method="get" id="searchform" class="searchform" action=<?php echo site_url(); ?>>
    <input type="text" name="s" id="s" placeholder="Search">
    <button type="submit" id="searchsubmit" value="Search">
        <i class="fa fa-search"></i>
    </button>
</form>
