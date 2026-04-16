<div id="registerModal" class="modal" style="display:none;">
    <div class="modal-content">

        <h2 class="text-xl font-bold mb-4">Register</h2>

        <input id="register_email" placeholder="Email" class="w-full mb-3 p-2 border rounded">
        <input id="register_password" type="password" placeholder="Password" class="w-full mb-3 p-2 border rounded">
        <input 
            type="text" id="register_username" placeholder="Username" class="w-full mb-3 p-2 border rounded"
        />
        <div class="flex justify-between">
            <button onclick="doRegister()" class="bg-green-500 text-white px-4 py-2 rounded">
                Daftar
            </button>

            <button onclick="closeRegister()" class="bg-gray-400 text-white px-4 py-2 rounded">
                Batal
            </button>
        </div>

    </div>
</div>