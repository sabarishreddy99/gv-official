
if (navigator.serviceWorker) {
  navigator.serviceWorker.register('service-worker.js').then(function (registration) {
    console.log('ServiceWorker registration successful with scope:', registration.scope);
  }).catch(function (error) {
    console.log('ServiceWorker registration failed:', error);
  });
}


// Code to handle install prompt on desktop

let deferredPrompt;
const addBtn1pc = document.querySelector('#btn1pc');
// addBtn1pc.style.display = 'none';


const addBtn2pc = document.querySelector('#btn2pc');
// addBtn2pc.style.display = 'none';


const addBtn1mob = document.querySelector('#btn1mob');
// addBtn1mob.style.display = 'none';


const addBtn2mob = document.querySelector('#btn2mob');
// addBtn2mob.style.display = 'none';

// ------------------------------------- btn1 pc --------------------------
window.addEventListener('beforeinstallprompt', (e) => {
  // Prevent Chrome 67 and earlier from automatically showing the prompt
  e.preventDefault();
  // Stash the event so it can be triggered later.
  deferredPrompt = e;
  // Update UI to notify the user they can add to home screen
  addBtn1pc.style.display = 'inline-block';


  addBtn1pc.addEventListener('click', (e) => {
    // hide our user interface that shows our A2HS button
    // addBtn1pc.style.display = 'none';
    // Show the prompt
    deferredPrompt.prompt();
    // Wait for the user to respond to the prompt
    deferredPrompt.userChoice.then((choiceResult) => {
      if (choiceResult.outcome === 'accepted') {
        console.log('User accepted the A2HS prompt');
      } else {
        console.log('User dismissed the A2HS prompt');
      }
      deferredPrompt = null;
    });
  });
});


//-------------------------------- btn-2 pc-----------------------------------


window.addEventListener('beforeinstallprompt', (e) => {
  // Prevent Chrome 67 and earlier from automatically showing the prompt
  e.preventDefault();
  // Stash the event so it can be triggered later.
  deferredPrompt = e;
  // Update UI to notify the user they can add to home screen
  addBtn2pc.style.display = 'inline-block';


  addBtn2pc.addEventListener('click', (e) => {
    // hide our user interface that shows our A2HS button
    // addBtn2pc.style.display = 'none';
    // Show the prompt
    deferredPrompt.prompt();
    // Wait for the user to respond to the prompt
    deferredPrompt.userChoice.then((choiceResult) => {
      if (choiceResult.outcome === 'accepted') {
        console.log('User accepted the A2HS prompt');
      } else {
        console.log('User dismissed the A2HS prompt');
      }
      deferredPrompt = null;
    });
  });
});


//-------------------------------- btn-1 mob-----------------------------------

window.addEventListener('beforeinstallprompt', (e) => {
  // Prevent Chrome 67 and earlier from automatically showing the prompt
  e.preventDefault();
  // Stash the event so it can be triggered later.
  deferredPrompt = e;
  // Update UI to notify the user they can add to home screen
  addBtn1mob.style.display = 'block';


  addBtn1mob.addEventListener('click', (e) => {
    // hide our user interface that shows our A2HS button
    // addBtn1mob.style.display = 'none';
    // Show the prompt
    deferredPrompt.prompt();
    // Wait for the user to respond to the prompt
    deferredPrompt.userChoice.then((choiceResult) => {
      if (choiceResult.outcome === 'accepted') {
        console.log('User accepted the A2HS prompt');
      } else {
        console.log('User dismissed the A2HS prompt');
      }
      deferredPrompt = null;
    });
  });
});


//-------------------------------- btn-2 mob-----------------------------------

window.addEventListener('beforeinstallprompt', (e) => {
  // Prevent Chrome 67 and earlier from automatically showing the prompt
  e.preventDefault();
  // Stash the event so it can be triggered later.
  deferredPrompt = e;
  // Update UI to notify the user they can add to home screen
  addBtn2mob.style.display = 'block';


  addBtn2mob.addEventListener('click', (e) => {
    // hide our user interface that shows our A2HS button
    // addBtn2mob.style.display = 'none';
    // Show the prompt
    deferredPrompt.prompt();
    // Wait for the user to respond to the prompt
    deferredPrompt.userChoice.then((choiceResult) => {
      if (choiceResult.outcome === 'accepted') {
        console.log('User accepted the A2HS prompt');
      } else {
        console.log('User dismissed the A2HS prompt');
      }
      deferredPrompt = null;
    });
  });
});
