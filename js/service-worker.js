// Incrementing OFFLINE_VERSION will kick off the install event and force
// previously cached resources to be updated from the network.
const OFFLINE_VERSION = 1;
const CACHE_NAME = "offline";
// Customize this with a different URL if needed.
const OFFLINE_URL = "../index.php";

self.addEventListener("install", function (event) {
  event.waitUntil(
    caches.open(CACHE_NAME).then(function (cache) {
      return cache.addAll([
        "../index.php",
        "index.js",
        "../css/index.css",
        "../css/signup.css",
        "../login.php",
        "../css/login.css",
        "../CGPA Calculator.php",
        "CGPA Calculator.js",
        "../css/CGPA Calculator.css",
        "../GPA Calculator.php",
        "GPA Calculator.js",
        "../css/GPA Calculator.css",
        "../Grade Predictor.php",
        "Grade Predictor.js",
        "../css/Grade Predictor.css",
        "../CGPA Estimator.php",
        "CGPA Estimator.js",
        "../css/CGPA Estimator.css",
        "../Attendance Calculator.php",
        "Attendance Calculator.js",
        "../css/Attendance Calculator.css",
        "../comments.php",
        "../css/comments.css",
        "comments.js",
        "../img/comments.svg",
        "../img/attendance-cal-2 -inpimg.svg",
        "../img/attendance-inp-img.svg",
        "../img/devices.svg",
        "../img/explore.svg",
        "../img/feedback.svg",
        "../img/gpaimg.svg",
        "../img/growth.svg",
        "../img/improve.svg",
        "../img/instant-cgpaimg.svg",
        "../img/intro-img.svg",
        "../img/loading.svg",
        "../img/male-avtar.svg",
        "../img/result pop-up.svg",
        "../img/target.svg",
        "../img/weightage-conv.svg",
        "../img/winner.svg",
        "../img/LOGO-512px.png",
        "../img/LOGO-192px.png",
        "../img/sabari-avtar.jpg",
        "../manifest.json",
        "../img/add2homescreen-img.svg",
        "../img/signup-img.svg",
        "../img/login-img.svg",
        "../img/welcome-img.svg",
        "main.js",
        "../css/bootstrap.min.css",
        "bootstrap.min.js",
      ]);
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
