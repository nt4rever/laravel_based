// This a service worker file for receiving push notifitications.
// See `Access registration token section` @ https://firebase.google.com/docs/cloud-messaging/js/client#retrieve-the-current-registration-token

// Scripts for firebase and firebase messaging
// eslint-disable-next-line no-undef
importScripts('//www.gstatic.com/firebasejs/8.2.0/firebase-app.js');
// eslint-disable-next-line no-undef
importScripts('//www.gstatic.com/firebasejs/8.2.0/firebase-messaging.js');

importScripts('./env.js');
importScripts('./firebase-config.js');

// Initialize the Firebase app in the service worker by passing the generated config
// eslint-disable-next-line no-undef
firebase.initializeApp(firebaseConfig || {});

// Retrieve firebase messaging
// eslint-disable-next-line no-undef
const messaging = firebase.messaging();
