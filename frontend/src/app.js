console.log("AISITE frontend działa");

// Przykład pobierania z backendu
fetch('/api/ping')
  .then(res => res.text())
  .then(data => console.log("Backend odpowiada:", data))
  .catch(() => console.warn("Brak odpowiedzi z backendu"));
