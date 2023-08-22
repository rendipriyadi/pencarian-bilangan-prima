<!DOCTYPE html>
<html>

<head>
    <title>Cari Bilangan Prima</title>
</head>

<body>
    <h1>Pencarian Bilanga Prima</h1>

    <form method="post" action="{{ route('bilangan_prima.proses') }}">
        @csrf
        <label for="max_number">Inputkan Angka:</label>
        <input type="number" id="max_number" name="max_number" required>
        <button type="submit">Cari</button>
    </form>

    <h2>Hasil bilangan prima nya adalah :</h2>
    <p>
        @isset($primeNumbers)
            @foreach ($primeNumbers as $prime)
                {{ $prime }},
            @endforeach
        @endisset
    </p>
</body>

</html>
