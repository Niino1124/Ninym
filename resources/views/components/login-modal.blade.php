<div id="loginModal" class="modal" style="display:none;">
    <div class="modal-content">

        <h2 class="text-xl font-bold mb-4">Login</h2>

        <input id="login_email" placeholder="Email" class="w-full mb-3 p-2 border rounded">
        <input id="login_password" type="password" placeholder="Password" class="w-full mb-3 p-2 border rounded">

        <div class="flex justify-between">
            <button onclick="doLogin()" class="bg-blue-500 text-white px-4 py-2 rounded">
                Login
            </button>

            <button onclick="closeLogin()" class="bg-gray-400 text-white px-4 py-2 rounded">
                Batal
            </button>
        </div>

    </div>
</div>