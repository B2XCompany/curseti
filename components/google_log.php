<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-analytics.js";

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

    // Import the necessary Firebase Authentication module
    import { getAuth, createUserWithEmailAndPassword } from 'firebase/auth';

    // Get the authentication instance
    const auth = getAuth(app);

    // Example function for user signup
    function signUp(email, password) {
        createUserWithEmailAndPassword(auth, email, password)
            .then((userCredential) => {
                // User signed up successfully
                const user = userCredential.user;
                console.log('User signed up:', user.email);
            })
            .catch((error) => {
                // Handle errors during signup
                const errorCode = error.code;
                const errorMessage = error.message;
                console.error('Error during signup:', errorMessage);
            });
    }

    // Usage example
    const userEmail = 'brunoricardowotzke@gmail.com';
    const userPassword = '123';
    signUp(userEmail, userPassword);


</script>