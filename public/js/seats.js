import { db, auth } from './firebase.js';
import { ref, onValue, update } 
from "https://www.gstatic.com/firebasejs/10.12.2/firebase-database.js";

// realtime listener
const seatsRef = ref(db, 'seats');

onValue(seatsRef, (snapshot) => {
    const data = snapshot.val();
    if (!data) return;

    Object.keys(data).forEach(id => {
        const el = document.querySelector(`.seat[data-id='${id}']`);
        if (!el) return;

        el.className = 'seat ' + data[id].status;
        el.dataset.status = data[id].status;
        el.dataset.name = data[id].name || '';
        el.dataset.orders = data[id].orders || '';
        el.dataset.userId = data[id].userId || ''; // 🔥 TAMBAHAN
    });
});

// isi kursi
window.submitSeat = function(e) {
    e.preventDefault();

    if (!auth.currentUser) {
        toast('Login sek cak!!');
        return;
    }

    const btn = e.target.querySelector('button');

    // 🔥 disable tombol
    btn.disabled = true;
    btn.innerText = "Menyimpan...";

    const id = document.getElementById('seat_id').value;
    const orders = document.getElementById('input_orders').value;

    update(ref(db, 'seats/' + id), {
        status: "occupied",
        name: window.username,
        orders: orders,
        userId: auth.currentUser.uid
    }).then(() => {

        closeModal();

        toast('success', 'Kursi berhasil diisi');

        // 🔥 disable tombol
        btn.disabled = false;
        btn.innerText = "simpan";
    });
};

// kosongkan kursi
window.clearSeat = function() {

    const el = document.querySelector(`.seat[data-id='${currentSeatId}']`);
    const ownerId = el.dataset.userId;

    // 🔥 CEK PEMILIK
    if (ownerId !== auth.currentUser.uid) {
        toast('error', 'Kursi ini bukan milik anda!');
        return;
    }

    update(ref(db, 'seats/' + currentSeatId), {
        status: "available",
        name: null,
        orders: null,
        userId : null // 🔥 reset juga
    });

    closeModal();
    toast('success', 'Kursi dikosongkan');
};