<x-auth-layout>
    <x-slot:title>
        login
    </x-slot:title>
    <div class="min-vh-100 d-flex align-items-center justify-content-center bg-light">
        <div class="card shadow" style="width: 100%; max-width: 400px;">
            <div class="card-header bg-primary text-white text-center py-3">
                <h4 class="mb-0">Form Login</h4>
            </div>
            <div class="card-body p-4">
                <form action="" method="POST">
                    @csrf
                    
                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">Login</button>
                    </div>

                    <!-- Link register -->
                    <div class="text-center mt-3">
                        <small>Belum punya akun? 
                            <a href="{{ route('showRegister') }}" class="text-decoration-none">Daftar di sini</a>
                        </small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-auth-layout>