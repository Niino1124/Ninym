<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- NAVBAR --}}
@include('components.navbar')

{{-- MODAL --}}
@include('components.login-modal')
@include('components.register-modal')

{{-- SCRIPT GLOBAL --}}
<script type="module" src="/js/firebase.js" defer></script>
<script type="module" src="/js/auth.js" defer></script>