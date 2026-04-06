<!DOCTYPE html>
<html>
<head>
    <title>Smart Seating</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        body {
            font-family: Arial;
            text-align: center;
        }

        #seats-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .seat {
            width: 80px;
            height: 80px;
            margin: 10px;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;
            transition: 0.2s;
        }

        .seat:hover {
            transform: scale(1.1);
        }

        .available {
            background-color: green;
            color: white;
        }

        .occupied {
            background-color: red;
            color: white;
        }

        .btn-back {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
        }
    </style>
</head>
<body>

<a href="{{ route('dashboard') }}" class="btn-back">⬅ Kembali ke Dashboard</a>

<h1>Smart Seating</h1>

<div id="seats-container">
@foreach ($seats as $id => $seat)
    <button class="seat {{ $seat['status'] }}" id="seat-{{ $id }}">
        {{ $id }}
    </button>
@endforeach
</div>

<!-- ✅ Firebase versi 8 (WAJIB biar cocok dengan kode kamu) -->
<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-database.js"></script>

<script>
    // 🔥 Config Firebase
    const firebaseConfig = {
        apiKey: "AIzaSyD2_WWrlZpPRnvNBUDrhvpv-TAJGoeqihs",
        authDomain: "smart-seating-management.firebaseapp.com",
        databaseURL: "https://smart-seating-management-default-rtdb.firebaseio.com",
        projectId: "smart-seating-management",
    };

    // init
    firebase.initializeApp(firebaseConfig);
    const db = firebase.database();

    // 🔥 REALTIME LISTENER
    const seatsRef = db.ref('seats');

    seatsRef.on('value', (snapshot) => {
        const data = snapshot.val();

        for (let id in data) {
            let seatBtn = document.getElementById('seat-' + id);
            if (seatBtn) {
                seatBtn.className = 'seat ' + data[id].status;
            }
        }
    });

    // 🔥 CLICK TO TOGGLE
    document.querySelectorAll('.seat').forEach(button => {
        button.addEventListener('click', () => {
            const seatId = button.innerText;

            // cek status sekarang
            const isOccupied = button.classList.contains('occupied');
            const newStatus = isOccupied ? 'available' : 'occupied';

            // update ke Firebase
            db.ref('seats/' + seatId).update({
                status: newStatus
            });
        });
    });
</script>

</body>
</html>