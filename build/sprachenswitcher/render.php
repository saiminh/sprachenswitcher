<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

?>
<div <?php echo get_block_wrapper_attributes(); ?>>
	<?php 
  if ( function_exists( 'pll_the_languages' ) ) {
    $langs_array = pll_the_languages(array(
      'raw' => 1,
      'hide_if_no_translation' => 0, // Don't hide links with no translations
      'force_home' => 0,            // Don't force the home page
      'echo' => 0                   // Don't echo, just return
    ));
    echo '<!-- Debug: ';
    print_r($langs_array);
    echo ' -->';
  } ?>
  <?php foreach ($langs_array as $lang) : ?>
    <a class="lang_<?php esc_html_e( $lang['slug']); ?>" href="<?php esc_html_e( $lang['url'] ); ?>"><?php esc_html_e( $lang['name'] ); ?></a>
  <?php endforeach; ?>
</div>
