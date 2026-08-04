/**
 * Rich & Well theme front-end scripts.
 * Page-specific interactions will be migrated from the static site later.
 */
(function () {
  'use strict';

  document.documentElement.setAttribute(
    'data-theme',
    localStorage.getItem('theme') || 'light'
  );
})();
