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

window.isLoggedIn = false;
window.pendingSeat = null;

window.doLogin = function () {
    const email = document.getElementById('login_email').value;
    const password = document.getElementById('login_password').value;

    signInWithEmailAndPassword(auth, email, password)
        .then(() => {
            toast('success', 'Login berhasil');

            // ⏳ kasih delay biar toast kelihatan
            setTimeout(() => {
                window.location.href = "/";
            }, 1000);
        })
        .catch((error) => {
            toast('error', error.message);
        });
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

    if (!email || !password) {
    toast('warning', 'Email dan password wajib diisi');
    return;
    }

    if (password.length < 6) {
        toast('warning', 'Password minimal 6 karakter');
        return;
    }

    createUserWithEmailAndPassword(auth, email, password)
        .then((userCredential) => {

            const uid = userCredential.user.uid;

            return set(ref(db, 'users/' + uid), {
                username: username,
                email: email
            });
        })
        .then(() => {
            window.username = username;

            const emailEl = document.getElementById("userEmail");
            if (emailEl) {
                emailEl.innerText = username;
            }

            toast('success', 'Register berhasil');

            setTimeout(() => {
                window.location.href = '/';
            }, 1000);
        })  
        .catch((err) => {
            console.log("REGISTER ERROR:", err.code, err.message);
            toast('error', err.message);
        });
};

// LOGOUT
window.logout = function () {
    signOut(auth);
};

// DETEKSI USER
onAuthStateChanged(auth, async (user) => {
    const authButtons = document.getElementById("authButtons");
    const userBox = document.getElementById("userBox");
    const emailEl = document.getElementById("userEmail");

    if (user) {
        if (authButtons) authButtons.classList.add("hidden");
        if (userBox) userBox.classList.remove("hidden");

        const snapshot = await get(ref(db, 'users/' + user.uid));

        let username = user.email;

        if (snapshot.exists()) {
            username = snapshot.val().username;
        }

        if (emailEl) emailEl.innerText = username;

    } else {
        if (authButtons) authButtons.classList.remove("hidden");
        if (userBox) userBox.classList.add("hidden");

        if (emailEl) emailEl.innerText = "Guest";
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
        position: 'top',
        icon: icon,
        title: title,
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true
    });
};