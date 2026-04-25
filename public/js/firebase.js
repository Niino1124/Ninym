    import { initializeApp, getApps } 
    from "https://www.gstatic.com/firebasejs/10.12.2/firebase-app.js";

    import { getAuth } 
    from "https://www.gstatic.com/firebasejs/10.12.2/firebase-auth.js";

    import { getDatabase } 
    from "https://www.gstatic.com/firebasejs/10.12.2/firebase-database.js";

    import { ref, set, onValue } 
    from "https://www.gstatic.com/firebasejs/10.12.2/firebase-database.js";

    import { runTransaction } 
    from "https://www.gstatic.com/firebasejs/10.12.2/firebase-database.js";

        // CONFIG
    const firebaseConfig = {
        apiKey: "AIzaSyD2_WWrlZpPRnvNBUDrhvpv-TAJGoeqihs",
        authDomain: "smart-seating-management.firebaseapp.com",
        databaseURL: "https://smart-seating-management-default-rtdb.firebaseio.com", // 🔥 WAJIB
        projectId: "smart-seating-management",
        appId: "1:274586807231:web:578738496187a6f9d78f0a"
    };

    // 🔥 INIT AMAN
    const app = getApps().length === 0 
        ? initializeApp(firebaseConfig) 
        : getApps()[0];

    export default app;
    export const auth = getAuth(app);
    export const db = getDatabase(app);
    export { ref, set, onValue, runTransaction };

    window.toast = function(icon, title) {
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: icon,
            title: title,
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            showClass: {
                popup: 'animate__animated animate__fadeInRight'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutRight'
            }
        });
    };