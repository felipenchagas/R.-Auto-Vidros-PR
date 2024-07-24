(function() {
  try {
    // Verifica se a URL termina com uma barra
    if (window.location.pathname.endsWith('/')) {
      // Remove a barra final
      var newPath = window.location.protocol + '//' + window.location.host + window.location.pathname.slice(0, -1) + window.location.search + window.location.hash;

      // Redireciona apenas se a nova URL for diferente da atual
      if (newPath !== window.location.href) {
        console.log("Redirecionando para:", newPath); // Adiciona log para depuração
        window.location.replace(newPath);
      } else {
        console.log("URL já está correta:", window.location.href); // Log para quando não há redirecionamento
      }
    } else {
      console.log("URL não termina com barra:", window.location.href); // Log para URLs sem barra final
    }
  } catch (error) {
    console.error("Redirection script error:", error);
  }
})();
