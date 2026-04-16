<script type="module">
        import { getDatabase, ref, onValue, update } 
        from "https://www.gstatic.com/firebasejs/10.12.2/firebase-database.js";

        import { getApp } 
        from "https://www.gstatic.com/firebasejs/10.12.2/firebase-app.js";

        import { getAuth, onAuthStateChanged } 
        from "https://www.gstatic.com/firebasejs/10.12.2/firebase-auth.js";

        const auth = getAuth();

        onAuthStateChanged(auth, (user) => {
            console.log("User di dashboard:", user);
        });

        // 🔥 AMBIL APP YANG SUDAH ADA
        const app = getApp();

        const db = getDatabase(app);

    // 🔥 REALTIME LISTENER
    const seatsRef = ref(db, '/');

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

        if (!mustLogin()) return;

        const id = document.getElementById('seat_id').value;
        const name = document.getElementById('input_name').value;
        const orders = document.getElementById('input_orders').value;

        const user = window.auth.currentUser;

        update(ref(db, 'seats/' + id), {
            status: "occupied",
            name: user ? user.email : name,
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

                    <input 
                        type="text" 
                        id="input_name" 
                        placeholder="Nama Pelanggan"
                        class="w-full mb-3 p-2 border rounded-lg shadow-sm"
                    />

                    <textarea 
                        id="input_orders" 
                        placeholder="Pesanan..."
                        class="w-full mb-3 p-2 border rounded-lg shadow-sm"
                    ></textarea>

                    <button 
                        type="submit" 
                        class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg"
                    >
                        Simpan
                    </button>
                    <button type="button" onclick="closeModal()">Batal</button>
                </form>
            </div>

            <!-- DETAIL -->
            <div id="detailSection" style="display:none;">
                <h2>Detail Kursi</h2>

                <p><b>Nama:</b> <span id="detail_name"></span></p>
                <p><b>Pesanan:</b> <span id="detail_orders"></span></p>

                <button onclick="clearSeat()"
                    class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg"
                >
                Kosongkan
                </button>
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