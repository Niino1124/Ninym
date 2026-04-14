<script type="module">
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.2/firebase-app.js";
    import { getDatabase, ref, onValue, update } from "https://www.gstatic.com/firebasejs/10.12.2/firebase-database.js";

    const firebaseConfig = {
        apiKey: "AIzaSyD2_WWrlZpPRnvNBUDrhvpv-TAJGoeqihs",
        authDomain: "smart-seating-management.firebaseapp.com",
        databaseURL: "https://smart-seating-management-default-rtdb.firebaseio.com",
        projectId: "smart-seating-management",
        storageBucket: "smart-seating-management.firebasestorage.app",
        messagingSenderId: "274586807231",
        appId: "1:274586807231:web:578738496187a6f9d78f0a"
    };

    const app = initializeApp(firebaseConfig);
    const db = getDatabase(app);

    // 🔥 REALTIME LISTENER
    const seatsRef = ref(db, 'seats');

    onValue(seatsRef, (snapshot) => {
        const data = snapshot.val();
        if (!data) return;

        Object.keys(data).forEach(id => {
            const seat = document.querySelector(`.seat[data-id='${id}']`);

            if (seat) {
                let seatData = data[id];

                seat.className = 'seat ' + seatData.status;

                seat.dataset.status = seatData.status;
                seat.dataset.name = seatData.name || '';
                seat.dataset.orders = seatData.orders || '';
            }
        });
    });

    // 🔥 GLOBAL FUNCTION
    window.submitSeat = function(e) {
        e.preventDefault();

        const id = document.getElementById('seat_id').value;
        const name = document.getElementById('input_name').value;
        const orders = document.getElementById('input_orders').value;

        update(ref(db, 'seats/' + id), {
            status: "occupied",
            name: name,
            orders: orders
        });

        closeModal();

        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: 'Kursi berhasil diisi',
            showConfirmButton: false,
            timer: 2000
        });
    }

    window.clearSeat = function() {
        update(ref(db, 'seats/' + currentSeatId), {
            status: "available",
            name: null,
            orders: null
        });

        closeModal();

        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: 'Kursi berhasil dikosongkan',
            showConfirmButton: false,
            timer: 2000
        });
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-bold">Dashboard</h2>
    </x-slot>

    <div class="p-6">

        <!-- 🔥 GRID STATIC -->
        <div class="seat-container">
            @for ($i = 1; $i <= 10; $i++)
                <div class="seat available" data-id="A{{ $i }}">
                    A{{ $i }}
                </div>
            @endfor
        </div>

    </div>

    <!-- MODAL -->
    <div id="seatModal" class="modal" style="display:none;">
        <div class="modal-content">

            <!-- FORM -->
            <div id="formSection">
                <h2>Input Pesanan</h2>

                <form onsubmit="submitSeat(event)">
                    <input type="hidden" id="seat_id">

                    <input type="text" id="input_name" placeholder="Nama" required>
                    <textarea id="input_orders" placeholder="Pesanan"></textarea>

                    <button type="submit">Simpan</button>
                    <button type="button" onclick="closeModal()">Batal</button>
                </form>
            </div>

            <!-- DETAIL -->
            <div id="detailSection" style="display:none;">
                <h2>Detail Kursi</h2>

                <p><b>Nama:</b> <span id="detail_name"></span></p>
                <p><b>Pesanan:</b> <span id="detail_orders"></span></p>

                <button onclick="clearSeat()">Kosongkan</button>
                <button onclick="closeModal()">Tutup</button>
            </div>

        </div>
    </div>

    <script>
        let currentSeatId = null;

        // 🔥 CLICK LISTENER
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll(".seat").forEach(seat => {
                seat.addEventListener("click", function () {
                    openModal(this);
                });
            });
        });

        function openModal(el) {
            let id = el.dataset.id;
            let status = el.dataset.status;
            let name = el.dataset.name;
            let orders = el.dataset.orders;

            currentSeatId = id;

            document.getElementById('seatModal').style.display = 'flex';

            if (status === 'occupied') {
                document.getElementById('formSection').style.display = 'none';
                document.getElementById('detailSection').style.display = 'block';

                document.getElementById('detail_name').innerText = name || '-';
                document.getElementById('detail_orders').innerText = orders || '-';
            } else {
                document.getElementById('formSection').style.display = 'block';
                document.getElementById('detailSection').style.display = 'none';

                document.getElementById('seat_id').value = id;

                document.getElementById('input_name').value = '';
                document.getElementById('input_orders').value = '';
            }
        }

        function closeModal() {
            document.getElementById('seatModal').style.display = 'none';
        }

        // klik luar modal
        window.onclick = function(event) {
            let modal = document.getElementById('seatModal');
            if (event.target === modal) {
                modal.style.display = "none";
            }
        }
    </script>

</x-app-layout>