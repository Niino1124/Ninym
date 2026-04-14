<nav class="bg-white border-b border-gray-200 px-4 py-3 flex justify-between items-center">

    <!-- LOGO / TITLE -->
    <a href="/" class="text-lg font-bold text-gray-800">
        Smart Seating
    </a>

    <!-- RIGHT SIDE -->
    <div class="flex items-center gap-4">

        <!-- USER INFO -->
        <span id="userEmail" class="text-gray-600 text-sm">
            Guest
        </span>

        <!-- LOGIN BUTTON -->
        <button id="loginBtn" onclick="login()" 
            class="bg-blue-500 text-white px-3 py-1 rounded text-sm">
            Login
        </button>

        <!-- LOGOUT BUTTON -->
        <button id="logoutBtn" onclick="logout()" 
            class="bg-red-500 text-white px-3 py-1 rounded text-sm hidden">
            Logout
        </button>

    </div>

</nav>

<!-- FIREBASE AUTH -->
<script type="module">
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.2/firebase-app.js";
    import { getAuth, signInWithPopup, GoogleAuthProvider, onAuthStateChanged, signOut } 
    from "https://www.gstatic.com/firebasejs/10.12.2/firebase-auth.js";

    const firebaseConfig = {
        apiKey: "AIzaSyD2_WWrlZpPRnvNBUDrhvpv-TAJGoeqihs",
        authDomain: "smart-seating-management.firebaseapp.com",
        projectId: "smart-seating-management",
        appId: "1:274586807231:web:578738496187a6f9d78f0a"
    };

    const app = initializeApp(firebaseConfig);
    const auth = getAuth(app);
    const provider = new GoogleAuthProvider();

    // 🔥 LOGIN GOOGLE
    window.login = function () {
        signInWithPopup(auth, provider)
            .then((result) => {
                console.log("Login sukses:", result.user);
            })
            .catch((error) => {
                alert(error.message);
            });
    };

    // 🔥 LOGOUT
    window.logout = function () {
        signOut(auth);
    };

    // 🔥 DETEKSI USER
    onAuthStateChanged(auth, (user) => {
        const emailEl = document.getElementById("userEmail");
        const loginBtn = document.getElementById("loginBtn");
        const logoutBtn = document.getElementById("logoutBtn");

        if (user) {
            emailEl.innerText = user.email;

            loginBtn.classList.add("hidden");
            logoutBtn.classList.remove("hidden");
        } else {
            emailEl.innerText = "Guest";

            loginBtn.classList.remove("hidden");
            logoutBtn.classList.add("hidden");
        }
    });
</script>