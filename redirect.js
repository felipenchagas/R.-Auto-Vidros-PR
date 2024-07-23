(function() {
  if (window.location.pathname.endsWith('/')) {
    window.location.href = window.location.pathname.slice(0, -1) + window.location.search + window.location.hash;
  }
})();
