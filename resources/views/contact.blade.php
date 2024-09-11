@include('layouts.navbar-section')

<div class="container">
    <h1>Kontak Kami</h1>
    
    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('kontak.kirim') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Pesan:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit">Kirim</button>
    </form>
</div>
