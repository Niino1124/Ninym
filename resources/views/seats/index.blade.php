<!DOCTYPE html>
<html>
<head>
    <title>Smart Seating</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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

<!-- 🔥 TARUH DI SINI -->
<script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-database.js"></script>

<script>
    // config dari Firebase kamu
    const firebaseConfig = {
        apiKey: "AIzaSyD2_WWrlZpPRnvNBUDrhvpv-TAJGoeqihs",
        authDomain: "smart-seating-management.firebaseapp.com",
        databaseURL: "https://smart-seating-management-default-rtdb.firebaseio.com",
        projectId: "smart-seating-management",
    };

    // init firebase
    const app = firebase.initializeApp(firebaseConfig);
    const db = firebase.database();

    // realtime listener 🔥
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
</script>

</body>
</html>