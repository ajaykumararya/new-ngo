let deferredPrompt; // Variable to store the event

// Register service worker
if ('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('sw.js').then(function(registration) {
      // console.log('ServiceWorker registration successful with scope:', registration.scope);
    }, function(error) {
      console.error('ServiceWorker registration failed:', error);
    });
  });
}

// Check if the device is in mobile view
function isMobileView() {
  return window.matchMedia("(max-width: 768px)").matches;
}

// Handle the beforeinstallprompt event
window.addEventListener('beforeinstallprompt', (event) => {
  // Prevent the default mini-infobar prompt
  event.preventDefault();
  // Store the event for later use
  deferredPrompt = event;

  // Show the install modal if in mobile view
  if (isMobileView()) {
    $('#installModal').remove();
    showInstallModal();
  }
});

// Show the install modal
function showInstallModal() {
  // Create modal elements
  const installModal = document.createElement('div');
  installModal.id = 'installModal';
  installModal.className = 'modal';
  installModal.innerHTML = `
    <div class="modal-content">
      <span class="close">&times;</span>
      <p>Do you want to install this app?</p>
      <button id="installButton" class="install-button">Install</button>
    </div>
  `;

  // Add styles for the modal
  const style = document.createElement('style');
  style.textContent = `
    #installModal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.4);
      z-index: 99999;
    }

    #installModal .modal-content {
      background-color: #fefefe;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
      max-width: 400px;
      border-radius: 8px;
      position: relative;
    }

    #installModal .modal-content p {
      margin: 0;
      color:#000!important;
    }

    #installModal .close {
      position: absolute;
      right: 10px;
      top: 5px;
      color: #aaa;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
    }

    #installModal .close:hover,
    #installModal .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

    #installModal .install-button {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin-top: 10px;
      border-radius: 5px;
      cursor: pointer;
    }

    #installModal .install-button:hover {
      background-color: #0056b3;
    }
  `;

  // Append modal and styles to the document body
  document.head.appendChild(style);
  document.body.appendChild(installModal);

  // Show the modal
  installModal.style.display = 'block';

  // Handle the close button
  installModal.querySelector('.close').addEventListener('click', () => {
    installModal.style.display = 'none';
  });

  // Handle the install button
  document.getElementById('installButton').addEventListener('click', () => {
    // Show the install prompt
    deferredPrompt.prompt();

    // Wait for the user's response
    deferredPrompt.userChoice.then((choiceResult) => {
      if (choiceResult.outcome === 'accepted') {
        console.log('User accepted the install prompt');
      } else {
        console.log('User dismissed the install prompt');
      }
      // Clear the deferredPrompt so it can be triggered again
      deferredPrompt = null;
    });

    // Hide the modal
    installModal.style.display = 'none';
  });
}