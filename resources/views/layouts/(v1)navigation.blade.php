<nav class="bg-white border-b border-gray-200 px-4 py-3 flex justify-between items-center">

    <!-- LOGO -->
    <a href="/" class="text-lg font-bold text-gray-800">
        Smart Seating
    </a>

    <!-- RIGHT -->
    <div class="flex items-center gap-4">

        <span id="userEmail" class="text-gray-600 text-sm">
            Guest
        </span>

        <button id="loginBtn" onclick="login()" 
            class="bg-blue-500 text-white px-3 py-1 rounded text-sm">
            Login
        </button>

        <button id="logoutBtn" onclick="logout()" 
            class="bg-red-500 text-white px-3 py-1 rounded text-sm hidden">
            Logout
        </button>

        <button onclick="openRegister()" 
            class="bg-green-500 text-white px-3 py-1 rounded text-sm">
            Register
        </button>

    </div>

</nav>

<!-- ======================
     MODAL LOGIN
====================== -->
<div id="loginModal" class="modal" style="display:none;">
    <div class="modal-content">

        <h2 class="text-xl font-bold mb-4">Login</h2>

        <input type="email" id="login_email" placeholder="Email"
            class="w-full mb-3 p-2 border rounded">

        <input type="password" id="login_password" placeholder="Password"
            class="w-full mb-3 p-2 border rounded">

        <div class="flex justify-between">
            <button onclick="doLogin()" class="bg-blue-500 text-white px-4 py-2 rounded">
                Login
            </button>

            <button onclick="closeLogin()" class="bg-gray-400 text-white px-4 py-2 rounded">
                Batal
            </button>
        </div>

    </div>
</div>

<!-- ======================
     MODAL LOGIN
====================== -->
<div id="registerModal" class="modal" style="display:none;">
    <div class="modal-content">

        <h2 class="text-xl font-bold mb-4">Register</h2>

        <input type="email" id="register_email" placeholder="Email"
            class="w-full mb-3 p-2 border rounded">

        <input type="password" id="register_password" placeholder="Password"
            class="w-full mb-3 p-2 border rounded">

        <div class="flex justify-between">
            <button onclick="doRegister()" class="bg-green-500 text-white px-4 py-2 rounded">
                Daftar
            </button>

            <button onclick="closeRegister()" class="bg-gray-400 text-white px-4 py-2 rounded">
                Batal
            </button>
        </div>

    </div>
</div>

<!-- ======================
     FIREBASE AUTH
====================== -->
<script type="module">
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.2/firebase-app.js";
    import { getAuth, signInWithEmailAndPassword, createUserWithEmailAndPassword, onAuthStateChanged, signOut }
    from "https://www.gstatic.com/firebasejs/10.12.2/firebase-auth.js";

    const firebaseConfig = {
        apiKey: "AIzaSyD2_WWrlZpPRnvNBUDrhvpv-TAJGoeqihs",
        authDomain: "smart-seating-management.firebaseapp.com",
        databaseURL: "https://smart-seating-management-default-rtdb.firebaseio.com", // 🔥 INI WAJIB
        projectId: "smart-seating-management",
        appId: "1:274586807231:web:578738496187a6f9d78f0a"
    };

    const app = initializeApp(firebaseConfig);
    const auth = getAuth(app);

    // 🔥 BIAR BISA DIPAKAI DI DASHBOARD
    window.auth = auth;

    // ======================
    // OPEN / CLOSE REGISTER
    // ======================
    window.openRegister = function () {
        document.getElementById('registerModal').style.display = 'flex';
    };

    window.closeRegister = function () {
        document.getElementById('registerModal').style.display = 'none';
    };

    // ======================
    // PROSES REGISTER
    // ======================
    window.doRegister = function () {
        const email = document.getElementById('register_email').value;
        const password = document.getElementById('register_password').value;

        createUserWithEmailAndPassword(auth, email, password)
           .then((userCredential) => {
                closeRegister();

                Swal.fire({
                    icon: 'success',
                    title: 'Register berhasil',
                    text: 'Silakan login',
                });
            })
            .catch((error) => {
                Swal.fire('Error', error.message, 'error');
            });
    };

    // ======================
    // LOGIN (BUKA MODAL)
    // ======================
    window.login = function () {
        document.getElementById('loginModal').style.display = 'flex';
    };

    window.closeLogin = function () {
        document.getElementById('loginModal').style.display = 'none';
    };

    // ======================
    // PROSES LOGIN
    // ======================
    window.doLogin = function () {
        const email = document.getElementById('login_email').value;
        const password = document.getElementById('login_password').value;

        signInWithEmailAndPassword(auth, email, password)
            .then((userCredential) => {
                closeLogin();

                Swal.fire({
                    icon: 'success',
                    title: 'Login berhasil',
                    timer: 1500,
                    showConfirmButton: false
                });
            })
            .catch((error) => {
                Swal.fire('Error', error.message, 'error');
            });
    };

    // ======================
    // LOGOUT
    // ======================
    window.logout = function () {
        signOut(auth);
    };

    // ======================
    // DETEKSI USER
    // ======================
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

    // ======================
    // 🔥 PROTEKSI GLOBAL
    // ======================
    window.mustLogin = function () {
        if (!auth.currentUser) {
            Swal.fire('Login dulu!', '', 'warning');
            return false;
        }
        return true;
    };
</script>