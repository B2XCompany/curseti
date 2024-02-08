<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDc-6F7y01xX50MuX1yr8uSdLbnwG75jYk",
    authDomain: "curseti.firebaseapp.com",
    projectId: "curseti",
    storageBucket: "curseti.appspot.com",
    messagingSenderId: "579899765617",
    appId: "1:579899765617:web:f995e3cdc1a2cb1dbb7cd0",
    measurementId: "G-0D45K6YH4P"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>