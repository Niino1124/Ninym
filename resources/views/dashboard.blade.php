<script type="module">
    // Import Firebase
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.2/firebase-app.js";
    import { getDatabase, ref, onValue } from "https://www.gstatic.com/firebasejs/10.12.2/firebase-database.js";

    // Config dari Firebase kamu
    const firebaseConfig = {
        apiKey: "AIzaSyD2_WWrlZpPRnvNBUDrhvpv-TAJGoeqihs",
        authDomain: "smart-seating-management.firebaseapp.com",
        databaseURL: "https://smart-seating-management-default-rtdb.firebaseio.com",
        projectId: "smart-seating-management",
        storageBucket: "smart-seating-management.firebasestorage.app",
        messagingSenderId: "274586807231",
        appId: "1:274586807231:web:578738496187a6f9d78f0a"
    };

    // Init
    const app = initializeApp(firebaseConfig);
    const db = getDatabase(app);

    // 🔥 LISTENER REALTIME
    const seatsRef = ref(db, 'seats');

    onValue(seatsRef, (snapshot) => {
        const data = snapshot.val();

        if (!data) return;

        Object.keys(data).forEach(id => {
            const seat = document.querySelector(`.seat[data-id='${id}']`);

            if (seat) {
                let seatData = data[id];

                // update class warna
                seat.className = 'seat ' + seatData.status;

                // 🔥 update data realtime
                seat.dataset.status = seatData.status;
                seat.dataset.name = seatData.name || '';
                seat.dataset.orders = seatData.orders || '';
            }
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

                <!-- GRID KURSI -->
                <div class="seat-container">
                    @forelse($seats as $id => $seat)
                        <div 
                            class="seat {{ $seat['status'] }}"
                            data-id="{{ $id }}"
                            data-status="{{ $seat['status'] }}"
                            data-name="{{ $seat['name'] ?? '' }}"
                            data-orders="{{ $seat['orders'] ?? '' }}"
                            onclick="openModal(this)"
                        >
                            {{ $id }}
                        </div>
                    @empty
                        <p class="text-gray-500">Belum ada data kursi</p>
                    @endforelse
                </div>

            </div>

        </div>
    </div>

    <!-- ======================
         MODAL
    ====================== -->
    <div id="seatModal" class="modal" style="display: none;">
        <div class="modal-content">

            <!-- ======================
                 FORM INPUT
            ====================== -->
            <div id="formSection">
                <h2 class="text-xl font-bold mb-4">Input Pesanan</h2>

                <form method="POST" action="{{ route('seat.update') }}">
                    @csrf

                    <input type="hidden" name="seat_id" id="seat_id">

                    <input 
                        type="text" 
                        name="name" 
                        id="input_name"
                        placeholder="Nama Pemesan"
                        class="w-full mb-3 p-2 border rounded"
                        required
                    >

                    <textarea 
                        name="orders" 
                        id="input_orders"
                        placeholder="Pesanan (contoh: Nasi goreng, Es teh)"
                        class="w-full mb-3 p-2 border rounded"
                    ></textarea>

                    <div class="flex justify-between">
                        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">
                            Simpan
                        </button>

                        <button type="button" onclick="closeModal()" class="bg-gray-400 text-white px-4 py-2 rounded">
                            Batal
                        </button>
                    </div>
                </form>
            </div>

            <!-- ======================
                 DETAIL KURSI
            ====================== -->
            <div id="detailSection" style="display:none;">
                <h2 class="text-xl font-bold mb-4">Detail Kursi</h2>

                <p class="mb-2"><b>Nama:</b> <span id="detail_name"></span></p>
                <p class="mb-2"><b>Pesanan:</b> <span id="detail_orders"></span></p>

                <div class="flex justify-between mt-4">
                    <button onclick="clearSeat()" class="bg-red-500 text-white px-4 py-2 rounded">
                        Kosongkan
                    </button>

                    <button onclick="closeModal()" class="bg-gray-400 text-white px-4 py-2 rounded">
                        Tutup
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- ======================
         JAVASCRIPT
    ====================== -->
    <script>
        let currentSeatId = null;

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

        function clearSeat() {
            fetch('/seat/clear/' + currentSeatId, {
                method: 'GET',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => {
                if (response.ok) {

                // Tutup modal
                closeModal();

                // Ubah tampilan kursi jadi hijau TANPA reload
                let seats = document.querySelectorAll('.seat');
                seats.forEach(seat => {
                    if (seat.innerText.trim() === currentSeatId) {
                    }
                });

                // 🔥 SweetAlert Toast
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    title: 'Kursi berhasil dikosongkan',
                    showConfirmButton: false,
                    timer: 2000
                });

            } else {
                Swal.fire('Error', 'Gagal mengosongkan kursi', 'error');
            }
        });
}

        // klik luar modal = tutup
        window.onclick = function(event) {
            let modal = document.getElementById('seatModal');
            if (event.target === modal) {
                modal.style.display = "none";
            }
        }
    </script>

</x-app-layout>