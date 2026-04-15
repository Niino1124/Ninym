<nav class="bg-white border-b px-4 py-3 flex justify-between items-center">

    <a href="/" class="text-lg font-bold">
        Smart Seating
    </a>

    <div class="flex items-center gap-4">

        <span id="userEmail" class="text-sm text-gray-600">
            Guest
        </span>

        <button id="loginBtn" onclick="openLogin()" 
            class="bg-blue-500 text-white px-3 py-1 rounded text-sm">
            Login
        </button>

        <button id="logoutBtn" onclick="logout()" 
            id="logoutBtn"
            class="bg-red-500 text-white px-3 py-1 rounded text-sm hidden">
            Logout
        </button>

        <button id="registerBtn" onclick="openRegister()" 
            class="bg-green-500 text-white px-3 py-1 rounded text-sm">
            Register
        </button>

    </div>

</nav>