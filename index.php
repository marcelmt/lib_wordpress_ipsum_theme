<?php
get_header();
?>

<main class="wrap">

<!-- COVER HIGHLIGHT -->
<?php get_template_part('parts/cover_highlight'); ?>


<!-- COVER SERVICES (Areas de Atuação) -->
<?php get_template_part('parts/cover_services'); ?>


<!-- COVER CITATION -->
<?php get_template_part('parts/cover_citation'); ?>


<!-- COVER PARTNERS -->
<?php get_template_part('parts/cover_partners'); ?>


<!-- COVER CONTACT HIGHLIGHT -->
<?php get_template_part('parts/cover_contact_highlight'); ?>


<!-- COVER ARTICLES -->
<?php get_template_part('parts/cover_articles'); ?>


<!-- COVER NEWSLETTER -->
<?php get_template_part('parts/cover_newsletter'); ?>


<!-- COVER NEWSLETTER -->
<?php get_template_part('parts/cover_map'); ?>

</main>

<?php get_footer(); ?>


<!--
  * Script p/ overlay em 'cover_partners'
-->
<script>
  $('.partner-img').mouseover(function() {
    $('.partner-description').hide();
    $('#overlay_' + $(this).data("slug")).show();
    $('#description_' + $(this).data("slug")).show();
  });

  $('.partner-img').mouseout(function() {
    $('#overlay_' + $(this).data("slug")).hide();
  });
</script>