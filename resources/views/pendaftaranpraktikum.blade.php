<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Praktikum</title>
</head>
<body>
    <h1>Form Pendaftaran Praktikum</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="id_mahasiswa">ID Mahasiswa</label>
            <select name="id_mahasiswa" id="id_mahasiswa" required>
                <option value="">Pilih Mahasiswa</option>
                @foreach($mahasiswa as $mhs)
                    <option value="{{ $mhs->id }}">{{ $mhs->id }} - {{ $mhs->nama }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" value="{{ old('nama') }}" required>
        </div>

        <div>
            <label for="nim">NIM</label>
            <input type="number" name="nim" id="nim" value="{{ old('nim') }}" required>
        </div>

        <div>
            <label for="semester">Semester</label>
            <input type="number" name="semester" id="semester" value="{{ old('semester') }}" required>
        </div>

        <div>
            <label for="upload_pembayaran">Upload Bukti Pembayaran</label>
            <input type="file" name="upload_pembayaran" id="upload_pembayaran" required>
        </div>

        <button type="submit">Daftar</button>
    </form>
</body>
</html>