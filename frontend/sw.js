self.addEventListener("install", event => {
  console.log("[SW] Install");
  event.waitUntil(self.skipWaiting());
});

self.addEventListener("activate", event => {
  console.log("[SW] Activate");
  event.waitUntil(self.clients.claim());
});

self.addEventListener("fetch", event => {
  event.respondWith(fetch(event.request).catch(() => new Response("Offline")));
});
