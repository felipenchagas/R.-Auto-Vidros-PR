(function() {
  try {
    console.log("Current URL:", window.location.href);
    // Verifica se a URL termina com uma barra
    if (window.location.pathname.endsWith('/')) {
      // Remove a barra final
      var newPath = window.location.origin + window.location.pathname.slice(0, -1) + window.location.search + window.location.hash;
      console.log("New Path:", newPath);

      // Redireciona apenas se a nova URL for diferente da atual
      if (newPath !== window.location.href) {
        console.log("Redirecionando para:", newPath);
        window.location.replace(newPath);
      }
    } else {
      console.log("URL não termina com barra:", window.location.href);
    }
  } catch (error) {
    console.error("Redirection script error:", error);
  }
})();
