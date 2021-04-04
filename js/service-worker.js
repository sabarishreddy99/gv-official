

// Incrementing OFFLINE_VERSION will kick off the install event and force
// previously cached resources to be updated from the network.
const OFFLINE_VERSION = 1;
const CACHE_NAME = "offline";
// Customize this with a different URL if needed.
const OFFLINE_URL = "index.html";

self.addEventListener('install', function (event) {
  event.waitUntil(
    caches.open(CACHE_NAME).then(function (cache) {
      return cache.addAll(
        [
          'index.html','index.js','index.css','CGPA Calculator.css','CGPA Calculator.js','GPA Calculator.html','GPA Calculator.css','GPA Calculator.js','Grade Predictor.html','Grade Predictor.css','Grade Predictor.js','CGPA Estimator.html','CGPA Estimator.css','CGPA Estimator.js','Attendance Calculator.html','Attendance Calculator.css','Attendance Calculator.js','comments.html','comments.css','comments.js','comments.svg','attendance-cal-2 -inpimg.svg','attendance-inp-img.svg','devices.svg','explore.svg','feedback.svg','gpaimg.svg','growth.svg','improve.svg','instant-cgpaimg.svg','intro-img.svg','loading.svg','male-avtar.svg','result pop-up.svg','target.svg','weightage-conv.svg','winner.svg','LOGO-512px.png','LOGO-192px.png','sabari-avtar.jpg','manifest.json','add2homescreen-img.svg','main.js','bootstrap.min.css','bootstrap.min.js'
        ]
      );
    })
  );
});



self.addEventListener("activate", (event) => {
  event.waitUntil(
    (async () => {
      // Enable navigation preload if it's supported.
      // See https://developers.google.com/web/updates/2017/02/navigation-preload
      if ("navigationPreload" in self.registration) {
        await self.registration.navigationPreload.enable();
      }
    })()
  );

  // Tell the active service worker to take control of the page immediately.
  self.clients.claim();
});

self.addEventListener("fetch", (event) => {
  // We only want to call event.respondWith() if this is a navigation request
  // for an HTML page.
  if (event.request.mode === "navigate") {
    event.respondWith(
      (async () => {
        try {
          // First, try to use the navigation preload response if it's supported.
          const preloadResponse = await event.preloadResponse;
          if (preloadResponse) {
            return preloadResponse;
          }

          // Always try the network first.
          const networkResponse = await fetch(event.request);
          return networkResponse;
        } catch (error) {
          // catch is only triggered if an exception is thrown, which is likely
          // due to a network error.
          // If fetch() returns a valid HTTP response with a response code in
          // the 4xx or 5xx range, the catch() will NOT be called.
          console.log("Fetch failed; returning offline page instead.", error);

          const cache = await caches.open(CACHE_NAME);
          const cachedResponse = await cache.match(event.request);
          return cachedResponse || fetch(event.request);
        }
      })()
    );
  }

  // If our if() condition is false, then this fetch handler won't intercept the
  // request. If there are any other fetch handlers registered, they will get a
  // chance to call event.respondWith(). If no fetch handlers call
  // event.respondWith(), the request will be handled by the browser as if there
  // were no service worker involvement.
});
