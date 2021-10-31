function limpiarCache(cacheName, numeroItems) {
    caches.open(cacheName).then((cache) => {
        cache.keys().then((keys) => {
            if (keys.length > numeroItems) {
                cache
                    .delete(keys[0])
                    .then(limpiarCache(cacheName, numeroItems));
            }
        });
    });
}

self.addEventListener("install", (event) => {
    const cacheProm = caches.open("estatico-v2").then((cache) => {
        return cache.addAll([
            "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css",
            "js/app.js",
        ]);
    });

    const cacheInmutable = caches.open("inmutable-v1").then((cache) => {
        return cache.add(
            "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        );
    });

    event.waitUntil(Promise.all([cacheProm, cacheInmutable]));
});

self.addEventListener("fetch", (event) => {
    //
    const respuesta = caches.match(event.request).then((resp) => {
        if (resp) return resp;
        console.log("No existe", event.request.url);
        return fetch(event.request).then((newResp) => {
            caches.open("dinamico-v1").then((cache) => {
                cache.put(event.request, newResp);
                limpiarCache("dinamico-v1", 4);
            });
            return newResp.clone();
        });
    });
    event.respondWith(respuesta);
});

