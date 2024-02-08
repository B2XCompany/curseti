<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-app.js";
  import { getAuth, GoogleAuthProvider, signInWithPopup, signOut, onAuthStateChanged } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-auth.js";

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
    const auth = getAuth();
    const provider = new GoogleAuthProvider();

    const logar = async() => {
      signInWithPopup(auth, provider)
      .then(e=>{
        console.log(e)
      })
    }


</script>

<button onclick='logar()' id="signIn">Entrar</button>
<p id="mensagem"></p>