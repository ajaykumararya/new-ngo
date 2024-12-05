var staticCacheName = "pwa-v1";

self.addEventListener("install", function (event) {
  event.waitUntil(
    caches.open(staticCacheName).then(function (cache) {
      return cache.addAll([
        "/", // Ensure this is the root of your website
        "index.php",
        "manifest.json",
        "pwa_images/icon-192x192.png",
        "pwa_images/icon-512x512.png"
        // Add any other resources you want to cache
      ]).catch(function(error) {
        console.error("Failed to cache:", error);
      });
    })
  );
});

self.addEventListener("fetch", function (event) {
 // console.log("Fetching:", event.request.url);

  event.respondWith(
    caches.match(event.request).then(function (response) {
      return response || fetch(event.request);
    }).catch(function(error) {
      console.error("Fetching failed:", error);
    })
  );
});