<x-auth-layout>
    <x-slot:title>
        register
    </x-slot:title>
    <div class="min-vh-100 d-flex align-items-center justify-content-center bg-light">
        <div class="card shadow" style="width: 100%; max-width: 400px;">
            <div class="card-header bg-primary text-white text-center py-3">
                <h4 class="mb-0">Daftar Akun Baru</h4>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    
                    <!-- Nama -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                        
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">

                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">

                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Konfirmasi Password -->
                    <div class="mb-3">
                        <label for="password2" class="form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="password2" name="password_confirmation">
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">Daftar</button>
                    </div>

                    <!-- Link Login -->
                    <div class="text-center mt-3">
                        <small>Sudah punya akun? 
                            <a href="{{ route('showLogin') }}" class="text-decoration-none">Masuk di sini</a>
                        </small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-auth-layout>