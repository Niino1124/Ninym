<x-app-layout>

    <x-slot name="header">
        <h2 class="text-xl font-bold">Dashboard</h2>
    </x-slot>

    <div class="p-6">

        <!-- GRID -->
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

            <div id="formSection">
                <h2>Input Pesanan</h2>

                <form onsubmit="submitSeat(event)">
                    <input type="hidden" id="seat_id">

                    <input id="input_name" placeholder="Nama" class="w-full mb-3 p-2 border rounded"/>
                    <textarea id="input_orders" placeholder="Pesanan..." class="w-full mb-3 p-2 border rounded"></textarea>

                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">
                        Simpan
                    </button>

                    <button type="button" onclick="closeModal()">Batal</button>
                </form>
            </div>

            <div id="detailSection" style="display:none;">
                <p><b>Nama:</b> <span id="detail_name"></span></p>
                <p><b>Pesanan:</b> <span id="detail_orders"></span></p>

                <button onclick="clearSeat()" class="bg-red-500 text-white px-4 py-2 rounded">
                    Kosongkan
                </button>

                <button onclick="closeModal()">Tutup</button>
            </div>

        </div>
    </div>

    <!-- SCRIPT KHUSUS UI -->
    <script>
        let currentSeatId = null;
        let pendingSeat = null; // 🔥 simpan klik sebelum login

        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll(".seat").forEach(seat => {
                seat.addEventListener("click", () => openModal(seat));
            });
        });



        function openModal(el) {
            let id = el.dataset.id;

            // 🔥 CEK LOGIN
            if (!window.isLoggedIn) {
                window.pendingSeat = el;
                toast('warning', 'Silahkan Login Terlebih Dahulu!');
                openLogin();
                return;
            }

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

                // 🔥 CEK OWNER (AMAN)
                let ownerId = el.dataset.userId || null;
                let currentUserId = window.currentUserId || null;

                const btnKosongkan = document.querySelector('#detailSection button.bg-red-500');

                if (btnKosongkan) {
                    if (ownerId && currentUserId && ownerId === currentUserId) {
                        btnKosongkan.style.display = 'inline-block';
                    } else {
                        btnKosongkan.style.display = 'none';
                    }
                }

            } else {
                document.getElementById('formSection').style.display = 'block';
                document.getElementById('detailSection').style.display = 'none';

                document.getElementById('seat_id').value = id;
                document.getElementById('input_name').value = window.username || '';
                document.getElementById('input_orders').value = '';
            }
        }

        function closeModal() {
            document.getElementById('seatModal').style.display = 'none';
        }
    </script>

    <!-- 🔥 LOAD JS TERPISAH -->
    <script type="module" src="/js/firebase.js"></script>
    <script type="module" src="/js/auth.js"></script>
    <script type="module" src="/js/seats.js"></script>

</x-app-layout>