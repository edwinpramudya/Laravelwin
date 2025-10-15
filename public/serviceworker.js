const CACHE_NAME = "laravel-pwa-v1";
const urlsToCache = [
    "/",
    "/css/app.css",
    "/js/app.js",
    "/images/logo.png",
    "/images/icon-192x192.png",
    "/images/icon-512x512.png",
];

// Install Service Worker & cache semua assets
self.addEventListener("install", (event) => {
    event.waitUntil(
        caches
            .open(CACHE_NAME)
            .then((cache) => cache.addAll(urlsToCache))
            .then(() => self.skipWaiting()) // aktifkan langsung SW baru
    );
});

// Aktifkan SW & hapus cache lama
self.addEventListener("activate", (event) => {
    const cacheWhitelist = [CACHE_NAME];
    event.waitUntil(
        caches
            .keys()
            .then((cacheNames) => {
                return Promise.all(
                    cacheNames.map((cacheName) => {
                        if (!cacheWhitelist.includes(cacheName)) {
                            return caches.delete(cacheName);
                        }
                    })
                );
            })
            .then(() => self.clients.claim()) // paksa SW baru langsung kontrol halaman
    );
});

// Intercept request & fallback ke cache
self.addEventListener("fetch", (event) => {
    event.respondWith(
        caches.match(event.request).then((response) => {
            return response || fetch(event.request);
        })
    );
});
