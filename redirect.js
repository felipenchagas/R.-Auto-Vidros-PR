(function() {
  try {
    if (window.location.pathname.endsWith('/')) {
      var newPath = window.location.pathname.slice(0, -1) + window.location.search + window.location.hash;
      if (newPath !== window.location.href) {
        window.location.replace(newPath);
      }
    }
  } catch (error) {
    console.error("Redirection script error:", error);
  }
})();
