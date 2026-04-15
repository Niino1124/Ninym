import { 
    auth,
    db
 } from './firebase.js';

import { 
    get,
    ref,
    set 
} from "https://www.gstatic.com/firebasejs/10.12.2/firebase-database.js";

import { 
    signInWithEmailAndPassword, 
    createUserWithEmailAndPassword, 
    onAuthStateChanged, 
    signOut 
} from "https://www.gstatic.com/firebasejs/10.12.2/firebase-auth.js";

// LOGIN
window.openLogin = function () {
    document.getElementById('loginModal').style.display = 'flex';
};

window.doLogin = function () {
    const email = document.getElementById('login_email').value;
    const password = document.getElementById('login_password').value;

    signInWithEmailAndPassword(auth, email, password)
        .then(() => {
            closeLogin();
            toast('success', 'Login berhasil');
        })
        .catch((err) => {
            toast('error', error.message);
        });
};

// REGISTER
window.openRegister = function () {
    document.getElementById('registerModal').style.display = 'flex';
};

window.doRegister = function () {
    const username = document.getElementById('register_username').value;
    const email = document.getElementById('register_email').value;
    const password = document.getElementById('register_password').value;

    if (!username) {
        toast('warning', 'Username wajib diisi');
        return;
    }

    if (username.length < 5) {
        toast('warning', 'Username minimal 5 karakter');
        return;
    }

    if (username.includes(" ")) {
        toast('warning', 'Username tidak boleh pakai spasi');
        return;
    }

    createUserWithEmailAndPassword(auth, email, password)
        .then((userCredential) => {

            const uid = userCredential.user.uid;

            set(ref(db, 'users/' + uid), {
                username: username
            });

            window.username = username;

            document.getElementById("userEmail").innerText = username;

            closeRegister();
            toast('success', 'Register berhasil');
        })
        .catch((error) => {
            toast('error', error.message);
        });
};

// LOGOUT
window.logout = function () {
    signOut(auth);
};

// DETEKSI USER
onAuthStateChanged(auth, async (user) => {
    const emailEl = document.getElementById("userEmail");
    const loginBtn = document.getElementById("loginBtn");
    const registerBtn = document.getElementById("registerBtn");
    const logoutBtn = document.getElementById("logoutBtn");

    if (user) {
        const snapshot = await get(ref(db, 'users/' + user.uid));

        if (snapshot.exists()) {
            const username = snapshot.val().username;
            
            window.username = username
            emailEl.innerText = username; // 🔥 pakai username
        } else {
            emailEl.innerText = user.email; // fallback
        }

        loginBtn.classList.add("hidden");
        registerBtn.classList.add("hidden");
        logoutBtn.classList.remove("hidden");
    } else {
        emailEl.innerText = "Guest";
        window.username = null;

        loginBtn.classList.remove("hidden");
        registerBtn.classList.remove("hidden");
        logoutBtn.classList.add("hidden");
    }
});

// MODAL CONTROL
window.openLogin = () => document.getElementById('loginModal').style.display = 'flex';
window.closeLogin = () => document.getElementById('loginModal').style.display = 'none';

window.openRegister = () => document.getElementById('registerModal').style.display = 'flex';
window.closeRegister = () => document.getElementById('registerModal').style.display = 'none';

window.toast = function(icon, title) {
    Swal.fire({
        toast: true,
        position: 'top-end',
        icon: icon,
        title: title,
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true
    });
};