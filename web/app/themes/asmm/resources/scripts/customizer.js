/**
 * This file allows you to add functionality to the Theme Customizer
 * live preview.
 *
 * {@link https://codex.wordpress.org/Theme_Customization_API}
 */

/**
 * Change the blog name value.
 *
 * @param {string} value
 */
wp.customize('blogname', value => {
  value.bind(to => document.querySelector('.brand').innerHTML = to);
});
